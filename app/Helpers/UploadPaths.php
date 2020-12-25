public<?php


namespace App\Helpers;


class UploadPaths
{
    public static $uploadPaths =  array(
      "products_photos" => "/uploads/product_images",
    );

    public static function getUploadPath($path) {
        return public_path().self::$uploadPaths($path);
    }
}
