<x-musu.admin>
    <?php if(!$users){$users = [];} ?>
    <div class="flex flex-col items-center">
        <h1 class="text-4xl font-extrabold text-gray-900 mt-8">Users</h1>

        <div class="create-task mt-6">
            <a href="/admin/users/create" class="btn-grad text-white uppercase rounded-lg shadow-lg px-10 py-3">Create</a>
        </div>
    </div>

    <div class="flex justify-center mt-8">
        <table class="table-auto w-full max-w-4xl bg-white shadow-lg rounded-lg overflow-hidden">
            <thead class="bg-gray-700 text-white">
            <tr>
                <th class="px-6 py-3 text-left text-sm font-medium uppercase tracking-wider">Name</th>
                <th class="px-6 py-3 text-left text-sm font-medium uppercase tracking-wider">Email</th>
                <th class="px-6 py-3 text-left text-sm font-medium uppercase tracking-wider">Usertype</th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @foreach($users as $user)
                @if($user->id != auth()->user()->id)
                    <tr class="hover:bg-gray-100 cursor-pointer" onclick="window.location.href='/admin/users/edit/{{$user->id}}'">
                        <td class="px-6 py-4 whitespace-nowrap">{{ $user->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $user->email }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $user->usertype }}</td>

                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>
</x-musu.admin>
