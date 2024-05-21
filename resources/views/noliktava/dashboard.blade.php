<x-musu.layout>
    <h1>Hello</h1>
    <a href="create">Create</a>

    @if (!$products)
    <?php $products = []; ?>
    @endif

    <div class="flex flex-col items-center">
        <h1 class="text-3xl font-bold special-h1 normal-h1">Products</h1>

        <div class="create-task mt-4">
            <a href="/noliktava/create" class="create-button bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create</a>
        </div>
    </div>

    <div class="flex justify-center">
        <table class="table-auto w-2/3">
            <thead>
                <tr>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Brand</th>
                    <th class="px-4 py-2">Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $user)
                @if($user->id != auth()->user()->id)
                <tr onclick="window.location.href='/noliktava/edit/{{$user->id}}'">
                    <td class="border px-4 py-2">{{ $user->name }}</td>
                    <td class="border px-4 py-2">{{ $user->brand }}</td>
                    <td class="border px-4 py-2">{{ $user->price }}</td>

                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
</x-musu.layout>