<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>name</th>
            <th>stadium</th>
            <th>numMembers</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach($teams as $team)
            <tr>
                <td>{{ $team->name }}</td>
                <td>{{ $team->stadium }}</td>
                <td>{{ $team->numMembers }}</td>
                <td>
                    <a href="">
                        <button class="btn btn-outline-primary">Edit team</button>
                    </a>
                </td>
                <td>
                    <a href="">
                        <button class="btn btn-outline-danger">Delete team</button>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>