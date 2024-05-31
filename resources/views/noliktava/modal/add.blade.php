<div class="modal fade" id="addProductOrderModal" tabindex="-1" role="dialog" aria-labelledby="addProductOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Products to Order</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeModalOrder">
                </button>
            </div>
            <form action="{{ route('noliktava.add', $order->id) }}" method="post">
                @csrf
                @method('PATCH')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="productName">Select Products</label>
                        <div>
                            @foreach($products as $product)
                            @if($product->order == 'none')
                            <div class="form-check">
                                <input type="hidden" id="name" name="name" value="{{ $order->name }}">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-zinc-600" id="product_{{ $product->id }}" name="products[]" value="{{ $product->id }}">
                                <label class="form-check-label" for="product_{{ $product->id }}">{{ $product->name }}</label>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="mt-6 flex justify-end space-x-4">
                    <button type="button" class="text-zinc-600 hover:text-zinc-900" data-dismiss="modal" id="closeModalOrder">Close</button>
                    <button type="submit" class="rounded-full border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100">Add Products</button>
                </div>
            </form>
        </div>
    </div>
</div>
