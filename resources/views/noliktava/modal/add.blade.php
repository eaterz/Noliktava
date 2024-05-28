<div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Products</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="space-y-4" action="{{ route('noliktava.ordercreate') }}" method="POST" enctype="multipart/form-data">

                @csrf
                @method('PATCH')
                <input type="hidden" name="name" value="">

                <div class="modal fade" id="ModalCreate" tabindex="-1" role="dialog" aria-labelledby="ModalCreateLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">{{__('Place an Order')}}</h4>
                            </div>
                            <div class="modal-body">
                                <table>
                                    <div class="form-field mb-4">
                                        @foreach($products as $product)
                                        <div class="form-check">
                                            <input type="hidden" id="name" name="name" value="{{ $product->name }}">
                                            <input type="checkbox" class="form-check-input" id="product_{{ $product->id }}" name="products[]" value="{{ $product->id }}">
                                            <label class="form-check-label" for="product_{{ $product->id }}">{{ $product->name }}</label>
                                        </div>

                                        @endforeach
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>