<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Details</title>
</head>
<body>
    <h1>Employee Details</h1>
    <hr>
    <br>
    <a href="/employees/create">Add Employee</a>
    <br>
    <br>
    <table border="1" cellspacing='0' cellpadding='10'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Deasignation</th>
                <th>Salary</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($employees as $employee)
            <tr>
                <td>{{$employee->id}}</td>
                <td>{{$employee->name}}</td>
                <td>{{$employee->email}}</td>
                <td>{{$employee->phone}}</td>
                <td>{{$employee->designation}}</td>
                <td>{{$employee->salary}}</td>
                <td>
                    <a href="/employees/{{$employee->id}}">View</a>
                    |
                    <a href="/employees/{{$employee->id}}/edit">Edit</a>
                    |
                    <form action="/employees/{{$employee->id}}" method="post" style="display: inline;">
                        @csrf
                        @method('delete')
                        <button type="submit">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>

            @empty
            <tr>
                <td colspan="7" align="center">No Data Found !</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
