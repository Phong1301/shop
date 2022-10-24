@extends('admin.layouts.master')

@section('title')  
    Add Category
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('insert-category') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection