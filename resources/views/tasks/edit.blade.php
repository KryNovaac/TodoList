<x-header>
    @slot('title', 'Rey/Edit')
</x-header>

    <div class="container mt-20 mx-auto my-8 p-6 bg-gray-100 rounded shadow-md">
        <h1 class="text-3xl font-bold mb-6 text-center">Edit Task</h1>
    
        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif
    
        <form action="{{ route('tasks.update', $task->id) }}" method="POST" class="bg-white p-6 rounded shadow-md space-y-4">
            @csrf
            @method('PUT')
            <input type="text" name="title" value="{{ $task->title }}" class="border p-2 w-full rounded" placeholder="Task title" required>
            <textarea name="description" class="border p-2 w-full rounded" placeholder="Task description">{{ $task->description }}</textarea>
            <input type="date" name="due_date" value="{{ $task->due_date }}" class="border p-2 w-full rounded" placeholder="Due date">
            <input type="time" name="due_time" value="{{ $task->due_time }}" class="border p-2 w-full rounded" placeholder="Due time">
            <div class="flex justify-end space-x-4">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition duration-300">Update Task</button>
                <a href="{{ route('tasks.index') }}" class="bg-gray-500 text-white px-6 py-2 rounded-full hover:bg-gray-600 transition duration-300">Cancel</a>
            </div>
        </form>
    </div>
    
    <x-footer />
    