<!-- start mian -->
<div class="main_bg" style="padding-top:50px;">
<div class="wrap_inn">

<div class="grids_1_of_3">

<div class="edit_pf">



<div style="clear:both"></div>


<div role="tabpanel">

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Users Who Viewed Me</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Users Who I Viewed</a></li>


</ul>

<!-- Tab panes -->
<div class="tab-content">
<div role="tabpanel" class="tab-pane active" id="home">


    


    <div class="sub_total_msg">
        <div class="sub_totl_frst_bx" style="border:none;"> 











            <div class="tool_tip1" style="margin-top:0px; margin-bottom:0px;">
                <ul class="tt-wrapper" style="margin-left:0px; padding-top:0px; padding-bottom:0px;"> 
                
                
                   <?php $i=0; foreach($fetch2 as $row)
{ $i++;
?>
                                        <li>
                                       <a href="<?php echo site_url('profile_details')?>?id=<?php echo $row['owner']; ?>" class="tt-sample"><img  alt="" src="<?php echo base_url()?>assets/images/<?php echo $row['ownerimg'];?>"></a>
                                      <br><br><br><br><br>
                                      <?php if($row['status']==1)
									  {?>
                                        <p>Online Now</p>
                                        <?php }?>
                                         <?php if($row['upgrade']==1)
									  {?>
                                        <p><a href="<?php echo site_url('viewed_controller/upgrade')?>?id=<?php echo $row['owner']; ?>">Show</a></p> </li>
                                        <?php } else {?>
                                        <p><a href="<?php echo site_url('viewed_controller/notupgrade')?>">Show</a></p> </li>
                                        <?php }?>
                                        
 <?php if($i==5){echo "</ul><ul class='tt-wrapper' style='margin-left:0px; padding-top:0px; padding-bottom:0px;'>";} } ?>
                    
                    
                    <div class="clear"></div>
                </ul>


            </div>






            <!--<div class="tool_tip1" style="margin-top:0px; margin-bottom:0px;">
                <ul class="tt-wrapper" style="margin-left:0px; padding-bottom:0px;"> 
                                        <li><img title="test1" alt="" src="../../assets/images/fb.jpg"><p>Online Now</p><p>Show</p></li>
                                        <li><img title="kinnr" alt="" src="../../assets/images/1427561412016-2129410438.jpg"><p>Online Now</p><p>Show</p></li>
                                        <li><img title="Damita" alt="" src="../../assets/images/image.jpg"><p>Online Now</p><p>Show</p></li>
                                        <li><img title="chrome " alt="" src="../../assets/images/mens1.png"><p>Online Now</p><p>Show</p></li>
                    					<li><img title="kinnr" alt="" src="../../assets/images/1427561412016-2129410438.jpg"><p>Online Now</p><p>Show</p></li> 
                    
                    <div class="clear"></div>
                </ul>


            </div>
-->
















            

          <div style="clear:both;"></div> 

        </div>
        <div style="clear:both;"></div>
    </div><!--sub_total_msg-->
   




    


    <div style="clear:both;"></div>

</div>






<div role="tabpanel" class="tab-pane" id="profile">

    
    
    
    
    <div class="sub_totl_frst_bx" style="border:none;"> 











            <div class="tool_tip1" style="margin-top:0px; margin-bottom:0px;">
                <ul class="tt-wrapper" style="margin-left:0px; ">
                
                <?php $j=0; foreach($fetch1 as $row)
{ $j++;
?>
           <li><a href="<?php echo site_url('profile_details')?>?id=<?php echo $row['whoview']; ?>" class="tt-sample"><img alt="" src="<?php echo base_url()?>assets/images/<?php echo $row['viewimg'];?>"></a></li>
<?php if($j==5){echo " <div class='clear'></div></ul><ul class='tt-wrapper' style='margin-left:0px; padding-top:50px;'>";} }?>

                    <div class='clear'></div>

                </ul>


            </div>






           <!-- <div class="tool_tip1">
                <ul class="tt-wrapper" style="margin-left:0px;">
                                        <li><a href="../../index.php/profile_details?id=51" class="tt-sample"><img title="test1" alt="" src="../../assets/images/fb.jpg"></a></li>
                                        <li><a href="../../index.php/profile_details?id=41" class="tt-sample"><img title="kinnr" alt="" src="../../assets/images/1427561412016-2129410438.jpg"></a></li>
                                        <li><a href="../../index.php/profile_details?id=52" class="tt-sample"><img title="Damita" alt="" src="../../assets/images/image.jpg"></a></li>
                                        <li><a href="../../index.php/profile_details?id=53" class="tt-sample"><img title="chrome " alt="" src="../../assets/images/mens1.png"></a></li>
                    					<li><a href="../../index.php/profile_details?id=41" class="tt-sample"><img title="kinnr" alt="" src="../../assets/images/1427561412016-2129410438.jpg"></a></li>
                    
                    <div class="clear"></div>
                </ul>


            </div>
-->
















            

          <div style="clear:both;"></div> 

        </div>



    

 


    
   


    <div style="clear:both;"></div>






</div>


</div>

</div>













</div><!--edit_pf-->


</div>



<div style="clear:both"></div>

</div>
<div style="clear:both"></div>
