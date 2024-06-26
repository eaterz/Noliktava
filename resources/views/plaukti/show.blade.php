<x-musu.admin>

    <?php if(!$category){$category = [];} ?>
    <?php if(!$products){$products = [];} ?>

    <h1 class="text-3xl font-bold special-h1 normal-h1 text-center">{{ $category->name }}</h1>

    <div class="create-task mt-6 flex justify-center items-center">
        <button class="btn-grad text-white uppercase rounded-lg shadow-lg px-10 py-3" type="button" id="openModalBtn">Add Products</button>
    </div>

    <div class="flex justify-center mt-8">
        <div class="w-full max-w-4xl overflow-x-auto">
            <table class="table-auto w-full bg-white shadow-lg rounded-lg">
                <thead class="bg-gray-700 text-white">
                <tr>
                    <th class="px-4 py-3 text-left text-sm font-medium uppercase tracking-wider">Name</th>
                    <th class="px-4 py-3 text-left text-sm font-medium uppercase tracking-wider">Brand</th>
                    <th class="px-4 py-3 text-left text-sm font-medium uppercase tracking-wider">Price</th>
                    <th class="px-4 py-3 text-left text-sm font-medium uppercase tracking-wider">Actions</th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                @foreach($products as $product)
                    @if($product->category == $category->name)
                        <tr>
                            <td class="px-4 py-4 whitespace-nowrap">{{ $product->name }}</td>
                            <td class="px-4 py-4 whitespace-nowrap">{{ $product->brand }}</td>
                            <td class="px-4 py-4 whitespace-nowrap">{{ $product->price }}</td>
                            <td class="px-4 py-4 whitespace-nowrap">
                                <button type="button" class="first text-white uppercase rounded-lg shadow-lg px-4 py-2 hover:bg-right" id="openModalremove{{ $product->id }}" data-target="#ModalRemove{{ $product->id }}">Remove</button>
                            </td>
                        </tr>

                        <!-- Modal for each product -->
                        <div class="modal fade" id="ModalRemove{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="ModalRemoveLabel{{ $product->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Remove {{ $product->name }}?</h4>
                                    </div>
                                    <form action="{{ route('plaukti.remove', $category->id) }}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                        <div class="modal-footer flex flex-col items-center sm:flex-row">
                                            <button type="button" class="text-zinc-600 hover:text-zinc-900" id="closeModalremove{{ $product->id }}">Close</button>
                                            <button type="submit" class="rounded-full border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100">Remove</button>
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
    </div>

    @include('plaukti.modal.add')

</x-musu.admin>
