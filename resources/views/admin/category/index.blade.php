@extends('admin.layouts.master')
@section('title', 'Danh sách các thể loại sách')
@section('title-page', 'Danh sách thể loại')
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
                    <th>Mã thể loại</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th style="width: 150px">Action</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Categories as $productCategory)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $productCategory->id }}</td>
                        <td>{{ $productCategory->name }}</td>
                        <td>{!! $productCategory->status ? '<span class="label label-success">Still</span>' : '<span class="label label-danger">Sold Out</span>' !!}</td>
                        <td>{{$productCategory->created_at}}</td>
                        <td>{{$productCategory->updated_at}}</td>
                        <td>
                            <form action="{{ route('category.destroy', $productCategory) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button style="margin-bottom: 10px" onclick="return confirm('Are you sure ?')"
                                    class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                        <td> <a href="
                            {{ route('category.edit', $productCategory) }}
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
