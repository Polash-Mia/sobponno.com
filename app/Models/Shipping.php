<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;
    private static $shipping;

    public static function newShipping($request){

        self::$shipping  = new Shipping();

        self::$shipping->inside_dhaka                 = $request->inside_dhaka;
        self::$shipping->outside_dhaka                = $request->outside_dhaka;

        self::$shipping->save();

        return self::$shipping;
    }

    public static function updateShipping($request,$id)
    {
        self::$shipping = Shipping::find($id);
        
       
        
        self::$shipping->inside_dhaka                 = $request->inside_dhaka;
        self::$shipping->outside_dhaka                = $request->outside_dhaka;
        
        
        self::$shipping->save();

        return self::$shipping;

        
    }


    public static function deleteShipping($id)
    {
        self::$shipping=Shipping::find($id);
        
    
        self::$shipping->delete();
        
    }
}
