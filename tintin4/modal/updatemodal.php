
<div class="modal fade" id="updateitemmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">
  
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Add Stocks</h4>
      </div>
	  <form class="form-horizontal" action="updateitem.php" method="POST">
      <div class="modal-body">
			  <div class="form-group">
							<label class="control-label col-sm-2" for="itemid">Item ID :</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" id="itemid" name="itemid" placeholder="" >
							</div>
					  </div>
					   <div class="form-group">
							<label class="control-label col-sm-2" for="itemname">Item Name :</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" id="itemname" name="itemname" placeholder="" >
							</div>
					  </div>
					   <div class="form-group">
						<label class="control-label col-sm-2" for="datein">Date IN :</label>
						<div class="col-sm-10">
						  <input type="date" class="form-control" id="datein" name="datein"placeholder="" >
						</div>
					  </div>
					    <div class="form-group">
						<label class="control-label col-sm-2" for="stocks">Stocks :</label>
						<div class="col-sm-10">
						  <input type="number" class="form-control" id="stocks"name="stocks" placeholder="" >
						</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-sm-2" for="supplier">Supplier :</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" id="supplier"name="supplier" placeholder="" >
							</div>
					  </div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="price">Price :</label>
						<div class="col-sm-10">
						  <input type="number" class="form-control" id="price"name="price" placeholder="" >
						</div>
					 </div>
			
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Update changes"></input>
      </div>
	  </form>
    </div>
  </div>
</div>