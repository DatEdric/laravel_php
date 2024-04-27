@extends('admin.layouts.master')
@section('title', 'Danh sách các sách hiện tại')
@section('title-page', 'Sách hiện có')
@section('content')
    {{-- <div class="content-wrapper"> --}}
    <div class="card-body">
        @if (session('msg'))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success" role="alert">
                        {{ session('msg') }}
                    </div>
                </div>
            </div>
        @endif

        <!-- Main content -->
        <a href="{{ route('book.trash')}}" class="btn btn-primary m-2"><i class="fa fa-trash"></i> Restore Book</a>
        <table class="table table-bordered" id="table-product-category">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>title</th>
                    <th>author</th>
                    <th>ISBN</th>
                    <th>Category</th>
                    <th>publisher</th>
                    <th>published_at</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                    <th style="width: 150px">Action</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Books as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->author }}</td>
                        <td>{{ $product->ISBN }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>{{ $product->publisher->name }}</td>
                        <td>{{ $product->published_at }}</td>
                        <td>{{$product->created_at}}</td>
                        <td>{{$product->updated_at}}</td>
                        <td>
                            <form action="{{ route('book.destroy', $product) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button style="margin-bottom: 10px" onclick="return confirm('Are you sure ?')"
                                    class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                        <td> <a href="
                            {{ route('book.edit', $product) }}
                            "
                                class="btn btn-success">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <!-- /.content -->
    {{-- </div> --}}

@endsection
