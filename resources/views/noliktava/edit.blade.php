<x-musu.layout>
    <div class="min-h-screen flex items-center justify-center bg-white light:bg-zinc-900">
        <div class="bg-white dark:bg-zinc-800 p-8 rounded-lg shadow-lg w-full max-w-md">
            <h1 class="text-2xl font-bold text-center text-blue-600 dark:text-blue-400 mb-6">Update</h1>

          
            <form action="{{ route('update', $product->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-4">
                    <label class="block text-zinc-700 dark:text-zinc-300 font-bold mb-2" for="name">Name:</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-zinc-700 light:text-zinc-300 dark:bg-zinc-700 leading-tight focus:outline-none focus:shadow-outline" type="text" id="name" name="name" value="{{ $product->name }}" required>
                </div>
                <div class="mb-4">
                    <label class="block text-zinc-700 dark:text-zinc-300 font-bold mb-2" for="brand">Brand:</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-zinc-700 dark:text-zinc-300 dark:bg-zinc-700 leading-tight focus:outline-none focus:shadow-outline" type="text" id="brand" name="brand" value="{{ $product->brand }}" required>
                </div>
                <div class="mb-4">
                    <label class="block text-zinc-700 dark:text-zinc-300 font-bold mb-2" for="price">Price:</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-zinc-700 dark:text-zinc-300 dark:bg-zinc-700 leading-tight focus:outline-none focus:shadow-outline" type="number" id="price" name="price" value="{{ $product->price }}" required>
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Submit</button>
                </div>
            </form>

            <!-- Delete Form -->
            <form action="{{ route('delete', $product->id) }}" method="POST" class="mt-4">
                @csrf
                @method('DELETE')
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Delete</button>
            </form>
        </div>
    </div>
</x-musu.layout>
    