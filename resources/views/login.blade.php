@extends('base.base')

@section('title', 'RetailerSys - Login')

@section('content')
	<div class="login-block">
		<div class="login-form-block">
			<h1> Welcome </h1>
			<div id="app-login">
				<div v-if="showSuccessMessage" class="success-message"> Login successful. </div>
				<div v-if="showFailureMessage" class="failure-message"> Login incorrect. </div>
				<form method="post" action="#" onsubmit="return false">
					{{ csrf_field() }}
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<ul class="login-list">
						<li><label for="email"> Email: </label>
						<li><input type="email" name="email" v-model="email">
						<li><label for="password"> Password: </label>
						<li><input type="password" name="password" v-model="password">
						<li><a> Forgot password? </a>
						<li><button type="submit" v-on:click="showLoginMessage">Login</button>
					</ul>
				</form>
			</div>
		</div>
		<div class="register-block">
			<div id="register-block-header"> New here? </div>
			<div id="register-block-button"> Sign Up </div>
		</div>
		<div class="clearfix"></div>
	</div>
@endsection