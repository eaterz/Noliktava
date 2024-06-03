<x-musu.admin>
    <div class="mt-2 max-w-md mx-auto p-6 bg-white rounded-lg shadow-md">
        <div class="flex flex-col items-center">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">
                <span class="block text-2xl font-normal text-black">Update</span>
            </h1>

            <!-- Update Form -->
            <form action="{{ route('admin.products.update') }}" method="POST" class="w-full max-w-md">
                @csrf
                <input type="hidden" name="id" value="{{ $product->id }}">
                @method('PATCH')
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name:</label>
                    <input class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" type="text" id="name" name="name" value="{{ $product->name }}" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="brand">Brand:</label>
                    <input class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" type="text" id="brand" name="brand" value="{{ $product->brand }}" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="price">Price:</label>
                    <input class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" type="number" id="price" name="price" value="{{ $product->price }}" required>
                </div>

                <div class="flex items-center justify-between">
                    <button class="btn-grad text-white uppercase rounded-lg shadow-lg px-4 py-2 w-full" type="submit">Submit</button>
                </div>
            </form>

            <!-- Delete Form -->
            <form action="{{ route('admin.products.delete', $product->id) }}" method="POST" class="mt-4 w-full max-w-md">
                @csrf
                @method('DELETE')
                <button class="first text-white uppercase rounded-lg shadow-lg px-4 py-2 hover:bg-right" type="submit">Delete</button>
            </form>
        </div>
    </div>
</x-musu.admin>

