@extends('layouts.admin')

	@section('title')
	   New User
	@endsection

	@section('description')
			this is a cool description Olamba
	@endsection

	@section('tiptitle')
		Note: 
	@endsection

	@section('tipdescription')
		This Form is used to create new user
	@endsection

	
	@section('content')
	    <div class="col-md-4">
			<img src="{!! $user->photo ? $user->photo->path : 'http://placehold.it/200x200' !!}" class="img-responsive">
	    </div>
	   <div class="col-md-8">
		   <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/users', $user->id) }}" enctype="multipart/form-data">
				{!! csrf_field() !!}
				<input type="hidden" name="_method" value="PUT">
		   		<div class="box-body">
					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{!! $user->name !!}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{!! $user->email !!}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                         <div class="form-group{{ $errors->has('role_id') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Role</label>

                            <div class="col-md-6">
                                {!! Form::select('role_id',['' => $user->role->name] + $roles, null, ['class' => 'form-control'] ) !!}
                                @if ($errors->has('role_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('role_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       <div class="form-group{{ $errors->has('is_active') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Status</label>

                            <div class="col-md-6">
                               
                               <select class="form-control" name="is_active">
									<option selected>{!! $status !!}</option>
									<option value="1">Active</option>
									<option value="0">Not Active</option>
								 </select>
                              
                                @if ($errors->has('is_active'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_active') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('photo_id') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Upload Image</label>

                            <div class="col-md-6">
								{!! Form::file('photo_id', null) !!}
                                @if ($errors->has('photo_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('photo_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

				  </div>
				  <!-- /.box-body -->

				  <div class="box-footer">
					<div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn"></i> Update
                                </button>
                    </div>
				  </div>
		   </form>
		   		  
	  </div>
	@section('contentfooter')
		Updating User data 
	@endsection
          
@endsection
