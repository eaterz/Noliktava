<x-musu.admin>
    <div class="main-container">


        <div class="flex flex-col items-center">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">
                <span class="block text-2xl font-normal text-blue-500">Create</span>
            </h1>


        <form class="create-form" action="/admin/users" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-field">
                <label for="name">Name</label>
                <input type="text" placeholder="Product name" name="name" id="name" required value="<?= old('name') ?>" class="form-input">
            </div>
            @error('name')
            <span class="text-red-500">{{ $message }}</span>
            @enderror

            <div class="form-field">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required value="<?= old('email') ?>" class="form-input">
            </div>
            @error('email')
            <span class="text-red-500">{{ $message }}</span>
            @enderror

            <div class="form-field">
                <label for="usertype">Usertype</label>
                <select name="usertype" class="form-select">
                    <option value="noliktava">noliktava</option>
                    <option value="plaukti">plaukti</option>
                </select>
            </div>
            @error('usertype')
            <span class="text-red-500">{{ $message }}</span>
            @enderror

            <div class="form-field">
                <label for="password">Password</label>
                <input type="password" placeholder="password" name="password" id="password" required class="form-input">
            </div>
            @error('password')
            <span class="text-red-500">{{ $message }}</span>
            @enderror

            <div class="button-container">
                <button type="submit" class="rounded-button">Submit</button>
            </div>
        </form>
        </div>
    </div>
</x-musu.admin>
