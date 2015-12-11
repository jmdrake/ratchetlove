<script type="text/javascript">
    $(document).ready(function(){

        $('#op1').on('click', function(event){
            event.stopPropagation();
            $('#op1').addClass('up_active');
            $('#op2').removeClass('up_active');
            $('#op3').removeClass('up_active');
            $('#amt').val(52.50);


        });
        $('#op2').on('click', function(event){
            event.stopPropagation();
            $('#op2').addClass('up_active');
            $('#op1').removeClass('up_active');

            $('#op3').removeClass('up_active');
            $('#amt').val(38.25);


        });
        $('#op3').on('click', function(event){
            event.stopPropagation();
            $('#op3').addClass('up_active');
            $('#op2').removeClass('up_active');
            $('#op1').removeClass('up_active');
            $('#amt').val(18.75);

        });
    });
</script>

<div class="main_bg" style="padding-top:50px;">
    <div class="wrap_inn">



        <div class="srch">
            <div class="box_upcoming_two">

                <div class="left-box">

                    <div class="hdlne_box ">Choose your Plan</div>

                    <div class="span_of_3">

                        <div class="span1_of_3 up_active" id="op1"  >

                            <div class="span1_of_03">
                                <h2>SAVE  $60</h2>
                            </div>
                            <br/>

                            <h1>$8.75/MO </h1>
                            <span>6   Month Plan</span><br/>
                            <span> $52.50</span>

                        </div>
                        <div class="span1_of_3" id="op2">
                            <div class="span1_of_03">
<!--                                <h2>SAVE  $32</h2>-->
                            </div>
                            <br/>

                            <h1>$12.75/MO </h1>
                            <span>3   Month Plan </span><br/>
                            <span>$38.25</span>



                        </div>
                        <div class="span1_of_3" id="op3">

                            <div class="span1_of_03">

                            </div>

                            <br/>

                            <h1>$18.75/MO </h1>
                            <span>1  Month Plan </span><br/>
                            <span>$18.75</span>


                            <p></p>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="hdlne_box " style="border-top:1px solid #c7cbcb;">Enter your Details</div>


                    <div class="loginCol_inn">

                        <img src="<?php echo base_url() ?>assets/images/img_ppl.png" alt="">


                        <form name="form1" id="form1" method="post" action="upgrade/process">
                            <input type="hidden" id="amt" name="amount">
                            <div class="fieldNamee"> First Name:</div>
                            <div class="field_inn"><input type="text"  data-validation-engine="validate[required]" name="fname" class="formcontroll_inn" data-validation-engine="validate[required]"></div>
                            <div class="fieldNamee"> Last Name:</div>
                            <div class="field_inn"><input type="text"  data-validation-engine="validate[required]" name="lname" class="formcontroll_inn"data-validation-engine="validate[required]"></div>

                            <div class="fieldNamee"_inn> City:</div>
                            <div class="field_inn"><input type="text"  data-validation-engine="validate[required]" name="city" class="formcontroll_inn"data-validation-engine="validate[required]"></div>
                            <div class="fieldNamee"> State:</div>
                            <div class="field_inn"><input type="text"  data-validation-engine="validate[required]" name="state" class="formcontroll_inn"data-validation-engine="validate[required]"></div>
                            <div class="fieldNamee"> Zip:</div>
                            <div class="field_inn"><input type="text"  data-validation-engine="validate[required]" name="zip" class="formcontroll_inn"data-validation-engine="validate[required,custom[number]]"></div>
                            <div class="fieldNamee"> Email:</div>
                            <div class="field_inn"><input type="text"  data-validation-engine="validate[required]" name="email" class="formcontroll_inn" data-validation-engine="validate[required,custom[email]]"></div>
                            <div class="fieldNamee"></div><div class="sbt_inn"><a href="#"><input type="submit" name="submit" value="UPGRADE" class="view_sbt_inn"></a></div>



                            <div class="fieldNamee"></div><div class="sbt_inn">By clicking the "Upgrade" button you agree to
                                the Terms and Conditions</div>

                        </form>




                    </div>



                </div>
                <div class="right-box">

                    <div class="hdlne_box2 ">Upgraded Features</div>


                    <div class="list-bx2">
                        <ul>
                            <a href="#"><li><img src="<?php echo base_url() ?>assets/images/lst_03.jpg" alt=""> <p>See if your emails were read or deleted</p></li></a>
                            <a href="#"><li><img src="<?php echo base_url() ?>assets/images/lst_03.jpg" alt=""> <p>This upgrade more than doubles your chances
                                        of meeting someone.</p></li></a>
                            <a href="#"><li><img src="<?php echo base_url() ?>assets/images/lst_03.jpg" alt=""> <p>Find out the date and time someone viewed
                                        your profile.</p></li></a>

                            <a href="#"><li><img src="<?php echo base_url() ?>assets/images/lst_03.jpg" alt=""> <p>Enable Date night.</p></li></a>


                        </ul>
                    </div>

                    <div class="list-pr">

                        <p>Your credit card will be charged when you click "Upgrade". A copy of your subscription details will be sent to you via email for your records. Upgrade today and start connecting!</p>

                    </div>




                </div>


            </div>
            <!-- start popup -->
            <div id="small-dialog" class="mfp-hide">
                <div class="pop_up">
                    <h2>It is a long established fact</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic</p>
                </div>
            </div>
            <!-- end popup -->
            <div class="srch_list">



            </div>
        </div>








        <div class="clear"></div>


    </div>



</div>
</div>
<!-- start top_grid -->
<div class="top_grid_bg">

    <!-- start mid_grid --><!-- start mid_grid --><!-- start testimonial  --><!-- start testimonial  -->
    <div class="clear"></div>