<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Couriers extends Model
{
    use HasFactory;
    private static $couriers;

    public static function newCouriers($request){

        self::$couriers  = new Couriers();

        self::$couriers->name                 = $request->name;
        self::$couriers->city                = $request->city;
        self::$couriers->zone                = $request->zone;
        self::$couriers->charge                = $request->charge;

        self::$couriers->save();

        return self::$couriers;
    }

    public static function updateCouriers($request,$id)
    {
        self::$couriers = Couriers::find($id);
        
       
        
        self::$couriers->name                 = $request->name;
        self::$couriers->city                 = $request->city;
        self::$couriers->zone                 = $request->zone;
        self::$couriers->charge               = $request->charge;
        
        
        self::$couriers->save();

        return self::$couriers;

        
    }


    public static function deleteCouriers($id)
    {
        self::$couriers=Couriers::find($id);
        
    
        self::$couriers->delete();
        
    }
}
