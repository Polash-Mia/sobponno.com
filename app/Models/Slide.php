<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;
    private static $slide,$image,$imageName,$directory,$imageUrl,$extension;
    public static function getImageUrl($request)
    {
        self::$image =$request->file('image');
        self::$extension =self::$image->getClientOriginalExtension();
        self::$imageName = 'product'.time().'.'.self::$extension;
        self::$directory ='upload/product/';
        self::$image->move(self::$directory,self::$imageName);

        return self::$directory.self::$imageName;
    }
    public static function newSlide($request)
    {
        self::$slide  = new Slide();
        self::$slide->image               = self::getImageUrl($request);
        self::$slide->save();
        return self::$slide;     

    }
    public static function deleteSlide($id)
    {
        self::$slide=Slide::find($id);
        
        if(file_exists(self::$slide->image))
        {
            unlink(self::$slide->image);
        }
        self::$slide->delete();
        
    }
}
