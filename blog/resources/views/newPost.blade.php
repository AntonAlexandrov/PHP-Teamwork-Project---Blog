@extends('template.main')
@section('title'){{'New post' }}@endsection
@section('content')
    @include('template.partials.logbar')
    <div class="row-fluid">
        <div class="container">
            <div class="jumbotron">
                <h1 class="text-center">
                    Create new post
                </h1>
            </div>
        </div>
        <div class="container">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                {!! Form::open(['url' => 'admin/posts/newPost', 'autocomplete' => 'off']) !!}
                <fieldset>
                    <input type="text" name="title" placeholder="Post title"
                           class="form-control"/>
                    <br/>
                        <textarea name="content" id="editor" cols="30" rows="16"
                                  class="form-control" placeholder="Post content">
                        </textarea>
                    <br/>
                    <input type="text" name="tags" placeholder="Tags" class="form-control"/>
                    <br/>
                    <input type="text" name="photo" placeholder="Post photo"
                           class="form-control"/>
                    <br/>
                    <input type="submit" value="Create" class="btn btn-block btn-primary"/>
                </fieldset>
                {!! Form::close() !!}
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <br/><br/>
@endsection
@section('js')
    <script>
        $('#editor').trumbowyg();
    </script>
@stop