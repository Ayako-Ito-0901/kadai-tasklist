

    <h1>タスク一覧</h1>
    
    @if(count($tasks) > 0)
    
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <td>タスク</td>
                    <td>ステータス</td>
                </tr>
            </thead>
            <tbody>
                <?php $taskCount = 1 ?>
                @foreach($tasks as $task)
                
                <tr>
                    <td>{!! link_to_route('tasks.show', $taskCount, ['id' => $task->id]) !!}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->status }}</td>
                </tr>
                <?php $taskCount  += 1 ?>
                @endforeach
                {{ $tasks->links('pagination::bootstrap-4') }}
            </tbody>
            
        </table>
        
    @endif    
    
    
        {!! link_to_route('tasks.create', '新規タスクの投稿', [], ['class' => 'btn btn-success']) !!}
        
    
