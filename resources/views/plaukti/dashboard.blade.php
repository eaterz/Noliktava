<x-musu.admin>

    <?php if(!$categories){$categories = [];} ?>




    <h1 class=" text-3xl font-bold special-h1 normal-h1 text-center">Category</h1>




    <div class="grid">
        <?php foreach ($categories as $category): ?>
        <a href="/plaukti/show/{{ $category->id }}" class="grid-item">
            <div class="image-wrapper">
                <div class="aspect-square">
                    <img src="{{ $category->image }}" alt="boots" class="image">
                </div>
                <h3 class="name">{{ $category->name }}</h3>
            </div>
        </a>
        <?php endforeach; ?>
    </div>

</x-musu.admin>
