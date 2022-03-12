@extends('admin.layouts.app')

@section('content')
    
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Kitob  Qo`sish</h4>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Boash Sahifa</a></li>
            <li class="breadcrumb-item active"><a href="add-professor.html">Admin Panel</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Kitob Qo`shish</a></li>
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
                <form action="{{ route('admin.book.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="form-label">Kitob Nomi</label>
                                <input type="text" name="name" required class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label class="form-label">Avtor</label>
                            <div class="form-group">
                                <input type="text" required name="author" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="form-label">Kategoryani Tanlang</label>
                                <select class="form-select" name="id_category">
                                    @foreach($categs as $categ)
                                        <option class="form-control" value="{{ $categ->id }}">{{ $categ->category }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group d-flex">
                                <label class="form-label">Kitob yozilgan yil.</label>
                                <input type="date" class="form-control" name="made">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="form-label">Kitob rasimi(dastlabki uchtasi qabul qilinadi,jpg,jpeg,png)</label>
                                <input type="file" class="form-control" name="img">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="form-label">Kitob haqida qo`shimcha.</label>
                                <textarea class="form-control" name="description"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <input type="submit" value="Saqlash" class="form-control btn btn-primary">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection