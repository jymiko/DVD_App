<h1>Edit Your Account</h1>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Customer Name :</label>
        <input type="text" name="c_name" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Customer Email :</label>
        <input type="text" name="c_email" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Customer Country :</label>
        <input type="text" name="c_country" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Customer City :</label>
        <input type="text" name="c_city" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Customer Contact :</label>
        <input type="text" name="c_contact" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Customer Address :</label>
        <input type="text" name="c_address" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Customer Image :</label>
        <input type="file" name="c_image" class="form-control" required><br>
        <img src="customer_images/girls.jpeg" width="100" height="100" class="img-responsive">
    </div>
    <div class="text-center">
        <button name="update" class="btn btn-primary">
            <i class="fa fa-user-md"></i> Update Now
        </button>
    </div>
</form>