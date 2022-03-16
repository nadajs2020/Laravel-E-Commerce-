<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Slider;
use App\Models\Product;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ShopController extends Controller
{
    public function indexHome()
    {
        $slider = Slider::orderBy('created_at', 'DESC')->take(5)->get();
        $getProduct = Product::orderBy('created_at', 'DESC')->take(20)->get();
        $topSales = OrderDetail::groupBy('product_id')->select('product_id', DB::raw('COUNT(*) AS K'))
            ->orderBy('K', 'DESC')->take(10)->pluck('product_id')->toArray();
        $sales = Product::find($topSales);

        return view('Ecommer.shop', [
            'sliders' => $slider,
            'getProducts' => $getProduct,
            'sales' => $sales,
        ]);
    }

    public function addToCaret(Request $request)
    {
        // if (!Auth::check()) {
        //     return redirect('/login');
        // }

        $rules = [
            'product' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect('/home');
        }
        $product_id = $request->get('product');
        $product = Product::find($product_id);
        if (!$product) {
            return redirect('/home');
        }

        $lastOrder = Order::where('is_checked_out', false)->where('user_id', Auth::user()->id)
            ->orderBy('created_at', 'DESC')->first();

        if ($lastOrder) {
            $orderProduct = OrderDetail::where('order_id', $lastOrder->id)->where('product_id', $product->id)->first();
            if ($orderProduct) {
                $orderProduct->amount = $orderProduct->amount + 1;
                $orderProduct->save();
            } else {
                $newOrderDetails = new OrderDetail();
                $newOrderDetails->order_id = $lastOrder->id;
                $newOrderDetails->product_id = $product_id;
                $newOrderDetails->amount = 1;
                $newOrderDetails->price = $product->selling_price;
                $newOrderDetails->discount = $product->discount;
                $newOrderDetails->save();
            }
        } else {
            $newOrder = new Order();
            $newOrder->user_id = Auth::user()->id;
            $newOrder->first_name = '';
            $newOrder->last_name = '';
            $newOrder->phone = '';
            $newOrder->address = '';
            $newOrder->save();

            $newOrderDetails = new OrderDetail();
            $newOrderDetails->order_id = $lastOrder->id;
            $newOrderDetails->product_id = $product_id;
            $newOrderDetails->amount = 1;
            $newOrderDetails->price = $product->selling_price;
            $newOrderDetails->discount = $product->discount;
            $newOrderDetails->save();
        }
        return redirect('/shop');
    }
}
