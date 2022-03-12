@extends('admin.layouts.app')

@section('content')


<div class="row">
	@foreach($books as $book)

	<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
						<div class="card">
							<img class="img-fluid" src="{{ $book->img }}" alt="">
							<div class="card-body d-flex justify-content-between">
								<ul>
									<li><b>Kitob nomi:</b></li>
									<li><b>Avtor:</b></li>
									<li><b>Sana:</b></li>
									<li><b>Kategoriya:</b></li>
									<li><b>Qosimsha:</b></li>
								</ul>
								<ul>
									<li>{{ $book->name }}</li>
									<li>{{ $book->author }}</li>
									<li>{{ $book->made }}</li>
									<li>{{ $book->category }}</li>
									<li>{{ $book->book_desc }}</li>
								</ul>
							</div>
							<a href="{{ route('admin.book.delete',['id'=>$book->id_book]) }}" class="btn btn-primary">O`chirish.</a>
						</div>
	</div>

	@endforeach
</div>


@endsection