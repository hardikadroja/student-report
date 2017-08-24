@extends('layouts.app')
@section('content')
<div class="col-lg-offset-1 col-md-offset-1 col-lg-10 col-md-10 col-sm-12 col-xs-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="pull-left" style="font-size: 22px;">
                Edit Subject
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('subjects.index') }}"> Back</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">

            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            {!! Form::model($subject, ['method' => 'PATCH','route' => ['subjects.update', $subject->id]]) !!}
            <div class="">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            {!! Form::close() !!}

        </div>
    </div>
</div>
@endsection