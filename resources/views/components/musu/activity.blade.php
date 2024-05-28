<div class="flex justify-center items-center">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Activity</th>
            <th>Date</th>
            <th>Time</th>
        </tr>
        </thead>
        <tbody>
        @foreach($activities as $activity)
            <tr>
                <td>{{ $activity->name }}</td>
                <td>{{ $activity->date }}</td>
                <td>{{ $activity->time }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
