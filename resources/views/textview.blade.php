@foreach($$receipt_texts as $$receipt_text)
    <h3>{{ $receipt_text->project_name }}</h3>
    <p>{{ $receipt_text->project_code}}</p>
    <p>{{ $receipt_text->project_text }}</p>
    <p>
        <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info">View Task</a>
        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit Task</a>
    </p>
    <hr>
@endforeach