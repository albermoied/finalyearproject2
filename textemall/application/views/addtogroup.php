<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<?php $this->load->view('partials/header') ?>
    
<div class="container content">       
    <div class="panel panel-blue margin-bottom-40">		
	<div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-user"></i>Add Contact to Group</h3>
	</div>
            
	<div class="panel-body" style="padding: 20px 90px 20px 150px !important;">
            <?php echo isset($success)? "<div class='alert alert-success'>" . $success . "</div>" : ''; ?>
            <?php echo isset($fail)? "<div class='alert alert-danger'>" . $fail . "</div>" : ''; ?>
            <form method="post" name="form1" action="<?php echo site_url('GroupController/addContact') ?>">
                <table class="table">
                    
                        <thead>
                                <tr>
					<th>Select</th>
					<th>Name</th>
					<th>Contact</th>
					
				</tr>
			</thead>
                        
			<tbody>
                                
                                <?php if(isset($records))
                                      {
                                            foreach($records as $rec)
                                            {
				?>
				<tr>    
                                        <td><input type="checkbox" name="contact[]" value="<?php echo $rec->ContactId; ?>"/></td>
					<td class="dl-horizontal"><?php echo $rec->Name; ?></td>
					<td class="dl-horizontal"><?php echo $rec->ContactNo; ?></td>
                                        
                                        
                                <?php       }
                                      }
                                ?>
<!--                                <button type="submit" class="btn-u btn-default">Add</button>-->
                                        
                                
			</tbody>
		</table>
<!--            </form>-->
	<div style='float: right;'>
<!--<form method="post" name="form2" action="<?php //echo site_url('GroupController/addContact') ?>">            -->
<select required name="groupdropdown" class="btn-u btn-default">
    <option default selected>Select Group</option>
  <?php foreach($record as $rec){ ?>
    <option value="<?php echo $rec->GroupId;?>" > <?php echo $rec->Name; ?></option>
        <?php } ?>
</select>
            <button type="submit" class="btn-u btn-default">Add</button>
    

        </div>
</form>
        </div>
</div>
</div>

     


		<!-- End Content Part -->
                
                <?php $this->load->view('partials/footer') ?>

</body>

<!-- Mirrored from htmlstream.com/preview/unify-v1.9.4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Apr 2016 16:48:46 GMT -->
</html>
