<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function index()
    {
        $lastOrder = Order::where('is_checked_out', false)
            ->where('user_id', Auth::user()->id)
            ->orderBy('created_at', 'DESC')->first();

        return view('Ecommer.cart', [
            'lastOrderDetails' => $lastOrder->orderDetails,
        ]);
    }

    //    Start Function (deleteItemFromCart)
    public function deleteItemFromCart(Request $request)
    {
        // if (Auth::check()) {
        //     return redirect('/login');
        // }
        // $rules = ['product' => 'tequired'];
        // $validator = Validator::make($request->all(), $rules);
        // if ($validator->fails()) {
        //     return redirect('/home');
        // }

        $productId = $request->get('product');
        $product = Product::find($productId);
        if (!$product) {
            return redirect('shopping-cart');
        }


        $lastOrder = Order::where('is_checked_out', false)
            ->where('user_id', Auth::user()->id)
            ->orderBy('created_at', 'DESC')->first();

        if ($lastOrder) {

            $lastOrderDetails = OrderDetail::where('product_id', '=', $productId)
                ->where('order_id', '=', $lastOrder->id)->first();
            if ($lastOrderDetails) {
                $lastOrderDetails->delete();
                return redirect('shopping-cart');
            } else {
                return redirect('shopping-cart');
            }
        } else {
            return redirect('shopping-cart');
        }
    }

    public function cartDeleteAll()
    {
        $lastOrder = Order::where('is_checked_out', false)
            ->where('user_id', Auth::user()->id)
            ->orderBy('created_at', 'DESC')->first();

        if ($lastOrder) {
            $products = OrderDetail::where('order_id', $lastOrder->id)->get();
            foreach ($products as $product) {
                $product->delete();
                return redirect('shopping-cart');
            }
            $lastOrder->delete();
            return redirect('shopping-cart');
        } else {
            return redirect('shopping-cart');
        }
    }
}
