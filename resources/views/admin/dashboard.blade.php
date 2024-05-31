<x-musu.admin>
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-4xl font-bold mb-8 text-center">Admin Dashboard</h1>

        <!-- Statistics Overview -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <!-- User Statistics -->
            <div class="first text-white uppercase rounded-lg shadow-lg px-10 py-3 w-full">
                <h2 class="text-2xl font-semibold">Users</h2>
                <p class="text-lg mt-2">Total: {{ $totalUsers }}</p>
                <p class="text-lg">New This Month: {{ $newUsers }}</p>
            </div>

            <!-- Product Statistics -->
            <div class="second text-white uppercase rounded-lg shadow-lg px-10 py-3 w-full">
                <h2 class="text-2xl font-semibold">Products</h2>
                <p class="text-lg mt-2">Total: {{ $totalProducts }}</p>
                <p class="text-lg">New This Month: {{ $newProducts }}</p>
            </div>

            <!-- Order Statistics -->
            <div class="three text-white uppercase rounded-lg shadow-lg px-10 py-3 w-full">
                <h2 class="text-2xl font-semibold">Orders</h2>
                <p class="text-lg mt-2">Total: {{ $totalOrders }}</p>
                <p class="text-lg">Pending: {{ $pendingOrders }}</p>
            </div>

            <!-- Recent Activities -->
            <div class="four text-white uppercase rounded-lg shadow-lg px-10 py-3 w-full">
                <h2 class="text-2xl font-semibold">Recent Activities</h2>
                <ul class="mt-2">
                    @foreach($recentActivities as $activity)
                        <li class="text-lg">{{ $activity->description }} - {{ $activity->created_at->diffForHumans() }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="bg-white p-6 rounded-lg shadow-lg mb-8">
            <h2 class="text-2xl font-semibold mb-4">Quick Actions</h2>
            <div class="flex space-x-4">
                <a href="{{ route('admin.products.create') }}" class="three text-white uppercase rounded-lg shadow-lg px-10 py-3 ">Add New Product</a>
                <a href="{{ route('admin.users') }}" class="second text-white uppercase rounded-lg shadow-lg px-10 py-3 ">Manage Users</a>

            </div>
        </div>

    </div>
</x-musu.admin>

