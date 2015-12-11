
<!DOCTYPE HTML>
<html>
<head>
    <title>Ratchet Love</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />

    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url()?>assets/fonts/stylesheet.css" rel="stylesheet" type="text/css" />

    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/blitzer/jquery-ui.css" type="text/css" />

    <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>

    <script src="<?php echo base_url()?>assets/js/jquery.easy-confirm-dialog.js"></script>
<style type="text/css">
    .confirm
    {
       margin: auto;
    }
</style>
    <!--nav-->
    <script>
        $(function() {
            var pull 		= $('#pull');
            menu 		= $('nav ul');
            menuHeight	= menu.height();

            $(pull).on('click', function(e) {
                e.preventDefault();
                menu.slideToggle();
            });

            $(window).resize(function(){
                var w = $(window).width();
                if(w > 320 && menu.is(':hidden')) {
                    menu.removeAttr('style');
                }
            });
        });
    </script>



    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" >
        $(document).ready(function() {
            $('div.img_n').hide();
            $('.slidingDiv').hide();
            $('.first').show();
            $(".trigger").click(function() {
                var id =$(this).attr('rel');
                var test ='#'+id;

                if($('#services').is(':visible'))
                {
                    $('#services').slideUp('slow');
                }

                if($(this).next().is(':visible'))
                {
                    $('div.slidingDiv').slideUp('slow');

                    $('div.img_n').hide();

                }
                else
                {

                    $('div.slidingDiv').slideUp('slow');
                    $(this).next().animate( 6000, 'linear').fadeIn(1000);
                    $(test).animate( 6000, 'linear').fadeIn(1000);
                }
                $('div.img_n').hide();
                $('.img_n').removeClass('active34');
                $(test).addClass('active34');
                $('div.active34').show();

            });
        });
    </script>

<!--    <script>-->
<!--        document.querySelector('#error').onclick = function(){ -->
<!--            swal({-->
<!--                title: "HTML <small>Title</small>!",-->
<!--                text: 'A custom <span style="color:#F8BB86">html<span> message.',-->
<!--                html: true-->
<!--            });-->
<!--        };-->
<!--    </script>-->


    <script type="text/javascript">
        $(document).ready(function() {
            $(".confirm").easyconfirm();
            $("#alert").click(function() {
                alert("You approved the action");
            });

            $("#yesno").easyconfirm({locale: { title: 'Select Yes or No', button: ['No','Yes']}});
            $("#yesno").click(function() {
                alert("You clicked yes");
            });

            $(".customDialog").easyconfirm({dialog: $("#question")});

            $("#svSE").easyconfirm({locale: $.easyconfirm.locales.svSE});
            $("#svSE").click(function() {
                alert("Tack för att du godkände detta!");
            });

            $("#french").easyconfirm({locale: {
                title: 'Etes-vous sûr?',
                text: 'Etes-vous sûr que vous souhaitez effectuer cette action?',
                button: ['Annuler',' Confirmer'],
                closeText: 'fermer'
            }});
            $("#french").click(function() {
                alert("Je vous remercie de votre soumission!");
            });

        });
    </script>
</head>
<body>

<div class="header_bg">
    <div class="wrap">
        <div class="header">
            <div class="logo">
                <a href="<?php echo site_url('login'); ?>"><img src="<?php echo base_url()?>assets/images/logo_inn.png" alt="" /></a>
            </div>
            <div class="header_rgt">
            <div id="header-contact">
                <ul class="list none">
                    <li><span class="icon-envelope"></span>  <a href="<?php echo site_url('profile/viewprofile');?>">My Profile  </a> </li>
                    <li>    <a href="<?php echo site_url('profile/edit');?>">Edit Profile</a></li>
<!--                    <li>      Help  </li> -->
                    <li> <a href="<?php echo site_url()?>/logout">Logout</a></li>
                </ul>
            </div>
            </div>
            <div class="cssmenu">
                <ul>
                    <?php $page=$this->uri->segment(1); ?>
                    <li  <?php if($page=="messages"){echo 'class="active"';} ?>><a href="<?php echo site_url('messages') ?>">Ratchet Mail</a></li>
                    <li><a href="#"> Ratchet View </a></li>

                    <li><a href="<?php echo site_url('date_night');?>"> Date Night</a></li>
                    <li  <?php if($page=="search_controller"){echo 'class="active"';} ?>><a href="<?php echo site_url('search_controller') ?>">Search</a>

                    </li>
                    <li   <?php if($page=="online"){echo 'class="active"';} ?>><a href="<?php echo site_url('online') ?>"> Online(<?php  $sid=$this->session->userdata('userid');$gender=$this->session->userdata('gender');

                            if($sid==null)
                            {
                                $sid=0;
                            }
                            echo count($this->site_common->online($sid,$gender)); ?>)  </a></li>
                    <li  <?php if($page=="upgrade"){echo 'class="active"';} ?>><a href="<?php echo site_url('upgrade');?>" >Upgrade</a></li>
                    <div class="clear"></div>
                </ul>
            </div>
            <div class="clear"></div>
            <div class="top-nav">
                <nav class="clearfix">
                     <ul>
                <?php $page=$this->uri->segment(1); ?>
                <li><a href="<?php echo site_url('messages') ?>" class="<?php if($page=="messages"){echo "active";} ?>">Ratchet Mail</a></li>
                <li><a href="<?php echo site_url('date_night');?>"> Date Night</a></li>
                <li><a href="<?php echo site_url('search_controller') ?>"<?php if($page=="search_controller"){echo "active";} ?>>Search</a>

                </li>
                         <li   <?php if($page=="online"){echo 'class="active"';} ?>><a href="<?php echo site_url('online') ?>"> Online(<?php  $sid=$this->session->userdata('userid');$gender=$this->session->userdata('gender');

                                 if($sid==null)
                                 {
                                     $sid=0;
                                 }
                                 echo count($this->site_common->online($sid,$gender)); ?>)  </a></li>
                <li><a href="<?php echo site_url('viewed_controller') ?>"> Ratchet View </a></li>
                <li><a href="<?php echo site_url('upgrade'); ?>" <?php if($page=="upgrade"){echo "active";} ?>>Upgrade</a></li>
                <div class="clear"></div>
            </ul>
				<a href="#" id="pull">Menu</a>
                </nav>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<!-- start slider -->

<!--/slider -->
