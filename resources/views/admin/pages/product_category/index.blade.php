@extends('admin.layout.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">

      @if (session('msg'))
        <div class="row">
          <div class="col-md-12">
            <div class="alert alert-success" role="alert">
              {{ session('msg') }}
            </div>
          </div>
        </div>
      @endif

        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>                  
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th style="width: 40px">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($productCategories as $productCategory)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $productCategory->name }}</td>
                          <td>{{ $productCategory->status ? 'Show' : 'Hide' }}</td>
                          <td>
                            <form action="admin/product_category/delete" method="post">
                              @csrf
                              <input type="hidden" name="id" value="{{ $productCategory->id }}">
                              <button type="submit">Delete</button>
                              <a href="admin/product_category/detail" method="get">Edit</a>
                            </form>
                          </td>
                        </tr>
                      @endforeach