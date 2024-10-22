<x-header>
    @slot('title', 'Rey/ToDo')
</x-header>

<div class="container mt-20 mx-auto my-8 p-6 bg-gray-100 rounded shadow-md">
    <h1 class="text-3xl font-bold mb-6 text-center">To-Do List</h1>

    @if (session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-6">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('tasks.store') }}" method="POST" class="flex flex-col space-y-4 bg-white p-6 rounded shadow mb-6">
        @csrf
        <input type="text" name="title" placeholder="Task title" class="border p-2 w-full rounded" required>
        <textarea name="description" placeholder="Task description" class="border p-2 w-full rounded" rows="3"></textarea>
        <div class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-4">
            <input type="date" name="due_date" class="border p-2 w-full md:w-1/2 rounded" placeholder="Due date">
            <input type="time" name="due_time" class="border p-2 w-full md:w-1/2 rounded" placeholder="Due time">
        </div>
        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition duration-300">Add Task</button>
    </form>

    <ul class="space-y-4">
        @foreach ($tasks as $task)
            <li class="bg-white shadow rounded p-4 flex justify-between items-center">
                <div>
                    <h3 class="font-semibold text-lg">{{ $task->title }}</h3>
                    <p class="text-gray-600">{{ $task->description }}</p>
                    <p class="text-sm text-gray-500">Due: {{ $task->due_date ? $task->due_date : 'No date' }} at {{ $task->due_time ? $task->due_time : 'No time' }}</p>
                </div>
                <div class="flex items-center space-x-2">
                    <a href="{{ route('tasks.edit', $task->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600 transition duration-300">Edit</a>
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition duration-300" onclick="return confirm('Are you sure you want to delete this task?')">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</div>

<x-footer />
