
<div class="main_bg" style="padding-top:50px;">
<div class="wrap_inn">

<div class="grids_1_of_3">

<div class="edit_pf">


<form name="form1" method="post" action="<?php echo site_url('profile/insert');?>" enctype="multipart/form-data" id="form1">
<div style="clear:both"></div>

<div class="loginCo2">
<h1>Profile Registration</h1>


<div class="fieldName_one">Height</div>
<div class="field_one">
    <select class="drop_field" name="height" data-validation-engine="validate[required]">
        <option value="">---select---</option>
        <option value="152">5' 0" (152 cm)</option>
        <option value="155">5' 1" (155 cm)</option>
        <option value="157">5' 2" (157 cm)</option>
        <option value="160">5' 3" (160 cm)</option>
        <option value="163">5' 4" (163 cm)</option>
        <option value="165">5' 5" (165 cm)</option>
        <option value="168">5' 6" (168 cm)</option>
        <option value="170">5' 7" (170 cm)</option>
        <option value="173">5' 8" (173 cm)</option>
        <option value="175">5' 9" (175 cm)</option>
        <option value="178">5' 10" (178 cm)</option>
        <option value="180">5' 11" (180 cm)</option>
        <option value="183">6' 0" (183 cm)</option>
        <option value="185">6' 1" (185 cm)</option>
        <option value="188">6' 2"(188 cm)</option>
        <option value="191">6' 3" (191 cm)</option>
        <option value="193">6' 4" (193 cm)</option>
        <option value="196">6' 5" (196 cm)</option>
        <option value="198">6' 6" (198 cm)</option>
        <option value="201">6' 7" (201 cm)</option>
        <option value="203">6' 8" (203 cm)</option>
        <option value="206">6' 9" (206 cm)</option>
        <option value="208">6' 10" (208 cm)</option>
        <option value="211">6' 11" (211 cm)</option>
        <option value="213">7' 0" (213 cm)</option>


    </select>

</div>
<div class="fieldName_one">Body type</div>
<div class="field_one">
    <select class="drop_field" name="body_type" data-validation-engine="validate[required]">
<!--        <option value="">---select---</option>-->
        <option value="0" selected="selected">Prefer Not To Say</option>
        <option value="Thin">Thin</option>
        <option value="Athletic">Athletic</option>
        <option value="Average">Average</option>
        <option value="A Few Extra Pounds">A Few Extra Pounds</option>
        <option value="Big &amp; Tall/BBW">Big &amp; Tall/BBW</option>


    </select>

</div>

<div class="fieldName_one">Hair color</div>
<div class="field_one">
    <select class="drop_field" name="hair_color" data-validation-engine="validate[required]">
        <option value="">---select---</option>
        <option value="Black">Black</option>
        <option value="Blond">Blond</option>
        <option value="Brown">Brown</option>
        <option value="Red">Red</option>
        <option value="Grey">Grey</option>
        <option value="Bald">Bald</option>
        <option value="Mixed Color">Mixed Color</option>


    </select>

</div>
<div class="fieldName_one">Eye color</div>
<div class="field_one">
    <select class="drop_field" name="eye_color" data-validation-engine="validate[required]">
        <option value="">---select---</option>


        <option value="Blue">Blue</option>
        <option value="Hazel">Hazel</option>
        <option value="Grey">Grey</option>
        <option value="Green">Green</option>
        <option value="Brown">Brown</option>
        <option value="Other">Other</option>


    </select>

</div>
<div class="fieldName_one">Seeking</div>
<div class="field_one">
    <select class="drop_field" name="seeking" data-validation-engine="validate[required]">
        <option value="">---select---</option>
        <option value="Female">Female</option>
        <option value="Male">Male</option>



    </select>

</div>

<div class="fieldName_one">I am looking for</div>
<div class="field_one">
    <select class="drop_field" name="looking" data-validation-engine="validate[required]">
        <option value="">---select---</option>
        <option value="Hang Out">Hang Out</option>
        <option value="Friends">Friends</option>


        <option value="Dating">Dating</option>


    </select>

</div>

<div class="fieldName_one">Education</div>
<div class="field_one">
    <select class="drop_field" name="education" data-validation-engine="validate[required]">
        <option value="">---select---</option>
        <option value="High school">High school</option>
        <option value="Some college">Some college</option>
        <option value="Some University">Some University</option>
        <option value="Associates degree">Associates degree</option>
        <option value="Bachelors degree">Bachelors degree</option>
        <option value="Masters degree">Masters degree</option>
        <option value="PhD / Post Doctoral">PhD / Post Doctoral</option>
        <option value="Graduate degree">Graduate degree</option>


    </select>

</div>
<div class="fieldName_one">Income</div>
<div class="field_one">
    <select class="drop_field" name="income" data-validation-engine="validate[required]">
        <option value="">---select---</option>
        <option value="Less Than 25,000">Less Than 25,000</option>
        <option value="25,001 to 35,000">25,001 to 35,000</option>
        <option value="35,001 to 50,000">35,001 to 50,000</option>
        <option value="50,001 to 75,000">50,001 to 75,000</option>
        <option value="75,001 to 100,000">75,001 to 100,000</option>
        <option value="100,001 to 150,000">100,001 to 150,000</option>
        <option value="150,000+">150,000+</option>


    </select>

</div>
<div class="fieldName_one">Do you own a car</div>
<div class="field_one">
    <select class="drop_field" name="own_car" data-validation-engine="validate[required]">
        <option value="">---select---</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>



    </select>

</div>
<div class="fieldName_one">Second Language</div>
<div class="field_one">
    <select class="drop_field" name="second_language" data-validation-engine="validate[required]">
        <option value="">---select---</option>
        <option value="Arabic">Arabic</option>
        <option value="Chinese">Chinese</option>
        <option value="Dutch">Dutch</option>
        <option value="English">English</option>
        <option value="French">French</option>
        <option value="German">German</option>
        <option value="Hebrew">Hebrew</option>
        <option value="Hindi">Hindi</option>
        <option value="Italian">Italian</option>
        <option value="Japanese">Japanese</option>
        <option value="Norwegian">Norwegian</option>
        <option value="Portuguese">Portuguese</option>
        <option value="Russian">Russian</option>
        <option value="Spanish">Spanish</option>
        <option value="Swedish">Swedish</option>
        <option value="Tagalog">Tagalog</option>
        <option value="Urdu">Urdu</option>
        <option value="Other">Other</option>



    </select>

</div>

<div class="fieldName_one">Marital Status</div>
<div class="field_one">
    <select class="drop_field" name="marital_status" data-validation-engine="validate[required]">
        <option value="">---select---</option>
        <option value="Single">Single</option>
        <option value="Still Married">Still Married</option>
        <option value="Divorced">Divorced</option>
        <option value="Separated">Separated</option>
        <option value="One has passed away">One has passed away</option>

        <option value="Not Together">Not Together</option>


    </select>

</div>

<div class="fieldName_one">Do you want children?</div>
<div class="field_one" >
    <select class="drop_field" name="want_children" data-validation-engine="validate[required]">
        <option value="">---select---</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>

    </select>

</div>

  <div style="clear:both"></div>
<div class="fieldName_one">Do you have children?</div>
<div class="field_one" >
    <select class="drop_field" name="have_children" data-validation-engine="validate[required]">
        <option value="">---select---</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>

    </select>

</div>

</div>
<div class="loginCo2" style="margin-top:40px;">


<div class="fieldName_one">Do you smoke?</div>
<div class="field_one" >
    <select class="drop_field" name="smoke" data-validation-engine="validate[required]">
        <option value="">---select---</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>

    </select>

</div>
<div class="fieldName_one">Do you drug?</div>
<div class="field_one" >
    <select class="drop_field" name="drug" data-validation-engine="validate[required]">
        <option value="">---select---</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>

    </select>

</div>
<div class="fieldName_one">Do you drink?</div>
<div class="field_one" >
    <select class="drop_field" name="drink" data-validation-engine="validate[required]">
        <option value="">---select---</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>

    </select>

</div>



<div class="fieldName_one">Religion</div>
<div class="field_one">
    <select class="drop_field" name="religion" data-validation-engine="validate[required]">
        <option value="">---select---</option>
        <option value="Non-religious">Non-religious</option>
        <option value="New age">New age</option>
        <option value="Muslim">Muslim</option>
        <option value="Jewish">Jewish</option>
        <option value="Catholic">Catholic</option>
        <option value="Buddhist">Buddhist</option>
        <option value="Hindu">Hindu</option>
        <option value="Anglican">Anglican</option>
        <option value="Sikh">Sikh</option>
        <option value="Methodist">Methodist</option>
        <option value="Christian - other">Christian - other</option>
        <option value="Baptist">Baptist</option>
        <option value="Lutheran">Lutheran</option>
        <option value="Presbyterian">Presbyterian</option>
        <option value="Other">Other</option>


    </select>

</div>


<div class="fieldName_one">Profession</div>
<div class="field_one"><input type="text" name="profession" class="formcontroll_one" data-validation-engine="validate[required]"></div>


<div class="fieldName_one">Do you have pets?</div>
<div class="field_one">
    <select class="drop_field" name="have_pets" data-validation-engine="validate[required]">
        <option value="">---select---</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>


    </select>

</div>


<div class="fieldName_one">How ambitious are you?</div>
<div class="field_one">
    <select class="drop_field" name="ambitious" data-validation-engine="validate[required]">
        <option value="">---select---</option>
        <option value="Not Ambitious">Not Ambitious</option>
        <option value="Somewhat Ambitious">Somewhat Ambitious</option>
        <option value="Ambitious">Ambitious</option>
        <option value="Very Ambitious">Very Ambitious</option>


    </select>

</div>

    <div class="fieldName_one">Interest in date night</div>
    <div class="field_one">
        <select class="drop_field" name="date_night" data-validation-engine="validate[required]">
            <option value="">---select---</option>
            <option value="1">Yes</option>
            <option value="0">No</option>


        </select>

    </div>

  <div style="clear:both"></div>
<div class="fieldName_one">Profile head line</div>
<div class="field_one"><input type="text" name="head_line" class="formcontroll_one" data-validation-engine="validate[required]"></div>
<div class="fieldName_one">Interests</div>
<div class="field_one"><input type="text" name="interests" placeholder="Separate interests by comma" class="formcontroll_one" data-validation-engine="validate[required]"></div>
<div class="fieldName_one">Description</div>
<div class="field_one"><textarea name="description" class="formcontroll_one" ></textarea></div>



<div class="fieldName_one"></div><div class="pwd_fg_pwd"><div class="rpwd_min"><span></span></div><div class="rpwd_min"></div></div>
<div class="fieldName_one"></div>
<div style="clear:both"></div>



<div class="fieldName_one">Profile Image</div>

<div class="fieldName_right" style="margin-left:0px; margin-top:0px;">



    <input name="image1" type="file" data-validation-engine="validate[required]">
    <div class="clearfix"></div>

</div>



<div class="fieldName_one"></div><div class="pwd_fg_pwd"><div class="rpwd_min"><span></span></div><div class="rpwd_min"></div></div>
<div class="fieldName_one"></div>
<div style="clear:both"></div>



<div class="fieldName_one">Gallery Image</div>

<div class="fieldName_right" style="margin-left:0px; margin-top:0px;">



    <input name="image2" type="file" data-validation-engine="validate[required]">
    <div class="clearfix"></div>

</div>



<div class="fieldName_one"></div><div class="pwd_fg_pwd"><div class="rpwd_min"><span></span></div><div class="rpwd_min"></div></div>
<div class="fieldName_one"></div>
<div style="clear:both"></div>



<div class="fieldName_one">Gallery Image</div>

<div class="fieldName_right" style="margin-left:0px; margin-top:0px;">



    <input name="image3" type="file" data-validation-engine="validate[required]">
    <div class="clearfix"></div>

</div>



<div class="fieldName_one"></div><div class="pwd_fg_pwd"><div class="rpwd_min"><span></span></div><div class="rpwd_min"></div></div>
<div class="fieldName_one"></div>
<div style="clear:both"></div>



<div class="fieldName_one">Gallery Image</div>

<div class="fieldName_right" style="margin-left:0px; margin-top:0px;">



    <input name="image4" type="file" data-validation-engine="validate[required]">
    <div class="clearfix"></div>

</div>



<div class="fieldName_one"></div><div class="pwd_fg_pwd"><div class="rpwd_min"><span></span></div><div class="rpwd_min"></div></div>
<div class="fieldName_one"></div>
<div style="clear:both"></div>



<div class="fieldName_one">Gallery Image</div>

<div class="fieldName_right" style="margin-left:0px; margin-top:0px;">



    <input name="image5" type="file" data-validation-engine="validate[required]">
    <div class="clearfix"></div>

</div>










<div style="clear:both"></div>

<div class="pf_edit_btn">
    <div class="pf_edit_btn_in">
        <input name="submit" type="submit" class="pf_edit_btn_in_btn" value="Submit">
    </div><!--pf_edit_btn_in-->
</div>
</form>





</div><!--loginCo2-->

</div><!--edit_pf-->


</div>



<div style="clear:both"></div>

</div>
<div style="clear:both"></div>
</div>
<!-- start top_grid -->
<div class="top_grid_bg"><?php
/**
 * Created by JetBrains PhpStorm.
 * User: SYSTEM-25
 * Date: 11/3/15
 * Time: 11:46 AM
 * To change this template use File | Settings | File Templates.
 */