
    
    <!--/slider -->
<!-- start mian -->
<div class="main_bg" style="padding-top:50px;">
<div class="wrap_inn">

   <div class="grids_1_of_3">
      
      <div class="edit_pf">
       
       
       
    <div style="clear:both"></div>       
       
         
                
                
                
                
                
                
                
                
                
                
      <div class="loginCo3">
      
        <div class="profile_img">
               
                
<!--                 --><?php //foreach($fetch2 as $row)
//{
//?><!--  -->
             
      <div class="feature-grid-left"><img src="<?php echo base_url()?>assets/images/<?php echo $row['image'];?>"> </div><!--edit_pf_img_01-->
<!--      --><?php //}?><!--          -->
<!--                 --><?php //foreach($fetch2 as $row)
//{
//?><!--  --> <div class="feature-grid-right"> <h1>View Profile</h1>

<div class="profile_new_div">
   <div class="name2_three">First Name</div>
                  <div class="name2_detail_threee"><?php echo $row['first_name'];?></div>
                  <div class="name2_three">Last Name</div>
                   <div class="name2_detail_threee"><?php echo $row['last_name'];?></div>
                  
                  <div class="name2_three">City</div>
                  <div class="name2_detail_threee"><?php echo $row['city'];?></div>
                  <a href="#sizing"><h5>send message</h5></a>
</div>
 
 

<div class="vew_sm_img">
<?php if($row['galimg1']!=''){?>   
 <img src="<?php echo base_url()?>assets/images/<?php echo $row['galimg1'];?>" width="100" height="100">
 <?php }?>
 <?php if($row['galimg2']!=''){?>   
 <img src="<?php echo base_url()?>assets/images/<?php echo $row['galimg2'];?>" width="100" height="100">
 <?php }?>
 <?php if($row['galimg3']!=''){?>   
 <img src="<?php echo base_url()?>assets/images/<?php echo $row['galimg3'];?>" width="100" height="100">
 <?php }?>
 <?php if($row['galimg7']!=''){?>   
 <img src="<?php echo base_url()?>assets/images/<?php echo $row['galimg7'];?>" width="100" height="100">
 <?php }?>
 <?php if($fetch2['upgrade']==1){?>
 
 <?php if($row['galimg4']!=''){?>   
 <img src="<?php echo base_url()?>assets/images/<?php echo $row['galimg4'];?>" width="100" height="100">
 <?php }?>
 <?php if($row['galimg5']!=''){?>   
 <img src="<?php echo base_url()?>assets/images/<?php echo $row['galimg5'];?>" width="100" height="100">
 <?php }?>
 <?php if($row['galimg6']!=''){?>   
 <img src="<?php echo base_url()?>assets/images/<?php echo $row['galimg6'];?>" width="100" height="100">
 <?php }?>
 
 <?php if($row['galimg8']!=''){?>   
 <img src="<?php echo base_url()?>assets/images/<?php echo $row['galimg8'];?>" width="100" height="100">
 <?php }?>
 <?php if($row['galimg9']!=''){?>   
 <img src="<?php echo base_url()?>assets/images/<?php echo $row['galimg9'];?>" width="100" height="100">
 <?php }?>
 <?php if($row['galimg10']!=''){?>   
 <img src="<?php echo base_url()?>assets/images/<?php echo $row['galimg10'];?>" width="100" height="100">
 <?php }?>
 <?php if($row['galimg11']!=''){?>   
 <img src="<?php echo base_url()?>assets/images/<?php echo $row['galimg11'];?>" width="100" height="100">
 <?php }?>
 <?php }?>
 </div>
 
 

</div></div>
                
                  <div class="detail_leftnew">
                  <div class="detail_left_in ">
                  
                 
                  <div class="name_three">State</div>
                   <div class="name_detail_three"><?php echo $row['state'];?></div>
                   
                   
                   
                   
                    <div class="name_three">Country</div>
                   <div class="name_detail_three"><?php echo $row['country'];?></div>
                   <div class="name_three">Gender</div>
                   <div class="name_detail_three"><?php echo $row['gender'];?></div>
                   <div class="name_three">Age</div>
                   <div class="name_detail_three"><?php echo $row['age'];?></div>
                   <div class="name_three">Ethnicity</div>
                   <div class="name_detail_three"><?php echo $row['ethnicity'];?></div>
                   <div class="name_three">Seeking</div>
                   <div class="name_detail_three"><?php echo $row['seeking'];?></div>
                   
                   <div class="name_three">Have Children</div>
                   <div class="name_detail_three"><?php echo $row['have_children'];?></div>
                    <div class="name_three">Smoke</div>
                   <div class="name_detail_three"><?php echo $row['smoke'];?></div>
                    <div class="name_three">Drug</div>
                   <div class="name_detail_three"><?php echo $row['drug'];?></div>
                    <div class="name_three">Drink</div>
                   <div class="name_detail_three"><?php echo $row['drink'];?></div>
                    <div class="name_three">Religion</div>
                   <div class="name_detail_three"><?php echo $row['religion'];?></div>
                  
                  
                  
                  
                  
                  
                  
                  
                   <div class="fieldName_one"></div><div class="pwd_fg_pwd"><div class="rpwd_min"><span></span></div><div class="rpwd_min"></div></div>
                   <div class="fieldName_one"></div>
                   <div style="clear:both"></div>
                   
                   
                
                         
                          
                          
       
       

                   
         <div style="clear:both"></div>          
                   
                   <div class="pf_edit_btn">
                   
                   </div>
                   
                   
                   </div><!--prof_detail_left_in-->
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   <div class="detail2_left_in">
                  
                
              
                  
                  <div class="name_three">Zip Code</div>
                   <div class="name_detail_three"><?php echo $row['zip'];?></div>
                  <div class="name_three">I am looking for</div>
                   <div class="name_detail_three"><?php echo $row['looking_for'];?></div>
              
                  
                  <div class="name_three">Marital Status</div>
                   <div class="name_detail_three"><?php echo $row['marital_status'];?></div>
                  
                  
                   <div class="name_three">Education</div>
                   <div class="name_detail_three"><?php echo $row['education'];?></div>
                     <div class="name_three">Height</div>
                   <div class="name_detail_three"><?php echo $row['height'];?></div>
                     <div class="name_three">Hair Color</div>
                   <div class="name_detail_three"><?php echo $row['hair_color'];?></div>
                     <div class="name_three">Body Type</div>
                   <div class="name_detail_three"><?php echo $row['body_type'];?></div>
                     <div class="name_three">Eye Color</div>
                   <div class="name_detail_three"><?php echo $row['eye_color'];?></div>
                   <div class="name_three">Second Language</div>
                   <div class="name_detail_three"><?php echo $row['second_language'];?></div>
                   <div class="name_three">Ambitious</div>
                   <div class="name_detail_three"><?php echo $row['ambitious'];?></div>
                   <div class="name_three">Income</div>
                   <div class="name_detail_three"><?php echo $row['income'];?></div>
                   <div class="name_three">Pets</div>
                   <div class="name_detail_three"><?php echo $row['pets'];?></div>
                   
                   
                   
                    
<!--                  --><?php //}?>
                  
                   <div class="fieldName_one"></div><div class="pwd_fg_pwd"><div class="rpwd_min"><span></span></div><div class="rpwd_min"></div></div>
                   <div class="fieldName_one"></div>
                   <div style="clear:both"></div>
                   
                   
                
                         
                          
                          
       
       

                   
         <div style="clear:both"></div>          
                   
                   <div class="pf_edit_btn">
                   
                   </div>
                   
                   
                   </div><!--prof_detail_left_in-->
                   
                   
                   
                   
                   
                   
                   
                   
                   <div style="clear:both"></div>
                   
                  </div><!--prof_detail_left-->
                  
                   
                   
                   
                   
                </div><!--loginCo3-->          
                
                
                
                
                
                
                
       
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
