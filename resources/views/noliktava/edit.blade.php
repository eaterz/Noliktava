<x-musu.layout>
    <div class="main-container">
        <div class="flex flex-col items-center">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">
                <span class="block text-2xl font-normal text-blue-500">Update</span>
            </h1>

            <!-- Update Form -->
            <form action="{{ route('update', $product->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="{{ $product->name }}" required>
                </div>
                <div>
                    <label for="brand">Brand:</label>
                    <input type="text" id="brand" name="brand" value="{{ $product->brand }}" required>
                </div>
                <div>
                    <label for="price">Price:</label>
                    <input type="number" id="price" name="price" value="{{ $product->price }}" required>
                </div>
                <div>
                    <label for="image">Image URL:</label>
                    <input type="url" id="image" name="image" value="{{ $product->image }}" required>
                </div>
                <div class="button-container">
                    <button type="submit" class="rounded-button">Submit</button>
                </div>
            </form>

            <!-- Delete Form -->
            <form action="{{ route('delete', $product->id) }}" method="POST" class="mt-4">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-button">Delete</button>
            </form>
        </div>
    </div>
</x-musu.layout>