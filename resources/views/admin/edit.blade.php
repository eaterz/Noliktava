<x-musu.admin>
    <div class="main-container bg-gray-100 min-h-screen flex items-center justify-center px-4 sm:px-0">
        <div class="w-full max-w-lg bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
            <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 dark:text-gray-100 mb-6 text-center">
                Edit User

            </h1>

            <form action="/admin/users" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <input type="hidden" name="id" value="{{ $user->id }}">
                @method('PATCH')

                <div class="form-field">
                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Name</label>
                    <input type="text" name="name" id="name" placeholder="Product name" required value="{{ old('name', $user->name) }}" class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100">
                    @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-field">
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Email</label>
                    <input type="email" name="email" id="email" required value="{{ old('email', $user->email) }}" class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100">
                    @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-field">
                    <label for="usertype" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Usertype</label>
                    <select name="usertype" id="usertype" class="form-select mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100">
                        <option value="noliktava" {{ old('usertype', $user->usertype) == 'noliktava' ? 'selected' : '' }}>noliktava</option>
                        <option value="plaukti" {{ old('usertype', $user->usertype) == 'plaukti' ? 'selected' : '' }}>plaukti</option>
                    </select>
                    @error('usertype')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-field">
                    <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Password</label>
                    <input type="password" name="password" id="password" placeholder="password" required class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100">
                    @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="button-container flex justify-between items-center mt-6">
                    <button type="submit" class="btn-grad text-white uppercase rounded-lg shadow-lg px-10 py-3 w-full">Submit</button>

                </div>
            </form>

            <form action="/admin/users/edit/{{$user->id}}" method="POST" class=" mt-4">
                @csrf
                @method('DELETE')
                <button type="submit" class="first text-white uppercase rounded-lg shadow-lg px-4 py-2 hover:bg-right">Delete</button>
            </form>
        </div>
    </div>
</x-musu.admin>
