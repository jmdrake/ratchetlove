
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
<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

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
    <style>
        .pp
        {
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="<?php echo site_url('login');?>"><img src="<?php echo base_url()?>assets/images/logo_inn.png" alt="" /></a>
		</div>	
           
          <div style="float:right;">
           <div id="header-contact">
      <ul class="list none">
       <li><span class="icon-envelope"></span>  <a href="<?php echo site_url('profile/viewprofile');?>">My Profile  </a> </li>
        <li>    <a href="<?php echo site_url('profile/edit');?>">Edit Profile</a></li>
<!--          <li>      Help  </li> -->
          <?php if($this->session->userdata('userid')!=null){ ?><li> <a href="<?php echo site_url()?>/logout">Logout</a></li><?php } ?>
      </ul>
    </div>
    <div class="clear"></div>
          	
	<div class="cssmenu">
		<ul>
            <?php $page=$this->uri->segment(1); ?>
		   <li  <?php if($page=="messages"){echo 'class="active"';} ?>><a href="<?php echo site_url('messages') ?>">Ratchet Mail</a></li>
            <li><a href="#"> Ratchet View </a></li>

            <li><a href="<?php echo site_url('date_night');?>"> Date Night</a></li>
		    <li  <?php if($page=="search_controller"){echo 'class="active"';} ?>><a href="<?php echo site_url('search_controller') ?>">Search</a>
		      
		   </li>
		   <li   <?php if($page=="online"){echo 'class="active"';} ?>><a href="<?php echo site_url('online') ?>"> Online(<?php $id=$this->session->userdata('userid');
                    $data=array('status'=>1);
                   echo count($this->site_common->select_where_multiple('ratchet_register',$data));?>)  </a></li>
		   <li  <?php if($page=="upgrade"){echo 'class="active"';} ?>><a href="<?php echo site_url('upgrade');?>" >Upgrade</a></li>
		 <div class="clear"></div>
		 </ul>
	</div>
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
                <li><a href="#"> Ratchet Love </a></li>
                <li><a href="<?php echo site_url('upgrade');?>" <?php if($page=="upgrade"){echo "active";} ?>>Upgrade</a></li>
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
<!-- start mian -->
<div class="main_bg" style="padding-top:50px;">
<div class="wrap_inn">

<div class="grids_1_of_3">

<div class="edit_pf">



<div style="clear:both"></div>


<div role="tabpanel">

<!-- Nav tabs -->
<!-- Tab panes -->
<div class="tab-content">
<div role="tabpanel" class="tab-pane active" id="home">


    <div class="total_msg">
      <div style="clear:both;"></div>
    </div><!--sub_total_msg-->
    <div class="btn_msg">
      <h1>Please <a href="<?php echo site_url('upgrade');?>" target="_blank">upgrade</a> your Profile...to view this page....</h1>
</div>
    <div style="clear:both;"></div>

</div>






<div role="tabpanel" class="tab-pane" id="profile">

    <div class="total_msg">
      <div style="clear:both;"></div>
    </div><!--sub_total_msg-->
    <div class="sub_total_msg">
      <div style="clear:both;"></div>
  </div><!--sub_total_msg-->
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
<div class="clear"></div>
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

      <div class="clearfix"></div>
            <li><a href="<?php echo site_url('login') ?>">Member Login</a>l</li>
            <li><a href="#">Success Stories</a>l</li>
            <li><a href="<?php echo site_url('terms_service') ?>">Terms & Conditions</a>l</li>
            <li><a href="#">Privacy</a>l</li>
            <li><a href="<?php echo site_url('support') ?>">Support</a></li>
      
      <p>&copy;2015  RatchetLove.com  &nbsp;&nbsp;  All Rights Reserved</p>
      
      </footer>
	</div>
</div>
</div>
  <script src="<?php echo base_url()?>assets/js/jquery.js"></script>
  <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
     
     <div style="text-align: center">
        
    <img id="load_ajax_png" src="http://sanwebe.com/assets/ajax-load-more-results/ajax-loader.gif" alt="loading" style="display: none"/>
    </div>
</div>

    
<script>
        var page_number=0;
        var total_page =null;
        var sr =0;
        var sr_no =0;
        var tab=$('tab_sel').val();


        var getReport = function(page_number){
            if(page_number==0){
                $("#previous").prop('disabled', true);}
            else{
                $("#previous").prop('disabled', false);}

            if(page_number==(total_page-1)){
                $("#next").prop('disabled', true);}
            else{
                $("#next").prop('disabled', false);}

            $("#page_number").text(page_number+1);

            $.ajax({
                url:"<?php echo base_url() ?>index.php/date_night/pagination",
                type:"POST",
                dataType: 'json',
                data:'page_number='+page_number,
                success:function(data){

                    window.mydata = data;
                    total_page= mydata[0].TotalRows;
                    $("#total_page").text(total_page);
                    var record_par_page = mydata[0].Rows;
                    $.each(record_par_page, function (key, data) {

                        sr =(key+1);
                        $("#mem").append('<div onclick="list_select('+data.uid+')" data-id="'+data.uid+'" ><img class="pp" src="<?php echo base_url() ?>/assets/images/'+data.image +'" id="'+data.uid+'"></div><p>Age:'+data.age+'</p><input type="hidden" name="uid" id="uid" value="'+data.uid+'">');
                       
                          
//alert('test');
                      

                    });
					 $("img").click(function(){
							var id=this.id;
							var tab=$('#tab_sel').val();
	   
							$.ajax({
                                     url:"<?php echo base_url() ?>index.php/date_night/tab_view",
                 type:"POST",
                 dataType: 'json',
                 data:'u_id='+id,
                 success:function(data){ window.mydata = data;


                     $('#'+tab+'').html('<img src="<?php echo base_url() ?>/assets/images/'+data.image +'" id="'+data.uid+'">');}
                                  });
							
							});

                }
            });

        };

        var search = function (str){
            if(str!=''){
//                                   $.ajax({
//                                       url:"<?php echo base_url() ?>index.php/welcome/pagination",
//                                     type:"POST",
//                                     dataType: 'json',
//                                     data:'search='+str,
//                                     success:function(data){
//                                         window.mydata = data;
//                                          total_page= mydata[0].TotalRows;
//                                         $("#total_page").text(total_page);
//                                         var record_par_page = mydata[0].Rows;
//                                          $.each(record_par_page, function (key, data) {
//                                               sr =(key+1);
//                                                $(".tb").append('<tr><td>'+sr+'</td><td>'+data.id+'</td><td>'+data.name+'</td></tr>');
//                                           });
//                                      }
//                                   });
            }
        };


        $(document).ready(function(e){

            getReport(page_number);
			
            console.log(sr);

            $("#next").on("click", function(){
                $("#mem").html("");
                page_number = (page_number+1);
                getReport(page_number);
                console.log(sr);

            });

            $("#previous").on("click", function(){
                $("#mem").html("");
                page_number = (page_number-1);
                getReport(page_number);
            });


            $("#search").on('keyup', function(){
                var str = $.trim($(this).val());

                search(str);
            });
        });
    </script>


<script>
    
 </script>


<script>
    $(document).ready(function(e){

        $( '.home' ).ready(function() {
            var id=$(this).attr('id');
            $("#tab_sel").val('home-img');

//alert($(this).attr('id'));

        });

        $(".home").click(function() {
            var id=$(this).attr('id');
            $("#tab_sel").val('home-img');

//alert($(this).attr('id'));

        });

        $(".profile").click(function() {
            var id=$(this).attr('id');
            $("#tab_sel").val('profile-img');

            //alert($(this).attr('id'));

        });

        $(".tab3").click(function() {
            var id=$(this).attr('id');
            $("#tab_sel").val('tab3-img');

//            alert($(this).attr('id'));

        });

        $(".tab4").click(function() {
            var id=$(this).attr('id');
            $("#tab_sel").val('tab4-img');

//            alert($(this).attr('id'));

        });

    });
</script>

<!-- end footer  -->
</body>
</html>