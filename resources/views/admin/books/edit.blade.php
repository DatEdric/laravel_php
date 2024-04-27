@extends('admin.layouts.master')
@section('title', 'Chỉnh sửa sách')
@section('title-page', ' Chỉnh sửa thông tin sách')
@section('content')

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

                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">General Elements</h3>
                        </div>
                        <div class="card-body">
                            <form role="form" action="{{ route('book.update', $Book) }}" method="POST">
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input value="{{ $Book->title }}" type="text" name="title"
                                            class="form-control" id="title" placeholder="Enter title">
                                    </div>
                                    <div class="form-group">
                                        <label>Thể loại</label>
                                        <select class="form-control @error('category_id') isinvalid @enderror "
                                            name="category_id" required>
                                            <option value="">Chọn thể loại</option>
                                            @foreach ($Categories as $Category)
                                                <option value="{{ $Category->id }}">{{ $Category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Nhà Xuất Bản</label>
                                        <select class="form-control @error('publisher_id') isinvalid @enderror "
                                            name="publisher_id" required>
                                            <option value="">Chọn nhà xuất bản</option>
                                            @foreach ($Categories as $Category)
                                                <option value="{{ $Category->id }}">{{ $Category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('publisher_id')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="ISBN">ISBN</label>
                                        <input value="{{ $Book->ISBN }}" type="text" name="ISBN"
                                            class="form-control" id="ISBN" placeholder="Enter ISBN">
                                    </div>
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input value="{{ $Book->slug }}" type="text" name="slug"
                                            class="form-control" id="slug" placeholder="Enter slug">
                                    </div>
                                    <div class="form-group">
                                        <label for="published_at">Published at</label>
                                        <input value="{{ $Book->published_at }}" type="date" name="published_at"
                                            class="form-control" id="published_at">
                                    </div>
                                    <div class="form-group">
                                        <label for="author">Auther</label>
                                        <input value="{{ $Book->author }}" type="text" name="author"
                                            class="form-control" id="author" placeholder="Enter author">
                                    </div>
                                    <div class="form-group">
                                        <label for="quantity">Quantity</label>
                                        <input value="{{ old('quantity') }}" type="number" name="quantity"
                                            class="form-control" id="quantity" placeholder="Enter quantity">
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select name="status" class="custom-select" id="status">
                                                <option value="">---Please Select---</option>
                                                <option {{ old('status') == '1' ? 'selected' : '' }} value="1">Still
                                                </option>
                                                <option {{ old('status') == '0' ? 'selected' : '' }} value="0">Sold
                                                    Out
                                                </option>
                                            </select>
                                            @error('status')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Stock</label>
                                            <select name="status" class="custom-select" id="status">
                                                <option value="">---Please Select---</option>
                                                <option {{ old('status') == '1' ? 'selected' : '' }} value="1">New
                                                    book</option>
                                                <option {{ old('status') == '0' ? 'selected' : '' }} value="0">Old
                                                    Book</option>
                                            </select>
                                            @error('status')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="images">Image</label>
                                        <input value="{{ old('images') }}" type="file" name="images"
                                            class="form-control" id="images" multiple>
                                    </div>
                                    <div class="form-group">
                                        <label for="album">Album</label>
                                        <input value="{{ old('album') }}" type="file" name="album[]"
                                            class="form-control" id="album" multiple>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" name="description" id="description" rows="8" style="resize:none"
                                            placeholder="mô tả sản phẩm">{{ old('description') }}</textarea>
                                    </div>
                                </div>
                        </div>

                    </div>
                    @csrf
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

@endsection
