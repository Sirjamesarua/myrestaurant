@extends('layouts.app')

@section('content')
@php
    use App\Http\Controllers\HomeController;

@endphp



        
        <!--ADMIN PAGE-->
        <div class="w3-center">
                <b class="w3-center" style="font-size:150%;" ><u>MY POSTS</u></b>
                <br />
                <b>>><a href="/admin/create" style="color:purple;">Create New Post</a><<</b><br />
                <br />
                <br />
                

                @if(count($posts)>=1)
                    @foreach($posts as $post)
                <div class="w3-center">
                        <a href="/posts/{{$post->id}}"><b class="post-topic w3-center"><u>@php echo strToUpper("$post->title"); @endphp</u></b></a>
                        <br />
                        
                        <div class="w3-center">
                                <img src="external_files/Html/myblog/img/img.jpg" class="" alt=""></img>
                        </div>
                        
                        <i class="">{{$post->content}}</i>
                            
                            <div class="w3-center">
                                <form action="{{route('admin.destroy',$post->id)}}" method="POST">
                                    {{method_field('POST')}}
                                    @csrf
                            
                                    <input type="hidden" name="_method" value="DELETE"></input>
                                    <a href="/admin/{{$post->id}}/edit"><b class=""><i>Edit</i></b></a>
                                    <b><i><input type="submit" value="Delete" style="background-color:transparent;border:0px;text-decoration:italic;color:rgb(39,16,100);"></input></i></b>
                                </form>
                            </div>
                </div>
                <hr />
                    @endforeach
                @else
                        <div class="w3-center"><b>no post created</b></div>
                @endif


                
                <hr />

                <div style="">
                    <div class="border-center">
                     {!! $posts->links('vendor.pagination.simple-bootstrap-4')!!}
                    </div>
                </div>
                <hr />

                <br />
                <b>>><a href="/logout" style="color:purple;">Log Out</a><<</b>
                
        </div>


        
        
        




@endsection
