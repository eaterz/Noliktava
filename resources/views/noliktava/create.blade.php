<x-musu.layout>

    <div class="main-container">
        <h1 class="special-h1 normal-h1"><span>Create new Product</span></h1>
        <form class="create-form" action="/noliktava/dashboard" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-field">
                <label for="name">Name</label>
                <textarea placeholder="Product name" name="name" id="name" required><?= old('name') ?></textarea>
            </div>
            @error('name')
            <span class="text-red-500">{{ $message }}</span>
            @enderror

            <div class="form-field">
                <label for="image">Image link</label>
                <input type="url" name="image" id="image" required value="<?= old('image') ?>">
            </div>
            @error('image')
            <span class="text-red-500">{{ $message }}</span>
            @enderror

            <div class="form-field">
                <label for="brand">Brand</label>
                <textarea placeholder="Product brand" name="brand" id="brand" required><?= old('brand') ?></textarea>
            </div>
            @error('brand')
            <span class="text-red-500">{{ $message }}</span>
            @enderror

            <div class="form-field">
                <label for="price">Price</label>
                <textarea placeholder="Product price" name="price" id="price" required><?= old('price') ?></textarea>
            </div>
            @error('price')
            <span class="text-red-500">{{ $message }}</span>
            @enderror
            <div class="button-container">
                <button class="rounded-button">Submit</button>
            </div>
        </form>
    </div>

</x-musu.layout>
