@extends('console.blog.common')

@section('content')

<!-- Tokenfield CSS -->
<link href="{{ asset('/plugin/tags/css/bootstrap-tokenfield.css') }}" type="text/css" rel="stylesheet">
<link href="{{ asset('/plugin/tags/css/jquery-ui.css ') }}" type="text/css" rel="stylesheet">

        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">编辑文章</div>

                @if ($errors->has('error'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <strong>Error!</strong>
                    {{ $errors->first('error', ':message') }}
                    <br />
                    请联系开发者！
                </div>
                @endif

                <div class="panel-body">
                    {!! Form::model($article, ['route' => ['console.article.update', $article->id], 'method' => 'put','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">标题</label>
                            <div class="col-sm-7">
                                {!! Form::text('title', $article->title, ['class' => 'form-control']) !!}
                                <font color="red">{{ $errors->first('title') }}</font>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">所属分类</label>
                            <div class="col-sm-7">
                                {!! Form::select('article_type_id', $type_tree , null , ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">内容</label>
                            <div class="col-sm-10">
                                    {{--@include('editor::head')--}}
                                    {!! Form::textarea('body', $article->body, ['class' => 'form-control','id'=>'myEditor']) !!}
                                <font color="red">{{ $errors->first('content') }}</font>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                {!! Form::submit('修改', ['class' => 'btn btn-success']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                </div>
            </div>
        </div>


<script type="text/javascript" src="{{ asset('/plugin/tags/jquery-ui.js ') }}"></script>
<script type="text/javascript" src="{{ asset('/plugin/tags/bootstrap-tokenfield.js ') }}" charset="UTF-8"></script>

@endsection
