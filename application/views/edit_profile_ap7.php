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

<div class="loginCo2">
<h1>Edit Profile</h1>

<form name="form1" method="post" action="<?php echo site_url('profile/update');?>" enctype="multipart/form-data" id="form1">

<?php foreach($fetch1 as $row)
{
?>
<input type="hidden" value="<?php echo $row['id'];?>" name="id">
<div class="fieldName_one">Height</div>
<div class="field_one">
    <select class="drop_field" name="height" data-validation-engine="validate[required]">
        <option value="">---select---</option>
        <option value="152" <?php if($row['height']=="152")echo "selected";?>>5' 0" (152 cm)</option>
        <option value="155" <?php if($row['height']=="155")echo "selected";?>>5' 1" (155 cm)</option>
        <option value="157" <?php if($row['height']=="157")echo "selected";?>>5' 2" (157 cm)</option>
        <option value="160" <?php if($row['height']=="160")echo "selected";?>>5' 3" (160 cm)</option>
        <option value="163" <?php if($row['height']=="163")echo "selected";?>>5' 4" (163 cm)</option>
        <option value="165" <?php if($row['height']=="165")echo "selected";?>>5' 5" (165 cm)</option>
        <option value="168" <?php if($row['height']=="168")echo "selected";?>>5' 6" (168 cm)</option>
        <option value="170" <?php if($row['height']=="170")echo "selected";?>>5' 7" (170 cm)</option>
        <option value="173" <?php if($row['height']=="173")echo "selected";?>>5' 8" (173 cm)</option>
        <option value="175" <?php if($row['height']=="175")echo "selected";?>>5' 9" (175 cm)</option>
        <option value="178" <?php if($row['height']=="178")echo "selected";?>>5' 10" (178 cm)</option>
        <option value="180" <?php if($row['height']=="180")echo "selected";?>>5' 11" (180 cm)</option>
        <option value="183" <?php if($row['height']=="183")echo "selected";?>>6' 0" (183 cm)</option>
        <option value="185" <?php if($row['height']=="185")echo "selected";?>>6' 1" (185 cm)</option>
        <option value="188" <?php if($row['height']=="188")echo "selected";?>>6' 2"(188 cm)</option>
        <option value="191" <?php if($row['height']=="191")echo "selected";?>>6' 3" (191 cm)</option>
        <option value="193" <?php if($row['height']=="193")echo "selected";?>>6' 4" (193 cm)</option>
        <option value="196" <?php if($row['height']=="196")echo "selected";?>>6' 5" (196 cm)</option>
        <option value="198" <?php if($row['height']=="198")echo "selected";?>>6' 6" (198 cm)</option>
        <option value="201" <?php if($row['height']=="201")echo "selected";?>>6' 7" (201 cm)</option>
        <option value="203" <?php if($row['height']=="203")echo "selected";?>>6' 8" (203 cm)</option>
        <option value="206" <?php if($row['height']=="206")echo "selected";?>>6' 9" (206 cm)</option>
        <option value="208" <?php if($row['height']=="208")echo "selected";?>>6' 10" (208 cm)</option>
        <option value="211" <?php if($row['height']=="211")echo "selected";?>>6' 11" (211 cm)</option>
        <option value="213" <?php if($row['height']=="213")echo "selected";?>>7' 0" (213 cm)</option>


    </select>

</div>
<div class="fieldName_one">Body type</div>
<div class="field_one">
    <select class="drop_field" name="body_type" data-validation-engine="validate[required]">
        <option>---select---</option>
        <option value="0" selected="selected">Prefer Not To Say</option>
        <option value="Thin" <?php if($row['body_type']=="Thin")echo "selected";?>>Thin</option>
        <option value="Athletic" <?php if($row['body_type']=="Athletic")echo "selected";?>>Athletic</option>
        <option value="Average" <?php if($row['body_type']=="Average")echo "selected";?>>Average</option>
        <option value="A Few Extra Pounds" <?php if($row['body_type']=="A Few Extra Pounds")echo "selected";?>>A Few Extra Pounds</option>
        <option value="Big & Tall/BBW" <?php if($row['body_type']=="Big & Tall/BBW")echo "selected";?>>Big &amp; Tall/BBW</option>


    </select>

</div>

<div class="fieldName_one">Hair color</div>
<div class="field_one">
    <select class="drop_field" name="hair_color" data-validation-engine="validate[required]">
        <option>---select---</option>
        <option value="Black" <?php if($row['hair_color']=="Black")echo "selected";?>>Black</option>
        <option value="Blond" <?php if($row['hair_color']=="Blond")echo "selected";?>>Blond</option>
        <option value="Brown" <?php if($row['hair_color']=="Brown")echo "selected";?>>Brown</option>
        <option value="Red" <?php if($row['hair_color']=="Red")echo "selected";?>>Red</option>
        <option value="Grey" <?php if($row['hair_color']=="Grey")echo "selected";?>>Grey</option>
        <option value="Bald" <?php if($row['hair_color']=="Bald")echo "selected";?>>Bald</option>
        <option value="Mixed Color" <?php if($row['hair_color']=="Mixed Color")echo "selected";?>>Mixed Color</option>


    </select>

</div>
<div class="fieldName_one">Eye color</div>
<div class="field_one">
    <select class="drop_field" name="eye_color" data-validation-engine="validate[required]">
        <option>---select---</option>


        <option value="Blue" <?php if($row['eye_color']=="Blue")echo "selected";?>>Blue</option>
        <option value="Hazel" <?php if($row['eye_color']=="Hazel")echo "selected";?>>Hazel</option>
        <option value="Grey" <?php if($row['eye_color']=="Grey")echo "selected";?>>Grey</option>
        <option value="Green" <?php if($row['eye_color']=="Green")echo "selected";?>>Green</option>
        <option value="Brown" <?php if($row['eye_color']=="Brown")echo "selected";?>>Brown</option>
        <option value="Other" <?php if($row['eye_color']=="Other")echo "selected";?>>Other</option>


    </select>

</div>
<div class="fieldName_one">Seeking</div>
<div class="field_one">
    <select class="drop_field" name="seeking" data-validation-engine="validate[required]">
        <option>---select---</option>
        <option value="Female" <?php if($row['seeking']=="Female")echo "selected";?>>Female</option>
        <option value="Male" <?php if($row['seeking']=="Male")echo "selected";?>>Male</option>



    </select>

</div>

<div class="fieldName_one">I am looking for</div>
<div class="field_one">
    <select class="drop_field" name="looking" data-validation-engine="validate[required]">
        <option>---select---</option>
        <option value="Hang Out" <?php if($row['looking']=="Hang Out")echo "selected";?>>Hang Out</option>
        <option value="Friends" <?php if($row['looking']=="Friends")echo "selected";?>>Friends</option>


        <option value="Dating" <?php if($row['looking']=="Dating")echo "selected";?>>Dating</option>


    </select>

</div>

<div class="fieldName_one">Education</div>
<div class="field_one">
    <select class="drop_field" name="education" data-validation-engine="validate[required]">
        <option>---select---</option>
        <option value="High school" <?php if($row['education']=="High school")echo "selected";?>>High school</option>
        <option value="Some college" <?php if($row['education']=="Some college")echo "selected";?>>Some college</option>
        <option value="Some University" <?php if($row['education']=="Some University")echo "selected";?>>Some University</option>
        <option value="Associates degree" <?php if($row['education']=="Associates degree")echo "selected";?>>Associates degree</option>
        <option value="Bachelors degree" <?php if($row['education']=="Bachelors degree")echo "selected";?>>Bachelors degree</option>
        <option value="Masters degree" <?php if($row['education']=="Masters degree")echo "selected";?>>Masters degree</option>
        <option value="PhD / Post Doctoral" <?php if($row['education']=="PhD / Post Doctoral")echo "selected";?>>PhD / Post Doctoral</option>
        <option value="Graduate degree" <?php if($row['education']=="Graduate degree")echo "selected";?>>Graduate degree</option>


    </select>

</div>
<div class="fieldName_one">Income</div>
<div class="field_one">
    <select class="drop_field" name="income" data-validation-engine="validate[required]">
        <option>---select---</option>
        <option value="Less Than 25,000" <?php if($row['income']=="Less Than 25,000")echo "selected";?>>Less Than 25,000</option>
        <option value="25,001 to 35,000" <?php if($row['income']=="25,001 to 35,000")echo "selected";?>>25,001 to 35,000</option>
        <option value="35,001 to 50,000" <?php if($row['income']=="35,001 to 50,000")echo "selected";?>>35,001 to 50,000</option>
        <option value="50,001 to 75,000" <?php if($row['income']=="50,001 to 75,000")echo "selected";?>>50,001 to 75,000</option>
        <option value="75,001 to 100,000" <?php if($row['income']=="75,001 to 100,000")echo "selected";?>>75,001 to 100,000</option>
        <option value="100,001 to 150,000" <?php if($row['income']=="100,001 to 150,000")echo "selected";?>>100,001 to 150,000</option>
        <option value="150,000+" <?php if($row['income']=="150,000+")echo "selected";?>>150,000+</option>


    </select>

</div>
<div class="fieldName_one">Do you own a car</div>
<div class="field_one">
    <select class="drop_field" name="own_car" data-validation-engine="validate[required]">
        <option>---select---</option>
        <option value="Yes" <?php if($row['own_car']=="Yes")echo "selected";?>>Yes</option>
        <option value="No" <?php if($row['own_car']=="No")echo "selected";?>>No</option>



    </select>

</div>
<div class="fieldName_one">Second Language</div>
<div class="field_one">
    <select class="drop_field" name="second_language" data-validation-engine="validate[required]">
        <option>---select---</option>
        <option value="Arabic" <?php if($row['second_language']=="Arabic")echo "selected";?>>Arabic</option>
        <option value="Chinese" <?php if($row['second_language']=="Chinese")echo "selected";?>>Chinese</option>
        <option value="Dutch" <?php if($row['second_language']=="Dutch")echo "selected";?>>Dutch</option>
        <option value="English" <?php if($row['second_language']=="English")echo "selected";?>>English</option>
        <option value="French" <?php if($row['second_language']=="French")echo "selected";?>>French</option>
        <option value="German" <?php if($row['second_language']=="German")echo "selected";?>>German</option>
        <option value="Hebrew" <?php if($row['second_language']=="Hebrew")echo "selected";?>>Hebrew</option>
        <option value="Hindi" <?php if($row['second_language']=="Hindi")echo "selected";?>>Hindi</option>
        <option value="Italian" <?php if($row['second_language']=="Italian")echo "selected";?>>Italian</option>
        <option value="Japanese" <?php if($row['second_language']=="Japanese")echo "selected";?>>Japanese</option>
        <option value="Norwegian" <?php if($row['second_language']=="Norwegian")echo "selected";?>>Norwegian</option>
        <option value="Portuguese" <?php if($row['second_language']=="Portuguese")echo "selected";?>>Portuguese</option>
        <option value="Russian" <?php if($row['second_language']=="Russian")echo "selected";?>>Russian</option>
        <option value="Spanish" <?php if($row['second_language']=="Spanish")echo "selected";?>>Spanish</option>
        <option value="Swedish" <?php if($row['second_language']=="Swedish")echo "selected";?>>Swedish</option>
        <option value="Tagalog" <?php if($row['second_language']=="Tagalog")echo "selected";?>>Tagalog</option>
        <option value="Urdu" <?php if($row['second_language']=="Urdu")echo "selected";?>>Urdu</option>
        <option value="Other" <?php if($row['second_language']=="Other")echo "selected";?>>Other</option>



    </select>

</div>

<div class="fieldName_one">Marital Status</div>
<div class="field_one">
    <select class="drop_field" name="marital_status" data-validation-engine="validate[required]">
        <option>---select---</option>
        <option value="Still Married" <?php if($row['marital_status']=="Still Married")echo "selected";?>>Still Married</option>
        <option value="Divorced" <?php if($row['marital_status']=="Divorced")echo "selected";?>>Divorced</option>
        <option value="Separated" <?php if($row['marital_status']=="Separated")echo "selected";?>>Separated</option>
        <option value="One has passed away" <?php if($row['marital_status']=="One has passed away")echo "selected";?>>One has passed away</option>
        <option value="Both have passed away" <?php if($row['marital_status']=="Both have passed away")echo "selected";?>>Both have passed away</option>
        <option value="Not Together" <?php if($row['marital_status']=="Not Together")echo "selected";?>>Not Together</option>


    </select>

</div>

<div class="fieldName_one">Do you want children?</div>
<div class="field_one" >
    <select class="drop_field" name="want_children" data-validation-engine="validate[required]">
        <option>---select---</option>
        <option value="Yes" <?php if($row['want_children']=="Yes")echo "selected";?>>Yes</option>
        <option value="No" <?php if($row['want_children']=="No")echo "selected";?>>No</option>

    </select>

</div>


  <div style="clear:both"></div>
<div class="fieldName_one">Do you have children?</div>
<div class="field_one" >
    <select class="drop_field" name="have_children" data-validation-engine="validate[required]">
        <option>---select---</option>
        <option value="Yes" <?php if($row['have_children']=="Yes")echo "selected";?>>Yes</option>
        <option value="No" <?php if($row['have_children']=="No")echo "selected";?>>No</option>

    </select>

</div>

</div>
<div class="loginCo2" style="margin-top:40px;">


<div class="fieldName_one">Do you smoke?</div>
<div class="field_one" >
    <select class="drop_field" name="smoke" data-validation-engine="validate[required]">
        <option>---select---</option>
        <option value="Yes" <?php if($row['smoke']=="Yes")echo "selected";?>>Yes</option>
        <option value="No" <?php if($row['smoke']=="No")echo "selected";?>>No</option>

    </select>

</div>
<div class="fieldName_one">Do you drug?</div>
<div class="field_one" >
    <select class="drop_field" name="drug" data-validation-engine="validate[required]">
        <option>---select---</option>
        <option value="Yes" <?php if($row['drug']=="Yes")echo "selected";?>>Yes</option>
        <option value="No" <?php if($row['drug']=="No")echo "selected";?>>No</option>

    </select>

</div>
<div class="fieldName_one">Do you drink?</div>
<div class="field_one" >
    <select class="drop_field" name="drink" data-validation-engine="validate[required]">
        <option>---select---</option>
        <option value="Yes" <?php if($row['drink']=="Yes")echo "selected";?>>Yes</option>
        <option value="No" <?php if($row['drink']=="No")echo "selected";?>>No</option>

    </select>

</div>



<div class="fieldName_one">Religion</div>
<div class="field_one">
    <select class="drop_field" name="religion" data-validation-engine="validate[required]">
        <option>---select---</option>
        <option value="Non-religious" <?php if($row['religion']=="Non-religious")echo "selected";?>>Non-religious</option>
        <option value="New age" <?php if($row['religion']=="New age")echo "selected";?>>New age</option>
        <option value="Muslim" <?php if($row['religion']=="Muslim")echo "selected";?>>Muslim</option>
        <option value="Jewish" <?php if($row['religion']=="Jewish")echo "selected";?>>Jewish</option>
        <option value="Catholic" <?php if($row['religion']=="Catholic")echo "selected";?>>Catholic</option>
        <option value="Buddhist" <?php if($row['religion']=="Buddhist")echo "selected";?>>Buddhist</option>
        <option value="Hindu" <?php if($row['religion']=="Hindu")echo "selected";?>>Hindu</option>
        <option value="Anglican" <?php if($row['religion']=="Anglican")echo "selected";?>>Anglican</option>
        <option value="Sikh" <?php if($row['religion']=="Sikh")echo "selected";?>>Sikh</option>
        <option value="Methodist" <?php if($row['religion']=="Methodist")echo "selected";?>>Methodist</option>
        <option value="Christian - other" <?php if($row['religion']=="Christian - other")echo "selected";?>>Christian - other</option>
        <option value="Baptist" <?php if($row['religion']=="Baptist")echo "selected";?>>Baptist</option>
        <option value="Lutheran" <?php if($row['religion']=="Lutheran")echo "selected";?>>Lutheran</option>
        <option value="Presbyterian" <?php if($row['religion']=="Presbyterian")echo "selected";?>>Presbyterian</option>
        <option value="Other" <?php if($row['religion']=="Other")echo "selected";?>>Other</option>


    </select>

</div>


<div class="fieldName_one">Profession</div>
<div class="field_one"><input type="text" name="profession" class="formcontroll_one" value="<?php echo $row['profession'];?>" data-validation-engine="validate[required]"></div>


<div class="fieldName_one">Do you have pets?</div>
<div class="field_one">
    <select class="drop_field" name="have_pets" data-validation-engine="validate[required]">
        <option>---select---</option>
        <option value="Yes" <?php if($row['pets']=="Yes")echo "selected";?>>Yes</option>
        <option value="No" <?php if($row['pets']=="No")echo "selected";?>>No</option>


    </select>

</div>


<div class="fieldName_one">How ambitious are you?</div>
<div class="field_one">
    <select class="drop_field" name="ambitious" data-validation-engine="validate[required]">
        <option>---select---</option>
        <option value="Not Ambitious" <?php if($row['ambitious']=="Not Ambitious")echo "selected";?>>Not Ambitious</option>
        <option value="Somewhat Ambitious" <?php if($row['ambitious']=="Somewhat Ambitious")echo "selected";?>>Somewhat Ambitious</option>
        <option value="Ambitious" <?php if($row['ambitious']=="Ambitious")echo "selected";?>>Ambitious</option>
        <option value="Very Ambitious" <?php if($row['ambitious']=="Very Ambitious")echo "selected";?>>Very Ambitious</option>


    </select>

</div>



  <div style="clear:both"></div>

<div class="fieldName_one">Profile head line</div>
<div class="field_one"><input type="text" name="head_line" class="formcontroll_one" value=<?php echo $row['headline'];?> ></div>
<div class="fieldName_one">Interests</div>
<div class="field_one"><input type="text" name="interests" class="formcontroll_one" value=<?php echo $row['interests'];?>></div>
<div class="fieldName_one">Description</div>
<div class="field_one"><textarea name="description" class="formcontroll_one"><?php echo $row['description'];?></textarea></div>



<div class="fieldName_one"></div><div class="pwd_fg_pwd"><div class="rpwd_min"><span></span></div><div class="rpwd_min"></div></div>
<div class="fieldName_one"></div>
<div style="clear:both"></div>



<div class="fieldName_one">Profile Image</div>
<div class="edit_pf_img">

       <img src="<?php echo base_url()?>assets/images/<?php echo $row['image'];?>">
       </div><!--edit_pf_img-->
<div class="fieldName_right" style="margin-left:20px;">



    <input name="userfile" type="file" value="<?php echo $row['image'];?>">
    <div class="clearfix"></div>

</div>
<?php }?>

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