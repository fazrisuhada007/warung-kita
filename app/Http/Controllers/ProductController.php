<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    // public function get() {

    //     $product = Product::all();

    //     return response()->json(
    //         [
    //             "Message"   => "Method Get Success",
    //             "data"      => $product
    //         ]
    //     );
    // }

    // public function getById($id) {
    //     $product = Product::where('id', $id)->get();

    //     return response()->json(
    //         [
    //             "Message"   => "Success",
    //             "data"      => $product
    //         ]
    //     );
    // }

    // public function post(Request $request) {
    //     $product = new Product;
    //     $product->name          = $request->name;
    //     $product->price         = $request->price;
    //     $product->quantity      = $request->quantity;
    //     $product->active        = $request->active;
    //     $product->description   = $request->description;
        
    //     $product->save();

    //     return response()->json(
    //         [
    //             "Message"   => "Success",
    //             "data"      => $product
    //         ]
    //     );
    // }

    // public function put($id, Request $request) {
    //     $product = Product::where('id', $id)->first();

    //     if($product) {
    //         $product->name        = $request->name        ? $request->name        : $product->name;
    //         $product->price       = $request->price       ? $request->price       : $product->price;
    //         $product->quantity    = $request->quantity    ? $request->quantity    : $product->quantity;
    //         $product->active      = $request->active      ? $request->active      : $product->active;
    //         $product->description = $request->description ? $request->description : $product->description;

    //         $product->save();

    //         return response()->json(
    //             [
    //                 "Message"   =>  "Success",
    //                 "data"      => $product
    //             ]
    //         );
    //     } else {
    //         return response()->json(
    //             [
    //                 "Message"   =>  "Product with id " . $id ." Not Found"
    //             ],400
    //         );
    //     }
    // }

    // public function delete($id, Request $request) {
    //     $product = Product::where('id',$id)->first();

    //     if($product) {
    //         $product->delete();
    //         return response()->json(
    //             [
    //                 "Message"   => "Product with id " . $id . " Success Deleted"
    //             ]
    //         );
    //     } else {
    //         return response()->json(
    //             [
    //                 "Message"   =>  "Product with id " . $id . " Not Found"
    //             ],400
    //         );
    //     }
    // }

    public function get() {
        $product = Product::all();
        return response()->json(
            [
                "Message"   =>  "Success",
                "data"      =>  $product
            ]
        );
    }

    public function getById($id) {
        $product = Product::where('id',$id)->get();
        return response()->json(
            [
                "Message"   =>  "Success",
                "data"      =>  $product
            ]
        );
    }

    public function post(Request $request) {
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->active = $request->active;
        $product->description = $request->description;

        $product->save();

        return response()->json(
            [
                "Message"   => "Success"
            ]
        );
    }

    public function put($id, Request $request) {
        $product    =   Product::where('id',$id)->first();

        if($product) {
            $product->name          = $request->name        ? $request->name        : $product->name;
            $product->price         = $request->price       ? $request->price       : $product->price;
            $product->quantity      = $request->quantity    ? $request->quantity    : $product->quantity;
            $product->active        = $request->active      ? $request->active      : $product->active;
            $product->description   = $request->description ? $request->description : $product->description;

            $product->save();

            return response()->json(
                [
                    "Message"   =>  "Product with id " . $id . " has been updated",
                    "data"      =>  $product
                ]
            );
        } else {
            return response()->json(
                [
                    "Message"   =>  "Product with id " . $id . " not define"
                ],400
            );
        }
    }

    public function delete($id) {
        $product = Product::where('id',$id)->first();
        if($product) {
            $product->delete();
            return response()->json(
                [
                    "Message"   =>  "Product with id " . $id . " has been deleted"
                ]
            );
        } else {
            return response(
                [
                    "Message"   =>  "Product with id " . $id . " not found"
                ],400
            );
        }
    }
}
