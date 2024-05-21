<x-musu.layout>
    <div class="main-container">


        <div class="flex flex-col items-center">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">
                <span class="block text-2xl font-normal text-blue-500">Create</span>
            </h1>


            <form class="create-form" action="/noliktava/dashboard" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="<?= $product->id ?>">
                @method('PATCH')
                <div class="form-field">
                    <label for="name">Name</label>
                    <input type="text" placeholder="Product name" name="name" id="name" required value="<?= old('name'), $product->name ?>" class="form-input">
                </div>
                @error('name')
                <span class="text-red-500">{{ $message }}</span>
                @enderror

                <div class="form-field">
                    <label for="email">Brand</label>
                    <input type="email" name="email" id="email" required value="<?= old('Brand'), $product->Brand ?>" class="form-input">
                </div>
                @error('Brand')
                <span class="text-red-500">{{ $message }}</span>
                @enderror

                <div class="form-field">
                    <label for="usertype">Price</label>
                    <input type="Price" name="Price" id="Price" required value="<?= old('Price'), $product->Brand ?>" class="form-input">
                </div>
                @error('Price')
                <span class="text-red-500">{{ $message }}</span>
                @enderror


                <div class="button-container">
                    <button type="submit" class="rounded-button">Submit</button>
                </div>
            </form>
        </div>
    </div>
</x-musu.layout>