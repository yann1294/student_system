@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            <i class="fa fa-level-up">Level</i>
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($level, ['route' => ['levels.update', $level->level_id], 'method' => 'patch']) !!}

                   <div class="form-group col-sm-6">
                       {!! Form::label('level', 'Level:') !!}
                       {!! Form::text('level', null, ['class' => 'form-control']) !!}
                   </div>

                   <!-- Course Id Field -->
                   <div class="form-group col-sm-6">
                       {!! Form::label('course_id', 'Course Id:') !!}
                       {!! Form::number('course_id', null, ['class' => 'form-control']) !!}
                   </div>

                   <!-- Level Description Field -->
                   <div class="form-group col-sm-12 col-lg-12">
                       {!! Form::label('level_description', 'Level Description:') !!}
                       {!! Form::textarea('level_description', null, ['class' => 'form-control']) !!}
                   </div>

                   <!-- Submit Field -->
                   {{--<div class="form-group col-sm-12">--}}
                   {{--    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}--}}
                   {{--    <a href="{{ route('levels.index') }}" class="btn btn-default">Cancel</a>--}}
                   {{--</div>--}}
               </div>
               <div class="modal-footer">
                   {!! Form::submit('Update Level', ['class' => 'btn btn-success']) !!}
               </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
