@extends('admin.layouts.master')

@section('title')  
    Add Product
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('insert-product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="form-select" name="cate_id">
                            <option value="">Select a Category</option>
                            @foreach ($category as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>                            
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Description</label>
                        <textarea type="text" class="form-control" name="description"></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Price</label>
                        <input type="text" class="form-control" name="price">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Quantity</label>
                        <input type="text" class="form-control" name="qty">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection