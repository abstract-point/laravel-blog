@extends('layouts.app')

@section('header')
    <h1>Создать новую статью</h1>
@endsection

@section('content')

    {{ Form::model($article, ['route' =>'articles.store', 'method' => 'post']) }}
        @include('article.form')
        {{ Form::submit('Сохранить') }}
    {{ Form::close() }}
@endsection
