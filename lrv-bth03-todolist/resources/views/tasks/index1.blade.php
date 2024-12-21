<a href="{{ route('tasks.create') }}" >Add a new task</a>
<div>
    @foreach ($tasks as $task)
        <h3>{{ $task->title }}</h3>
        <p>{{ $task->description }}</p>
        <p>{{ $task->completed ? 'Hoàn thành':'Chưa hoàn thành'}}</p>
    @endforeach
</div>