<x-musu.admin>
    <h1 class=" text-3xl font-bold special-h1 normal-h1 text-center">Activity</h1>
    <div class="flex justify-center items-center p-5">
        <table class="rounded-lg bg-gray-200 ">
            <tbody>
            @foreach($activities as $activity)
                <tr>
                    <td class="px-4 py-2 ">{{ $activity->user->name }}</td>
                    <td class="px-4 py-2 ">{{ $activity->user->usertype }}</td>
                    <td class="px-4 py-2 ">{{ $activity->description }}</td>
                    <td class="px-4 py-2 ">{{ $activity->created_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-musu.admin>
