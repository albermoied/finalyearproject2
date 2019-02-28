<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<?php $this->load->view('partials/header') ?>
		
<!--=== Profile ===-->
		<div class="container content profile">
			<div class="row">
				<!--Left Sidebar-->

				<!--End Left Sidebar-->

				<!-- Profile Content -->
				<div class="col-md-9">
					<div class="profile-body margin-bottom-20">
						<div class="tab-v1">
							<ul class="nav nav-justified nav-tabs">
								<li class="active"><a data-toggle="tab" href="#profile">Edit Profile</a></li>
<!--								<li><a data-toggle="tab" href="#passwordTab">Change Password</a></li>-->
							</ul>
							<div class="tab-content">
								<div id="profile" class="profile-edit tab-pane fade in active">
									<h2 class="heading-md">Manage your Name, ID and Email Addresses.</h2>
									<p>Below are the name and email addresses on file for your account.</p>
									<br>
                                                                        <?php echo isset($success)? "<div class='alert alert-success'>" . $success . "</div>" : ''; ?>
                                                                        <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                                                                        
                                                                        <form class="sky-form" id="sky-form4" action="<?php echo site_url('SettingsController/editProfile')?>" method="post">
									<dl class="dl-horizontal">
										<dt><strong>Full Name </strong></dt>
										<dd>
                                                                                    <section>
                                                                                        
                                                                                        <label class="input">
                                                                                            <i class="icon-append fa fa-pencil"></i>
                                                                                            <input type="text" name="name" value="<?php echo set_value('name', $this->session->userdata('name')); ?>"/>
											
                                                                                        </label>
											
                                                                                    </section>    
										</dd>
										
										<dt><strong>Organisation </strong></dt>
										<dd>
                                                                                    <section>
                                                                                        
                                                                                        <label class="input">
                                                                                            <i class="icon-append fa fa-pencil"></i>
                                                                                            <input type="text" name="organization" value="<?php echo set_value('organization', $this->session->userdata('org')); ?>"/>
											
                                                                                        </label>
											
                                                                                    </section> 
                                                                                </dd>
										
										<dt><strong> Email Address </strong></dt>
										<dd>
                                                                                    <section>
                                                                                        
                                                                                        <label class="input">
                                                                                            <i class="icon-append fa fa-pencil"></i>
                                                                                            <input type="text" name="email" value="<?php echo set_value('email', $this->session->userdata('email')); ?>"/>
											
                                                                                        </label>
											
                                                                                    </section>
                                                                                </dd>
										
										<dt><strong>Phone Number </strong></dt>
										<dd>
                                                                                    <section>
                                                                                        
                                                                                        <label class="input">
                                                                                            <i class="icon-append fa fa-pencil"></i>
                                                                                            <input type="text" name="contact" value="<?php echo set_value('contact', $this->session->userdata('contact')); ?>"/>
											
                                                                                        </label>
											
                                                                                    </section>
                                                                                        
										</dd>
										
									</dl>
									<button type="button" class="btn-u btn-u-default">Cancel</button>
									<button type="submit" class="btn-u">Save Changes</button>
                                                                    </form>
                                                                </div>
                                                                
								<div id="passwordTab" class="profile-edit tab-pane fade">
									<h2 class="heading-md">Manage your Security Settings</h2>
									<p>Change your password.</p>
									<br>
                                                                        <?php echo isset($success)? "<div class='alert alert-success'>" . $success . "</div>" : ''; ?>
                                                                        <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                                                                        
									<form class="sky-form" id="sky-form4" action="<?php echo site_url('SettingsController/editCred')?>" method="post">
										<dl class="dl-horizontal">
											<dt>Username</dt>
											<dd>
												<section>
                                                                                        
                                                                                                    <label class="input">
                                                                                                        <i class="icon-append fa fa-pencil"></i>
                                                                                                        <input type="text" name="username" value="<?php echo set_value('username', $this->session->userdata('username')); ?>"/>
											
                                                                                                    </label>
											
                                                                                                </section>
											</dd>
											<dt>Enter your password</dt>
											<dd>
												<section>
													<label class="input">
														<i class="icon-append fa fa-pencil"></i>
                                                                                                                <input type="password" id="password" name="password" value="<?php echo set_value('username', $this->session->userdata('password')); ?>">
														
													</label>
												</section>
											</dd>
											<dt>Confirm Password</dt>
											<dd>
												<section>
													<label class="input">
														<i class="icon-append fa fa-pencil"></i>
														<input type="password" name="passconf" placeholder="Confirm password" value="<?php echo set_value('username', $this->session->userdata('password')); ?>">
														
													</label>
												</section>
											</dd>
										</dl>
										
										<br>
										
										<button type="button" class="btn-u btn-u-default">Cancel</button>
										<button type="submit" class="btn-u">Save Changes</button>
									</form>
								</div>
                                                            
							</div>
						</div>
					</div>

				</div>
				<!-- End Profile Content -->
			</div><!--/end row-->
		</div>
		<!--=== End Profile ===-->

		<?php $this->load->view('partials/footer') ?>
</body>

<!-- Mirrored from htmlstream.com/preview/unify-v1.9.4/page_profile_settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Apr 2016 17:25:59 GMT -->
</html>
