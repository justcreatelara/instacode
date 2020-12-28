@extends('layouts.app')
	
	@section('content')
	
	<form action="/p" enctype="multipart/form-data" method="post">
	
		@csrf
		
		<div class="row">	
			<div>
			<h1>add new post</h1>
			</div>
			
		<div class="form-group row">
			<label for="caption" class="col-md-4 col-form-label text-md-right">post caption</label>

				<div class="col-md-6">
				 <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>

					@error('caption')
						<span class="invalid-feedback" role="alert">
							 <strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
			</div>	
		</div>
		
		<div class="row">	
			<label for="image" class="col-md-4 col-form-label text-md-right">post image</label>

			<input type="file", class="form-control-file" id="image" name="image">
			
			@error('image')
						
							 <strong>{{ $message }}</strong>
						
					@enderror
		</div>
		
		<div>
			<button class="btn">add new post</button>
		</div>
		
	</form>
	@endsection