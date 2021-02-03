<style>
.cat-head {
    font-family: 'Open Sans', sans-serif;
    font-style: normal;
    font-weight: 400;

}

ul.blog-sidebar-menu li:nth-child(odd) {
    background: #ecc807;
}

ul.blog-sidebar-menu li:nth-child(even) {
    background: #f7e898;
}

ul.blog-sidebar-menu li {

    transition: background-color 0.5s ease;
}

ul.blog-sidebar-menu li:hover {
    background: green;
    opacity: 0.8;

}

.list-group-item {
    text-align: center;


}

.list-group-item a {
    color: black;
}

.list-group-item a:hover {
    color: white;
}

/* comment design*/
.comment {
    margin-bottom: 45px;
}

.author-image {
    width: 50px;
    height: 50px;

    float: left;
}

img {
    border-radius: 50%;
}

.authorname {
    float: left;
    margin-left: 15px;
}

.authorname>h4 {

    margin: 5px 0px;


}

.time {
    font-size: 11px;
    font-style: italic;
    color: #aaaa;
}

.comment_content {
    clear: both;
    margin-left: 65px;
    font-size: 16px;
    line-height: 1em;
}
</style>

@extends("app")
@section('head_title', stripslashes($blog->title) .' | '.getcong('site_name') )
@section('head_description', substr(strip_tags($blog->description),0,200))
@section('head_image', asset($blog->feature))
@section('head_url', Request::url())

@section("content")

<!--Breadcrumb Section-->
<section class="breadcrumb-box" data-parallax="scroll">
    <div class="inner-container container">

    </div>
</section>
<!--Breadcrumb Section-->



<section class="main-container container">
    <aside class="col-sm-4">
        <div class="sidebar-box sidebar-blog-cat">

            <h4 class="cat-head">All Categories</h4><br>
            <ul class="blog-sidebar-menu">
                {{--@php $all_cats= \App\Blogcategory::all(); @endphp--}}
                @foreach($categories as $result)
                <li class="list-group-item">
                    <a href="{{route('blog-category.single',['slug'=>$result->slug])}}" class="">{{$result->name}} <span
                            style="float:right; ">{{$result->blogs->count()}}</span> </a>
                </li>
                @endforeach

            </ul>
        </div>
    </aside>
    <div class="col-sm-8">
        <div class="content-box">
            <div class="single-blog-posts-body">
                <div class="blog-thumbs">
                    <br>
                    <img src="{{asset($blog->feature)}}" alt="{{$blog->title}}" class="img-thumbnail">
                </div>
                <br>
                <div class="blog-contents">
                    <h1 class="blog-title" style="text-align:left;">{{$blog->title}}</h1>
                    <!-- <ul class="post-info-header list-inline">
                  
                  <li>Posted on:  <b>{{$blog->created_at->format('d-m-y')}}</b></li>
                </ul>-->

                    <br>


                    @if($blog->check == 1)
                    <div class="author-box">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="author-img text-center">
                                    <img src="{{ URL::asset('site_assets/img/kazi-manzur.jpg') }}"
                                        class="rounded-circle" alt="author image" style=" height: 120px; ">
                                </div>
                            </div>
                            <br>
                            <div class="col-md-9">
                                <div class="author-info" style="margin-top:50px;">
                                    <small><em>Written by,</em></small>
                                    <p><strong>Kazi Manzur Ahmed,</strong><br><small>CEO, Floorfly Realtor Ltd.</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="author-box">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="author-img text-center">
                                    <img src="{{   asset($blog->image)	}}" class="rounded-circle" alt="author image"
                                        style=" height: 120px; ">
                                </div>
                            </div>
                            <br>
                            <div class="col-md-9">
                                <div class="author-info" style="margin-top:50px;">
                                    <small><em>Written by,</em></small>

                                    <p><strong>{{$blog->name}}</strong><br><small>{{$blog->designation}}.</small></p>



                                </div>
                            </div>
                        </div>

                    </div>
                    @endif



                    <span class="blog-description">
                        {!! $blog->description!!}
                    </span>
                </div>



                <!-- comment box -->

                <!-- <div class="row">

<div class="col-md-12">



</div>

</div> -->




                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div>
                    @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}

                        @endif
                    </div>




                    <div class="col-md-12">
                        <label for="formGroupExampleInput">Comment Box</label>
                        <form action="{{route('comments.store',$blog->id)}}" method="post">
                            @csrf
                            <div class="form-group">

                                <input type="text" class="form-control" name="name" id="formGroupExampleInput"
                                    placeholder="Author Name">
                            </div>
                            <div class="form-group">

                                <input type="email" class="form-control" name="email" id="formGroupExampleInput"
                                    placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <textarea name="comment" id="comment" style="font-family:sans-serif;font-size:1.2em;">

</textarea>
                            </div>
                            <div class="submit-btn">
                                <input type="submit" class="btn-success" value="Post your comment"
                                    id="formGroupExampleInput2" placeholder="Another input">
                            </div>
                        </form>

                    </div>
                    <!-- end comment box -->


                    <h1 style="margin-top:5px;"><span class="glyphicon glyphicon-comment
"></span> Comments ({{$blog->comments()->count()}}) </h1>
                    @foreach($blog->comments as $comment)<br>


                    <div class="container">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="comments-area">



                                    <div class="comment">

                                        <div class="author">
                                            <img src="{{"https://www.gravatar.com/avatar/".md5(strtolower(trim($comment->email)))}}"
                                                alt="" class="author-image">
                                            <!-- <img src="https://www.gravatar.com/avatar/HASH" class="author-image"> -->

                                            <div class="authorname">
                                                <h4>{{$comment->name}} </h4>
                                                <p class="time">{{date('j-F-Y  g:iA',strtotime($comment->created_at))}}
                                                </p>
                                            </div>

                                        </div>

                                        <div class="comment_content">
                                            {{$comment->comment}}
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-2">
                                            </div>
                                            @foreach($comment->replies as $reply)
                                            <div class="col-sm-10">
                                                <br>
                                                
                                                @if($reply->count()>0)
                                                <p style="opacity: 0.5;">Replies</p>
                                                @endif

                                                <div class="replied-name"> <img src="{{ URL::asset('upload/floorfly.jpg') }}" style="height:35px; width:35px;"> Floorfly
                                                <p class="time">{{date('j-F-Y  g:iA',strtotime($reply->created_at))}}
                                                </p></div>
                                                <div class="replied" style="margin-top:5px;">{{$reply->reply}}</div>
<!--                                                 
                                                @if (Auth::check())
                                    <div class="col-md-8">
                                        <a href="{{route('replies.delete',['id'=>$reply->id])}}"><button
                                                class="btn-danger">Delete</button></a>



                                    </div>
                                    @endif -->
                                               
                                            </div>
                                            @endforeach
                                        </div>
                                        
                                        @if (Auth::check())
                                        <br>
                                        <div class="col-md-8 mt-3">

                                            <form action="{{route('replies.store',$comment->id)}}" method="post">
                                                @csrf
                                                <div class="form-group">

                                                    <input type="text" class="form-control" name="reply"
                                                        id="formGroupExampleInput" placeholder="Reply">
                                                </div>
                                                <div class="submit-btn">
                                                    <input type="submit" class="btn" value="Submit"
                                                        id="formGroupExampleInput2" placeholder="Another input">
                                                </div>

                                            </form>
                                        </div>
                                        @endif



                                    </div>
                              
                            
                                </div>
                            </div>
                        </div>
                    </div>


                    @endforeach















                    <div class="related-post mt-3">
                        <div class="heading">
                            <h4 class="heading-title">Related Jobs</h4>
                        </div>
                        <div class="row">
                            @foreach($related->where('status',1)->take(4) as $row)
                            <div class="col-md-3">
                                <div class="card relatedpost">
                                    <a href="{{route('blog.single',['slug'=> $row->slug]) }}">
                                        <img src="{{asset($row->feature)}}" class="card-img-top img-thumbnail"
                                            alt="{{$row->title}}">
                                        <div class="card-body">
                                            <h4 class="card-title" style="color: #000;font-weight: bold;">
                                                {{$row->title}}</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div> <!-- related-post-->


                </div>

            </div>
        </div>

</section>



@endsection