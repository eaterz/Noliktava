<x-musu.admin>

    <?php if(!$category){$category = [];} ?>
    <?php if(!$products){$products = [];} ?>

    <h1 class="text-3xl font-bold special-h1 normal-h1 text-center">{{ $category->name }}</h1>

    <div class="create-task mt-6 flex justify-center items-center">
        <a href="#" data-toggle="modal" data-target="#ModalCreate" class="create-button bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105">Add</a>
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
                @if($product->category == $category->name)
                    <tr >
                        <td class="px-6 py-4 whitespace-nowrap">{{ $product->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $product->brand }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $product->price }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button data-toggle="modal" data-target="#ModalRemove-{{ $product->id }}" class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105">Remove</button>
                        </td>
                    </tr>

                    <!-- Modal for each product -->
                    <div class="modal fade" id="ModalRemove-{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="ModalRemoveLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Remove {{ $product->name }}?</h4>
                                </div>
                                <form action="{{ route('plaukti.remove', $category->id) }}" method="post">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Remove</button>
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

    @include('plaukti.modal.add')

</x-musu.admin>
