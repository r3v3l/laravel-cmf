@extends('auth.template')

@section('title', '| Login')

@section("content")
	<div class="panel panel-sign">
		<div class="panel-title-sign mt-xl text-right">
			<h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> Sign In</h2>
		</div>
		<div class="panel-body">
			{!! Form::open(['url' => 'password/email', 'method' => "POST"]) !!}

			<div class="form-group mb-lg">
				<label>Email</label>
				<div class="input-group input-group-icon">
					<input name="email" type="email" class="form-control input-lg" required autocomplete="off"/>
					<span class="input-group-addon">
						<span class="icon icon-lg">
							<i class="fa fa-envelope"></i>
						</span>
					</span>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12 text-right">
					<button type="submit" class="btn btn-primary hidden-xs">Reset password</button>
					<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Reset password</button>
				</div>
			</div>

			<p class="text-center">Don't have account? <a href="/auth/register">Sign Up!</a></p>

			{!! Form::close() !!}
		</div>
	</div>
@endsection