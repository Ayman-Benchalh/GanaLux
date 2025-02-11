@extends('layouts.themeDsh')

@section('title', 'Admin Dashboard')

@section('page-title', 'Welcome to the Dashboard')
@section('dataUser')
<div class="flex items-center space-x-4">
    <span class="text-gray-700 font-bold pl-2">Mr. {{Auth::user()->name;}}</span>
   <a href="/"><img src="{{ asset('assets/images/avatares/man.png') }}" alt="Admin Avatar" class="w-10 h-10 rounded-full"></a>
</div>
@endsection
@section('content')
@if(session('success'))
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            Swal.fire({
                icon: 'success',
                title: 'Succès!',
                text: '{{ session("success") }}',
                showConfirmButton: false,
                timer: 3000
            });
        });
    </script>
@endif

@if(session('error'))
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            Swal.fire({
                icon: 'error',
                title: 'Erreur!',
                text: '{{ session("error") }}',
                showConfirmButton: false,
                timer: 3000
            });
        });
    </script>
@endif

<div class="container mx-auto mt-10">

    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="mb-6 flex justify-between items-center">
            <h2 class="text-2xl font-semibold text-gray-700">Product List</h2>
            <a href="{{ route('admin.products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg flex items-center hover:bg-blue-600">
                <i class="fas fa-plus mr-2"></i> Add Product
            </a>
        </div>
        <table class="w-full bg-white border border-gray-300 rounded-lg overflow-hidden shadow-md">
            <thead class="bg-gray-100">
                <tr>
                    <th class="py-3 px-6 text-left text-sm font-medium text-gray-600 border-b">Image</th>
                    <th class="py-3 px-6 text-left text-sm font-medium text-gray-600 border-b">ID</th>
                    <th class="py-3 px-6 text-left text-sm font-medium text-gray-600 border-b">Name</th>
                    <th class="py-3 px-6 text-left text-sm font-medium text-gray-600 border-b">Description</th>
                    <th class="py-3 px-6 text-left text-sm font-medium text-gray-600 border-b">Price</th>
                    <th class="py-3 px-6 text-left text-sm font-medium text-gray-600 border-b">Quantity</th>
                    <th class="py-3 px-6 text-center text-sm font-medium text-gray-600 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr class="hover:bg-gray-50 border-b">
                        <td class="py-4 px-6 text-center">
                            @if($product->images->isNotEmpty())
                                <img src="{{ asset('storage/' . $product->images->first()->image_url) }}"
                                     alt="Product Image"
                                     class="w-16 h-16 object-cover rounded-lg border shadow-sm">
                            @else
                                <span class="text-gray-500">No Image</span>
                            @endif
                        </td>

                        <td class="py-4 px-6">{{ $product->id }}</td>
                        <td class="py-4 px-6">{{ $product->name }}</td>
                        <td class="py-4 px-6">{{ $product->description }}</td>
                        <td class="py-4 px-6">${{ number_format($product->price, 2) }}</td>
                        <td class="py-4 px-6">{{ $product->quantity }}</td>

                        <td class="py-4 px-6 text-center">
                            <div class="flex justify-center items-center gap-4">
                                <a href="{{ route('admin.products.edit', $product->id) }}"
                                   class="text-blue-500 hover:text-blue-700 transition flex items-center">
                                    <i class="fa-solid fa-edit mr-1"></i> Edit
                                </a>

                                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST"
                                      class="inline-block delete-form">
                                    @csrf
                                    @method('DELETE')
                                    {{-- <button type="submit"
                                            class="text-red-500 hover:text-red-700 transition flex items-center"
                                            onclick="return confirm('Are you sure?')">
                                        <i class="fa-solid fa-trash mr-1"></i> Delete
                                    </button> --}}
                                    <button type="button" class="text-red-500 hover:text-red-700 transition flex items-center delete-btn"
                                    data-id="{{ $product->id }}">
                                <i class="fa-solid fa-trash mr-1"></i> Supprimer
                            </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination Links -->
        <div class="mt-4 flex justify-center">
            {{ $products->links() }}
        </div>


    </div>
</div>
@endsection
@section('scriptJS')


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();
                let form = this.closest('.delete-form');
                Swal.fire({
                    title: "Êtes-vous sûr?",
                    text: "Cette action est irréversible!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "Oui, supprimer!",
                    cancelButtonText: "Annuler"
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    });
</script>

@endsection
