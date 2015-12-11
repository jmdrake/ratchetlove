<div class="main_bg" style="padding-top:50px;">
    <link href="//visionpartners.byethost33.com/ratchetphp/assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <input type="hidden" id="session" value="<?php echo $this->session->userdata('userid') ?>">
    <div class="wrap_inn">
        <div class="container-fluid"  style="max-width:1318px; margin-left:auto; margin-right:auto;"> 
            <div class="row-fluid">
                <div class="span12">
                    <div class="span3">
                        <div class="experiance">   
                            <div class="hd">
                                <h1>Look Who Is <br>
                                    Invited You</h1></div>
                            <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                                <?php
    if(count($fetch)==0)
{
                                ?>
                                <h4>Nothing to display</h4>
                                <?php
}
                                ?>
                                <div class="panel panel-default"  id="style-5">
                                    <div class="force-overflow"></div>
                                    <?php
foreach($fetch as $row)
{

                                    ?>
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#<?php echo $row['inv_id']; ?>">

                                                <div class="dt_img">

                                                    <img src="<?php echo base_url() ?>/assets/images/<?php echo $row['image']; ?>" alt="">
                                                </div>
                                                <div class="dt_ttle">
                                                    <h1><?php echo $row['first_name']; ?></h1>
                                                </div>
                                            </a>
                                            <div style="clear:both"></div>
                                        </h4>
                                        <div style="clear:both"></div>
                                    </div>
                                    <div id="<?php echo $row['inv_id']; ?>" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="dt_img_lrg">
                                                <img src="<?php echo base_url() ?>assets/images/<?php echo $row['image']; ?>" alt="">
                                            </div>
                                            <div class="timeCol">
                                                <form name="form1" method="post" action="<?php echo base_url() ?>index.php/date_night/inv_action">
                                                    <div class="fieldName">Type:</div>
                                                    <div class="fieldCol"><?php echo $row['type'] ?></div>
                                                    <div class="fieldName">Place:</div>
                                                    <div class="fieldCol"><?php echo $row['place'] ?></div>
                                                    <div class="fieldName">Time:</div>
                                                    <div class="fieldCol"><?php echo $row['d_time'] ?></div>
                                                    <div class="fieldName">Date:</div>
                                                    <div class="fieldCol"><?php echo $row['date'] ?></div>
                                                    <div class="fieldName">Message:</div>
                                                    <div class="fieldCol"><?php echo $row['message'] ?></div>
                                                    <input type="hidden" id="aid" value="<?php echo $row['inv_id'] ?>">
                                                    <input type="hidden" name="uid" value="<?php echo $row['inv_id'] ?>">
                                                    <div class="buttn-bx">
                                                        <input class="btn-new3" type="submit" value="Accept"  name="accept">
                                                        <input class="btn-new3" type="submit" value="Reject" name="reject">
                                                    </div>
                                                </form>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
}
                                    ?>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="experiance">
                            <div class="hd">
                                <h1>Look Who Is <br>
                                    Accepted You</h1></div>
                            <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                                <?php
if(count($fetch)==0)
{
                                ?>
                                <h4>Nothing to display</h4>
                                <?php
}
                                ?>
                                <div class="panel panel-default"  id="style-5">
                                    <div class="force-overflow"></div>
                                    <?php
foreach($fetch2 as $row)
{
                                    ?>
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a   href="<?php echo site_url('profile_details')?>?id=<?php  echo $row['pid']; ?>">
                                                <div class="dt_img">
                                                    <img src="<?php echo base_url() ?>/assets/images/<?php echo $row['image']; ?>" alt="">
                                                </div>
                                                <div class="dt_ttle">
                                                    <h1><?php echo $row['first_name']; ?></h1>
                                                </div>
                                            </a>
                                            <div style="clear:both"></div>
                                        </h4>
                                        <div style="clear:both"></div>
                                    </div>
                                    <?php
}
                                    ?>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="span6">
                        <div class="date-left-section">
                            <h1>Date Night</h1>
                            <p>Our Date Night feature allows you to post your profile in an ad for a casual meet and greet or night out on the town,
                                users can also leave a positive or a negative reviews on profiles regarding their date night experience. </p>
                            <div id="msg" class="date-left-section"></div>
                            <div class="tab-section">

                                <h1>Select Type of Date</h1>

                                <div role="tabpanel">

                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active home" ><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Romantic Date</a></li>
                                        <li role="presentation" class="profile"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Dutch Date</a></li>
                                        <li role="presentation" class="tab3"><a href="#tab3" aria-controls="profile" role="tab" data-toggle="tab">Hang Out Friends</a></li>
                                        <li role="presentation" class="tab4"><a href="#tab4" aria-controls="profile" role="tab" data-toggle="tab">Ratchet Love</a></li>

                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home">
                                            <p>A date where two people are interesting in a romantic experience with hopes

                                                to find love</p>

                                            <div class="main-bx">
                                                <div class="img-bx" id='home-img'></div>
                                                <div class="want-btn"><input type="button" value="Invite Me" class="want-button"></div>
                                                <div class="buttn-bx">
                                                    <input name="" type="button" value="No" class="btn-new1">

                                                    <input name="" type="button" value="YES" class="btn-new1" data-toggle="modal" data-target="#myModal">

                                                </div>
                                            </div>

                                        </div>


                                        <!-- Modal -->
                                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Invite</h4>
                                                    </div>
                                                    <div class="modal-body">


                                                        <div class="timeCol">


                                                            <form action="" method="post" name="form1">
                                                                <div class="fieldName">Place:</div>
                                                                <div class="fieldCol"><input type="text" class="timecontroll" id="place" name="place" kl_virtual_keyboard_secure_input="on"></div>
                                                                <div class="fieldName">Time:</div>
                                                                <div class="fieldCol"><input type="text" class="timecontroll" id="time" name="time" kl_virtual_keyboard_secure_input="on"></div>

                                                                <div class="fieldName">Date:</div>
                                                                <div class="fieldCol"><input type="text" class="timecontroll" id="date" name="date" kl_virtual_keyboard_secure_input="on"></div>

                                                                <div class="fieldName">Message:</div>
                                                                <div class="fieldCol"><textarea  id="message" class="message"></textarea></div>

                                                                <div style="clear:both"></div>        

                                                                <div class="buttn_bx_two">
                                                                    <input type="button" name="" value="Invite" id="invite" class="btn-new3"  data-dismiss="modal" aria-label="Close">
                                                                    <input type="button" name="" value="Cancel" id="cancel" class="btn-new3" class="close" data-dismiss="modal" aria-label="Close" style="margin-right:0px;">

                                                                    <div style="clear:both"></div>
                                                                </div>
                                                            </form>
                                                            <div class="clearfix"></div>



                                                        </div>






                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal -->




                                        <div role="tabpanel" class="tab-pane" id="profile">
                                            <p>A casual meet and greet with no intentions</p>
                                            <div class="main-bx">
                                                <div class="img-bx" id='profile-img'></div>
                                                <div class="want-btn"><input type="button" value="Invite Me" class="want-button"></div>
                                                <div class="buttn-bx">
                                                    <input name="" type="button" value="No" class="btn-new1">

                                                    <input name="" type="button" value="YES" class="btn-new1" data-toggle="modal" data-target="#myModal">
                                                </div>
                                            </div>

                                        </div>


                                        <div role="tabpanel" class="tab-pane" id="tab3">
                                            <p>Just friend meet and greet with hopes to find like-minded friends</p>
                                            <div class="main-bx">
                                                <div class="img-bx" id="tab3-img"></div>
                                                <div class="want-btn"><input type="button" value="Invite Me" class="want-button"></div>
                                                <div class="buttn-bx">
                                                    <input name="" type="button" value="No" class="btn-new1">

                                                    <input name="" type="button" value="YES" class="btn-new1" data-toggle="modal" data-target="#myModal">
                                                </div>
                                            </div>

                                        </div>

                                        <div role="tabpanel" class="tab-pane" id="tab4">
                                            <p>A date where two people who are open to all possibilities</p>
                                            <div class="main-bx">
                                                <div class="img-bx"  id="tab4-img"></div>
                                                <div class="want-btn"><input type="button" value="Invite Me" class="want-button"></div>
                                                <div class="buttn-bx">
                                                    <input name="" type="button" value="No" class="btn-new1">

                                                    <input name="" type="button" value="YES" class="btn-new1" data-toggle="modal" data-target="#myModal">
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <input type="hidden" id="tab_sel">
                                </div>

                            </div>


                            <div class="btm_bx">
                                <h3>How to use?</h3>
                                <p>Use the following instructions to use the Ratchet love date night.</p>
                                <li><strong>Look Who Wants To Meet You</strong> - The list of peoples who is interested in date night.<br> Choose a guy you want.</li>
                                <li><strong>Select Type Of Date </strong>- Ratchet love offer different type Date night. Choose one as you like. </li>
                                <li>Click Yes under Invite Me. Fill the form and click on invite.</li>
                                <li><strong>Look Who Is Invited You</strong>- The list of peoples who is invited you. <br> Click on the image/ name to expand the menu. You can accept or reject the invitations</li>
                                <li><strong>Look Who Is Accepted You</strong>- The list of peoples who is accepted your invitation.<br> Click on the image / name to visit their profile </li>


                            </div>
                        </div>
                    </div>


                    <input type="hidden" id="type">

                    <div class="span3">

                        <div class="date-right-bx">
                            <h1>Look Who Wants <br>
                                To Meet You</h1>

                            <div class="img-box1" id="mem">
                                <!--<img id="mem" src="" alt="">-->
                                <!--<p>Age :  19</p>-->
                            </div>



                            <!--<div class="img-box1">
<img src="<?php echo base_url()?>assets/images/onln_8.jpg" alt="">
<p>Age :  26</p>
</div>


<div class="img-box1">
<img src="<?php echo base_url()?>assets/images/onln_7.jpg" alt="">
<p>Age :  26</p>-->






                        </div>

                        <div class="next">
                            <input name="" id="previous" type="button" value="Previous" class="next-button">
                            <input name="" id="next" type="button" value="Next" class="next-button">

                        </div>


                    </div>

                </div>  


            </div>
        </div>
    </div>


    <div class="clear"></div>

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
                    $('.main-bx').show()
                    var id=this.id;
                    var tab=$('#tab_sel').val();

                    $.ajax({
                        url:"<?php echo base_url() ?>index.php/date_night/tab_view",
                        type:"POST",
                        dataType: 'json',
                        data:'u_id='+id,
                        success:function(data){ window.mydata = data;


                                               $('#'+tab+'').html('<img src="<?php echo base_url() ?>/assets/images/'+data.image +'" style="max-height:200px" id="'+data.uid+'"><input type="hidden" id="uid_invite" value="'+data.uid+'"> ');}
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



    $(document).ready(function(){

        $('.main-bx').hide()

    });

</script>


<script>



    $("#invite").click(function(){


        var a=$('#type').val();

        var id=$('#session').val();
        var place=$('#place').val();
        var time=$('#time').val();
        var date=$('#date').val();
        var msg=$('#message').val();
        var pid=$('#uid_invite').val();

        $.ajax({

            url:"<?php echo base_url() ?>index.php/date_night/invite",
            type:"POST",
            dataType: 'html',
            data:'uid='+id + '&place='+place + '&time='+time + '&date='+date + '&message='+msg + '&pid='+pid + '&type='+a,
            success:function(data){ window.mydata = data;


                                   $('#msg').html('<h3 style="color: darkgreen"> Successfully Invited </h3> ');}
        });

    });



</script>

<script>



    $("#accept").click(function(){


        var id=$('#aid').val();

        $.ajax({

            url:"<?php echo base_url() ?>index.php/date_night/accept",
            type:"POST",
            dataType: 'html',
            data:'uid='+id,
            success:function(data){ window.mydata = data;

                                   alert('Succesfully Accepted');
                                   $('#msg').html('<h3 style="color: darkgreen"> Successfully Accepted  </h3> ');}
        });

    });


    $("#reject").click(function(){


        var id=$('#aid').val();

        $.ajax({

            url:"<?php echo base_url() ?>index.php/date_night/reject",
            type:"POST",
            dataType: 'html',
            data:'uid='+id,
            success:function(data){ window.mydata = data;

                                   alert("succesfully rejected");
                                   $('#msg').html('<h3 style="color: darkgreen"> Successfully Rejected  </h3> ');}
        });

    });


</script>


<script>
    $(document).ready(function(e){

        $( '.home' ).ready(function() {
            var id=$(this).attr('id');
            $("#tab_sel").val('home-img');
            $("#type").val('Romantic date');



            //alert($(this).attr('id'));

        });

        $(".home").click(function() {
            var id=$(this).attr('id');
            $("#tab_sel").val('home-img');
            $("#type").val('Romantic date');

            //alert($(this).attr('id'));

        });

        $(".profile").click(function() {
            var id=$(this).attr('id');
            $("#tab_sel").val('profile-img');
            $("#type").val('Dutch date');

            //alert($(this).attr('id'));

        });

        $(".tab3").click(function() {
            var id=$(this).attr('id');
            $("#tab_sel").val('tab3-img');
            $("#type").val('Hangout friends');

            //            alert($(this).attr('id'));

        });

        $(".tab4").click(function() {
            var id=$(this).attr('id');
            $("#tab_sel").val('tab4-img');
            $("#type").val('Ratchet Love');

            //            alert($(this).attr('id'));

        });

    });
</script>

