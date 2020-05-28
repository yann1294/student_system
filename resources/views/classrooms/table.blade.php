<div class="table-responsive">
    <table class="table" id="classrooms-table">
        <thead>
            <tr>
                <th>Classroom Name</th>
        <th>Classroom Code</th>
        <th>Classroom Description</th>
        <th>Classroom Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($classrooms as $classroom)
            <tr>
                <td>{{ $classroom->classroom_name }}</td>
            <td>{{ $classroom->classroom_code }}</td>
            <td>{{ $classroom->classroom_description }}</td>
            <td>{{ $classroom->classroom_status }}</td>
                <td>
                    {!! Form::open(['route' => ['classrooms.destroy', $classroom->classroom_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('classrooms.show', [$classroom->classroom_id]) }}" class='btn btn-info btn-xs'><i class="glyphicon glyphicon-eye-open">Show</i></a>

{{--                            <a data-toggle="modal" data-target="#classroom-view-modal" data-classroom-id="{{$classroom->classroom_id}}"--}}
{{--                               data-classroom_name="{{$classroom->classroom_name}}" data-classroom_code="{{$classroom->classroom_description}}"--}}
{{--                               data-status="{{$classroom->status}}" data-created_at="{{$classroom->created_at}}"--}}
{{--                               data-updated_at="{{$classroom->updated_at}}">--}}

                        <a href="{{ route('classrooms.edit', [$classroom->classroom_id]) }}" class='btn btn-warning btn-xs'><i class="glyphicon glyphicon-edit">Edit</i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash">Delete</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<style>
    input:read-only{
        border: none transparent;
    }
</style>

<div class="modal fade left " id="classroom-view-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-id-badges" aria-hidden="true">View Classroom Information</i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="classroom_id" id="classroom_id">

                <div class="form-group">
                    {!! Form::label('classroom_id', 'Class Room Id:') !!}
                    <input type="text" name="classroom_id" id="classroom_id" readonly>
                </div>

                <div class="form-group">
                    {!! Form::label('classroom_name', 'Class Room Name:') !!}
                    <input type="text" name="classroom_name" id="classroom_name" readonly>
                </div>

                <div class="form-group">
                    {!! Form::label('classroom_code', 'Class Room Code:') !!}
                    <input type="text" name="classroom_code" id="classroom_code" readonly>
                </div>

                <div class="form-group">
                    {!! Form::label('status', 'Status:') !!}
                    <input type="text" name="status" id="status" readonly>
                </div>


                <div class="form-group">
                    {!! Form::label('created_at', 'Created At:') !!}
                    <input type="text" name="created_at" id="created_at" readonly>
                </div>

                <div class="form-group">
                    {!! Form::label('updated_at', 'Updated At:') !!}
                    <input type="text" name="updated_at" id="updated_at" readonly>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
{{--                {!! Form::submit('Create Classroom',['class' => 'btn btn-success']) !!}--}}
            </div>
        </div>
    </div>
</div>

@section('scripts')
    <script>
        $('#classroom-view-modal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var classroom_name = button.data('classroom_name')
            var classroom_code = button.data('classroom_code')
            var status = button.data('status')
            var created_at = button.data('created_at')
            var updated_at = button.data('updated_at')
            var classroom_id = button.data('classroom_id')

            var modal = $(this)

            modal.find('.modal-title').text('VIEW CLASSROOM INFORMATION');
            modal.find('.modal-body #classroom_name').val('classroom_name');
            modal.find('.modal-body #classroom_code').val('classroom_code');
            modal.find('.modal-body #status').val('status');
            modal.find('.modal-body #created_at').val('created_at');
            modal.find('.modal-body #updated_at').val('updated_at');
            modal.find('.modal-body #batch_id').val('classroom_id');
        });
    </script>
@endsection
