<x-musu.admin>

    <?php if (!$products) {
        $products = [];
    } ?>

    <div class="flex flex-col items-center">
        <h1 class="text-3xl font-bold special-h1 normal-h1">Products</h1>

        <div class="create-task mt-4">
            <a href="/admin/products/create" class="btn-grad text-white uppercase rounded-lg shadow-lg px-10 py-3">Create</a>
        </div>
    </div>

    <div class="flex justify-center mt-8">
        <table class="table-auto w-2/3">
            <thead class="bg-gray-700">
            <tr>
                <th class="px-4 py-2 text-white">Name</th>
                <th class="px-4 py-2 text-white">Brand</th>
                <th class="px-4 py-2 text-white">Price</th>
                <th class="px-4 py-2 text-white">Actions</th> <!-- Pievieno jaunu kolonnu darbībām -->
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)

                <tr class="cursor-pointer">
                    <td class="border px-4 py-2 r">{{ $product->name }}</td>
                    <td class="border px-4 py-2">{{ $product->brand }}</td>
                    <td class="border px-4 py-2">{{ $product->price }}</td>
                    <td class="border px-4 py-2">
                        <a href="/admin/products/edit/{{$product->id}}" class="second text-white uppercase rounded-lg shadow-lg px-1 py-1.5 hover:bg-right">Edit</a> <!-- Pievieno pogu "Edit" -->
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>
</x-musu.admin>
