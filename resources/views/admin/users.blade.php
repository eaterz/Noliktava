<x-musu.admin>



    <?php if(!$users){$users = [];} ?>
    <div class="flex flex-col items-center">
        <h1 class="text-3xl font-bold special-h1 normal-h1">Users</h1>

        <div class="create-task mt-4">
            <a href="/admin/users/create" class="create-button bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create</a>
        </div>
    </div>

    <div class="flex justify-center">
        <table class="table-auto w-2/3">
            <thead>
            <tr>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Usertype</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                @if($user->id != auth()->user()->id)
                    <tr onclick="window.location.href='/admin/users/edit/{{$user->id}}'">
                        <td class="border px-4 py-2">{{ $user->name }}</td>
                        <td class="border px-4 py-2">{{ $user->email }}</td>
                        <td class="border px-4 py-2">{{ $user->usertype }}</td>
                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>
</x-musu.admin>
