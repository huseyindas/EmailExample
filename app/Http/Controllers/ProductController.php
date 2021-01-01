<?php

namespace App\Http\Controllers;

use App\Helpers\UploadPaths;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function show() {
        return view("products.create");
    }

    public function save(Request $request) {

        $productName = $request->get("product_name");
        $productPrice = $request->get("product_price");
        $fileUrl = $request->file("product_photo");
        $createdBY = Auth::id(); //current user kimse onun id si gelmeli  ***ödev*** +++

        if (isset($fileUrl)) {
            $productPhotoName = uniqid("product_").".".$fileUrl->getClientOriginalExtension();  //product_56543456543, product_dklm23km23k
            $fileUrl->move(UploadPaths::getUploadPath("product_photos"), $productPhotoName);
        }

        Product::create([
            "name" => $productName,
            "price" => $productPrice,
            "photo" => $productPhotoName,
            "created_by" => $createdBY
        ]);

        return back();
    }
}
