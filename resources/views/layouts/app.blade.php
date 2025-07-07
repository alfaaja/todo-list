<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To-Do List App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('tasks.index') }}">To-Do List</a>
            <a class="btn btn-primary" href="{{ route('tasks.create') }}">Add Task</a>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>