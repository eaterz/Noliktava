<x-musu.admin>

    <?php if (!$order) {
        $order = [];
    } ?>
    <?php if (!$products) {
        $products = [];
    } ?>

    <h1 class="text-3xl font-bold special-h1 normal-h1 text-center">{{ $order->name }}</h1>

    <div class="create-task mt-6 flex justify-center items-center">

        <button class="create-button bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105" type="button" data-target="#addProductOrderModal" id="openModalOrder">Add Products</button>
    </div>

    <div class="flex justify-center mt-8">
        <table class="table-auto w-full max-w-4xl bg-white shadow-lg rounded-lg overflow-hidden">
            <thead class="bg-indigo-600 text-white">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-medium uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 text-left text-sm font-medium uppercase tracking-wider">Brand</th>
                    <th class="px-6 py-3 text-left text-sm font-medium uppercase tracking-wider">Price</th>
                    <th class="px-6 py-3 text-left text-sm font-medium uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($products as $product)
                @if($product->order == $order->name)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $product->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $product->brand }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $product->price }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <button type="button" class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105" id="openModalremove{{ $product->id }}" data-target="#ModalRemove{{ $product->id }}">Remove</button>
                    </td>
                </tr>

                <!-- Modal for each product -->
                <div class="modal fade" id="ModalRemove{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="ModalRemoveLabel{{ $product->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Remove {{ $product->name }}?</h4>
                            </div>
                            <form action="{{ route('noliktava.remove', $order->id) }}" method="post">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <div class="modal-footer">
                                    <button type="button" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105" id="closeModalremove{{ $product->id }}">Close</button>
                                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105">Remove</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>

    @include('noliktava.modal.add')

</x-musu.admin>
