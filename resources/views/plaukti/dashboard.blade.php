<x-musu.admin>

    <?php if(!$categories){$categories = [];} ?>




<div class="bg-gray-100 h-full font-[sans-serif]">
  <div class="mx-auto p-4 sm:max-w-full lg:max-w-7xl">
    <h2 class="mb-12 text-4xl font-extrabold text-gray-800">NOLIKTAVA.LV</h2>




    <div class="grid">
        <?php foreach ($categories as $category): ?>
        <a href="/plaukti/show/{{ $category->id }}" class="grid-item">
        <div class="relative cursor-pointer rounded-2xl bg-white p-5 transition-all hover:-translate-y-2">
        <div class="aspect-w-16 aspect-h-8 mx-auto mb-4 h-[210px] w-11/12 overflow-hidden md:mb-2">
          <img src= "{{$category->image}}" alt="Product 3" class="h-full w-full object-contain" />
        </div>
        <div>
          <h3 class="text-lg font-extrabold text-gray-800">{{$category->name}}</h3>
        </div>
      </div>
        </a>
        <?php endforeach; ?>
    </div>
    </div>
    </div>












</x-musu.admin>
















