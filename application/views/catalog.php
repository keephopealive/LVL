<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>LVL USA</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
        <div class="col-sm-4">
            <a href="/about" class='btn btn-lg btn-block'>ABOUT</a>
        </div>
        <div class="col-sm-4">
            <a href="/products"><button class='btn btn-lg btn-block'>GALLERY</button></a>
        </div>
        <div class="col-sm-4">
            <a href="/catalog" class='btn btn-lg btn-block'>CATALOG</a>
        </div>
    </div>

    <!-- END NAVBAR ================= -->


    <!-- CONTENT START -->

    <div class='row catalog top50'>
        <h3 class='center-block'>Request a Catalog</h3>
        <h2><?= $this->session->flashdata('update_msg');?></h2>
        <form class='form-horizontal' action="/requestCatalog" method="post">
            <div class='col-sm-7 col-sm-offset-4 catalogRadio'>
                <div class='radio'>
                    <label>
                        <input type='radio' name='delivery_method' class='digital' id='optionsRadios1' value='digital'>
                        I would like access to a digital copy.
                    </label>
                </div>
                <div class='radio'>
                    <label>
                        <input type='radio' name='delivery_method' class='mailed' id='optionsRadios2' value='mail'>
                        Please send me a catalog via FedEx
                    </label>
                </div>
            </div>
            <div class="requestForm">

            </div>

            <div class='form-group'>
                <div class='col-sm-offset-4 col-sm-10'>
                    <button type='submit' class='btn btnSmall'>Request Catalog</button>
                </div>
            </div>
        </form>
    </div>
    <!-- CONTENT END -->


    <!-- BOTTOM NAV ======================== -->
    <div class="row contactFaq">
        <div class="col-sm-4">
            <a href="/trade" class='lvl-nav btn btn-lg btn-block'>TRADE</a>
        </div>
        <div class="col-sm-4">
            <a href="/faq" class='lvl-nav btn btn-lg btn-block'>FAQs</a>
        </div>
        <div class="col-sm-4">
            <a href="/contact" class='lvl-nav btn btn-lg btn-block'>CONTACT</a>
        </div>
    </div>

    <!-- END BOTTOM NAV ==================== -->
<script>
    $(document).on('click', 'input.digital', function(){
        $('div.requestForm').html(""+
        "<div class='form-group'>"+
            "<label for='first_name' class='col-sm-3 col-sm-offset-1 control-label'>First Name</label>"+
            "<div class='col-sm-6'>"+
                "<input type='text' class='form-control' id='first_name' name='first_name' required>"+
            "</div>"+
        "</div>"+
        "<div class='form-group'>"+
            "<label for='last_name' class='col-sm-3 col-sm-offset-1 control-label'>Last Name</label>"+
            "<div class='col-sm-6'>"+
                "<input type='text' class='form-control' id='last_name' name='last_name' required>"+
            "</div>"+
        "</div>"+
        "<div class='form-group'>"+
            "<label for='company_name' class='col-sm-3 col-sm-offset-1 control-label'>Company Name</label>"+
            "<div class='col-sm-6'>"+
                "<input type='text' class='form-control' id='company_name' name='company_name'>"+
            "</div>"+
        "</div>"+
        "<div class='form-group'>"+
            "<label for='email' class='col-sm-3 col-sm-offset-1 control-label'>Email Address</label>"+
            "<div class='col-sm-6'>"+
                "<input type='email' class='form-control' id='email' name='email' required>"+
            "</div>"+
        "</div>"+
        "<div class='form-group'>"+
            "<label for='profession' class='col-sm-3 col-sm-offset-1 control-label'>Profession</label>"+
            "<div class='col-sm-6'>"+
                "<select name='profession' class='form-control' id='profession' name='profession'>"+
                    "<option>Architect</option>"+
                    "<option>AV Provider</option>"+
                    "<option>Builder</option>"+
                    "<option>Electrician</option>"+
                    "<option>Interior Designer</option>"+
                    "<option>Lighting Designer </option>"+
                    "<option>Private Individual </option>"+
                "</select>"+
            "</div>"+
        "</div>"+
        "<br>");
    });

    $(document).on('click', 'input.mailed', function(){
        $('div.requestForm').html(""+
        "<div class='form-group'>"+
            "<label for='first_name' class='col-sm-3 col-sm-offset-1 control-label'>First Name</label>"+
            "<div class='col-sm-6'>"+
                "<input type='text' class='form-control' id='first_name' name='first_name' required>"+
            "</div>"+
        "</div>"+
        "<div class='form-group'>"+
            "<label for='last_name' class='col-sm-3 col-sm-offset-1 control-label'>Last Name</label>"+
            "<div class='col-sm-6'>"+
                "<input type='text' class='form-control' id='last_name' name='last_name' required>"+
            "</div>"+
        "</div>"+
        "<div class='form-group'>"+
            "<label for='company_name' class='col-sm-3 col-sm-offset-1 control-label'>Company Name</label>"+
            "<div class='col-sm-6'>"+
                "<input type='text' class='form-control' id='company_name' name='company_name'>"+
            "</div>"+
        "</div>"+
        "<div class='form-group'>"+
            "<label for='email' class='col-sm-3 col-sm-offset-1 control-label'>Email Address</label>"+
            "<div class='col-sm-6'>"+
                "<input type='email' class='form-control' id='email' name='email' required>"+
            "</div>"+
        "</div>"+
        "<div class='form-group'>"+
            "<label for='profession' class='col-sm-3 col-sm-offset-1 control-label'>Profession</label>"+
            "<div class='col-sm-6'>"+
                "<select name='profession' class='form-control' id='profession' name='profession'>"+
                    "<option>Architect</option>"+
                    "<option>AV Provider</option>"+
                    "<option>Builder</option>"+
                    "<option>Electrician</option>"+
                    "<option>Interior Designer</option>"+
                    "<option>Lighting Designer </option>"+
                    "<option>Private Individual </option>"+
                "</select>"+
            "</div>"+
        "</div>"+
        "<div class='form-group'>"+
            "<label for='address' class='col-sm-3 col-sm-offset-1 control-label'>Address</label>"+
            "<div class='col-sm-6'>"+
                "<input type='text' class='form-control' id='address' name='address' placeholder='Street Address' required>"+
            "</div>"+
        "</div>"+
        "<div class='form-group'>"+
            "<label for='city' class='col-sm-3 col-sm-offset-1 control-label'>City</label>"+
            "<div class='col-sm-6'>"+
                "<input type='text' class='form-control' id='city' name='city' required>"+
            "</div>"+
        "</div>"+
        "<div class='form-group'>"+
            "<label for='state' class='col-sm-3 col-sm-offset-1 control-label'>State</label>"+
            "<div class='col-sm-6'>"+
                "<input type='text' class='form-control' id='state' name='state' required>"+
            "</div>"+
        "</div>"+
        "<div class='form-group'>"+
            "<label for='postal_code' class='col-sm-3 col-sm-offset-1 control-label'>Postal Code</label>"+
            "<div class='col-sm-6'>"+
                "<input type='text' class='form-control' id='postal_code' name='postal_code' required>"+
            "</div>"+
        "</div>"+
        "<div class='form-group'>"+
            "<label for='country' class='col-sm-3 col-sm-offset-1 control-label'>Country</label>"+
            "<div class='col-sm-6'>"+
                "<input type='text' class='form-control' id='country' name='country' required>"+
            "</div>"+
        "</div>"+
        "<div class='form-group'>"+
            "<label for='contact_number' class='col-sm-3 col-sm-offset-1 control-label'>Contact Number</label>"+
            "<div class='col-sm-6'>"+
                "<input type='text' class='form-control' id='contact_number' name='contact_number' aria-describedby='helpBlock' required>"+
                "<span id='helpBlock' class='help-block'>*Required for hard copy of catalog sent via FedEx</span>"+
            "</div>"+
        "</div>"+
        "<br>");
    });

</script>


</body>