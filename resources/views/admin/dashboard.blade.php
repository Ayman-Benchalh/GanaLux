@extends('layouts.themeDsh')

@section('title', 'Admin Dashboard')

@section('page-title', 'Welcome to the Dashboard')
@section('dataUser')

@endsection
@section('content')
{{-- <div class="grid grid-cols-3 gap-6">
    <div class="bg-white shadow rounded p-4">
        <h2 class="text-lg font-bold">Products</h2>
        <p>Total: {{ $productCount ?? 0 }}</p>
        <a href="{{ route('admin.products') }}" class="text-blue-500 hover:underline">Manage Products</a>
    </div>
    <div class="bg-white shadow rounded p-4">
        <h2 class="text-lg font-bold">Orders</h2>
        <p>Total: {{ $orderCount ?? 0 }}</p>
        <a href="{{ route('admin.orders.index') }}" class="text-blue-500 hover:underline">View Orders</a>
    </div>
    <div class="bg-white shadow rounded p-4">
        <h2 class="text-lg font-bold">Coupons</h2>
        <p>Total: {{ $couponCount ?? 0 }}</p>
        <a href="{{ route('admin.coupons.index') }}" class="text-blue-500 hover:underline">Manage Coupons</a>
    </div>
</div> --}}

<div class="flex-1 p-5 md:p-10">
    <header class="flex justify-between items-center mb-8">
        <h2 class="text-3xl font-semibold text-gray-800">Dashboard</h2>
        {{-- <button class="bg-blue-500 text-white px-4 py-2 rounded transition-transform transform hover:scale-105 flex items-center gap-2"><i class="ph ph-plus-circle"></i> Add Product</button> --}}
    </header>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
            <h3 class="text-lg font-semibold text-gray-700 flex items-center gap-2"><i class="ph ph-list-dashes"></i> Total Orders</h3>
            <p class="text-2xl font-bold text-blue-600">1,250</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
            <h3 class="text-lg font-semibold text-gray-700 flex items-center gap-2"><i class="ph ph-currency-circle-dollar"></i> Total Sales</h3>
            <p class="text-2xl font-bold text-green-600">$25,000</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
            <h3 class="text-lg font-semibold text-gray-700 flex items-center gap-2"><i class="ph ph-clock-counter-clockwise"></i> Pending Orders</h3>
            <p class="text-2xl font-bold text-yellow-600">320</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
            <h3 class="text-lg font-semibold text-gray-700 flex items-center gap-2"><i class="ph ph-currency-dollar"></i> Cash on Delivery</h3>
            <p class="text-2xl font-bold text-red-600">$10,000</p>
        </div>
    </div>

    <div class="mt-10 bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-lg font-semibold text-gray-700">Sales Overview</h3>
        <canvas id="salesChart"></canvas>
    </div>
</div>
@endsection
