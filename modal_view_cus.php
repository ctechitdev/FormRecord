<div class="modal fade" id="update_modal<?php echo $fetch['id']?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="edit_view_cus.php">
				<div class="modal-header">
					<h3 class="modal-title">Update Data</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
					 
							 
						 
						</div>
						<div class="form-group"> 
							<input type="hidden" name="cus_id" value="<?php echo $fetch['id']?>" class="form-control"  /> 
						</div>
						<div class="form-group">
							<label>Customer</label>
							<input type="text" name="cus_name" value="<?php echo $fetch['customername']?>" class="form-control"  >
						</div>
						<div class="form-group">
							<label>sales Person Code</label>
							<input type="text" name="sale_code" value="<?php echo $fetch['salescode']?>" class="form-control"  >
						</div>
						<div class="form-group">
							<label>PJP Day</label> 
							<select class="form-control font" name="cus_date" id ="cus_date" required>
							<option value="<?php echo $fetch['Cday']?>"> <?php echo $fetch['Cday']?> </option> 
							<option value="Monday"> Monday </option>
							<option value="Tuesday"> Tuesday </option>
							<option value="Wednesday"> Wednesday </option>
							<option value="Thursday"> Thursday </option>
							<option value="Friday"> Friday </option>
							<option value="Saturday"> Saturday </option> 
							</select>
						</div>
						 
					</div>
				</div>
				<div style="clear:both;"></div>
				<div class="modal-footer">
					<button name="update" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Update </button>
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
				</div>
				</div>
			</form>
		</div>
	</div>
</div>
 