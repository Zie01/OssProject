@extends('layouts.master')

@section('title')
	Welcome!
@endsection

@section('content')
	<div class = "row">
		<div class = "col-6">
		<h3>Sign Up</h3>
			<form action= "#" method="post">
				<div class= "form-group">
					<label for="email">Your E-Mail</label>
					<input class= "form-control" type="text" name= "email" id="email">
				</div>
				<div class= "form-group">
					<label for="email">First Name</label>
					<input class= "form-control" type="text" name= "first_name" id="first_name">
				</div>
				<div class= "form-group">
					<label for="email">Password</label>
					<input class= "form-control" type="text" name= "Password" id="Password">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>		
		<div class = "col-6">
		<h3>Sign In</h3>
			<form action= "#" method="post">
				<div class= "form-group">
					<label for="email">Your E-Mail</label>
					<input class= "form-control" type="text" name= "email" id="email">
				</div>
				
				<div class= "form-group">
					<label for="email">Password</label>
					<input class= "form-control" type="text" name= "Password" id="Password">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>	
	</div>			
@endsection

