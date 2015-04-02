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
    <script>
        $(document).on('submit', '#tradeEmailForm', function(){
            $.post(
                $(this).attr("action"),
                $(this).serialize(),
                function(return_data){
                    if(return_data == "success")
                    {
                        $("#tradEmailResponse").html("<h3><center>Successful Submission, thank you for your interest</center></h3>");
                    }
                }, "json"
            );
            return false;
        })

        $(document).on('change', 'input.content', function(){
            if($(this).val().length > 0)
            {
                $(this).attr("aria-describedby", "inputSuccess2Status");
                $(this).parent().removeClass("has-error");
                $(this).parent().addClass("has-success");

            }else{
                $(this).parent().removeClass("has-success");
                $(this).parent().addClass("has-error");
            }
        });
//        $(document).on('change', 'input.content_email', function(){
//            var email = $("#email").val();
//            var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
//            if (!filter.test(email.value)) {
//                $(this).parent().removeClass("has-success");
//                $(this).parent().addClass("has-error");
//            } else {
//                $(this).attr("aria-describedby", "inputSuccess2Status");
//                $(this).parent().removeClass("has-error");
//                $(this).parent().addClass("has-success");
//            }
//
//        });

    </script>
</head>
<body>

<div class="container-fluid viewport">

    <!-- HEADER ===================	 -->
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <a href="http://lvl-usa.com"><img src="assets/img/lvl_logo_6.png" class="img-responsive center-block"></a>
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

    <!-- BLOCK TOOL + EMAIL LEADS -->

    <div class='row regLogin'>
        <div class="col-sm-8 col-sm-offset-2">
            <div class='regInfo'>
                <p>The integrator order entry system and cut sheet generator is not yet available.<br>  To be notified when this tool launches, kindly enter your email below.</p>
            </div>
            <div id="tradEmailResponse"></div>
            <div style="margin-top:50px;" class="row">
                <div class="col-sm-10 col-sm-offset-1">
                <form class="form-inline" action="/tradeEmail" id="tradeEmailForm" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control content" name="name" id="name" placeholder="Jane Doe" style="margin-left:10px;" required>
                    </div>
                    <div class="form-group">
                        <label for="company">Company</label>
                        <input type="text" class="form-control" name="company" id="company" placeholder="ABC Development" style="margin-left:10px;">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control content_email" name="email" id="email" placeholder="jane.doe@example.com" style="margin-left:10px;" required>
                    </div>
                    
                    <button type="submit" class="inlineBtn btn btn-sm">Submit Email</button>
                </form> 
                </div> 
            </div>
        </div>

    </div>




    <!-- END BLOCK TOOL + EMAIL LEADS     -->


    <!-- LOGIN REGISTRATOIN CONTENT START -->
<!-- 
    <div class='row regLogin'>
        <div class='col-sm-8 col-sm-offset-2'>
            <div class='regInfo'>
                <p><strong>With our integrator order entry system and cut sheet generator, trade professionals can:</strong></p><br>
                <ul>
                    <li>Select and customize standard Meljac keypads and outlets up to 5.7” (144 mm) in length</li>
                    <li>Add selections to a project order</li>
                    <li>Download accompanying product cut sheets</li>
                    <li>Request a price quote for the order</li>
                </ul><br>
                <p>For any plates larger than 5.7” (144 mm) or customization options/products not currently available through the order entry system, please contact <a href=/contact>LVL-USA</a>.</p>
                <p>All Meljac electrical hardware is made-to-order with lead times of eight to ten weeks.  The proprietary back boxes included with any order ship when LVL-USA receives a deposit amount equal to half of the total order.</p>
            </div>
        </div>
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
 -->
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