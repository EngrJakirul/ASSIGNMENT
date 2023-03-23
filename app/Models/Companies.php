<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use HasFactory;

    private static $company;
    private static $image, $imageName, $imageExtension, $imageUrl, $imageDirectory;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        if (self::$image)
        {
            self::$imageExtension = self::$image->getClientOriginalExtension();
            self::$imageName      = 'company-image'.time().rand(0, 99999999999999999).'.'.self::$imageExtension;
            self::$imageDirectory = 'company-images/';
            self::$image->move(self::$imageDirectory, self::$imageName);
            return self::$imageDirectory.self::$imageName;
        }
        else
        {
            return '';
        }
    }

    public static function createCompanies ($request)
    {
        self::$company               = new Companies();
        self::$company->name         = $request->name;
        self::$company->email        = $request->email;
        self::$company->image        = self::getImageUrl($request);;
        self::$company->website      = $request->website;
        self::$company->save();
    }

    public static function updateCompanies($request, $id)
    {
        self::$company = Companies::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$company->image))
            {
                unlink(self::$company->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$company->image;
        }
        self::$company->name         = $request->name;
        self::$company->email        = $request->email;
        self::$company->image        = self::$imageUrl;
        self::$company->website      = $request->website;
        self::$company->save();
    }

    public static function deleteCompanies($id)
    {
        self::$company                 = Companies::find($id);
        self::$company->delete();
    }
}
