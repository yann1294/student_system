<div class="table-responsive">
    <table class="table" id="assigns-table">
        <thead>
            <tr>
                <th>Course Id</th>
        <th>Level Id</th>
        <th>Shift Id</th>
        <th>Classroom Id</th>
        <th>Batch Id</th>
        <th>Time Id</th>
        <th>Semester Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($assigns as $assign)
            <tr>
                <td>{{ $assign->course_id }}</td>
            <td>{{ $assign->level_id }}</td>
            <td>{{ $assign->shift_id }}</td>
            <td>{{ $assign->classroom_id }}</td>
            <td>{{ $assign->batch_id }}</td>
            <td>{{ $assign->time_id }}</td>
            <td>{{ $assign->semester_id }}</td>
                <td>
                    {!! Form::open(['route' => ['assigns.destroy', $assign->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('assigns.show', [$assign->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('assigns.edit', [$assign->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
