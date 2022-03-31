@extends('admin.layouts.app')

@section('content')					
    
    <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="text-center p-3 overlay-box" style="background-image: url(images/big/img1.jpg);">
                                        <div class="profile-photo">
                                            <img src="images/profile/profile.png" width="100" class="img-fluid rounded-circle" alt="">
                                        </div>
                                        <h3 class="mt-3 mb-1 text-white">{{ Auth::user()->name }}</h3>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Name</span> <strong class="text-muted">{{ $user->name }}</strong></li>
                                        <li class="list-group-item d-flex justify-content-between"><span class="mb-0">E-mail</span> <strong class="text-muted">{{ $user->email }}</strong></li>
                                        <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Role</span> <strong class="text-muted" data-container="body" data-toggle="popover" data-placement="top" data-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor." title="{{ $role->role_desc }}">{{ $role->role }}</strong></li>
                                    </ul>
                                    <div class="d-flex justify-content-between">
                                        <div class="card-footer text-center border-0 mt-0">                             
                                        <a href="#" class="btn btn-primary btn-rounded px-4 open-edit-user">Tahrirlash</a>
                                        </div>
                                        <div class="card-footer text-center border-0 mt-0">                             
                                            <a href="#" class="btn btn-primary btn-rounded px-4 open-add-role">Role Qo`shish</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 edit-user" style="display: none;">
                                <div class="card">
                                    <div class="card-body">
                                        <form class="form" method="POST" action="{{ route('update-user',['id'=>Auth::user()->id]) }}">
                                            @method('post')
                                            @csrf
                                            <div class="form-group">
                                                <label class="form-label">Ism</label>
                                                <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Email</label>
                                                <input type="text" class="form-control" name="email" value = "{{ $user->email }}">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Eski Parol(agar bo`sh qolsa parol eski holatda qoladi)</label>
                                                <input type="text" class="form-control" name="old_pass">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Yangi Parol</label>
                                                <input type="text" class="form-control" name="new_pass">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Role</label>
                                                <select class="form-control" name="id_role">
                                                    @foreach($roles as $role)
                                                        <option class="form-control" selected value="{{ $role->id }}">{{ $role->role }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="card-footer text-center border-0 mt-0">                             
                                        <input type="submit" class="btn btn-primary btn-rounded px-4" value="Yuborish">
                                    </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 add-role" style="display: none;">
                                <div class="card">
                                    <div class="card-body">
                                        <form class="form" method="POST" action="">
                                            <div class="form-group">
                                                <label class="form-label">Role</label>
                                                <input type="text" class="form-control" name="name">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Role Haqida Malumot</label>
                                                <input type="text" class="form-control" name="description">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center border-0 mt-0">                             
                                        <a href="#" class="btn btn-primary btn-rounded px-4">Yuborish</a>
                                    </div>
                                </div>
                            </div>
                </div>
    
@endsection