
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
                <h1>Message&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1>
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
                <h1><a href="<?php echo site_url('messages/view')?>?id=<?php echo $row['to_id']; ?>&msgid=<?php echo $row['msg_id']; ?>">View Message</a></h1>
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
                <h1>Message&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1>
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
<!--                <h1><a href="--><?php //echo site_url('messages/view')?><!--?id=--><?php //echo $row['to_id']; ?><!--&msgid=--><?php //echo $row['msg_id']; ?><!--">View Message</a></h1>-->
                <h1><a href="<?php echo site_url('messages/view2')?>?id=<?php echo $row['to_id']; ?>&msgid=<?php echo $row['msg_id']; ?>">View Message</a></h1>

            </div>

            <div class="sub_last_online">
               <a href="<?php echo site_url('messages/lastonline')?>?id=<?php echo $row['to_id']; ?>&msgid=<?php echo $row['msg_id']; ?>"><h1>Show</h1></a>&nbsp;&nbsp;&nbsp;
            </div>

            <div class="sub_read">
                   <a href="<?php echo site_url('messages/read')?>?id=<?php echo $row['to_id']; ?> &msgid=<?php echo $row['msg_id'];?>"><h1>	Show</h1></a>
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
    <?php echo form_close();  ?>


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
