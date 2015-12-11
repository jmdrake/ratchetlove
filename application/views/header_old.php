
<!DOCTYPE HTML>
<html>
<head>
<title>Ratchet Love</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />


    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>




<link href="<?php echo base_url()?>assets/fonts/stylesheet.css" rel="stylesheet" type="text/css" />
<!--start slider -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/fwslider.css" media="all">
    <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/css3-mediaqueries.js"></script>
    <script src="<?php echo base_url()?>assets/js/fwslider.js"></script>
<!--end slider -->

   
    <script src="<?php echo base_url()?>assets/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"> </script>
    <script src="<?php echo base_url()?>assets/js/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/validationEngine.jquery.css">
    <script src="<?php echo base_url()?>assets/js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>

<!--    <script src="http://code.jquery.com/jquery-1.10.2.js" type="text/javascript" charset="utf-8"> </script>-->
<!--    <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js" type="text/javascript" charset="utf-8"> </script>-->

        <script type="text/javascript"  src="http://ipxtek.com/MI/Pay_My_Tickets/html/js/jquery-1.10.1.min.js"></script>
    <script src="http://ipxtek.com/MI/Pay_My_Tickets/html/js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">

    </script>

    <script src="http://ipxtek.com/MI/Pay_My_Tickets/html/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">

    <script type="text/javascript"  src="http://ipxtek.com/MI/Pay_My_Tickets/html/js/jquery-1.10.1.min.js"></script>
<!--    <script src="http://ipxtek.com/MI/Pay_My_Tickets/html/js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">-->
<!---->
<!--    </script>-->
<!---->
<!--    <script src="http://ipxtek.com/MI/Pay_My_Tickets/html/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">-->
<!--        <script src="//code.jquery.com/jquery-1.10.2.js"></script>-->

    <script>
        jQuery(document).ready(function(){

            jQuery("#form1").validationEngine('attach',{
                onValidationComplete: function(form, status){
                    if (status == true){
                        //alert(status);
                        myValidationFunction();
                    }
                }
            });
        });


        //return false;

    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            alert('dfd');

            $("#bookmarkme").click(function() {
                if (window.sidebar) { // Mozilla Firefox Bookmark
                    window.sidebar.addPanel(location.href,document.title,"");
                } else if(window.external) { // IE Favorite
                    window.external.AddFavorite(location.href,document.title); }
                else if(window.opera && window.print) { // Opera Hotlist
                    this.title=document.title;
                    return true;
                }
            });
    </script>

    <link rel="stylesheet" href="<?php echo base_url()?>assets/example.css">
<!--    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>-->

    <!-- This is what you need -->
    <script src="<?php echo base_url()?>assets/lib/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/lib/sweet-alert.css">
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-hover-effect.js"></script>

<!--    <script type="application/javascript">-->
<!--    document.querySelector('#error').onclick = function(){-->
<!--        swal({-->
<!--            title: " <small>Please Upgrade Your Account   </small>!",-->
<!--            text: 'To show this feature.',-->
<!--            html: true-->
<!--        });-->
<!--    };-->
<!--</script>-->



<script type="text/javascript">
//Image Hover
jQuery(document).ready(function(){
jQuery(function() {
	jQuery('ul.da-thumbs > li').hoverdir();
});
});
</script>
<!-- Add fancyBox main JS and CSS files -->
<script src="<?php echo base_url()?>assets/js/jquery.magnific-popup.js" type="text/javascript"></script>
<link href="<?php echo base_url()?>assets/css/magnific-popup.css" rel="stylesheet" type="text/css">
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
		});
		</script>
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
</head>
<body>
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="<?php echo site_url('login');?>"><img src="<?php echo base_url()?>assets/images/logo_inn.png" alt="" /></a>
		</div>
        <div class="header_rgt">

        <div id="header-contact">
      <ul class="list none">
       <li><span class="icon-envelope"></span>  <a href="<?php echo site_url('profile/viewprofile');?>">My Profile  </a> </li>
        <li>    <a href="<?php echo site_url('profile/edit');?>">Edit Profile</a></li>
<!--          <li>      Help  </li> -->
          <?php if($this->session->userdata('userid')!=null){ ?><li> <a href="<?php echo site_url()?>/logout">Logout</a></li><?php } ?>
      </ul>
    </div>
          	</div>
	<div class="cssmenu">
		<ul>
            <?php $page=$this->uri->segment(1); ?>
		   <li  <?php if($page=="messages"){echo 'class="active"';} ?>><a href="<?php echo site_url('messages') ?>">Ratchet Mail</a></li>
            <li><a href="<?php echo site_url('viewed_controller') ?>"> Ratchet View </a></li>
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
                <li  class="<?php if($page=="search_controller"){echo "active";} ?>"><a href="<?php echo site_url('online') ?>" <?php if($page=="online"){echo "active";} ?>> Online(<?php $id=$this->session->userdata('userid');
                        $data=array('status'=>1);
                        echo count($this->site_common->select_where_multiple('ratchet_register',$data))-1;?>)  </a></li>
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