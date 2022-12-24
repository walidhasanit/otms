<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public static $category, $image,$extension,$imageName,$directory,$imageUrl, $message;

    public static function getImageUrl($request)
    {
        self::$image     = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$extension;
        self::$directory = 'category-image/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }
    public static function newCategory($request)
    {
        self::$category = new Category();
        self::$category->name        = $request->name;
        self::$category->description = $request->description;
        self::$category->status      = $request->status;
        self::$category->image       = self::getImageUrl($request);
        self::$category->save();
    }
    public static function updateCategory($request, $id)
    {
        self::$category = Category::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$category->image))
            {
                unlink(self::$category->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$category->image;
        }
        self::$category->name        = $request->name;
        self::$category->description = $request->description;
        self::$category->status      = $request->status;
        self::$category->image       = self::$imageUrl;
        self::$category->save();
    }
    public static function updateStatus($id)
    {
        self::$category = Category::find($id);
       if (self::$category->status == 1 )
       {
           self::$category->status = 0;
           self::$message = 'category status info unpublished successfully';
       }
       else
       {
           self::$category->status = 1;
           self::$message = 'category status info published successfully';
       }
       self::$category->save();
       return self::$message;
    }
    public static function deleteCategory($id)
    {
        self::$category = Category::find($id);
        if (file_exists(self::$category->image))
        {
            unlink(self::$category->image);
        }
        self::$category->delete();
    }

}
