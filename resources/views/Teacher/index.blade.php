@extends('layouts.app')


@section('content')

<div class="col-lg-offset-1 col-md-offset-1 col-lg-10 col-md-10 col-sm-12 col-xs-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="pull-left" style="font-size: 22px;">
                Teachers
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('teacher.create') }}"> Create New Teacher</a>
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
                        <th>Education</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($teacher as $key => $eachTeacher)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $eachTeacher->first_name }} {{ $eachTeacher->last_name }}</td>
                        <td>{{ $eachTeacher->education }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('teacher.edit',$eachTeacher->id) }}">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['teacher.destroy', $eachTeacher->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </table>
                {!! $teacher->render() !!}

            </div>
        </div>
    </div>
</div>
@endsection