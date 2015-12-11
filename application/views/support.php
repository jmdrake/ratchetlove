<script type="text/javascript">
    jQuery(document).ready(function(){

        // binds form submission and fields to the validation engine
        jQuery("#form1").validationEngine();
    });
</script>

<div class="main_bg" style="padding-top:50px;">
<div class="wrap_inn">

   <div class="grids_1_of_3">
      
      <div class="edit_pf">
       
       
       
    <div style="clear:both"></div>       
       
         <div class="support_total">
                <h1>Support</h1>
                  <h3 style="color: deepskyblue"></h3>
                  <form name="form1" method="post" action="<?php echo site_url('support/contact_action');?>" id="form1">
                  
   
                  <div class="fieldName_one_su">Email</div>
                  <div class="field_one_supp"><input type="text" name="email" class="formcontroll_one" data-validation-engine="validate[required]"></div>
                  <div class="fieldName_one_su">Comment</div>
                  <div class="field_one_supp"><textarea name="comment" cols="" rows="" class="formcontroll_one_are" data-validation-engine="validate[required]"></textarea></div>
            <div id="msg" style="color:#F00; font-weight:bold; text-align:center; margin-top:5px;"><?php echo $msg?></div>

                  
                   
                   
                   <div style="clear:both"></div>
                   
                   
                   
                         
                          
       

                   
         <div style="clear:both"></div>          
                   
                   <div class="pf_edit_btn">
                   <div class="pf_edit_btn_in_new_two">
        
                       
        
           <div class="pf_l_02">     <input name="btn_submit" type="submit" class="pf_btn_new_in" value="Submit"></div><!--pf_l_02-->
              
              
<!--                    <a href="--><?php //echo site_url()?><!--/register"><input name="register" type="button" class="pf_btn_new_in" value="Register"></a>-->
                   </div><!--pf_edit_btn_in_new-->
                   </div>
                   
           <div class="span6">
    <div class="login-sectn">
    <!--<input name="" type="text" value="E-mail" class="input-bx">
    <input name="" type="text" value="Password" class="input-bx">-->
<!--    <a href="--><?php //echo site_url()?><!--/logout"><input name="logout" type="submit" value="Logout" class="logn-btn" style="float:right;"></a>-->
    <div id="div23" style="color:#F00"> </div>
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




















