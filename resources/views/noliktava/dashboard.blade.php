    <x-musu.admin>

        <?php if (!$products) {
            $products = [];
        } ?>

        <div class="flex flex-col items-center">
            <h1 class="text-3xl font-bold special-h1 normal-h1">Products</h1>

            <div class="create-task mt-4">
                <a href="/noliktava/create" class=" flex justify-center items-center create-button bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-8 rounded">Create</a>
                
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            </div>
        </div>

        <div class="flex justify-center">
            <table class="table-auto w-2/3">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Brand</th>
                        <th class="px-4 py-2">Price</th>
                        <th class="px-4 py-2">Actions</th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)

                    <tr class="cursor-pointer">
                        <td class="border px-4 py-2 r">{{ $product->name }}</td>
                        <td class="border px-4 py-2">{{ $product->brand }}</td>
                        <td class="border px-4 py-2">{{ $product->price }}</td>
                        <td class="border px-4 py-2">
                            <a href="/noliktava/edit/{{$product->id}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded">Edit</a> 
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </x-musu.admin>





    