@extends('layouts.app')
    @section('content')

    @php
        use App\Http\Controllers\PostsController;
    @endphp


		
		<!--CREATE POST-->
		<div class="create-post w3-center">
				<b class=""><u>EDIT POST</u></b>
				<br />
				<br />
				<br />
					<form action="{{action('App\Http\Controllers\HomeController@update',$post->id)}}" method="POST" style="color:#0C1730;" enctype="multipart/Form-data">
					{{method_field('POST')}}
					@csrf
								
						<b class=""><i>Title:</i></b><br />
						<input type="text" name="title" value="{{$post->title}}" class="form-input1" required></input>
						
						<br />
						<br />
						<b class=""><i>Content:</i></b><br />
						<textarea name="content" class="form-input2" style="" required>{{$post->content}}</textarea>
						
						<br />
						<br />
						<b class=""><i>Images:</i></b><br />
						<input type="file" class="form-input3 w3-border" name="images[]" multiple="multiple"></input>
                        
                        <input type="hidden" name="_method" value="PUT"></input>
						
						<br />
						<br />
						<input type="submit" value="Edit Post" class="submit w3-padding"></input>
				</form>
				
				<br />
				<br />
		</div>
		
		
		
		
		



@endsection