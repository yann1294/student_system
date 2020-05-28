<!-- Classroom Name Field -->
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('classroom_name', 'Classroom Name:') !!}--}}
{{--    {!! Form::text('classroom_name', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

{{--<!-- Classroom Code Field -->--}}
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('classroom_code', 'Classroom Code:') !!}--}}
{{--    {!! Form::text('classroom_code', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Classroom Description Field -->
{{--<div class="form-group col-sm-12 col-lg-12">--}}
{{--    {!! Form::label('classroom_description', 'Classroom Description:') !!}--}}
{{--    {!! Form::textarea('classroom_description', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Classroom Status Field -->
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('classroom_status', 'Classroom Status:') !!}--}}
{{--    <label class="checkbox-inline">--}}
{{--        {!! Form::hidden('classroom_status', 0) !!}--}}
{{--        {!! Form::checkbox('classroom_status', '1', null) !!}--}}
{{--    </label>--}}
{{--</div>--}}


<!-- Submit Field -->
{{--<div class="form-group col-sm-12">--}}
{{--    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}--}}
{{--    <a href="{{ route('classrooms.index') }}" class="btn btn-default">Cancel</a>--}}
{{--</div>--}}

<div class="modal fade left " id="classroom-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right modal-success" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-id-badge" aria-hidden="true">Add New Classroom</i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <br>
                <div class="form-group col-sm-12">
                    <span class="input-group-addon">Classroom Name</span>
                    {!! Form::text('classroom_name', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group col-sm-12">
                    <span class="input-group-addon">Classroom Code</span>
                    {!! Form::text('classroom_code', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group col-sm-12">
                    <span class="input-group-addon">Classroom Description</span>
                    {!! Form::textarea('classroom_description', null, ['class' => 'form-control', 'rows' => '2', 'cols' => '2']) !!}
                </div>

                <div class="form-group col-sm-12">
                    <span class="input-group-addon">Status</span>
                    {!! Form::hidden('classroom_status', 0) !!}
                    {!! Form::checkbox('classroom_status', '1', null) !!} Active
                </div>

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
            {!! Form::submit('Create Classroom', ['class' => 'btn btn-success']) !!}
            </div>
        </div>
    </div>
</div>

