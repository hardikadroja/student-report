@extends('layouts.app')
@section('content')
<div class="col-lg-offset-1 col-md-offset-1 col-lg-10 col-md-10 col-sm-12 col-xs-12">
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="pull-left" style="font-size: 22px;">
            Add New Student
        </div>

        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="panel-body">
        @if (count($errors) > 0)
        <div class="col-lg-12 margin-tb">

            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif

        {!! Form::open(array('route' => 'students.store','method'=>'POST')) !!}

        <div class="">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>First Name:</strong>
                    {!! Form::text('first_name', null, array('placeholder' => 'First Name','class' => 'form-control')) !!}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Last Name:</strong>
                    {!! Form::text('last_name', null, array('placeholder' => 'Last Name','class' => 'form-control')) !!}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Standard:</strong>
                    <!--  {!! Form::select('standard', ['1' => '1st Std.', 'S' => 'Small'], null, ['placeholder' => 'Select Standard']) !!} -->
                    {!! Form::selectRange('standard', 1, 7, null, ['class' => 'form-control','placeholder' => 'Select Standard']) !!}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Favourite Subject:</strong>
                    {!! Form::select('favourite_subject', $subjectsList, null, ['class' => 'form-control','placeholder' => 'Select Subjects']) !!}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Favourite Teacher:</strong>
                    {!! Form::select('favourite_teacher', $teachersList, null, ['class' => 'form-control','placeholder' => 'Select Teacher']) !!}
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