<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- Mirrored from htmlstream.com/preview/unify-v1.9.4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Apr 2016 16:48:01 GMT -->

    <?php $this->load->view('partials/header') ?>

<div class="container content">		
<div class="col-md-3">
    <ul class="list-group sidebar-nav-v1 margin-bottom-40" id="sidebar-nav-1">
        
	<li class="list-group-item" style="background-color: #3498db; padding:9px; color: white;"><i class="fa fa-user" ></i> Groups</li>
            
        <?php 
            if(isset($records))
            {
                foreach($records as $rec)
                { 
        ?>
<!--            <li class="list-group-item" >-->
                <table class="table">
                    <tr>
                        <td class="dl-horizontal"><a href="<?php echo site_url('GroupController/get?i=' .$rec->GroupId)?>"><i class="fa fa-group"></i> <?php echo $rec->Name; ?></a></td>
                        <td class="dl-horizontal"><a class="btn btn-danger btn-xs" href="<?php echo site_url('GroupController/delGroup/'.$rec->GroupId.'') ?> "><i class="fa fa-trash-o"></i> Delete</a></td>
                    </tr>
                    
                </table>
<!--            </li>-->
        <?php 
                }
            }
        ?>
        <li class="list-group-item" style="padding: 10px;">
            <form action="<?php echo site_url('GroupController/insertData') ?>" method="post">
            <input type="text" name="groupname" placeholder="Group Name"/>
            <button type="submit" value="save" class="btn btn-success btn-xs"><i class="fa fa-check"></i>Insert</button>
            </form>
        </li>
    </ul>
</div>
		
     <div class="col-md-9">       
	<div class="panel panel-blue margin-right-40">
            <div class="panel-heading">
		<h3 class="panel-title"><i class="fa fa-user"></i> Group Table</h3>
            </div>
            <div class="panel-body" >
		<table class="table">
			<thead>
				<tr>
                                    <th>Contact Name</th>
                                    <th>Number</th>
                                    <th>Group Name</th>
				</tr>
			</thead>
                        <tbody>
                            <?php
                                if(isset($record))
                                {
                                    foreach($record as $recs){ 
                            ?>
                            <tr>
                                <td><?php echo $recs->contact_name; ?></td>
                                <td><?php echo $recs->number; ?></td>
                                <td><?php echo $recs->group_name; ?></td>
                                <td class="hidden-sm"></td>
                                <td></td>
                                <td><a class="btn btn-danger btn-xs" href="<?php echo site_url('GroupController/deleteData/'.$recs->Contact_ContactId.'') ?> "><i class="fa fa-trash-o"></i> Delete</a></td>
                            </tr>
                          
                            <?php 
                                    }
                                } 
                            ?>
                        </tbody>
		</table>
            </div>
	</div>
    </div>
</div>

        
		
    <?php $this->load->view('partials/footer') ?>
                
</body>

<!-- Mirrored from htmlstream.com/preview/unify-v1.9.4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Apr 2016 16:48:46 GMT -->
</html>
