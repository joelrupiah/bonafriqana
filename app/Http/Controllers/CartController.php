<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use Response;

class CartController extends Controller
{
    public function AddCart($id)
    {
        $product = DB::table('products')
                    ->where('id',$id)
                    ->first();

        $data = array();

        if ($product->discount_price == NULL) 
        {
            $data['id'] = $product->id;
            $data['name'] = $product->product_name;
            $data['qty'] = 1;
            $data['price'] = $product->selling_price;
            $data['weight'] = 1;
            $data['options']['image'] = $product->image_one;
            $data['options']['color'] = '';
            $data['options']['size'] = '';

            Cart::add($data);

            return \Response::json(['success' => 'Product added to cart']);

        }
        else
        {
            $data['id'] = $product->id;
            $data['name'] = $product->product_name;
            $data['qty'] = 1;
            $data['price'] = $product->discount_price;
            $data['weight'] = 1;
            $data['options']['image'] = $product->image_one;
            $data['options']['color'] = '';
            $data['options']['size'] = '';

            Cart::add($data);

            return \Response::json(['success' => 'Product added to cart']);

        }
    }

    public function check()
    {
        $content = Cart::content();
        return response()->json($content);
    }

    public function ShowCart()
    {
        $cart = Cart::content();
        // return response($cart);
        return view('user.pages.cart',compact('cart'));
    }

    public function removeCart($rowId)
    {
        Cart::remove($rowId);
        $notification=array(
            'message'=>'Product removed from cart',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }

    public function UpdateCart(Request $request)
    {
        $rowId = $request->productid;
        $qty = $request->qty;
        Cart::update($rowId,$qty);
        $notification=array(
            'message'=>'Quantity updated',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }

    public function ViewProduct($id)
    {
        $product = DB::table('products')
                    ->join('categories','products.category_id','categories.id')
                    ->join('subcategories','products.subcategory_id','subcategories.id')
                    ->select('products.*','categories.category_name','subcategories.subcategory_name')
                    ->where('products.id',$id)
                    ->first();

                    // return response()->json($product);

                    $color = $product->product_color;
                    $product_color = explode(',',$color);

                    $size = $product->product_size;
                    $product_size = explode(',',$size);

                    return response::json(array(
                        'product' => $product,
                        'color' => $product_color,
                        'size' => $product_size,
                    ));
    }

    public function insertCart(Request $request)
    {
        $id = $request->product_id;
        // echo "done";
        $product = DB::table('products')
                    ->where('id',$id)
                    ->first();
        $color = $request->color;
        $size = $request->size;
        $qty = $request->qty;

        $data = array();

        if ($product->discount_price == NULL) 
        {
            $data['id'] = $product->id;
            $data['name'] = $product->product_name;
            $data['qty'] = $request->qty;
            $data['price'] = $product->selling_price;
            $data['weight'] = 1;
            $data['options']['image'] = $product->image_one;
            $data['options']['color'] = $request->color;
            $data['options']['size'] = $request->size;

            Cart::add($data);

            $notification=array(
                'message'=>'Product added successfully',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification);

        }
        else
        {
            $data['id'] = $product->id;
            $data['name'] = $product->product_name;
            $data['qty'] = $request->qty;
            $data['price'] = $product->discount_price;
            $data['weight'] = 1;
            $data['options']['image'] = $product->image_one;
            $data['options']['color'] = $request->color;
            $data['options']['size'] = $request->size;

            Cart::add($data);

            $notification=array(
                'message'=>'Product added successfully',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification);

        }
    
    }
}
