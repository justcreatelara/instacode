@extends('layouts.app')
	
	@section('content')
	
	<div class="container">
		<div class="row d-flex">
			<div class="col-3 p-5">
			
			<img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100">
			</div>

			<div>
				@can('update', $user->profile)
				<a href="/profile/{{ $user->id }}/edit">edit profile</a>
				@endcan
			</div> 

			<div class="col-6">
				<div class="d-flex justify-content-between">
					<div> 
					<h1>{{ $user->username }}</h1>
					<follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>

					</div>
					@can('update', $user->profile)
                    <a href="/p/create">add new post</a>
				   @endcan
				</div>
				<div class="d-flex">
					<div class="pr-3"><strong>{{ $user->posts->count() }}</strong>posts</div>
					<div class="pr-3"><strong>{{ $user->profile->followers->count() }}</strong>followers</div>
			<div class="pr-3"><strong>{{ $user->following->count() }}</strong>following</div>

                </div>
                <div class="font-weight-bold">{{ $user->profile->title }}</div>
                <div>{{ $user->profile->description }}</div>
                <div><a href="#">{{ $user->profile->url}}</a></div>    
             </div>
        </div>
        
        <div class="row d-flex">
            @foreach($user->posts as $post)
			
			
			<div class="col-4">
				<a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" class="w-100" alt="">
			</a>
			</div>
		
			@endforeach
        </div>
	</div>
	@endsection
