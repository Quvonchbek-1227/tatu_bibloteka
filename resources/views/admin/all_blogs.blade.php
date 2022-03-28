@extends('admin.layouts.app')

@section('content')


<div class="row">
	@foreach($blogs as $blog)

	<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
						<div class="card">
							<img class="img-fluid" src="{{ $blog->img }}" alt="">
							<div class="card-body d-flex justify-content-between">
								<ul>
									<li><b>Title</b></li>
									<li><b>Sana:</b></li>
									<li><b>Content:</b></li>
								</ul>
								<ul>
									<li>{{ $blog->title }}</li>
									<li>{{ $blog->date }}</li>
									<li>{{ $blog->content }}</li>
								</ul>
							</div>
							<div class="card-footer d-flex justify-content-between">
								<form method="post" action="{{ route('blog.destroy',['blog'=>$blog->id]) }}">
									@csrf
									@method('DELETE')
									<button type="submit" class="btn btn-danger">O`chirish</button>
								</form>
								<a class="btn btn-primary" href="{{ route('blog.edit',['blog'=>$blog->id]) }}">Taxrirlash</a>
							</div>
						</div>
	</div>

	@endforeach
</div>


@endsection