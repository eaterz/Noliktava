<div class="modal fade" id="addProductOrderModal" tabindex="-1" role="dialog" aria-labelledby="addProductOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Products with No Order</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeModalOrder">
                    <span aria-hidden="true">&times;</span>
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
                                <input type="checkbox" class="form-check-input" id="product_{{ $product->id }}" name="products[]" value="{{ $product->id }}">
                                <label class="form-check-label" for="product_{{ $product->id }}">{{ $product->name }}</label>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closeModalOrder">Close</button>
                    <button type="submit" class="btn btn-primary">Add Products</button>
                </div>
            </form>
        </div>
    </div>
</div>