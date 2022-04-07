@extends('layouts.app')
    @section('content')

    @php
        use App\Http\Controllers\PostsController;
    @endphp



		<!--VIEW POST-->
		 
		<div class="">
				<!--TOPIC-->
				<div class="w3-center post-topic"><b style="color:purple;font-size: 150%;"><u>{{$post->title}}</u></b></div>
				<br />
				<br />
				<br />
				
				<!--IMG-->
                    <div class="w3-center"> 
                        @php
                            $imagestring=$post->images;
                            $imagepath=explode(" ",$imagestring);
                        @endphp

                        @if($imagestring!="")
	                        @foreach($imagepath as $path)
	                            <img class='w3-margin' src='/storage/images/{{$path}}' alt="web developer" style="height: 550px; width:80%;"></img>
	                        @endforeach
	                    @endif
                    </div>
				
				<br />
				<br />
				<!--CONTENT-->
				<div class=""><i>{{$post->content}}
				</i></div>
				<br />
				
				
				<!--RECENT POST-->
						<br />
						<br />
						<br />
						<br />
				<div class="">
						<b class="w3-center" style="font-size:150%;"><u>RECENT TOPICS</u></b>
						<br />
						<br />

			                    @foreach($posts as $postss)
									<a href="/posts/{{$postss->id}}">{{$postss->title}}</a>
									<hr />
			                    @endforeach

				</div>
				
		</div>
		


    @endsection