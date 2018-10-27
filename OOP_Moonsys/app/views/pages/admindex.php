<?php require APPROOT . '/views/inc/admheader.php'; ?>
		<!-- main content start-->
<div id="page-wrapper">
	<div class="main-page">

		<div class="grids widget-shadow">
<div class="container bootstrap snippet">
    <div class="row">
  		<!--<div class="col-sm-10"><h1>User name</h1><br><h4>Job Title</h4></div>-->
			<!-- COMpany LOGO-->
    	<!--<div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" style="position: absolute;
			  left: 0px; top: 0px; width: 120px; height: 120px;"
				 class="img-circle img-responsive" src="<?php// echo URLROOT ?>/images/complogo.png"></a></div>-->
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->


      <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a different photo...</h6>
				<input type="file">
      </div><hr>

					<!--<div class="panel panel-default">
						<div class="panel-heading"<h1>USER NAME</h1>&nbsp;<i class="fa fa-user fa-1x"></i></div>
						<div class="panel-body">JOB TITLE</div>
					</div></hr><br>-->
					<div class="text-center">
		        <h4><i class="fa fa-user fa-1x"></i>&nbsp;User Name</h4>
						<h5><i class="fa fa-ufa fa-briefcase fa-1x"></i>&nbsp;Job Title</h5>
						<span class="label label-primary">Status</span>
		      </div><hr>

					<div class="text-center">
		        <p><i class="fa fa-ufa fa-building fa-1x"></i>&nbsp;Address</p>
						<p><i class="fa fa-mobile fa-1x"></i>&nbsp;Phone</p>
		      </div><hr>

					<div class="text-center">
		        <p><strong>Hired</strong></p>
						<p>Detailed date</p>
		      </div><hr>

					<div class="text-center">
		        <p><strong>Manager</strong></p>
						<p>Manager Name</p>
						<p>Job Title</p>
		      </div><hr>

          <!-- <div class="panel panel-default">
            <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
            <div class="panel-body"><a href="http://bootnipets.com">bootnipets.com</a></div>
          </div>

					<div class="list-group">
    <a href="#" class="list-group-item active">
        <span class="glyphicon glyphicon-camera"></span> Pictures
    </a>
    <a href="#" class="list-group-item">
        <span class="glyphicon glyphicon-file"></span> Documents
    </a>
    <a href="#" class="list-group-item">
        <span class="glyphicon glyphicon-music"></span> Music
    </a>
    <a href="#" class="list-group-item">
        <span class="glyphicon glyphicon-film"></span> Videos
    </a>
</div>-->


          <ul class="list-group">
            <li class="list-group-item text-muted"><strong>Recent Activity</strong> <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left">Activity 1</span> 125</li>
            <li class="list-group-item text-right"><span class="pull-left">Activity 2</span> 13</li>
            <li class="list-group-item text-right"><span class="pull-left">Activity 3</span> 37</li>
            <li class="list-group-item text-right"><span class="pull-left">Activity 4</span> 78</li>
          </ul>

          <div class="panel panel-default">
            <div class="panel-heading">Social Media</div>
            <div class="panel-body">
            	<i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
            </div>
          </div>

        </div><!--/col-3-->
    	<div class="col-sm-8">

            <ul class="nav nav-tabs">
							<br><br><br>
                <li class="active"><a data-toggle="tab" href="#home">Personal</a></li>
                <li><a data-toggle="tab" href="#payinfo">Pay Info</a></li>
                <li><a data-toggle="tab" href="#job">Job</a></li>
								<li><a data-toggle="tab" href="#leaves">Leaves</a></li>
								<li><a data-toggle="tab" href="#reports">Reports</a></li>
								<li><a data-toggle="tab" href="#documents">Documents</a></li>
              </ul>


          <div class="tab-content">
            <div class="tab-pane active" id="home">

								<!-- Extended material form grid -->
								<form>

									<i class="fa fa-address-card fa-1x"></i>&nbsp;<h2>Bio</h2>
									<hr>
								    <!-- Grid row --><br>
								    <div class="form-row">
								        <!-- Grid column -->
								        <div class="col-md-4">
								            <!-- Material input -->
								            <div class="md-form form-group">
								                <input disabled type="text" class="form-control" id="inputAddress4MD" placeholder="Employee ID">
								                <label for="inputAddress4MD">Employee ID</label>
								            </div>
								        </div>
								        <!-- Grid column -->

								    </div>
								    <!-- Grid row -->

								    <!-- Grid row --><br>
								    <div class="form-row">
								        <!-- Grid column -->
								        <div class="col-md-4">
								            <!-- Material input -->
								            <div class="md-form form-group">
								                <input type="text" class="form-control" id="inputFirstNameMD" placeholder="First Name">
								                <label for="inputFirstNameMD">First Name</label>
								            </div>
								        </div>
								        <!-- Grid column -->

												<!-- Grid column -->
								        <div class="col-md-4">
								            <!-- Material input -->
								            <div class="md-form form-group">
								                <input type="text" class="form-control" id="inputMiddleNameMD" placeholder="Middle Name">
								                <label for="inputMiddleNameMD">Middle Name</label>
								            </div>
								        </div>
								        <!-- Grid column -->

												<!-- Grid column -->
								        <div class="col-md-4">
								            <!-- Material input -->
								            <div class="md-form form-group">
								                <input type="text" class="form-control" id="inputLastNameMD" placeholder="Last Name">
								                <label for="inputLastNameMD">Last Name</label>
								            </div>
								        </div>
								        <!-- Grid column -->
								  </div><br>
								  <!-- Grid row -->
									<!-- Grid row --><br>
									<div class="form-row">
										<!-- Grid column -->
										<div class="col-md-4">
												<!-- Material input -->
												<div class="md-form form-group">
														<input type="text" class="form-control" id="inputPhoneMD" placeholder="Phone">
														<label for="inputPhoneMD">Phone</label>
												</div>
										</div>
										<!-- Grid column -->
											<!-- Grid column -->
											<div class="col-md-4">
													<!-- Material input -->
													<div class="md-form form-group">
															<input type="text" class="form-control" id="inputBirthDateMD" placeholder="Birth Date">
															<label for="inputBirthDateMD">BirthDate</label>
													</div>
											</div>
											<!-- Grid column -->
											<div class="col-md-4">
													<!-- Material input -->
													<div class="md-form form-group">
														<!-- <label for="inputGenderDateMD">Gender</label> -->
															<select class="mdb-select colorful-select dropdown-info">
															  <option value="" disabled>Gender</option>
															  <option value="1">Male</option>
															  <option value="2">Female</option>
															</select>

													</div>
											</div>
											<!-- Grid column -->

								</div><br>
								<div class="form-row">
										<!-- Grid column -->
										<div class="col-md-4">
												<!-- Material input -->
												<div class="md-form form-group">
														<input type="text" class="form-control" id="inputEmailMD" placeholder="E-mail">
														<label for="inputEmailMD">E-mail</label>
												</div>
										</div>
										<!-- Grid column -->
										<!-- Grid column -->
										<div class="col-md-4">
												<!-- Material input -->
												<div class="md-form form-group">
														<input type="text" class="form-control" id="inputNatMD" placeholder="Nationality">
														<label for="inputNatMD">Nationality</label>
												</div>
										</div>
										<!-- Grid column -->
										<div class="col-md-4">
												<!-- Material input -->
												<div class="md-form form-group">
													<!-- <label for="inputGenderDateMD">Gender</label> -->
														<select class="mdb-select colorful-select dropdown-info">
															<option value="" disabled>Status</option>
															<option value="1">Active</option>
															<option value="2">Suspended</option>
															<option value="3">Fired</option>
															<option value="4">Applicant</option>

														</select>

												</div>
										</div>
										<!-- Grid column -->

							</div><br>
								<i class="fa fa-address-card fa-1x"></i>&nbsp;<h2>Address</h2>
								<hr><br>
								<div class="form-row"><!-- Grid row -->
								<!-- Grid column -->
								<div class="col-md-8">
										<!-- Material input -->
										<div class="md-form form-group">
												<input type="text" class="form-control" id="inputAddressMD" placeholder="Address">
												<label for="inputAddressMD">Address</label>
										</div>
								</div>
								<!-- Grid column -->
								<!-- Grid column -->
								<div class="col-md-4">
										<!-- Material input -->
										<div class="md-form form-group">
												<input type="text" class="form-control" id="inputCityMD" placeholder="City">
												<label for="inputCityMD">City</label>
										</div>
								</div>
								<!-- Grid column -->
							</div><br>
							<!-- Grid row -->

								    <button type="submit" class="btn btn-primary btn-md pull-right">Save</button>
								</form>


             </div><!--/tab-pane-->
             <div class="tab-pane" id="payinfo">
							 <div class="form-row">
								<!-- Grid column -->
									<div class="col-md-4">
											<!-- Material input -->
											<div class="md-form form-group">

											</div>
									</div>
									<!-- Grid column -->
									<!-- Grid column -->
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

									 <div class="box-part text-center">

											 <i class="fa fa-money fa-3x" aria-hidden="true"></i>

										 <div class="title">
											 <h4>Gross Pay</h4>
										 </div>

										 <div class="text">
											 <span>$5654345654</span>
										 </div>

										</div>
								 </div>
										<!-- Grid column -->

							</div><hr><br>

							 <h2>Pay Log</h2>
               <hr>
                  <form class="form" action="##" method="post" id="registrationForm">

										<table class="table table-hover">
										  <thead class="thead-inverse">
										    <tr>
										      <th>S/N</th>
													<th>Employee ID</th>
										      <th>Reason</th>
										      <th>Amount</th>
													<th>Date</th>
										      <th>Transaction ID</th>
										    </tr>
										  </thead>
										  <tbody>
										    <tr>
										      <th scope="row">1</th>
										      <td>EZEOL15</td>
										      <td>Salary</td>
										      <td>₦40000</td>
													<td>2018-01-02</td>
													<td>353</td>
										    </tr>
												<tr>
										      <th scope="row">2</th>
										      <td>GBJOL15</td>
										      <td>Salary</td>
										      <td>₦10000</td>
													<td>2018-01-02</td>
													<td>313</td>
										    </tr>
												<tr>
										      <th scope="row">3</th>
										      <td>FEMOL15</td>
										      <td>Salary</td>
										      <td>₦30000</td>
													<td>2018-01-02</td>
													<td>153</td>
										    </tr>
										  </tbody>
										</table>

              	</form>

             </div><!--/tab-pane-->
						 <div class="tab-pane" id="job">

               <h2></h2>

               <hr>
                  <form class="form" action="##" method="post" id="registrationForm">

              	</form>

             </div><!--/tab-pane-->
						 <div class="tab-pane" id="leaves">

               <h2></h2>

               <hr>
                  <form class="form" action="##" method="post" id="registrationForm">

              	</form>

             </div><!--/tab-pane-->
						 <div class="tab-pane" id="reports">

               <h2></h2>

               <hr>
                  <form class="form" action="##" method="post" id="registrationForm">

              	</form>

             </div><!--/tab-pane-->
						 <div class="tab-pane" id="documents">

               <h2></h2>

               <hr>
                  <form class="form" action="##" method="post" id="registrationForm">

              	</form>

             </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
		</div>

	</div>
</div>
<?php require APPROOT . '/views/inc/admfooter.php'; ?>
