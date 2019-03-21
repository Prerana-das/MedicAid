@extends('layouts/master')
@section('title')
Home
@endsection
	
@section('content')

<div class="symptoms-checker">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<form>
						  <div class="form-group">
							<label>Age</label>
							<input type="email" placeholder="Enter email">
						  </div>
						   <div class="form-group">
							<label>Gender</label>
							<select class="form-control" id="exampleFormControlSelect1">
							  <option>Male</option>
							  <option>Female</option>
							  <option>d</option>
							</select>
						  </div>
						   <div class="form-group">
							<label>Choose Symptoms</label>
							<select class="form-control" id="exampleFormControlSelect2">
							  <option>Male</option>
							  <option>Female</option>
							  <option>d</option>
							</select>
						  </div>
						  <button type="submit" class="btn btn-primary">Continue</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		

@endsection