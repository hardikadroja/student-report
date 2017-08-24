@extends('layouts.app')
@section('content')
<div class="col-lg-offset-1 col-md-offset-1 col-lg-10 col-md-10 col-sm-12 col-xs-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="pull-left" style="font-size: 22px;">
                Subjects
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('subjects.create') }}"> Create New Subject</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">

            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            <div class="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <table class="table table-bordered" >
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($subject as $key => $eachSubject)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $eachSubject->name }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('subjects.edit',$eachSubject->id) }}"><i class="fa fa-pencil"></i></a>
                                {!! Form::open(['method' => 'DELETE','route' => ['subjects.destroy', $eachSubject->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger fa fa-trace']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            {!! $subject->render() !!}
        </div>
    </div>
</div>
@endsection