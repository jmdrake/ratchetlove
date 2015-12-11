<div class="main_bg" style="padding-top:50px;">
    <div class="wrap_inn">

        <div class="grids_1_of_3">

            <div class="box_upcoming_main">

                <div class="online_ctn">Look Who Is Online.


                </div>


            </div>


        </div>


        <div class="grids_1_of_3">

            <div class="tool_tip1">
                <ul class="tt-wrapper">
                    <?php
                    $i=0;
                    if(count($fetch)==0)
                    {
                        echo "<h2 style='color: darkblue'>No online peoples to display. </h2>";
                    }
                    else
                    {
                    foreach($fetch as $row)

                    {

                    ?>
                    <li><a class="tt-sample" href="<?php echo site_url('profile_details')?>?id=<?php echo $row['user_id']; ?>"><img src="<?php echo base_url() ?>assets/images/<?php echo $row['image'] ?>" alt="" title="<?php echo $row['first_name'] ?>" /><p>Online Now</p><span><?php echo $row['first_name'] ?></span></a></li>
                    <?php
                        $i++;
                        if($i==5)
                        {
                           echo "<div class='clear'></div></ul><ul class='tt-wrapper'>";
                        }
                    }}
                    ?>

<!--                    <li><a class="tt-sample" href="#"><img src="images/onln_2.jpg" alt="" title="Sample" />Online Now<span>Sample</span></a></li>-->
<!--                    <li><a class="tt-sample" href="#"><img src="images/onln_3.jpg" alt="" title="Sample" />Online Now<span>Sample</span></a></li>-->
<!--                    <li><a class="tt-sample" href="#"><img src="images/onln_5.jpg" alt="" title="Sample" />53 Min<span>Sample</span></a></li>-->
<!--                    <li><a class="tt-sample" href="#"><img src="images/onln_6.jpg" alt="" title="Sample" />39 Min<span>Sample</span></a></li>-->
                    <div class="clear"></div>
                </ul>

            </div>


<!--            <div class="tool_tip1">-->
<!--                <ul class="tt-wrapper">-->
<!--                    <li><a class="tt-sample" href="#"><img src="images/onln_7.jpg" alt="" title="Sample" />52 Min<span>Sample</span></a></li>-->
<!--                    <li><a class="tt-sample" href="#"><img src="images/onln_8.jpg" alt="" title="Sample" />1 Hr<span>Sample</span></a></li>-->
<!--                    <li><a class="tt-sample" href="#"><img src="images/onln_9.jpg" alt="" title="Sample" />1 Hr<span>Sample</span></a></li>-->
<!--                    <li><a class="tt-sample" href="#"><img src="images/onln_10.jpg" alt="" title="Sample" />1 Hr<span>Sample</span></a></li>-->
<!--                    <li><a class="tt-sample" href="#"><img src="images/onln_11.jpg" alt="" title="Sample" />1 Hr<span>Sample</span></a></li>-->
<!--                    <div class="clear"></div>-->
<!--                </ul>-->
<!---->
<!--            </div>-->

        </div>
<!---->
<!--        <div class="grids_1_of_3">-->
<!---->
<!--            <div class="grid_1_of_3 images_1_of_3">-->
<!---->
<!---->
<!--                <p>Suspendisse eu metus in odio pellentesque porttitor. Donec ac erat ut ipsum egestas vehicula et vitae orci.Mauris sollicitudin ligula eu massa sollicitudin in cursus erosblandit. Proin placerat felis non justo fringilla at ullamcorper-->
<!--                   </p>-->
<!--            </div>-->
<!--            <div class="grid_1_of_3 images_1_of_3">-->
<!--                <p>Suspendisse eu metus in odio pellentesque porttitor. Donec ac erat ut ipsum egestas vehicula et vitae orci.Mauris sollicitudin ligula eu massa sollicitudin in cursus erosblandit. Proin placerat felis non justo fringilla at ullamcorper-->
<!--                  </p>-->
<!--            </div>-->
<!--            <div class="grid_1_of_3 images_1_of_3">-->
<!--                <p>Suspendisse eu metus in odio pellentesque porttitor. Donec ac erat ut ipsum egestas vehicula et vitae orci.Mauris sollicitudin ligula eu massa sollicitudin in cursus erosblandit. Proin placerat felis non justo fringilla at ullamcorper-->
<!--                  </p>-->
<!--            </div>-->
<!--            <div class="clear"></div>-->
<!--        </div>-->
    </div>
</div>
<!-- start top_grid -->
<div class="top_grid_bg">