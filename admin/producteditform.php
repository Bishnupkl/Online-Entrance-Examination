<div class="col-md-10">
 <form role="form" action="productprocess.php" method="POST" enctype="multipart/form-data">
							
	<div class="form-group">
		<label>Date : </label>
			<input id="date" class="form-control" placeholder="dd/mm/yyyy" name="date">
				</div>
					<div class="form-group">
						<label>Product name :</label>
							<input type="text" class="form-control" placeholder="product name" name="name">
						</div>
						<div class="form-group" >
								<label> Product Image :</label>
									<div class="input-group">
										<label class="input-group-btn">
											<span class="btn btn-primary">
											 <i class="fa fa-file-image-o" aria-hidden="true"></i> &nbsp;&nbsp;Browse&hellip; <input type="file" name="fileToUpload" style="display: none;" multiple>
												</span>
											</label>
									<input type="text" class="form-control " readonly style="height:20px;">
																	</div>
																
								</div>
																	
																
								
								<div class="form-group">
									<label>Description :</label>
									<textarea name="editor1" name="description"></textarea>
									<script>
									CKEDITOR.replace('editor1');
									</script>
								</div>
								
								
								<button type="submit" name="sub" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i> &nbsp;&nbsp;Add</button>
								<button type="reset" class="btn btn-default">Reset </button>
							</div>
							</form>