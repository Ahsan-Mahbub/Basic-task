@extends('backview.index')
@section('content')
<div class="container">
	<div class="card mb-4 py-3 border-left-dark">
		<form class="form-inline"  role="form" action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
          @csrf
		  <div class="form-group mr-3 ml-2">
		    <label for="post_name">Post Name: &nbsp; </label>
		    <input type="text" name="post_name" class="form-control" id="post_name">
		    @error('post_name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
		  </div>
		  <div class="form-group mr-3 ml-2">
		    <label for="pwd">Post Details: &nbsp; </label>
		    <textarea class="form-control" name="post_desc">
		    	
		    </textarea>
		    @error('post_desc')
                <span class="text-danger">{{ $message }}</span>
            @enderror
		  </div>
		  <button type="submit" class="btn btn-success mr-3 ml-2">Submit</button>
		</form>
	</div>
</div>
@endsection