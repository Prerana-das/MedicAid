@extends('layouts.master')
@section('title')
    home
@endsection
@section('content')	
		<!-- Start Bannere Area -->
		<section class="banner_area bannder_bg margin-bottom-100">
			<div class="container">
				<div class="banner_content p-250">
					<h3>Symptom Checker</h3>
					<form>
						 <div class="form-group">
							<label for="inputAddress">Age</label>
							<input type="text"  id="inputAddress" placeholder="Age">
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
							  <label for="inputEmail4">Gender</label>
							  <input type="gender"  id="inputEmail4" placeholder="Gender">
							</div>
							<div class="form-group col-md-6">
							  <label for="inputState">Symptoms</label>
							  <select id="inputState" >
								<option selected>Select Your Symptoms</option>
								<option>a</option>
								<option>b</option>
							  </select>
							</div>
						</div>
						<button type="submit" class="btn blk_btn">Find Here</button>
					</form>
				</div>
			</div>
		</section> 
		<!-- End Bannere Area -->
		<!-- Start Our Feature area -->
		<div class="f_area margin-bottom-100 ">
			<div class="container">
				<div class="row">
					<div class="col-md-12 margin-40">
						<div class="section_title">
							<h2>Our Features</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="single_feature">
							<i class="fas fa-pencil-alt"></i>
							<h4>BROWSE </h4>
							<p>Lorem ipsum dolor sit amet, ad autem erroribus eum, eum eu maluisset constituto accusam.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single_feature">
							<i class="fas fa-search"></i>
							<h4>Find Teacher</h4>
							<p>Lorem ipsum dolor sit amet, ad autem erroribus eum, eum eu maluisset constituto accusam.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single_feature">
							<i class="fas fa-pencil-alt"></i>
							<h4>BROWSE COURSES</h4>
							<p>Lorem ipsum dolor sit amet, ad autem erroribus eum, eum eu maluisset constituto accusam.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Our Feature area -->
		<!-- Start Body Part Area -->
		<div class="body_part_area margin-bottom-100">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section_title">
							<h2>Browse by body part</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="left_body_part">
								<!-- <h3>head & neck</h3>
								<h3>Arms,heart and lungs</h3>
								<h3>abdomen and reproductive organs</h3>
								<h3>legs and feet</h3>
								<h3>other body part</h3>-->
							<div class="row">
								<div class="col-3">
									<div class="body_button">
										<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
										  <a class="nav-link active" id="v-pills-head-tab" data-toggle="pill" href="#v-pills-head" role="tab" aria-controls="v-pills-head" aria-selected="true">head & neck</a>
										  <!-- <img src="assets/images/head.png" alt="" /> -->
										  <a class="nav-link" id="v-pills-arms-tab" data-toggle="pill" href="#v-pills-arms" role="tab" aria-controls="v-pills-arms" aria-selected="false">Arms,heart and lungs</a>
										  <!-- <img src="assets/images/amrs.png" alt="" /> -->
										  <a class="nav-link" id="v-pills-abdomen-tab" data-toggle="pill" href="#v-pills-abdomen" role="tab" aria-controls="v-pills-abdomen" aria-selected="false">abdomen</a>
										 <!--  <img src="assets/images/abdomen.png" alt="" /> -->
										  <a class="nav-link" id="v-pills-legs-tab" data-toggle="pill" href="#v-pills-legs" role="tab" aria-controls="v-pills-legs" aria-selected="false">legs and feet</a>
										  <!-- <img src="assets/images/legs.png" alt="" /> -->
										  <a class="nav-link" id="v-pills-other-tab" data-toggle="pill" href="#v-pills-other" role="tab" aria-controls="v-pills-other" aria-selected="false">other body part</a>
										  <!-- <img src="assets/images/feet.png" alt="" /> -->
										</div>
									</div>
								</div>
								<div class="col-9">
									<div class="body_content">
										<div class="tab-content" id="v-pills-tabContent">
										  <div class="tab-pane fade show active" id="v-pills-head" role="tabpanel" aria-labelledby="v-pills-head-tab">
											<div class="b_disease_details">
												<ol type="1">
													<li><a href="">brain and nerves</a></li>
													<li><a href="">eyes</a></li>
													<li><a href="">brain and nerves</a></li>
													<li><a href="">brain and nerves</a></li>
													<li><a href="">brain and nerves</a></li>
												</ol>
											</div>
										  </div>
										  <div class="tab-pane fade" id="v-pills-arms" role="tabpanel" aria-labelledby="v-pills-arms-tab">
											<div class="b_disease_details">
												<ol type="1">
													<li><a href="">brain and nerves</a></li>
													<li><a href="">brain and nerves</a></li>
													<li><a href="">brain and nerves</a></li>
													<li><a href="">brain and nerves</a></li>
													<li><a href="">brain and nerves</a></li>
												</ol>
											</div>
										  </div>
										  <div class="tab-pane fade" id="v-pills-abdomen" role="tabpanel" aria-labelledby="v-pills-abdomen-tab">
											<div class="b_disease_details">
												<ol type="1">
													<li><a href="">brain and nerves</a></li>
													<li><a href="">brain and nerves</a></li>
													<li><a href="">brain and nerves</a></li>
													<li><a href="">brain and nerves</a></li>
													<li><a href="">brain and nerves</a></li>
												</ol>
											</div>
										  </div>
										  <div class="tab-pane fade" id="v-pills-legs" role="tabpanel" aria-labelledby="v-pills-legs-tab">
											<div class="b_disease_details">
												<ol type="1">
													<li><a href="">brain and nerves</a></li>
													<li><a href="">brain and nerves</a></li>
													<li><a href="">brain and nerves</a></li>
													<li><a href="">brain and nerves</a></li>
													<li><a href="">brain and nerves</a></li>
												</ol>
											</div>
										  </div>
										  <div class="tab-pane fade" id="v-pills-other" role="tabpanel" aria-labelledby="v-pills-other-tab">
											<div class="b_disease_details">
												<ol type="1">
													<li><a href="">brain and nerves</a></li>
													<li><a href="">brain and nerves</a></li>
													<li><a href="">brain and nerves</a></li>
													<li><a href="">brain and nerves</a></li>
													<li><a href="">brain and nerves</a></li>
												</ol>
											</div>
										  </div>
										</div>
									</div>
							    </div>
							</div>
						</div> 
					</div>
				</div>
			</div>
		</div>
		<!-- End Body Part Area -->
		<!-- Start Health Tips area -->
		<div class="health_area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section_title">
							<h2>Health Tips</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Health Tips area -->
@endsection
	
  