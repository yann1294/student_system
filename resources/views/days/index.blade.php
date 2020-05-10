@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left"><i class="fa fa-sun-o" aria-hidden="true">Days</i></h1>
        <h1 class="pull-right">
           <a data-toggle="modal" data-target="#day-add-modal" class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus-circle">Add New Day</i></a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('days.table')
                {!! Form::open(['route' => 'days.store']) !!}

                @include('days.fields')

                {!! Form::close() !!}
            </div>
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
@endsection

