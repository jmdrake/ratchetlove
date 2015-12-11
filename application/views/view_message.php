<div class="main_bg" style="padding-top:50px;">
    <div class="wrap_inn">

        <div class="grids_1_of_3">

            <div class="edit_pf">
                <div class="view_msg">
                    <div class="view_msg_bx">
                        <div class="img_bx_view"><img src="<?php echo base_url() ?>assets/images/<?php echo $fetch['image'] ?>"></div>

                        <div class="txt_bx_view">
                            <h1><span>From :&nbsp;&nbsp;</span><?php echo $fetch['first_name'] ?></h1>
                            <h2><span>Sent Date :&nbsp;&nbsp;</span> <?php echo $fetch['date_time'] ?></h2><div style="clear: both"></div>
                            <p><?php echo $fetch['message'] ?></p>

                           <div class="msg_veiw_right"> <h3><a href="<?php echo site_url('profile_details')?>?id=<?php echo $fetch['uid']; ?>">View Profile </a></h3></div><!--msg_veiw_right-->

                        </div>
   							<?php echo form_open('messages/send')?>
                                      <input type="hidden"  name="uid" value="<?php echo $fetch['uid'] ?>"/>

                        <div class="txt_msgg">
                            <textarea name="msg" cols="" rows="" class="txt_msggs_bx"></textarea>
                            <input name="submit" type="submit" class="msg_view_btnn" value="SEND QUICK REPLY">
                            <?php form_close(); ?>
                        </div>
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