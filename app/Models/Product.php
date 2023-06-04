<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    private static $product,$image,$imageName,$directory,$imageUrl,$extension;

    public static function getImageUrl($request)
    {
        self::$image =$request->file('image');
        self::$extension =self::$image->getClientOriginalExtension();
        self::$imageName = 'product'.time().'.'.self::$extension;
        self::$directory ='upload/product/';
        self::$image->move(self::$directory,self::$imageName);

        return self::$directory.self::$imageName;
    }
    public static function newproduct($request)
    {
        self::$product  = new Product();

        self::$product->category_id         = $request->category_id;
        self::$product->name                = $request->name;
        // self::$product->slug                = strtolower(str_replace(' ','-',$request->name));
        self::$product->stock_amount        = $request->stock_amount;        
        self::$product->regular_price        = $request->regular_price;
        self::$product->selling_price        = $request->selling_price;
        self::$product->purchaseprice       = $request->purchaseprice;
        self::$product->parcent             = $request->parcent;
        
        self::$product->long_description    = $request->long_description;
        self::$product->status              = $request->status;

        self::$product->image               = self::getImageUrl($request);

        self::$product->save();

        return self::$product;
        

    }

    public static function updateProduct($request,$id)
    {
        self::$product = Product::find($id);
        
        if($request->file('image'))
        {
            if(file_exists(self::$product->image))
            {
                unlink(self::$product->image);
            }
            self::$imageUrl=self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl=self::$product->image;
        }
        
        self::$product->category_id         = $request->category_id;
        self::$product->name                = $request->name;
       
        self::$product->stock_amount        = $request->stock_amount;        
        self::$product->regular_price        = $request->regular_price;
        self::$product->selling_price        = $request->selling_price;
        self::$product->purchaseprice       = $request->purchaseprice;
        self::$product->parcent             = $request->parcent;
       
        self::$product->long_description    = $request->long_description;
        self::$product->status              = $request->status;

        
        self::$product->image =self::$imageUrl;

        self::$product->save();
        return self::$product;

        
    }


    public static function deleteProduct($id)
    {
        self::$product=Product::find($id);
        
        if(file_exists(self::$product->image))
        {
            unlink(self::$product->image);
        }
        self::$product->delete();
        
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subImages()
    {
        return $this->hasMany(SubImage::class);
    }
}
