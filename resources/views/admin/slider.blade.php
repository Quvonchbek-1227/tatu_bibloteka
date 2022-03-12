@extends('admin.layouts.app')

@section('content')

<div class="row">
        
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Bosh Sahifadagi Slaydlar Ro`yhati!</h4>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Boash Sahifa</a></li>
            <li class="breadcrumb-item active"><a href="add-professor.html">Professors</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Professor</a></li>
        </ol>
    </div>
</div>
    @foreach ($slides as $item)
        <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
            <div class="card mb-3">
                <img class="card-img-top" height="300px" src="{{ $item->img }}" alt="Card image cap">
                <div class="card-header">
                    <h5 class="card-title">{{ $item->title }}</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $item->text }}</p>
                    
                    <div class="d-flex justify-content-around">
                        <a class="btn btn-danger" href="{{ route('admin.slide.delete',['id' => $item->id]) }}">Delete</a>
                        <a class="btn btn-primary" href="{{ route('admin.slide.edit',['id' => $item->id]) }}">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection