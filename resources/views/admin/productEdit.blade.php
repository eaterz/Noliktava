<x-musu.layout>
    <div class="container mx-auto px-4">
        <div class="flex flex-col items-center">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">
                <span class="block text-2xl font-normal text-blue-500">Update</span>
            </h1>

            <!-- Update Form -->
            <form action="{{ route('admin.products.update') }}" method="POST" class="w-full max-w-md">
                @csrf
                <input type="hidden" name="id" value="{{ $product->id }}">
                @method('PATCH')
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name:</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" id="name" name="name" value="{{ $product->name }}" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="brand">Brand:</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" id="brand" name="brand" value="{{ $product->brand }}" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="price">Price:</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" id="price" name="price" value="{{ $product->price }}" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="image">Image URL:</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="url" id="image" name="image" value="{{ $product->image }}" required>
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Submit</button>
                </div>
            </form>

            <!-- Delete Form -->
            <form action="{{ route('admin.products.delete', $product->id) }}" method="POST" class="mt-4 w-full max-w-md">
                @csrf
                @method('DELETE')
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Delete</button>
            </form>
        </div>
    </div>
</x-musu.layout>

