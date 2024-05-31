<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Table with Fixed Cell Width</title>
<style>
    .table-auto td {
        max-width: 200px; /* Adjust the max-width as needed */
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>
</head>
<body>

<x-musu.admin>

    <div class="create-task mt-6 flex justify-center items-center">
        <a href="ordercreate" data-toggle="modal" data-target="#ModalCreate" class="create-button bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105">Add</a>
    </div>

    <div class="flex justify-center mt-8">
        <table class="table-auto w-2/3 border-collapse border-2 border-indigo-600 shadow-lg transform hover:scale-105 transition duration-300 ease-in-out rounded-lg ">
            <thead class="bg-indigo-600 text-white">
                <tr>
                    <th class="px-4 py-2 border border-indigo-700">Name</th>
                    <th class="px-4 py-2 border border-indigo-700">Created</th>
                    <th class="px-4 py-2 border border-indigo-700">Deadline</th>
                    <th class="px-4 py-2 border border-indigo-700">Status</th>
                    <th class="px-4 py-2 border border-indigo-700">Status change</th>
                </tr>
            </thead>
            <tbody>
                @foreach($order as $orders)
                <tr class="bg-white hover:bg-gray-100 transition duration-200 ease-in-out transform hover:scale-105">
                    <td class="border px-4 py-2 border-indigo-600">
                        <a href="{{ route('noliktava.show', $orders->id) }}" class="text-indigo-600 hover:text-indigo-900 transition duration-200">
                            {{ $orders->name }}
                        </a>
                    </td>
                    <td class="border px-4 py-2 border-indigo-600">
                        <a href="{{ route('noliktava.show', $orders->id) }}" class="text-indigo-600 hover:text-indigo-900 transition duration-200">
                            {{ $orders->created }}
                        </a>
                    </td>
                    <td class="border px-4 py-2 border-indigo-600">
                        <a href="{{ route('noliktava.show', $orders->id) }}" class="text-indigo-600 hover:text-indigo-900 transition duration-200">
                            {{ $orders->deadline }}
                        </a>
                    </td>
                    <td class="border px-4 py-2 border-indigo-600">
                        <a href="{{ route('noliktava.show', $orders->id) }}" class="text-indigo-600 hover:text-indigo-900 transition duration-200">
                            {{ $orders->status }}
                        </a>
                    </td>
                    <td class="border px-4 py-2 border-indigo-600">
                        <form action="{{ route('noliktava.orderstatus', $orders->id) }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:from-green-600 hover:via-green-700 hover:to-green-800 text-white font-bold py-2 px-4 rounded-full shadow-lg transform hover:scale-125 transition duration-500 ease-in-out hover:rotate-6 hover:skew-y-3">Finish</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-musu.admin>

</body>
</html>
