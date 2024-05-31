<x-musu.admin>
    <div class="main-container bg-gray-100 min-h-screen flex items-center justify-center py-12">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <div class="flex flex-col items-center">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">
                    <span class="block text-lg font-normal text-black text-center mb-4">Create a New User</span>
                </h1>

                <form class="create-form w-full" action="/admin/users" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-field mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" placeholder="Enter user's name" name="name" id="name" required value="{{ old('name') }}" class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-field mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" placeholder="Enter user's email" name="email" id="email" required value="{{ old('email') }}" class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-field mb-4">
                        <label for="usertype" class="block text-sm font-medium text-gray-700">Usertype</label>
                        <select name="usertype" id="usertype" class="form-select mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="noliktava">Noliktava</option>
                            <option value="plaukti">Plaukti</option>
                        </select>
                        @error('usertype')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-field mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" placeholder="Enter a password" name="password" id="password" required class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        @error('password')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="button-container mt-6">
                        <button type="submit" class="btn-grad text-white uppercase rounded-lg shadow-lg px-10 py-3 w-full">Create User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-musu.admin>
