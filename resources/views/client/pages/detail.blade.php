<!-- resources/views/client/books/show.blade.php -->

@extends('client.layouts.master')

@section('content')
    <h1>Chi tiết sách: {{ $book->title }}</h1>

    <p>Tác giả: {{ $book->author }}</p>
    <p>Nội dung: {{ $book->description }}</p>
    <p>Xuất bản ngày: {{ $book->published_at }}</p>
    <p>Hình: {{ $book->images }}</p>
    <p>Thể Loại: {{ $book->category->name }}</p>
    <p>Feature: {{ $book->stock }}</p>
    <p>Mã ISBN: {{ $book->ISBN }}</p>

    <!-- Các thông tin khác của sách -->
@endsection
