            <div class="col-md-3">
                <?php
                include("includes/sidebar.php");
                ?>
            </div>
            <div class="col-md-9">
                <div class="box">
                    <?php 
                        if (isset($_GET['my_orders'])){
                            include("my_orders.php");
                        }
                        if(isset($_GET['pay_offline'])){
                            include("pay_offline.php");
                        }
                        if(isset($_GET['edit_account'])){
                            include("edit_account.php");
                        }
                        if(isset($_GET['change_pass'])){
                            include("change_pass.php");
                        }
                        if(isset($_GET['delete_account'])){
                            include("delete_account.php");
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>