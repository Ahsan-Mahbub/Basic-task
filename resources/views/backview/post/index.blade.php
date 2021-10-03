@extends('backview.index')
@section('content')
<div class="container-fluid">


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div>
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="dataTable_length"><label>Show <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                <thead>
                    <tr>
                    	<th rowspan="1" colspan="1">Post Title</th>
                    	<th rowspan="1" colspan="1">Post Details</th>
                    	<th rowspan="1" colspan="1">Action</th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($posts as $post)
	                <tr class="odd">
	                    <td>{{$post->post_name}}</td>
	                    <td>{{$post->post_desc}}</td>
	                    <td>
                            <form action="{{route('post.delete',$post->id)}}" method="post" accept-charset="utf-8">
    	                    	<a href="{{route('post.edit',$post->id)}}" class="btn btn-info">
                                    Edit
                                </a>
                                @csrf
                                @method('delete')
    	                    	<button type="submit" href="" class="btn btn-danger">
                                    Delete
                                </button>
                            </form>
	                    </td>
	                </tr>
	                @endforeach
				</tbody>
            </table></div></div></div>
        </div>
    </div>
</div>
</div>
@endsection