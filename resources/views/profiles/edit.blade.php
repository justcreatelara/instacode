@extends('layouts.app')
	
		@section('content')
			<div class="container">
				
				<div class="row">
					
					<form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
	
						@csrf
						
						@method('PATCH')
						
						<div class="row">	
							<div>
							<h1>edit profile</h1>
							</div>
							
						<div class="form-group row">
							<label for="title" class="col-md-4 col-form-label text-md-right">title</label>

								<div class="col-md-6">
								 <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title }}" required autocomplete="title" autofocus>

									@error('title')
										<span class="invalid-feedback" role="alert">
											 <strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>	
						</div>
						
					
						
						<div class="form-group row">
							<label for="description" class="col-md-4 col-form-label text-md-right">description</label>

								<div class="col-md-6">
								 <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description }}" required autocomplete="description" autofocus>

									@error('description')
										<span class="invalid-feedback" role="alert">
											 <strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>	
						</div>
						
						<div class="form-group row">
							<label for="url" class="col-md-4 col-form-label text-md-right">url</label>

								<div class="col-md-6">
								 <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->profile->url }}" required autocomplete="url" autofocus>

									@error('url')
										<span class="invalid-feedback" role="alert">
											 <strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>	
						</div>
						
						<div class="row">	
							<label for="image" class="col-md-4 col-form-label text-md-right">profile image</label>

							<input type="file", class="form-control-file" id="image" name="image">
							
							@error('image')
										
											 <strong>{{ $message }}</strong>
										
									@enderror
						</div>
						
						<div>
							<button class="btn">save profile</button>
						</div>
						
					</form>
				
				</div>
			</div>
		@endsection