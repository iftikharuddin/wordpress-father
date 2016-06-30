@extends('layouts.admin')
@section('title')
   Posts
@endsection

	@section('tiptitle')
		Note:
	@endsection

	@section('tipdescription')
		Tip Description
	@endsection
	
	@section('description')
	    All posts
	@endsection

@section('content')
	@if(Session::has('deleted_user'))
		<p class="alert bg-danger">{!! session('deleted_user') !!}</p>
	@endif
	@if(Session::has('user_created'))
		<p class="alert bg-success">{!! session('user_created') !!}</p>
	@endif
	<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row">
                
					<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" style="width: 181px;">ID</th>
					
					<th class="sorting_desc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" aria-sort="descending" style="width: 224px;">Photo</th>
										
					<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" style="width: 181px;">Owner</th>
					
					<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" style="width: 181px;">Category</th>

					
					<th class="sorting_desc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" aria-sort="descending" style="width: 224px;">Title</th>
					
					<th class="sorting_desc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" aria-sort="descending" style="width: 224px;">Body</th>

					<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 197px;">Created at</th>

					<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 154px;">Updated At</th>
               		
               		<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 154px;">Delete</th>
                </tr>
                </thead>
                <tbody>
                @if($posts)
                	@foreach($posts as $post)
					<tr role="row" class="odd">
					  <td>{!! $post->id !!}</td>
					  <td><img height="50" src="{!! $post->photo ? $post->photo->path : 'http://www.placehold.it/50x50'!!}"></a></td>
					  <td>{!! $post->user->name !!}</td>
					  <td>{!! $post->category_id !!}</td>
					  <td>{!! $post->title !!}</td>
					  <td>{!! $post->body !!}</td>
					  <td>{!! $post->created_at->diffForHumans() !!}</td>
					  <td>{!! $post->updated_at->diffForHumans() !!}</td>
					  <td>
						{!! Form::open(array('url' => "/admin/users/$post->id" ,  'method' => 'delete')) !!}
						{!! Form::hidden('id', $post->id) !!}
						<button type="submit" class="btn btn-danger glyphicon glyphicon-remove"></button>
						{!! Form::close() !!}
					  </td>
					</tr>
              		@endforeach
               @endif
                </tbody>
               @section('contentfooter')
               	 	Registered Users data 
				@endsection
              </table>
@endsection
