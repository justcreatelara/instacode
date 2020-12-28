@extends('layouts.app')
	
		@section('content')
			<div class="container">
				
				<div class="row">
					
					<div class="col-8">
						<img src="/storage/{{ $post->image }}" class="w-100">
			
					</div>
					
					<div class="col-4">
						<div>
							<div class="d-flex">
								<div>
									<img src="{{ $post->user->profile->profileImage() }}" class="w-100" style="max-width: 50px;">
								</div>
								<div>
									<h3><a href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a></h3>
								</div>
								<a href="#">follow</a>
							</div>	
							
							<hr>
						
						<p><span class="font-weight-bold"><a href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a></span>{{ $post->caption }}</p>
					</div>
				
				</div>
			</div>
		@endsection