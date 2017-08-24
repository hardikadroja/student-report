@extends('layouts.app')


@section('content')
<div class="col-lg-offset-1 col-md-offset-1 col-lg-10 col-md-10 col-sm-12 col-xs-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="pull-left" style="font-size: 22px;">
                Students
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('students.create') }}"> Create New Student</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">

            @if ($message = Session::get('success'))
            <div class="col-lg-12 margin-tb">
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            </div>
            @endif
            <div class="col-lg-12 margin-tb">

                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Standard</th>
                        <th>Favourite Subject</th>
                        <th>Favourite Teacher</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($students as $key => $eachStudent)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $eachStudent->first_name }} {{ $eachStudent->last_name }}</td>
                        <td>{{ $eachStudent->standard }}</td>
                        <td>{{ $eachStudent->subject_name }}</td>
                        <td>{{ $eachStudent->teacher_first_name }} {{ $eachStudent->teacher_last_name }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('students.edit',$eachStudent->id) }}">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['students.destroy', $eachStudent->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </table>
                {!! $students->render() !!}
            </div>
        </div>
    </div>
    @endsection