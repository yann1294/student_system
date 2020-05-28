@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left"><i class="fa fa-home"></i>Classrooms</h1>
        <h1 class="pull-right">
           <a class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#classroom-add-modal"><i class="fa fa-plus-circle">Add New Classroom</i></a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                {!! Form::open(['route' => 'classrooms.store']) !!}

                @include('classrooms.fields')

                {!! Form::close() !!}
                    @include('classrooms.table')
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
@endsection

