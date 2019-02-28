<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<?php $this->load->view('partials/header') ?>
		
<div class="container content">
		
<div class="panel panel-blue margin-bottom-40">	
	<div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-user"></i> Contact Table</h3>
	</div>
        
	<div class="panel-body" style="padding: 20px 90px 20px 150px !important;">
                <?php echo isset($not)? "<div class='alert alert-danger'>" . $not . "</div>" : ''; ?>
                <?php echo isset($ins)? "<div class='alert alert-success'>" . $ins . "</div>" : ''; ?>
                <?php echo isset($upd)? "<div class='alert alert-success'>" . $upd . "</div>" : ''; ?>
                <?php echo isset($del)? "<div class='alert alert-success'>" . $del . "</div>" : ''; ?>
                <table class="table">
                        <thead>
                                <tr>
					<th></th>
					<th>Name</th>
					<th>Contact</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
                                <?php if(isset($records))
                                      {
                                            foreach($records as $rec)
                                            {
				?>
				<tr>
                        <form action="<?php echo site_url('ContactController/editData/'.$rec->ContactId.'') ?>" method="post">
                                        <td></td>
					<td class="dl-horizontal"><input type="text" name="name" value="<?php echo $rec->Name; ?>"/></td>
					<td class="dl-horizontal"><input type="text" name="number" value="<?php echo $rec->ContactNo ?>"/></td>
                                        <td><a class="btn btn-danger btn-xs" href="<?php echo site_url('ContactController/deleteData/'.$rec->ContactId.'') ?> "><i class="fa fa-trash-o"></i> Delete</a>
                                            <button class="btn btn-warning btn-xs" type="submit"><i class="fa fa-pencil"></i>Update</button></td>
                        </form>              
                                </tr>
                                <?php       }
                                      }
                                ?>
                                <form action="<?php echo site_url('ContactController/insertData') ?>" method="post">
                                        <tr>    <td></td>
                                                <td class="dl-horizontal"><input type="text" name="name" placeholder="Contact Name"/></td>
                                                <td class="dl-horizontal"><input type="text" name="number" placeholder="Contact Number"/></td>
                                                <td><button type="submit" value="save" class="btn btn-success btn-xs"><i class="fa fa-check"></i>Insert</button></td>
                                                                         
                                        </tr>
                                </form>
			</tbody>
		</table>
	</div>
</div>
        
        <?php echo isset($error)? "<div class='alert alert-danger'>" . $error . "</div>" : ''; ?>
        <a class="btn-u btn-u-blue" href="<?php echo site_url('ContactController/addtogroup') ?>">Add Contact To Group</a>
   
</div>
		<!-- End Content Part -->
<?php $this->load->view('partials/footer') ?>

</body>

<!-- Mirrored from htmlstream.com/preview/unify-v1.9.4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Apr 2016 16:48:46 GMT -->
</html>
