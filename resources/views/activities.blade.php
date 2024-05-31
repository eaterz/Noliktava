<x-musu.admin>
    <div class="flex flex-col items-center justify-center bg-white light:bg-zinc-900">
        <h1 class="text-2xl font-bold mb-4 text-zinc-900 light:text-zinc-100">Activity</h1>


        <div class="w-full max-w-4xl bg-white light:bg-zinc-800 shadow-md rounded-lg p-1">


            <div class="flex justify-center items-center p-2">
                <table class="min-w-full bg-white dark:bg-zinc-800">

                    <thead>
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-medium text-zinc-500 dark:text-zinc-400">User</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-zinc-500 dark:text-zinc-400">Usertype</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-zinc-500 dark:text-zinc-400">Description</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-zinc-500 dark:text-zinc-400">Timestamp</th>
                        @if(Auth::user()->usertype == 'admin')
                            <th class=" text-left text-sm font-medium text-zinc-500 dark:text-zinc-400">
                                <form action="{{ route('admin.activity.clear') }}" method="POST" onsubmit="return confirm('Are you sure you want to clear all activities?');" class="ml-4">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700">
                                        <img src="https://img.icons8.com/ios-glyphs/30/000000/delete-forever.png"/>
                                    </button>
                                </form>
                            </th>
                        @endif
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
                                @if(Auth::user()->usertype == 'admin')
                                    <td class="px-4 py-2 text-sm text-zinc-900 dark:text-zinc-100">
                                        <form action="{{ route('activities.destroy', $activity->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this activity?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-800">Delete</button>
                                        </form>
                                    </td>
                                @endif
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</x-musu.admin>
