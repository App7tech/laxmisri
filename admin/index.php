<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once('includes/head.php') ?>
    </head>
    <body class="fix-header  card-no-border">
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>
        <div id="main-wrapper">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                    </div>
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <!-- Column -->
                        <div class="card ">
                            <div class="card-block little-profile text-center">
                                <h3 class="m-b-0">Laxmi Sri Art Jewellers</h3>
                                <p>Admin</p>
                                <form class="form-horizontal form-material text-left" method="post" action="login_check.php">
                                    <div class="form-group">
                                        <label for="email" class="col-md-12" style="color:#000;">Email *</label>
                                        <div class="col-md-12">
                                            <input type="email" placeholder="Enter your Email" class="form-control form-control-line" name="email" id="email" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" style="color:#000;">Password *</label>
                                        <div class="col-md-12">
                                            <input type="password" name="password" placeholder="Enter your Password" class="form-control form-control-line" required>
                                        </div>
                                    </div>
                                    <button type="submit" class="m-t-10 waves-effect waves-dark btn btn-primary btn-md btn-rounded" >Login</button>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('includes/foot.php'); ?>
    </body>
</html>
