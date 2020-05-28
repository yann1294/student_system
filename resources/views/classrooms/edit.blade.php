@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1><i class="fa fa-home"></i>Classroom</h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($classroom, ['route' => ['classrooms.update', $classroom->classroom_id], 'method' => 'patch']) !!}

{{--                        @include('classrooms.fields')--}}

                   <div class="form-group col-md-6">
                       <span class="input-group-addon">Classroom Name</span>
                       {!! Form::text('classroom_name', null, ['class' => 'form-control']) !!}
                   </div>

                   <div class="form-group col-md-6">
                       <span class="input-group-addon">Classroom Code</span>
                       {!! Form::text('classroom_code', null, ['class' => 'form-control']) !!}
                   </div>

                   <div class="form-group col-md-6">
                       <span class="input-group-addon">Classroom Description</span>
                       {!! Form::textarea('classroom_description', null, ['class' => 'form-control', 'rows' => '2', 'cols' => '2']) !!}
                   </div>

                   <div class="form-group col-md-6">
                       <span class="input-group-addon">Status</span>
                       {!! Form::hidden('classroom_status', 0) !!}
                       {!! Form::checkbox('classroom_status', '1', null) !!} Active
                   </div>
                   <div>
                       {!! Form::submit('Update Classroom', ['class' => 'btn btn-info']) !!}
                   </div>
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
