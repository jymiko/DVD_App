            <div class="col-md-9" id="cart">
                <div class="box">
                    <form action="cart.php" method="post" enctype="multipart-from-data">
                        <h1>Shopping Cart</h1>
                        <p class="text-muted">You currently have 3 item(s) on your cart</p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="2">Product</th>
                                        <th>Quantity</th>
                                        <th>Unit Price</th>
                                        <th colspan="1">Delete</th>
                                        <th colspan="2">Sub Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="admin/product_images/1.jpg" class="img-responsive"> 
                                        </td>
                                        <td>
                                            <a href="">The Avengers ( 2012 )</a>
                                        </td>
                                        <td>
                                            <p>2</p>
                                        </td>
                                        <td>
                                            <p>Rp.35.000,00</p>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="remove[]">
                                        </td>
                                        <td>
                                            <p>Rp.70.000</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="admin/product_images/1.jpg" class="img-responsive"> 
                                        </td>
                                        <td>
                                            <a href="">The Avengers ( 2012 )</a>
                                        </td>
                                        <td>
                                            <p>2</p>
                                        </td>
                                        <td>
                                            <p>Rp.35.000,00</p>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="remove[]">
                                        </td>
                                        <td>
                                            <p>Rp.70.000</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="admin/product_images/1.jpg" class="img-responsive"> 
                                        </td>
                                        <td>
                                            <a href="">The Avengers ( 2012 )</a>
                                        </td>
                                        <td>
                                            <p>2</p>
                                        </td>
                                        <td>
                                            <p>Rp.35.000,00</p>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="remove[]">
                                        </td>
                                        <td>
                                            <p>Rp.70.000</p>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="5">Total</th>
                                        <th colspan="2">Rp.210.000</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="box-footer">
                            <div class="pull-left">
                                <a href="index.php" class="btn btn-default">
                                    <i class="fa fa-chevron-left"></i> Continue Shopping
                                </a>
                            </div>
                            <div class="pull-right">
                                <button class="btn btn-default" type="submit" name ="update" value="Update Cart">
                                    <i class="fa fa-refresh"></i> Update Cart
                                </button>
                                <a href="checkout.php" class="btn btn-primary">
                                    Process to Checkout
                                    <i class="fa fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                <div id="row same-height-row">
                    <div class="col-md-3 col-sm-6">
                        <div class="box same-height headline">
                            <h3 class="text-center">You also like these Products</h3>
                        </div>
                    </div>
                    <div class="center-responsive col-md-3 col-sm-6">
                        <div class="product same-height">
                            <a href="detail.php">
                                <img src="admin/product_images/3.jpg" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="detail.php">Avengers Age of Ultron</a></h3>
                                <p class="price">Rp.40.000,00</p>
                            </div>
                        </div>
                    </div>
                    <div class="center-responsive col-md-3 col-sm-6">
                        <div class="product same-height">
                            <a href="detail.php">
                                <img src="admin/product_images/3.jpg" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="detail.php">Avengers Age of Ultron</a></h3>
                                <p class="price">Rp.40.000,00</p>
                            </div>
                        </div>
                    </div>
                    <div class="center-responsive col-md-3 col-sm-6">
                        <div class="product same-height">
                            <a href="detail.php">
                                <img src="admin/product_images/3.jpg" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="detail.php">Avengers Age of Ultron</a></h3>
                                <p class="price">Rp.40.000,00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box" id="order-summary">
                    <div class="box-header">
                        <h3>Order Summary</h3>
                    </div>
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo esse accusantium temporibus eius asperiores ullam consequuntur perspiciatis expedita veritatis, corrupti debitis alias, tempora impedit suscipit minima eos! Amet, accusantium cum?
                    </p>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Order Subtotal</td>
                                    <th>Rp.210.000</th>
                                </tr>
                                <tr>
                                    <td>Shipping and handling</td>
                                    <th>Rp.30.000</th>
                                </tr>
                                <tr>
                                    <td>Tax</td>
                                    <td>Rp.0</td>
                                </tr>
                                <tr class="total">
                                    <td>Total </td>
                                    <th>Rp.240.000</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>