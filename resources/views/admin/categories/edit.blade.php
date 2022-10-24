@extends('admin.layouts.master')

@section('title')  
    Edit/Update Category
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ url('update-category/'.$category->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" value="{{ $category->name }}" name="name">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection