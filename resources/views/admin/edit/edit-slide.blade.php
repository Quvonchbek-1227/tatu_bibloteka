@extends('admin.layouts.app')

@section('title')
    Slaydni Taxrirlash!    
@endsection

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
                    <form action="{{ route('admin.slide.update',['id' => $slide->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Title</label>
                                    <input type="text" value="{{ $slide->title }}" name="title" required class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Slide Uchun Rasim</label>
                                    <input type="file"  value="{{ $slide->img }}" name="img" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 d-none">
                                <div class="form-group">
                                    <input type="number" required value="{{ Auth::user()->id }}" name="user_id" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group d-flex flex-column">
                                    <label class="form-label">Text Kiriting(Iloji boricha qisqa)</label>
                                    <textarea name="text" required cols="30" rows="10">{{ $slide->text }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="form-group d-flex flex-column">
                                    <label class="form-label">Joriy Surat</label>
                                    <img src="{{ $slide->img }}" class="img-fluid" height="200px" width="220px" alt="">
                                </div>
                            </div>

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