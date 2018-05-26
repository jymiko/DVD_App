            <div class="col-md-9">
                <div class="box">
                    <div class="box-header">
                        <center>
                            <h2>Register a New Account</h2>
                        </center>                    
                    </div>
                    <form action="contact.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Customer Name</label>
                            <input type="text" class="form-control" name="c_name" required>
                        </div>
                        <div class="form-group">
                            <label>Customer Email</label>
                            <input type="text" class="form-control" name="c_email" required>
                        </div>
                        <div class="form-group">
                            <label>Customer Password</label>
                            <input type="password" class="form-control" name="c_pass" required>
                        </div>
                        <div class="form-group">
                            <label>Country</label>
                            <input type="text" class="form-control" name="c_country" required>
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" class="form-control" name="c_city" required>
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" name="c_contact" required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" name="c_address" required>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" name="c_image" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" name="register">
                                <i class="fa fa-user-md"></i> Register           
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>