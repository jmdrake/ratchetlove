<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Ratchet Love</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->

    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url() ?>assets/css/ratchetlove.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url() ?>assets/fonts/stylesheet.css" rel="stylesheet" type="text/css">

   
<script src="<?php echo base_url()?>assets/js/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
        <link href="<?php echo base_url()?>assets/css/validationEngine.jquery.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url()?>assets/js/languages2/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
         
        <script src="<?php echo base_url()?>assets/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript">
         jQuery(document).ready(function(){
              // binds form submission and fields to the validation engine
              jQuery("#form1").validationEngine();
         });
        </script>
        
    </head>

</head>
<body>







<div class="container-fluid"  style="max-width:1318px; margin-left:auto; margin-right:auto;">
    <div class="row-fluid">
        <div class="span12">
            <div class="span7"></div>
            <div class="span5">
                <div class="logo"><a href="#"><img src="<?php echo base_url() ?>assets/images/logo.png" alt="logo"></a></div>
                
                
                <div class="new_mem_login"><a href="<?php echo site_url('login') ?>">Member Login</a></div><!--new_mem_login-->
                
         <div style="clear:both"></div>       
              <div id="form">
                    <form action="<?php echo site_url('home');?>" method="post" name="form1" id="form1">
                    <h1>Sign up today it's Free..</h1>
                    <label>Enter your email address here</label><input name="email" id="email" type="text" class="formfields"  data-validation-engine="validate[required,custom[email,ajax[ajaxemailCall]]]">
                    <label>Enter your zip or post code here</label><input name="zip" type="text" class="formfields" data-validation-engine="validate[required],custom[number]">
                    <label>Looking for </label><select name="looking" class="formselect"  data-validation-engine="validate[required]">
                        <option value="1">I am a woman looking for a man</option>
                        <option value="2">I am a man looking for a woman</option>
                        <option value="3">I am a man looking for a man</option>
                        <option value="4">I am a woman looking for a woman</option>
                    </select>
                    <label>Enter your age here</label><input name="age" type="text" class="formfields" data-validation-engine="validate[required],custom[number]">
                    <div class="clearfix"></div>
                    <input name="agree" type="checkbox" value="" style="float:left;" data-validation-engine="validate[required]">
                    <p>  I certify that I am over 18 and have read and accepted the <br><a href="<?php echo site_url('terms_service') ?>">Terms of Service</a> </p>
                    <div align="center"><input name="submit" type="submit" value="Sign Up Now" class="formbtn"></div>
                    </form>
                </div><!--form-->
            </div><!--span5-->

            <div class="clearfix"></div>

            <footer>

                <div class="clearfix"></div>
                <li><a href="<?php echo site_url('login') ?>">Member Login</a>l</li>
                <li><a href="#">Success Stories</a>l</li>
                <li><a href="<?php echo site_url('terms_service') ?>">Terms & Conditions</a>l</li>
                <li><a href="#">Privacy</a>l</li>
                <li><a href="<?php echo site_url('support') ?>">Support</a></li>

                <p>&copy;2015  RatchetLove.com  &nbsp;&nbsp;  All Rights Reserved</p>

            </footer>

        </div><!--span12-->
    </div><!--row-fluid-->
</div><!--container-fluid-->









<!--<script src="--><?php //echo base_url() ?><!--assets/js/jquery.js"></script>-->
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>





</body>
</html>