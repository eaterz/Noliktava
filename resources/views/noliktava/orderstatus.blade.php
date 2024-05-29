<x-musu.layout>
    <div class="container mx-auto px-4">
        <div class="flex flex-col items-center">
            @foreach ($orders as $order)
            <div>
                <p>{{ $order->name }}</p>
                <form action="{{ route('orders.finish', $order->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-green-500 text-white p-2 rounded">Finish</button>
                </form>
            </div>
            @endforeach

        </div>
    </div>
</x-musu.layout>