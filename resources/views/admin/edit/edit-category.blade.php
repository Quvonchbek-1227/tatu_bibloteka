@extends('admin.layouts.app')


@section('title')
	Kategoriyani tahrirlash
@endsection



@section('content')
	<div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Kategoriyani Taxrirlash</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Boash Sahifa</a></li>
                <li class="breadcrumb-item active"><a href="add-professor.html">Kategoriya</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Kategoriyani Taxrirlash</a></li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12 col-xxl-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Malumotlar To`ldirish</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('category.update',['category' => $category->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Kategorya</label>
                                    <input type="text" value="{{ $category->category }}" name="category" required class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Kategoriya haqida malumot</label>
                                    <textarea name="description" class="form-control @error('title') is-invalid @enderror">{{ $category->description }}</textarea>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <button type="submit" class="btn btn-primary">Saqlash</button>
                            </div>
                        </div>
                    </form>
                    @if ($errors->any())
    					<div class="alert alert-danger">
	        				<ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
						    </ul>
					    </div>
					@endif
                </div>
            </div>
        </div>
    </div>
@endsection


