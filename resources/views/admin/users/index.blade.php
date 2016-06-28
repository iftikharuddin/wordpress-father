@extends('layouts.admin')
@section('title')
   Users
@endsection

	@section('tiptitle')
		Note:
	@endsection

	@section('tipdescription')
		Don't fuck with me!
	@endsection

	@section('description')
	    this is a cool description Olamba
	@endsection

@section('content')
	<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row">
                
					<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" style="width: 181px;">ID</th>
					
					<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" style="width: 181px;">Photo</th>
					
					<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" style="width: 181px;">Name</th>

					<th class="sorting_desc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" aria-sort="descending" style="width: 224px;">Email</th>
					
					<th class="sorting_desc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" aria-sort="descending" style="width: 224px;">Role</th>
					
					<th class="sorting_desc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" aria-sort="descending" style="width: 224px;">Status</th>

					<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 197px;">Created at</th>

					<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 154px;">Updated At</th>
                </tr>
                </thead>
                <tbody>
                @if($users)
                	@foreach($users as $user)
					<tr role="row" class="odd">
					  <td>{!! $user->id !!}</td>
					  <td><img height="50" src="{!! $user->photo ? $user->photo->path : 'http://placehold.it/50x50' !!}" class="img-responsive"></td>
					  <td><a href="{!! route('admin.users.edit', $user->id) !!}">{!! $user->name !!}</a></td>
					  <td>{!! $user->email !!}</td>
					  <td>{!! $user->role->name !!}</td>
					  <td>{!! $user->is_active == 1 ? 'Active' : 'Not Active' !!}</td>
					  <td>{!! $user->created_at->diffForHumans() !!}</td>
					  <td>{!! $user->updated_at->diffForHumans() !!}</td>
					</tr>
              		@endforeach
               @endif
                </tbody>
               @section('contentfooter')
               	 	Registered Users data 
				@endsection
              </table>
@endsection
