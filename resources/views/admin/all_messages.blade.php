@extends('admin.layouts.app')

@section('content')


<div class="row">
	<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Hover Table</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table header-border table-hover verticle-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Ismi</th>
                                                <th scope="col">E-mail</th>
                                                <th scope="col">Mavzu</th>
                                                <th scope="col">Xabar</th>
                                                <th scope="col">O`chirish</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            @foreach($messages as $message)

                                            <tr>
                                            	
                                                <th>{{ $loop->index }}</th>
                                                <td>{{ $message->name }}</td>
                                                <td>{{ $message->email }}</td>
                                                <td>{{ $message->subject }}</td>
                                                <td>{{ $message->message }}</td>
                                                <td><a href="{{ route('delete_message',['id' => $message->id]) }}" class="btn btn-danger">Delete</a></td>
                                                </td>

                                            </tr>

                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
</div>


@endsection