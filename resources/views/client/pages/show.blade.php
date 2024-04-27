@extends('client.layouts.master')

@section('content')
    <h1>Danh sách các sách có trong {{ $category->name }}</h1>

    <ul>
        @foreach ($books as $book)
            <li><a href="{{ route('book.detail', $book) }}">{{ $book->title }}</a></li>
        @endforeach
    </ul>
@endsection
