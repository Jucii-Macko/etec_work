 {{-- <div class="row wide-xl " >
            @foreach($breeds as $breed)
                <div class="col-lg-2 ">
                    <div class="feature-with-icon" data-aos="flip-up" >
                        <h5><strong>{{ucfirst($breed)}}</strong></h5>
                    </div>
                </div>
            @endforeach
        </div> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fetch API Products</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">

    <h1 class="text-3xl font-bold text-center mb-8">Products</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($products as $product)
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div>
                    <img 
                        src="{{ $product['thumbnail'] }}" 
                        alt="{{ $product['name'] }}" 
                        class="w-full h-full object-cover"
                    >
                </div>
                <div class="p-4 text-center">
                    <h2 class="text-lg font-semibold mb-2">{{ $product['name'] }}</h2>
                    <div class="flex justify-between">
                        <p></p>
                        <p class="font-bold text-gray-500 line-through">${{ $product['regular_price'] }} 
                            <span><p class="font-bold text-red-500">${{ $product['sale_price'] }}</p></span></p>
                        
                    </div>
                    
                </div>
            </div>
        @endforeach
    </div>

</body>
</html>

