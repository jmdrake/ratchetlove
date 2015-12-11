<script type="text/javascript">
    jQuery(document).ready(function(){

        // binds form submission and fields to the validation engine
        jQuery("#form1").validationEngine();
    });
</script>
<div style="padding-top:50px;">
    <div class="wrap_inn">
        <div class="grids_1_of_3">
            <div class="edit_pf">
                <div style="clear:both"></div>              
                <div class="loginCo2">
                    <h1>Login</h1>
                    <h3 style="color: deepskyblue"><?php echo $this->session->flashdata('suc'); ?></h3>
                    <form name="form1" method="post" action="<?php echo site_url()?>/login/process" id="form1">                     
                        <div class="fieldName_one">User Name</div>
                        <div class="field_one"><input type="text" name="username" class="formcontroll_one" data-validation-engine="validate[required]"></div>
                        <div class="fieldName_one">Password</div>
                        <div class="field_one"><input type="password" name="password" class="formcontroll_one" data-validation-engine="validate[required]"></div>
                        <div style="clear:both"></div>
                        <div style="clear:both"></div>          
                        <div class="pf_edit_btn">
                            <div class="pf_edit_btn_in_new">
                                <div class="pf_l">   <input name="" type="checkbox" value="" />  Stay signed in? </div><!--pf_l--><br>
                                <div class="pf_l">  <a href="<?php echo site_url('login/forgot') ?>"> Forgot password? </a></div><!--pf_l-->
                                <div class="pf_l_02">     <input name="btn_submit" type="submit" class="pf_btn_new_in" value="Login"></div><!--pf_l_02-->
                                <!--                    <a href="--><?php //echo site_url()?><!--/register"><input name="register" type="button" class="pf_btn_new_in" value="Register"></a>-->
                            </div><!--pf_edit_btn_in_new-->
                        </div>
                        <div class="span6">
                            <div class="login-sectn">
                                <!--<input name="" type="text" value="E-mail" class="input-bx">
<input name="" type="text" value="Password" class="input-bx">-->
                                <!--    <a href="--><?php //echo site_url()?><!--/logout"><input name="logout" type="submit" value="Logout" class="logn-btn" style="float:right;"></a>-->
                                <div id="div23" style="color:#F00"> <?php echo $msg;?></div>
                            </div>
                        </div>
                    </form>
                </div><!--loginCo2-->
            </div><!--edit_pf-->
        </div>             
        <div style="clear:both"></div>	
    </div>
    <div style="clear:both"></div>
</div>




















