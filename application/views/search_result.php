<div class="main_bg" style="padding-top:50px;">
    <div class="wrap_inn">



        <div class="srch">
            <div class="box_upcoming_main">
                <div class="drp_bxx1">
                    <select class="slt">
                        <option>Female</option>
                        <option>Male</option>


                    </select>
                </div>

                <div class="prce_of_1">

                    <h2>Age</h2>


                    <div class="drp_bxx1">
                        <select class="slt">
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>

                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>

                            <option>9</option>
                            <option>10</option>

                        </select>
                    </div>

                </div>

                <div class="prce_of_1">

                    <h2>to</h2>


                    <div class="drp_bxx1">
                        <select class="slt">
                            <option>USA</option>


                        </select>
                    </div>

                </div>

                <div class="prce_of_1">

                    <h2>City</h2>


                    <div class="contact_one_field"><input name="" type="text" class="contact_one_field_in"></div>

                </div>
                <input name="" type="button" value="SEARCH" class="button" >
            </div>
            <!-- start popup -->
            <div id="small-dialog" class="mfp-hide">
                <div class="pop_up">
                    <h2>It is a long established fact</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic</p>
                </div>
            </div>
            <!-- end popup -->

            <h5>Search Result&nbsp;<span>- <?php echo count($fetch); ?> Results  are found </span></h5>
            <?php
            foreach($fetch as $row)
            {
            ?>
            <div class="srch_list">


                <div class="srch_para">
                    <p class="para"><a href="#"><img src="<?php if($row['image']!=null){ echo base_url()?>assets/images/<?php echo $row['image'];} else {echo base_url() ?>assets/images/no-image.png<?php } ?>" alt=""></a><h4>Here I am&nbsp;<span>&nbsp;&nbsp;&nbsp;<?php echo $row['city'] ?>, <?php echo $row['country'] ?></span></h4><?php echo $row['about_me'] ?></p>

                    <h4><?php echo $row['first_name'] ?> &nbsp;<span>&nbsp;&nbsp;&nbsp;<?php echo $row['looking_for'] ?>. </span><span style="color:#F00;">&nbsp;&nbsp;&nbsp;<?php if($row['status']==1) { ?>Online Now<?php }  ?></span></h4>


                    <div class="clear"></div>
                </div>
            </div>
            <?php
            }
            ?>










        </div>



    </div>
</div>
<!-- start top_grid -->
<div class="top_grid_bg">

    <!-- start mid_grid --><!-- start mid_grid --><!-- start testimonial  --><!-- start testimonial  -->
    <div class="clear"></div>