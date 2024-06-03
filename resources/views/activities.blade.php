<x-musu.admin>
    <div class="bg-gray-100 h-full font-[sans-serif]">
        <div class="flex flex-col items-center justify-center ">
            <h1 class="text-2xl font-bold mb-4 text-zinc-900 dark:text-zinc-100">Activity</h1>

            <div class="w-full max-w-4xl bg-white dark:bg-zinc-800 shadow-md rounded-lg p-1">
                <div class="flex justify-center items-center p-2">
                    <table class="min-w-full bg-white dark:bg-zinc-800">
                        <thead>
                        <tr>
                            <th class="px-4 py-2 text-left text-sm font-medium text-zinc-500 dark:text-zinc-400">User</th>
                            <th class="px-4 py-2 text-left text-sm font-medium text-zinc-500 dark:text-zinc-400">Usertype</th>
                            <th class="px-4 py-2 text-left text-sm font-medium text-zinc-500 dark:text-zinc-400">Description</th>
                            <th class="px-4 py-2 text-left text-sm font-medium text-zinc-500 dark:text-zinc-400">Timestamp</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($activities as $activity)
                            @if(Auth::user()->usertype == 'admin' || Auth::user()->id == $activity->user->id)
                                <tr class="border-t border-zinc-200 dark:border-zinc-700">
                                    <td class="px-4 py-2 text-sm text-zinc-900 dark:text-zinc-100">{{ $activity->user->name }}</td>
                                    <td class="px-4 py-2 text-sm text-zinc-900 dark:text-zinc-100">{{ $activity->user->usertype }}</td>
                                    <td class="px-4 py-2 text-sm text-zinc-900 dark:text-zinc-100">{{ $activity->description }}</td>
                                    <td class="px-4 py-2 text-sm text-zinc-900 dark:text-zinc-100">{{ $activity->created_at }}</td>
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-musu.admin>
