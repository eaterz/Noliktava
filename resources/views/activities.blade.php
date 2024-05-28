<x-musu.admin>
<div class="flex flex-col items-center justify-center bg-white light:bg-zinc-900">
    <h1 class="text-2xl font-bold mb-4 text-zinc-900 light:text-zinc-100">Activity</h1>
    <div class="w-full max-w-4xl bg-white light:bg-zinc-800 shadow-md rounded-lg ">

    <div class="flex justify-center items-center p-2">
        <table class="min-w-full bg-white dark:bg-zinc-800 ">

        <thead>
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-medium text-zinc-500 dark:text-zinc-400">User</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-zinc-500 dark:text-zinc-400">Action</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-zinc-500 dark:text-zinc-400">Description</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-zinc-500 dark:text-zinc-400">Timestamp</th>
                    </tr>
        </thead>

            <tbody>
            @foreach($activities as $activity)
                <tr class="border-t border-zinc-200 dark:border-zinc-700">
                    
                    <td class="px-4 py-2 text-sm text-zinc-900 dark:text-zinc-100">{{ $activity->user->name }}</td>
                    <td class="px-4 py-2 text-sm text-zinc-900 dark:text-zinc-100">{{ $activity->user->usertype }}</td>
                    <td class="px-4 py-2 text-sm text-zinc-900 dark:text-zinc-100">{{ $activity->description }}</td>
                    <td class="px-4 py-2 text-sm text-zinc-900 dark:text-zinc-100">{{ $activity->created_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-musu.admin>




