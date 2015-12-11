
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

            <div id="header-contact">
                <ul class="list none">
                    <li><span class="icon-envelope"></span>  <a href="<?php echo site_url('profile/viewprofile');?>">My Profile  </a> </li>
                    <li>    <a href="<?php echo site_url('profile/edit');?>">Edit Profile</a></li><li>      Help  </li> <li> <a href="<?php echo site_url()?>/logout">Logout</a></li>
                </ul>
            </div>

            <div class="cssmenu">
                <ul>
                    <?php $page=$this->uri->segment(1); ?>
                    <li  <?php if($page=="messages"){echo 'class="active"';} ?>><a href="<?php echo site_url('messages') ?>">Ratchet Mail</a></li>
                    <li><a href="#"> Date Night</a></li>
                    <li  <?php if($page=="search_controller"){echo 'class="active"';} ?>><a href="<?php echo site_url('search_controller') ?>">Search</a>

                    </li>
                    <li   <?php if($page=="online"){echo 'class="active"';} ?>><a href="<?php echo site_url('online') ?>"> Online(<?php $id=$this->session->userdata('userid');
                            $data=array('status'=>1);
                            echo count($this->site_common->select_where_multiple('ratchet_register',$data));?>)  </a></li>
                    <li><a href="#"> Ratchet View </a></li>
                    <li  <?php if($page=="upgrade"){echo 'class="active"';} ?>><a href="<?php echo site_url('upgrade');?>" >Upgrade</a></li>
                    <div class="clear"></div>
                </ul>
            </div>
            <div class="clear"></div>
            <div class="top-nav">
                <nav class="clearfix">
                    <ul>
                        <li><a href="#">Ratchet Mail</a></li>
                        <li><a href="#"> Date Night</a></li>
                        <li><a href="#">Search</a>

                        </li>
                        <li  class="active"><a href="<?php echo site_url('online') ?>"> Online(52143)  </a></li>
                        <li><a href="#"> Ratchet View </a></li>
                        <li><a href="#">Upgrade</a></li>
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
<!-- start mian -->
<div class="main_bg" style="padding-top:50px;">
<div class="wrap_inn">

<div class="grids_1_of_3">

<div class="edit_pf">



<div style="clear:both"></div>


<div role="tabpanel">

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Message</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Sent Message</a></li>


</ul>

<!-- Tab panes -->
<div class="tab-content">
<div role="tabpanel" class="tab-pane active" id="home">


    <div class="total_msg">
        <div class="totl_frst_bx">
            <div class="sent_to">
<!--                <input name="" type="checkbox" value="">-->
                <h1>From</h1>
            </div>


            <div class="subject">
                <h1>Subject&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1>
            </div>

            <div class="last_online">
             <a href="" class="confirm" id="alert"><h1>Last Online</h1></a>
            </div>

            <div class="read">
                <h1>Read</h1>
            </div>

        </div>
        <div style="clear:both;"></div>
    </div><!--sub_total_msg-->

    <?php
    if(count($fetch)==0)
    {
        echo "<h2>No Mails to display </h2>";
    }
    else
    {
   foreach($fetch as $row)
   {

       echo form_open('messages/delete')
    ?>
    <div class="sub_total_msg">
        <div class="sub_totl_frst_bx">
            <div class="img_sent_to">
                <input name="id[]" type="checkbox" value="<?php echo $row['msg_id']; ?>">
                <div class="img_message"><img src="<?php echo base_url()?>assets/images/<?php echo $row['image'] ?>"> </div><!--img_message-->
                <h1><?php echo $row["first_name"] ?></h1>
                <h2><?php echo $row["date_time"] ?></h2>
            </div>

            <div class="sub_subject">
                <h1><a href="<?php echo site_url('messages/view')?>?id=<?php echo $row['user_id']; ?>">View Message</a></h1>
            </div>

            <div class="sub_last_online">
                <h1 id="error" class="confirm">Show&nbsp;&nbsp;&nbsp;</h1>
            </div>

            <div class="sub_read">
                <h1><a href="#">	Show</a></h1>
            </div>

        </div>
        <div style="clear:both;"></div>
    </div><!--sub_total_msg-->
    <?php
   }
    }
    ?>





    <div class="btn_msg"><input name="" type="submit" value="Delete Selected" class="msg_btn">
        <h1>Messages to deleted users will not show here!</h1>
    </div>

<?php echo form_close(); ?>
    <div style="clear:both;"></div>

</div>






<div role="tabpanel" class="tab-pane" id="profile">

    <div class="total_msg">
        <div class="totl_frst_bx">
            <div class="sent_to">
<!--                <input name="" type="checkbox" value="">-->
                <h1>Send To</h1>
            </div>


            <div class="subject">
                <h1>Subject&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1>
            </div>

            <div class="last_online">
                <h1>Last Online</h1>
            </div>

            <div class="read">
                <h1>Read</h1>
            </div>

        </div>
        <div style="clear:both;"></div>
    </div><!--sub_total_msg-->



 <?php
    if(count($fetch2)==0)
    {
        echo "<h2>No Mails to display </h2>";
    }
    else
    {
   foreach($fetch2 as $row)
   {
    echo form_open('messages/delete')
    ?>
    <div class="sub_total_msg">

        <div class="sub_totl_frst_bx">
            <div class="img_sent_to">

                <input name="id[]" type="checkbox" value="<?php echo $row['msg_id']; ?>">
                <div class="img_message"><img src="<?php echo base_url()?>assets/images/<?php echo $row['image'] ?>">  </div><!--img_message-->
                <h1><?php echo $row["first_name"] ?></h1>
                <h2><?php echo $row["date_time"] ?></h2>
            </div>

            <div class="sub_subject">
                <h1><a href="<?php echo site_url('messages/view')?>?id=<?php echo $row['user_id']; ?>">View Message</a></h1>
            </div>

            <div class="sub_last_online">
               <h1> <a href="#"id="error" class="confirm"> Show&nbsp;&nbsp;&nbsp;</a></h1>
            </div>

            <div class="sub_read">
                <h1><a href="#">	Show</a></h1>
            </div>

        </div>
        <div style="clear:both;"></div>
    </div><!--sub_total_msg-->

  <?php
   }
	}
	?>


    <div class="btn_msg"> <input name="submit" type="submit" value="Delete Selected" class="msg_btn">
        <h1>Messages to deleted users will not show here!</h1>
    </div>
    <?php echo form_close(); ?>


    <div style="clear:both;"></div>






</div>


</div>

</div>













</div><!--edit_pf-->


</div>



<div style="clear:both"></div>

</div>
<div style="clear:both"></div>
</div>
<!-- start top_grid -->
<div class="top_grid_bg">

    <!-- start mid_grid --><!-- start mid_grid --><!-- start testimonial  --><!-- start testimonial  -->
    <div class="clear"></div>
    <!-- start testimonial  --><!-- start footer_top  -->
    <div class="footer_top_bg">
        <div class="wrap">
            <div class="footer_top">
                <footer>
                    <li><a href="#">American Dating</a>  l</li>
                    <li><a href="#">Traditional Dating</a>l</li>
                    <li><a href="#">Rural Dating</a>l</li>
                    <li><a href="#">Christian Dating</a>l</li>
                    <li><a href="#">Senior Dating</a></li>
                    <div class="clearfix"></div>
                    <li><a href="#">Member Login</a>l</li>
                    <li><a href="#">Success Stories</a>l</li>
                    <li><a href="#">Terms & Conditions</a>l</li>
                    <li><a href="#">Privacy</a>l</li>
                    <li><a href="#">Support</a></li>

                    <p>&copy;2015  Ratchet Love  &nbsp;&nbsp;  All Rights Reserved</p>

                </footer>
            </div>
        </div>
    </div>
    <!-- end footer  -->

    <script src="<?php echo base_url()?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
</body>
</html>