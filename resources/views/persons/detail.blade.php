@extends('layout.parent')

@section('title','Chi tiết bài viết')
@section('main')
    <h1>{{ $person->title }}</h1>
    <p>{{ $person->content }}</p>
    <p>{{ $person->author }}</p>
    <a href="{{ route('persons.index') }}">Quay lai Trang Chủ</a>


@endsection
