<x-musu.admin>

    <?php if(!$categories){$categories = [];} ?>
    <?php if(!$products){$products = [];} ?>



    <h1 class=" text-3xl font-bold special-h1 normal-h1 text-center">Category</h1>

    <div class="flex justify-center mt-8">
        <table class="table-auto w-2/3">
            <thead>
            <tr>
                <th class="px-4 py-2">Name</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr onclick="window.location.href='/plaukti/edit/{{$category->id}}'">
                    <td class="border px-4 py-2">{{ $category->name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-musu.admin>
