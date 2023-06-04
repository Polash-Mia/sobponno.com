<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    private static $setting,$image,$imageName,$directory,$imageUrl,$extension;
    public static function getImageUrl($request)
    {
        self::$image =$request->file('logo');
        self::$extension =self::$image->getClientOriginalExtension();
        self::$imageName = 'logo'.time().'.'.self::$extension;
        self::$directory ='website/logo/';
        self::$image->move(self::$directory,self::$imageName);

        return self::$directory.self::$imageName;
    }
    public static function newSetting($request)
    {
        self::$setting = new  Setting();
        self::$setting->logo           = self::getImageUrl($request);
        // self::$setting->logo           = $request->logo;
        self::$setting->mobile         = $request->mobile;
        self::$setting->bkas           = $request->bkas;
        self::$setting->pixel         = $request->pixel;
        self::$setting->pixeltwo         = $request->pixeltwo;
        self::$setting->pixelthree         = $request->pixelthree;
        self::$setting->pixelfour         = $request->pixelfour;
        self::$setting->title         = $request->title;
        self::$setting->save();
    }
    public static function updateSetting($request, $id)
    {
        self::$setting = Setting::find($id);
        
        if($request->file('logo'))
        {
            if(file_exists(self::$setting->logo))
            {
                unlink(self::$setting->logo);
            }
            self::$imageUrl=self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl=self::$setting->logo;
        }


        // self::$setting->logo           = self::getImageUrl($request);
        // self::$setting->name           = $request->logo;
        self::$setting->mobile         = $request->mobile;
        self::$setting->bkas           = $request->bkas;
        self::$setting->pixel          = $request->pixel;
        self::$setting->pixeltwo         = $request->pixeltwo;
        self::$setting->pixelthree         = $request->pixelthree;
        self::$setting->pixelfour         = $request->pixelfour;
        self::$setting->title          = $request->title;
        self::$setting->logo           =self::$imageUrl;
        self::$setting->save();
    }

    public static function deleteSetting($id)
    {
        self::$setting = Setting::find($id);
       
        self::$setting->delete();
    }
}
