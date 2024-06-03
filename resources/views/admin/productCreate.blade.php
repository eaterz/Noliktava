<x-musu.admin>
<div class="mt-2 max-w-md mx-auto p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6 text-center">Create New Product</h1>
    <form class="space-y-4" action="{{ route('admin.products.create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <textarea id="name" name="name" rows="1" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="Product name" required><?= old('name') ?></textarea>
            @error('name')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="image" class="block text-sm font-medium text-gray-700">Image link</label>
            <input type="url" id="image" name="image" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="Image link" required value="<?= old('image') ?>">
            @error('image')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="brand" class="block text-sm font-medium text-gray-700">Brand</label>
            <textarea id="brand" name="brand" rows="1" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="Product brand" required><?= old('brand') ?></textarea>
            @error('brand')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
            <textarea id="price" name="price" rows="1" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="Product price" required><?= old('price') ?></textarea>
            @error('price')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <button type="submit" class="btn-grad text-white uppercase rounded-lg shadow-lg px-10 py-3 w-full">Submit</button>
        </div>
    </form>
</div>
</x-musu.admin>
