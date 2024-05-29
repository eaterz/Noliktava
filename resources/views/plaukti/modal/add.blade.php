<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white">
    
    <div class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 z-50" id="addProductModal" style="display: none;">
            <div class="flex items-center justify-center h-screen">
             <div class="max-w-md rounded-lg bg-white p-6 shadow-lg">
            <div class="mb-4 flex items-center justify-between">
                <h2 class="text-xl font-bold text-zinc-900">Add Products</h2>
            </div>
            <form action="{{ route('plaukti.add', $category->id) }}" method="post">
                @csrf
                @method('PATCH')
                <div>
                    <h3 class="mb-2 text-lg font-semibold text-zinc-900">Select Products</h3>
                    <div class="space-y-4">
                        @foreach($products as $product)
                            @if($product->category == 'none')
                                <label class="flex items-center">
                                    <input type="hidden" id="name" name="name" value="{{ $category->name }}">
                                    <input type="checkbox" class="form-checkbox h-5 w-5 text-zinc-600" id="product_{{ $product->id }}" name="products[]" value="{{ $product->id }}">
                                    <span class="ml-2 text-zinc-900">{{ $product->name }}</span>
                                </label>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="mt-6 flex justify-end space-x-4">
                    <button type="button" class="text-zinc-600 hover:text-zinc-900" onclick="closeModal()">Close</button>
                    <button type="submit" class="rounded-full border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100">Add Products</button>
                </div>
            </form>
        </div>
    </div>


    <script>
        function closeModal() {
            document.getElementById('addProductModal').style.display = 'none';
        }

        function openModal() {
            document.getElementById('addProductModal').style.display = 'flex';
        }

    </script>
</body>
</html>



