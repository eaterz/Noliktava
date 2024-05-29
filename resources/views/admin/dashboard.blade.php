<x-musu.admin>
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-4xl font-bold mb-8 text-center">Admin Dashboard</h1>

        <!-- Statistics Overview -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <!-- User Statistics -->
            <div class="bg-blue-500 text-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold">Users</h2>
                <p class="text-lg mt-2">Total: {{ $totalUsers }}</p>
                <p class="text-lg">New This Month: {{ $newUsers }}</p>
            </div>

            <!-- Product Statistics -->
            <div class="bg-green-500 text-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold">Products</h2>
                <p class="text-lg mt-2">Total: {{ $totalProducts }}</p>
                <p class="text-lg">New This Month: {{ $newProducts }}</p>
            </div>

            <!-- Order Statistics -->
            <div class="bg-yellow-500 text-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold">Orders</h2>
                <p class="text-lg mt-2">Total: {{ $totalOrders }}</p>
                <p class="text-lg">Pending: {{ $pendingOrders }}</p>
            </div>

            <!-- Recent Activities -->
            <div class="bg-red-500 text-white p-6 rounded-lg shadow-lg">
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
                <a href="{{ route('admin.products.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add New Product</a>
                <a href="{{ route('admin.users') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Manage Users</a>

            </div>
        </div>

    </div>
</x-musu.admin>

