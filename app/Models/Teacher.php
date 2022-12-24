<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    public static $teacher, $image,$extension,$imageName,$directory,$imageUrl;

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
    public static function newTeacher($request)
    {
        self::$teacher = new Teacher();
        self::$teacher->name          = $request->name;
        self::$teacher->email         = $request->email;
        self::$teacher->mobile        = $request->mobile;
        self::$teacher->password      = bcrypt($request->password);
        self::$teacher->address       = $request->address;
        self::$teacher->status        = $request->status;
        self::$teacher->image         = self::getImageUrl($request);
        self::$teacher->save();
    }
    public static function updateTeacher($request, $id)
    {
        self::$teacher = Teacher::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$teacher->image))
            {
                unlink(self::$teacher->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$teacher->image;
        }
        self::$teacher->name          = $request->name;
        self::$teacher->email         = $request->email;
        self::$teacher->mobile        = $request->mobile;
        if ($request->password)
        {
            self::$teacher->password  = bcrypt($request->password);
        }
        self::$teacher->address       = $request->address;
        self::$teacher->status        = $request->status;
        self::$teacher->image         = self::$imageUrl;
        self::$teacher->save();
    }

    public static function deleteTeacher($id)
    {
        self::$teacher = Teacher::find($id);
        if (file_exists(self::$teacher->image))
        {
            unlink(self::$teacher->image);
        }
        self::$teacher->delete();
    }
}
