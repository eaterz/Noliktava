

    <div class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 z-50" id="addProductModal" style="display: none;">

        <div class="flex items-center justify-center h-screen">
            <div class="max-w-md rounded-lg bg-white p-6 shadow-lg">
                <div class="mb-4 flex items-center justify-between">
                    <h1 class="text-2xl font-bold text-zinc-900">Add Products</h1>
                </div>
                <form action="{{ route('plaukti.add', $category->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div>
                        <div class="space-y-4">
                            @foreach($products as $product)
                            @if($product->category == 'none')
                            <label class="flex items-center">
                                <input type="hidden" id="name" name="name" value="{{ $category->name }}">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-zinc-600" id="product_{{ $product->id }}" name="products[]" value="{{ $product->id }}">
                                <span class="ml-2 text-zinc-900">{{ $product->name }}</span>
                            </label>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="mt-6 flex justify-end space-x-4">
                        <button type="button" class="text-zinc-600 hover:text-zinc-900" onclick="closeModal()">Close</button>
                        <button type="submit" class="rounded-full border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100">Add Products</button>
                    </div>
                </form>
            </div>
        </div>



        <script>
            function closeModal() {
                document.getElementById('addProductModal').style.display = 'none';
            }



            function closeModal() {
                document.getElementById('addProductModal').style.display = 'none';
            }

            function openModal() {
                document.getElementById('addProductModal').style.display = 'flex';
            }
        </script>

