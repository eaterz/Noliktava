<x-musu.admin>

    <div class="create-task mt-6 flex justify-center items-center ">
        <a href="ordercreate" data-toggle="modal" data-target="#ModalCreate" class="create-button bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105">Add</a>
    </div>

    <div class="flex justify-center">
        <table class="table-auto w-2/3">
            <thead>
                <tr>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Created</th>
                    <th class="px-4 py-2">Deadline</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Status change</th> <!-- Pievieno jaunu kolonnu darbībām -->
                </tr>
            </thead>
            <tbody>
                @foreach($order as $orders)
                <tr class="cursor-pointer">
                    <td class="border px-4 py-2">
                        <a href="{{ route('noliktava.show', $orders->id) }}">
                            {{ $orders->name }}
                        </a>
                    </td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('noliktava.show', $orders->id) }}">
                            {{ $orders->created }}
                        </a>
                    </td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('noliktava.show', $orders->id) }}">
                            {{ $orders->deadline }}
                        </a>
                    </td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('noliktava.show', $orders->id) }}">
                            {{ $orders->status }}
                        </a>
                    </td>
                    <td class="border px-4 py-2">
                        <form action="{{ route('noliktava.orderstatus', $orders->id) }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded">Finish</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>



</x-musu.admin>