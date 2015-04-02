<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>LVL USA</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-theme.min.css">
    <script src="/assets/js/jquery-1.11.2.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Cinzel:400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Gilda+Display' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

</head>
<body>

<div class="container-fluid viewport">

    <!-- HEADER ===================	 -->
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <a href="http://test.lvl-usa.com"><img src="assets/img/lvl_logo_6.png" class="img-responsive center-block"></a>
        </div>
        <div class="col-sm-8 col-sm-offset-2" style="margin-top:25px;">
            <p class="headTag">Exclusive Distributor of <span style="color:rgb(238,34,43);">Meljac</span> in North America</p>
        </div>
    </div>
    <!-- <div class="row header parent">
        <div class="col-sm-2 col-sm-offset-2">
            <img src="assets/img/lvl_logo_6.png" class="img-responsive">
        </div>
        <div class="col-sm-6 topBorder">
            <p class="headTag pull-right">Exclusive Distributor of <span style="color:rgb(238,34,43);">Meljac</span> in North America</p>
        </div>
    </div> -->


    <!-- END HEADER ================= -->

    <!-- NAVBAR ===================== -->

    <div class="row navbar">
<!--        <div class="col-sm-4">-->
<!--            <a href="/about" class='btn btn-lg btn-block'>ABOUT</a>-->
<!--        </div>-->
<!--        <div class="col-sm-4">-->
<!--            <a href="/products"><button class='btn btn-lg btn-block'>GALLERY</button></a>-->
<!--        </div>-->
<!--        <div class="col-sm-4">-->
<!--            <a href="/catalog" class='btn btn-lg btn-block'>CATALOG</a>-->
<!--        </div>-->
    </div>

    <!-- END NAVBAR ================= -->


    <!-- LOGIN REGISTRATOIN CONTENT START -->

    <div class='row regLogin'>
        <h3>Admin Login/Registration - Under Dev</h3>
        <div class='col-sm-4 col-sm-offset-2 top50'>
            <form method='post' action='/registration'>
                <h3>Register</h3>
                <div class='errors'>
                    <?= $this->session->flashdata('registration_msg'); ?>
                </div>
                <div class='form-group'>
                    <label class='inline'>First Name:</label>
                    <input type='text' name='first_name' class='form-control'>
                </div>
                <div class='form-group'>
                    <label class='inline'>Last Name:</label>
                    <input type='text' name='last_name' class='form-control'>
                </div>
                <div class='form-group'>
                    <label class='inline'>Email:</label>
                    <input type='email' name='email' class='form-control'>
                </div>
                <div class='form-group'>
                    <label class='inline'>Profession</label>
                    <select name='profession' class='form-control'>
                        <option>Architect</option>
                        <option>AV Provider</option>
                        <option>Builder</option>
                        <option>Electrician</option>
                        <option>Interior Designer</option>
                        <option>Lighting Designer </option>
                        <option>Private Individual </option>
                    </select>
                </div>
                <div class='form-group'>
                    <label class='inline'>Password:</label>
                    <input type='password' name='password' class='form-control'>
                </div>
                <div class='form-group'>
                    <label class='inline'>Confirm Password:</label>
                    <input type='password' name='confirm_password' class='form-control'>
                </div>
                <div class='form-group right'>
                    <input type='submit' value='Register' class='btn btn-default'>
                </div>
            </form>
        </div>
        <div class='col-sm-3 col-sm-offset-1 top50'>
            <h3>Login</h3>
            <h3><?= $this->session->flashdata('login_msg'); ?></h3>
            <form method='post' action='/login'>
                <div class='form-group'>
                    <label class='inline'>Email:</label>
                    <input type='email' name='email' class='form-control'>
                </div>
                <div class='form-group'>
                    <label class='inline'>Password:</label>
                    <input type='password' name='password' class='form-control'>
                </div>
                <div class='form-group right'>
                    <input type='submit' value='Login' class='btn btn-default'>
                </div>
            </form>
        </div>
    </div>



    <!-- CONTENT END -->


    <!-- BOTTOM NAV ======================== -->
    <div class="row contactFaq">
<!--        <div class="col-sm-4">-->
<!--            <a href="/trade" class='lvl-nav btn btn-lg btn-block'>TRADE</a>-->
<!--        </div>-->
<!--        <div class="col-sm-4">-->
<!--            <a href="/faq" class='lvl-nav btn btn-lg btn-block'>FAQs</a>-->
<!--        </div>-->
<!--        <div class="col-sm-4">-->
<!--            <a href="/contact" class='lvl-nav btn btn-lg btn-block'>CONTACT</a>-->
<!--        </div>-->
    </div>

    <!-- END BOTTOM NAV ==================== -->