@extends("admin.admin_app")
@section('content')

<div id="main">
    <div class="page-header">


        <h2>All Comments</h2>
    </div>


    <div class="panel panel-default panel-shadow">
        <div class="panel-body">

            <table id="data-table" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
                <thead>
                    <tr>
                    <th>{{'#'}}</th>
                        <th>{{'Comments'}}</th>
                        <th>{{'Name'}}</th>
                        <th>{{'Time'}}</th>
                        <th>{{'Post Id'}}</th>
                        <th>{{'Comment Id'}}</th>
                        <th>{{'Post Title'}}</th>

                        <th class="text-center width-100">{{trans('words.action')}}</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($comments as $comment)
              
                    <tr>
                    <td scope="row">{{$loop->iteration}}</td>
                        <td>{{$comment->comment}}</td>
                        <td>{{$comment->name}}</td>
                        <td>{{$comment->created_at}}</td>
                        <td>{{$comment->blog_id}}</td>
                        <td>{{$comment->id}}</td>
                      <td>{{$comment->blog->title}}</td>
                       
                     
                      

                        <td class="text-center">
                        <div class="btn-group">
                                <button type="button" class="btn btn-default-dark dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    {{trans('words.action')}} <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right" role="menu"> 
                                <li><a href="{{route('comments.delete',['id'=>$comment->id])}}" onclick="return confirm('{{trans('words.dlt_warning_text')}}')"><i class="md md-delete"></i> {{trans('words.remove')}}</a></li>
                                <li><a type="button"  data-toggle="modal" data-target="#myModal">Reply</a></li>
  

</ul>
</div>

<div id="myModal" class="modal fade" role="dialog">
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

                         



                        </td>

                    </tr>
                    @endforeach



                </tbody>
            </table>
        </div>
        <div class="clearfix"></div>
    </div>

</div>




@stop
<script>
$('#myModal').modal('show')

</script>