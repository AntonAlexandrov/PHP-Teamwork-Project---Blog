@extends('template.main')
@section('title'){{'Welcome' . \Auth::user()->nickname}}@endsection
@section('content')
    @include('template.partials.logbar')
    <div class="row-fluid">
        <div class="container" id="admin">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Date</th>
                    <th class="foo">Actions</th>
                </thead>
                <tbody>
                    @foreach($posts as $x)
                        <tr>
                            <td>{{$x->title}}</td>
                            <td>{{$x->slug}}</td>
                            <td>{{$x->created_at}}</td>
                            <td>
                                <div class="btn-group-justified">
                                    <a class="btn btn-warning"
                                       href="admin/posts/{{$x->id}}/edit"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-danger"
                                       href="admin/posts/{{$x->id}}/delete"><i class="fa
                                       fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop