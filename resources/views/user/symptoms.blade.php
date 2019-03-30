@extends('layouts.master')
@section('title')
    symptoms
@endsection
@section('content')
		<!-- Start Body Part Area -->
		<div class="disease_area margin-bottom-100">
			<div class="container">
				<div class="row">
					<div class="col-md-12 margin-bottom-50 margin-top-50">
						<div class="section_title">
							<h2>Conditions that match your symptoms</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="disease_part">
							<div class="row">
								<div class="col-3">
									<div class="disease_button">
										<h2>Diseases List</h2>
										<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
										  <a class="nav-link active" id="v-pills-head-tab" data-toggle="pill" href="#v-pills-head" role="tab" aria-controls="v-pills-head" aria-selected="true">Major Depression (Clinical Depression)</a>
										  <a class="nav-link" id="v-pills-arms-tab" data-toggle="pill" href="#v-pills-arms" role="tab" aria-controls="v-pills-arms" aria-selected="false">Drug Allergy</a>
										  <a class="nav-link" id="v-pills-abdomen-tab" data-toggle="pill" href="#v-pills-abdomen" role="tab" aria-controls="v-pills-abdomen" aria-selected="false">Iron Deficiency Anemia</a>
										  <a class="nav-link" id="v-pills-legs-tab" data-toggle="pill" href="#v-pills-legs" role="tab" aria-controls="v-pills-legs" aria-selected="false">Hypothyroidism</a> 
										</div>
									</div>
								</div>
								<div class="col-9">
									<div class="disease_content">
										<div class="tab-content" id="v-pills-tabContent">
										  <div class="tab-pane fade show active" id="v-pills-head" role="tabpanel" aria-labelledby="v-pills-head-tab">
											<div class="disease_details">
												<div class="what_is margin-80">
													<h5>what is Anemia</h5>
													<p>Anemia is a condition that develops when your blood lacks enough healthy red blood cells or hemoglobin. Hemoglobin is a main part of red blood cells and binds oxygen. If you have too few or abnormal red blood cells, or your hemoglobin is abnormal or low, the cells in your body will not get enough oxygen. Symptoms of anemia -- like fatigue -- occur because organs aren't getting what they need to function properly.

													Anemia is the most common blood condition in the U.S. It affects about 5.6% of the people in the U.S. Women, young children, and people with chronic diseases are at increased risk of anemia. Important factors to remember are:

													Certain forms of anemia are hereditary and infants may be affected from the time of birth.
													Women in the childbearing years are particularly susceptible to iron-deficiency anemia because of the blood loss from menstruation and the increased blood supply demands during pregnancy.
													Older adults also may have a greater risk of developing anemia because of poor diet and other medical conditions.
													There are many types of anemia. All are very different in their causes and treatments. Iron-deficiency anemia, the most common type, is very treatable with diet changes and iron supplements. Some forms of anemia -- like the mild anemia that develops during pregnancy -- are even considered normal. However, some types of anemia may present lifelong health problems.</p>
												</div>
												<div class="causes margin-80">
													<h5>Symptoms</h5>
													<p>Hypothyroid symptoms include weight gain, severe fatigue, weakness, slowed thinking, confusion, trouble concentrating, sensitivity to cold, depression, paranoia, hearing loss, dry skin, coarse hair, and hair loss.</p>
												</div>
												<div class="symptoms margin-80">
													<h5>What Causes Anemia?</h5>
													<p>There are more than 400 types of anemia, which are divided into three groups: 
														<ol>
															<li>Anemia caused by blood loss</li>
															<li>Anemia caused by decreased or faulty red blood cell production</li>
															<li>Anemia caused by destruction of red blood cells </li>
														</ol>
													</p>
												</div>
												<div class="how_common margin-80">
													<h5>How Common</h5>
													<p>In the U.S., about four to five people out of 100 have hypothyroidism.</p>
												</div>
												<div class="treatment">
													<h5>Treatment</h5>
													<p>Anemia treatment may include: 
														<ol>
															<li>Iron and vitamin supplements </li>
															<li>Red blood cell transfusion for severe anemia</li> 
															<li>Treating the source of blood loss</li>
														</ol>
													</p>
												</div>
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