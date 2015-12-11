

<!--/slider -->
<!-- start mian -->
<div class="main_bg" style="padding-top:50px;">
<div class="wrap_inn">

<div class="grids_1_of_3">

<div class="edit_pf">



<div style="clear:both"></div>












<div class="loginCo4">

    <h1><?php echo $fetch3['first_name'] . $fetch3['last_name'] ;?>: <?php echo $fetch3['headline'];?></h1>



<!--edit_pf_img_01-->


<div class="detail_left ">
    <div class="detail_left_in ">



        <div class="name2_three">Name</div>
        <div class="name2_detail_three">
            <?php echo $fetch3['first_name'] . $fetch3['last_name'] ;?> </div>
        <div class="name2_three">City</div>
        <div class="name2_detail_three"><?php echo $fetch3['city'];?></div>

        <div class="name2_three">Country</div>
        <div class="name2_detail_three"><?php echo $fetch3['country'];?></div>
        <div class="name2_three">Zip Code</div>
        <div class="name2_detail_three"><?php echo $fetch3['zip'];?></div>
        <div class="name2_three">Looking For</div>
        <div class="name2_detail_three"><?php echo $fetch3['looking_for'];?></div>
        <div class="name2_three">Gender</div>
        <div class="name2_detail_three"><?php echo $fetch3['gender'];?></div>
        <div class="name2_three">age</div>
        <div class="name2_detail_three"><?php echo $fetch3['age'];?></div>
        <div class="name2_three">Ethnicity</div>
        <div class="name2_detail_three"><?php echo $fetch3['ethnicity'];?></div>
        <div class="name2_three">State</div>
        <div class="name2_detail_three"><?php echo $fetch3['state'];?></div>
        <div class="name2_three">Seeking</div>
        <div class="name2_detail_three"><?php echo $fetch3['seeking'];?></div>
        <div class="name2_three">Height</div>
        <div class="name2_detail_three"><?php if($fetch3['height']==null){echo "N/A";} else {echo $fetch3['height'];}?></div>

        <div class="name2_three">Hair Color</div>
        <div class="name2_detail_three"><?php echo $fetch3['hair_color'];?></div>


        <div class="name2_three">Eye Color</div>
        <div class="name2_detail_three"><?php echo $fetch3['eye_color'];?></div>
        <div class="name2_three">Body Type</div>
        <div class="name2_detail_three"><?php echo $fetch3['body_type'];?></div>








        <div class="fieldName_one"></div><div class="pwd_fg_pwd"><div class="rpwd_min"><span></span></div><div class="rpwd_min"></div></div>
        <div class="fieldName_one"></div>
        <div style="clear:both"></div>










        <div style="clear:both"></div>

        <div class="pf_edit_btn">

        </div>


    </div><!--prof_detail_left_in-->















    <div class="detail2_left_in">






        <div class="name3_three">Own Car</div>
        <div class="name3_detail_three"><?php echo $fetch3['own_car'];?></div>
        <div class="name3_three">Education</div>
        <div class="name3_detail_three"><?php echo $fetch3['education'];?></div>
        <div class="name3_three">second Language</div>
        <div class="name3_detail_three"><?php echo $fetch3['second_language'];?></div>
        <div class="name3_three">Want Children</div>
        <div class="name3_detail_three"><?php echo $fetch3['want_children'];?></div>
        <div class="name3_three">Have Children</div>
        <div class="name3_detail_three"><?php echo $fetch3['have_children'];?></div>
        <div class="name3_three">Marital Status</div>
        <div class="name3_detail_three"><?php echo $fetch3['marital_status'];?></div>
        <div class="name3_three">Smoke</div>
        <div class="name3_detail_three"><?php echo $fetch3['smoke'];?></div>
        <div class="name3_three">Drug</div>
        <div class="name3_detail_three"><?php echo $fetch3['drug'];?></div>
        <div class="name3_three">Drink</div>
        <div class="name3_detail_three"><?php echo $fetch3['drink'];?></div>
        <div class="name3_three">Religion</div>
        <div class="name3_detail_three"><?php echo $fetch3['religion'];?></div>
        <div class="name3_three">Profession</div>
        <div class="name3_detail_three"><?php echo $fetch3['profession'];?></div>
        <div class="name3_three">Ambitious</div>
        <div class="name3_detail_three"><?php echo $fetch3['ambitious'];?></div>
        <div class="name3_three">income</div>
        <div class="name3_detail_three"><?php echo $fetch3['income'];?></div>




        <div class="fieldName_one"></div><div class="pwd_fg_pwd"><div class="rpwd_min"><span></span></div><div class="rpwd_min"></div></div>
        <div class="fieldName_one"></div>
        <div style="clear:both"></div>










        <div style="clear:both"></div>

        <div class="pf_edit_btn">

        </div>


    </div><!--prof_detail_left_in-->








    <div style="clear:both"></div>

</div><!--prof_detail_left-->



<div class="profile_img">










    <div class="feature-grid-left">
        <a href="#"><img src="<?php echo base_url()?>assets/images/<?php echo $fetch3['image'];?>"></a>
    </div>

    <div class="feature-grid-right">
        <h4 style="line-height: 42px;">Send a Quick Message!</h4>
          <?php echo form_open('messages/send')?>
          
          <input type="hidden"  name="uid" value="<?php echo $fetch3['uid'] ?>"/>
        <div class="contact_one_field"><textarea name="msg" cols="" rows="" class="contact_one_field_two_in"></textarea></div>
        <div class="contact_btn"><input name="submit" type="submit" class="contact_btn_in" value="Send Quick Msg"></div>
          <?php form_close(); ?>
    </div>






















</div>

<?php
$str=$fetch3['interests'];

$interests= (explode(",",$str));
$count=count($interests);

?>

<div id="white-box">

    <span class="txtBlue">Interests</span>
    <div id="profile_interests">

        <ul class="nav">
            <?php for($i=0;$i<$count;$i++)
            {?>

                <li class="text-lg"><a href="#"><?php echo $interests[$i];?></a></li>

            <?php } ?>


        </ul>

    </div>

</div>


<div id="white-box">

    <span class="txtBlue">About Me</span>
    <p> <?php echo $fetch3['description'];?></p>


</div>

</div><!--loginCo3-->








</div><!--edit_pf-->


</div>



<div style="clear:both"></div>

</div>
<div style="clear:both"></div>
</div>
<!-- start top_grid -->
