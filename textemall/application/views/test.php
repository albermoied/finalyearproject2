<!DOCTYPE html>
<html lang="en">
 
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>public/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>public/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>public/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>public/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>public/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="<?php echo base_url(); ?>textemall/public/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>textemall/public/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>textemall/public/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<link href="<?php echo base_url(); ?>textemall/public/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo base_url(); ?>public/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>public/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>public/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>public/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?php echo base_url(); ?>textemall/public/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link href="<?php echo base_url(); ?>public/css/mystyling.css" rel="stylesheet" type="text/css"/>
    
    <?php $this->load->view('partials/header'); ?>

<div class="container content">
			<div class="row">
                            <?php echo isset($nogroup)? "<div class='alert alert-danger'>" . $nogroup . "</div>" : ''; ?>
				<!--Left Sidebar-->
<div class="col-md-3">
    <ul class="list-group sidebar-nav-v1 margin-bottom-40" id="sidebar-nav-1">
        
	<li class="list-group-item" style="background-color: #3498db; padding:9px; color: white;"><i class="fa fa-user" ></i> Groups</li>
            
        <?php foreach($records as $rec){ ?>
            <li class="list-group-item" >
                <a href="<?php echo site_url('MessageController/checkGroup/'.$rec->GroupId); ?>"><i class="fa fa-group"></i> <?php echo $rec->Name; ?></a>
            </li>
        <?php } ?>
    </ul>
</div>
				<!--End Left Sidebar-->
                                <div class="col-md-1"></div>
				<!-- Profile Content -->
                                

				<div class="col-md-6">
                                    
                                    <div class="profile-body margin-bottom-20" style="float: right; width: 500px;">
						<div class="tab-v1">
                                                    <form method="post" action="<?php echo site_url('MessageController/sendMsg') ?>">
							<ul class="nav nav-justified nav-tabs">
                                                            <li style="background-color: #3498db; padding: 10px; color: white;">Messages</li>
							</ul>
							<div class="tab-content">
								<div class="profile-edit tab-pane fade in active">
                                                    
                                                    <div style="height: 400px; overflow: auto;">
                                                    
                                                        
                                                    <?php if(isset($sentmsg))
                                                          {
                                                            foreach($sentmsg as $rec)
                                                            {
                                                    ?>
                                                                <div class="message-post-style">
                                                                    <span class="arrow-style"></span>
                                                                    <span style="display: block;">
                                                                        <?php echo $rec->SentMessage; ?>
                                                                    </span>
                                                                    <span style="padding-left: 150px ;"><?php echo $rec->Time; ?></span>
                                                                </div>
                                                <?php       }
                                                          }
                                                ?>    
                                                                    
                                                    </div>
                                                                    
                                                                        <div class="input-group">
										<input type="text" name="msg" class="form-control" placeholder="Type a message here...">
										<div class="input-group-btn">
											<button type="submit" class="btn-u"><i class="fa fa-envelope"></i></button>
										</div>
									</div>
                                                                    
                                                                </div>
                                                                
							</div>
                                                        </form>
						</div>
					</div>

				</div>
				<!-- End Profile Content -->
			</div><!--/end row-->
		</div>
    <?php $this->load->view('partials/footer') ?>

    </body>

</html>>
    
    