@extends('admin.layouts.master')

@section('title')  
    Edit/Update Product
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ url('update-product/'.$product->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="form-select" name="cate_id">
                            <option value="">{{ $product->category->name }}</option>
                        </select>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" value="{{ $product->name }}" name="name">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Description</label>
                        <textarea type="text" class="form-control" name="description">{{ $product->description }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Price</label>
                        <input type="text" class="form-control" value="{{ $product->price }}" name="price">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Quantity</label>
                        <input type="text" class="form-control" value="{{ $product->qty }}" name="qty">
                    </div>
                    @if ($product->image)
                        <img src="{{ asset('template/admin/img/upload/product/'.$product->image) }}" alt="">
                    @endif
                    <div class="col-md-12 mb-3">
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