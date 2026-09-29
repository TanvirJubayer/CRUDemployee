<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Employee</title>
</head>
<body>
    <h1>Add Employee</h1>
    <hr>
    <br>
    <form action="/employees" method="post">
        @csrf
        <label for="name">Name: </label>
        <input type="text" name="name">
        <br>
        <br>
        <label for="email">Email: </label>
        <input type="email" name="email">
        <br>
        <br>
        <label for="phone">Phone: </label>
        <input type="text" name="phone">
        <br>
        <br>
        <label for="designation">Designation: </label>
        <input type="text" name="designation">
        <br>
        <br>
        <label for="salary">Salary: </label>
        <input type="number" name="salary">
        <br>
        <br>
        <br>
        <button type="submit">
            Save Employee
        </button>
    </form>
</body>
</html>
