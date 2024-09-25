<!-- resources/views/tasks/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>To-Do List</title>
</head>
<body>
    <div class="container">
        <h1>To-Do List</h1>

        <!-- Form to add a new task -->
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <input type="text" name="task" placeholder="Enter a new task" required>
            <button type="submit">Add Task</button>
        </form>

        <!-- Display existing tasks -->
        <ul class="task-list">
            @foreach ($tasks as $task)
                <li>
                    {{ $task->task }}
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" aria-label="Delete {{ $task->task }}">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
