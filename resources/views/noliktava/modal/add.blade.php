<form action="" method="post" enctype="multipart/form-data">

    @csrf
    @method('PATCH')
    <input type="hidden" name="name" value="">
    <div class="modal fade" id="ModalCreate" tabindex="-1" role="dialog" aria-labelledby="ModalCreateLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{__('Add products')}}</h4>
                </div>
                <div class="modal-body">
                    <table>
                        <tbody>
                            @foreach($products as $product)
                            @if($product->category == 'none')
                            <label for="product_{{ $product->id }}" class="cursor-pointer hover:bg-gray-100">
                                <input type="checkbox" id="product_{{ $product->id }}" name="products[]" value="{{ $product->id }}">
                                <span class="p-2">{{ $product->name }}</span>
                            </label>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>