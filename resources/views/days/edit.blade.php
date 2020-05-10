@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            <i class="fa fa-sun-o" aria-hidden="true">Days</i>
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($day, ['route' => ['days.update', $day->day_id], 'method' => 'patch']) !!}

                        @include('days.fields')
                   <div class="form-group col-sm-6">
                       <span class="input-group-addon">Days</span>
                       {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter Day Here']) !!}
                   </div>
                   <div class="modal-footer">
                       {!! Form::submit('Update Days',['class' => 'btn btn-success']) !!}
                   </div>
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
