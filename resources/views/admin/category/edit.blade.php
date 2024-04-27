@extends('admin.layouts.master')
@section('title-page', 'Chỉnh sửa thể loại')
@section('title', 'Chỉnh sửa thể loại sách')
@section('content')


    <!-- Content Wrapper. Contains page content -->
    {{-- <div class="content-wrapper"> --}}
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <!-- general form elements disabled -->
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">General Elements</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form role="form" method="POST" action=" {{route('category.update', $category)}}">
                                    @method('PUT')
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input value="{{ $category->name }}" type="text" name="name"
                                                class="form-control" id="name" placeholder="Enter name">
                                            @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="slug">Slug</label>
                                            <input value="{{ $category->slug }}" type="text" name="slug"
                                                class="form-control" id="slug" placeholder="Enter slug">
                                            @error('slug')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select name="status" class="custom-select" id="status">
                                                <option value="">---Please Select---</option>
                                                <option {{ old('status') == '1' ? 'selected' : '' }} value="1">Still
                                                </option>
                                                <option {{ old('status') == '0' ? 'selected' : '' }} value="0">Sold Out
                                                </option>
                                            </select>
                                            @error('status')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    @csrf
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Create</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    {{-- </div> --}}

@endsection
