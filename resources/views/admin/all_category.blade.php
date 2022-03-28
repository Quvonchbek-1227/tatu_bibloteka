@extends('admin.layouts.app')

@section('content')


<div class="row">
	@foreach($categories as $category)

	<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
						<div class="card">
							<div class="card-body d-flex justify-content-between">
								<ul>
									<li><b>Kategorya:</b></li>
									<li><b>Description:</b></li>
								</ul>
								<ul>
									<li>{{ $category->category }}</li>
									<li>{{ $category->description }}</li>
								</ul>
							</div>
							<div class="card-footer d-flex justify-content-between">
								<form method="post" action="{{ route('category.destroy',['category'=>$category->id]) }}">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-primary">O`chirish</button>
							</form>
							<a class="btn btn-danger" href="{{ route('category.edit',['category'=>$category->id]) }}">Taxrirlash</a>
							</div>
						</div>
	</div>

	@endforeach
</div>


@endsection