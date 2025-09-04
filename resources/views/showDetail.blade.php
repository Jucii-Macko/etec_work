@php
    $p = $product['data']; // extract product data
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $p['name'] }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">


<div class="max-w-4xl mx-auto bg-white p-6 rounded-xl shadow-md flex flex-col md:flex-row gap-6">
    
    <div class="w-full">
        <img src="{{ $p['thumbnail'] }}" 
                alt="{{ $p['name'] }}" 
                class="w-full h-auto rounded-md object-cover">
    </div>

    <div class="w-full flex flex-col text-start justify-start ">
        <h1 class="text-3xl font-bold mb-4 ">{{ $p['name'] }}</h1>
        <p class="text-sm line-through text-gray-500 mb-1">Regular: ${{ $p['regular_price'] }}</p>
        <p class="text-xl font-bold text-red-500 mb-3">Sale: ${{ $p['sale_price'] }}</p>
        <img src="{{ $p['thumbnail'] }}" width="100" alt=""
                class="rounded border border-gray-300">
        <p class="text-xm text-gray-900 mt-0 mb-2">{{ $p['color'] }}</p>
        <p class="text-xm text-gray-700 mb-2">Size: {{ $p['size'] }}</p>

        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 w-full md:w-auto">
            Add to Cart
        </button>
    </div>
</div>


</body>
</html>
