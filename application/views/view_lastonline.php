<div class="main_bg" style="padding-top:50px;">
    <div class="wrap_inn">

        <div class="grids_1_of_3">

            <div class="edit_pf">
                <div class="view_msg">
                    <div class="view_msg_bx">
                        <div class="img_bx_view"><img src="<?php echo base_url() ?>assets/images/<?php echo $fetch2['image'] ?>"></div>

                        <div class="txt_bx_view">
                            <h1><span>To :&nbsp;&nbsp;</span><?php echo $fetch2['first_name'] ?></h1>
                            <h2><span>Sent Date :&nbsp;&nbsp;</span> <?php echo $fetch2['date_time'] ?></h2><div style="clear: both"></div>
                            <p>Last seen : <?php echo $fetch2['time'] ?></p>

                           <div class="msg_veiw_right"> <h3><a href="<?php echo site_url('profile_details')?>?id=<?php echo $fetch2['uid']; ?>">View Profile </a></h3></div><!--msg_veiw_right-->

                       
                    </div>

                </div>

            </div>
        </div><!--edit_pf-->

        <div style="clear:both;"></div>
    </div>



    <div style="clear:both"></div>

</div>
<div style="clear:both"></div>
</div>
<!-- start top_grid -->
<div class="top_grid_bg">