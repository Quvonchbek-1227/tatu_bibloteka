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
							<a href="{{ route('blog.destroy',['blog'=>$blog->id]) }}" class="btn btn-primary">O`chirish.</a>
						</div>
	</div>

	@endforeach
</div>


@endsection