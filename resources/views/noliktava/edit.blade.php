<x-musu.layout>
    <div class="main-container">


        <div class="flex flex-col items-center">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">
                <span class="block text-2xl font-normal text-blue-500">Update</span>
            </h1>


            <!-- In the edit.blade.php -->
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
                <button type="submit">Update Product</button>
                <form action="/noliktava/edit/{id}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="delete-button">Delete</button>
                </form>
            </form>


        </div>
    </div>
</x-musu.layout>