@extends('admin.layouts.master')
@section('title', 'Danh sách các mục sách đã xóa')
@section('title-page', 'Danh sách đã xóa')
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

        <table class="table table-bordered" id="table-product-category">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>title</th>
                    <th>author</th>
                    <th>ISBN</th>
                    <th>Category</th>
                    <th>publishhed_at</th>
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
                        <td>{{ $product->published_at }}</td>
                        <td>{{ $product->created_at }}</td>
                        <td>{{ $product->updated_at }}</td>
                        <td> <a href="
                            {{ route('book.restore', $product->id) }}
                            "
                                class="btn btn-success">Khôi Phục</a></td>
                        <td> <a href="
                                    {{ route('book.force-delete', $product->id) }}
                                    "
                                class="btn btn-success" onclick="return confirm('are you sure ?')">Xóa vĩnh viễn</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <!-- /.content -->
    {{-- </div> --}}

@endsection
