@extends('admin.layouts.app')

@section('content')
    
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Bosh Sahifaga Slayd Qo`shish</h4>
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

<div class="row">
    <div class="col-xl-12 col-xxl-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Malumotlar To`ldirish</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.slide.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" required class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="form-label">Slide Uchun Rasim</label>
                                <input type="file" name="img" required class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 d-none">
                            <div class="form-group">
                                <input type="number" required value="{{ Auth::user()->id }}" name="user_id" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group d-flex">
                                <label class="form-label">Text Kiriting(Iloji boricha qisqa)</label>
                                <textarea name="text" required id="summernote" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        {{-- <div class="col-lg-12 col-md-12 col-sm-12 d-none">
                            <div class="form-group">
                                <label class="form-label">Text Kiriting(Iloji boricha qisqa)</label>
                                <div class="summernote"></div>
                            </div>
                        </div> --}}
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <button type="submit" class="btn btn-primary">Saqlash</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection