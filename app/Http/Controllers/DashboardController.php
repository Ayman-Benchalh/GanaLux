<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Coupon;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch data for dashboard statistics
        $productCount = Product::count();
        $orderCount = Order::count();
        $couponCount = Coupon::count();
        $adminName=Auth::user()->name;

        return view('admin.dashboard', compact('productCount', 'orderCount', 'couponCount','adminName'));
    }
}
