<script>
function validateForm() {
    var x = document.forms["myForm"]["agefrom"].value;
	 var y = document.forms["myForm"]["ageto"].value;
    if (x > y) {
        alert("Age from must be less then age to");
        return false;
    }
}
</script>
<div class="main_bg" style="padding-top:50px;">
<div class="wrap_inn">



<div class="srch">
<div class="box_upcoming_main2">
<form action="<?php echo site_url('search_controller/search')?>" method="post" onsubmit="return validateForm()" name="myForm">
<div class="prce_of_1">
    <div class="drp_bxx1">
        <select class="slt" name="gender">
            <option value="">gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
    </div>
</div>

<div class="drp_bxx1">
    <h2>Age</h2>
</div>
<div class="drp_bxx1">
    <select class="slt" name="agefrom">
        <option value="">From</option>
        <option value="18">18</option>
        <option value="22">22</option>
        <option value="26">26</option>
        <option value="30">30</option>

        <option value="34">34</option>
        <option value="38">38</option>
        <option value="42">42</option>
        <option value="46">46</option>
        <option value="50">50</option>
        <option value="54">54</option>
        <option value="58">58</option>
        <option value="62">62</option>
        <option value="66">66</option>
        


    </select>

</div>
<div class="prce_of_1">
    <h2>to</h2>
    <div class="drp_bxx1">
        <select class="slt" name="ageto">
            <option value="">To</option>
           
        <option value="22">22</option>
        <option value="26">26</option>
        <option value="30">30</option>

        <option value="34">34</option>
        <option value="38">38</option>
        <option value="42">42</option>
        <option value="46">46</option>
        <option value="50">50</option>
        <option value="54">54</option>
        <option value="58">58</option>
        <option value="62">62</option>
        <option value="66">66</option>
        <option value="70">70</option>

        </select>
    </div>
</div>
<div class="prce_of_1">
    <div class="drp_bxx1">
        <select class="slt" name="seeking">
            <option value="">seeking</option>
            <option value="Female">Female</option>
            <option value="Male">Male</option>



        </select>

    </div>
</div>
<div class="prce_of_1">
    <div class="drp_bxx1">
        <select class="slt" name="body_type">
            <option value="">Body Type</option>

            <option value="Thin">Thin</option>
            <option value="Athletic">Athletic</option>
            <option value="Average">Average</option>
            <option value="A Few Extra Pounds">A Few Extra Pounds</option>
            <option value="Big &amp; Tall/BBW">Big &amp; Tall/BBW</option>


        </select>

    </div>
</div>


<div class="drp_bxx1">
    <select class="slt" name="education">
        <option value="">Any Education</option>
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

<div class="drp_bxx1">
    <select class="slt" name="ethnicity">
        <option value="">Any Ethnicity</option>
        <option value="Caucasian" >Caucasian</option>
        <option value="Black" >Black</option>
        <option value="Hispanic" >Hispanic</option>
        <option value="Indian" >Indian</option>
        <option value="Middle Eastern" >Middle Eastern</option>
        <option value="Native American" >Native American</option>
        <option value="Asian" >Asian</option>
        <option value="Mixed Race" >Mixed Race</option>
        <option value="Other Ethnicity" >Other Ethnicity</option>


    </select>


</div>

<div class="drp_bxx1">
    <select class="slt" name="country">
        <option value="">Any Country</option>
        <option value="United States" selected >United States</option>
        <option value="Canada">Canada</option>
        <option value="United Kingdom">United Kingdom</option>
        <option value="Afghanistan" >Afghanistan</option>
        <option value="Algeria" >Algeria</option>
        <option value="Argentina" >Argentina</option>
        <option value="Australia" >Australia</option>
        <option value="Austria" >Austria</option>
        <option value="Bahamas" >Bahamas</option>
        <option value="Bangladesh" >Bangladesh</option>
        <option value="Barbados" >Barbados</option>
        <option value="Belgium" >Belgium</option>
        <option value="Belize" >Belize</option>
        <option value="Bermuda" >Bermuda</option>
        <option value="Bolivia" >Bolivia</option>
        <option value="Brazil" >Brazil</option>
        <option value="Brunei Darussalam" >Brunei Darussalam</option>
        <option value="Bulgaria" >Bulgaria</option>
        <option value="Canada" >Canada</option>
        <option value="Czech Republic" >Czech Republic</option>
        <option value="Chile" >Chile</option>
        <option value="China" >China</option>
        <option value="Colombia" >Colombia</option>
        <option value="Costa Rica" >Costa Rica</option>
        <option value="Croatia" >Croatia</option>
        <option value="Denmark" >Denmark</option>
        <option value="Dominican Republic" >Dominican Republic</option>
        <option value="Ecuador" >Ecuador</option>
        <option value="Egypt" >Egypt</option>
        <option value="Estonia" >Estonia</option>
        <option value="England" >England</option>
        <option value="Finland" >Finland</option>
        <option value="France" >France</option>
        <option value="Germany/Deutschland" >Germany/Deutschland</option>
        <option value="Guatemala" >Guatemala</option>
        <option value="Greece" >Greece</option>
        <option value="Honduras" >Honduras</option>
        <option value="Hong Kong" >Hong Kong</option>
        <option value="Hungary" >Hungary</option>
        <option value="Iceland" >Iceland</option>
        <option value="India"  >India</option>
        <option value="Indonesia" >Indonesia</option>
        <option value="Ireland" >Ireland</option>
        <option value="Israel" >Israel</option>
        <option value="Italy" >Italy</option>
        <option value="Jamaica" >Jamaica</option>
        <option value="Japan" >Japan</option>
        <option value="Jordan" >Jordan</option>
        <option value="Kenya" >Kenya</option>
        <option value="Kuwait" >Kuwait</option>
        <option value="Latvia" >Latvia</option>
        <option value="Lebanon" >Lebanon</option>
        <option value="Liechtenstein" >Liechtenstein</option>
        <option value="Lithuania" >Lithuania</option>
        <option value="Luxembourg" >Luxembourg</option>
        <option value="Malaysia" >Malaysia</option>
        <option value="Maldives" >Maldives</option>
        <option value="Malta" >Malta</option>
        <option value="Mexico" >Mexico</option>
        <option value="Monaco" >Monaco</option>
        <option value="Morocco" >Morocco</option>
        <option value="Nepal" >Nepal</option>
        <option value="Netherlands" >Netherlands</option>
        <option value="New Zealand" >New Zealand</option>
        <option value="Norway" >Norway</option>
        <option value="Pakistan" >Pakistan</option>
        <option value="Panama" >Panama</option>
        <option value="Paraguay" >Paraguay</option>
        <option value="Peru" >Peru</option>
        <option value="Philippines" >Philippines</option>
        <option value="Poland" >Poland</option>
        <option value="Portugal" >Portugal</option>
        <option value="Puerto Rico" >Puerto Rico</option>
        <option value="Qatar" >Qatar</option>
        <option value="Romania" >Romania</option>
        <option value="Russia" >Russia</option>
        <option value="Saudi Arabia" >Saudi Arabia</option>
        <option value="Scotland" >Scotland</option>
        <option value="Singapore" >Singapore</option>
        <option value="Slovenia" >Slovenia</option>
        <option value="South Africa" >South Africa</option>
        <option value="South Korea" >South Korea</option>
        <option value="Spain" >Spain</option>
        <option value="Sri Lanka" >Sri Lanka</option>
        <option value="Sweden" >Sweden</option>
        <option value="Switzerland" >Switzerland</option>
        <option value="Taiwan" >Taiwan</option>
        <option value="Thailand" >Thailand</option>
        <option value="Turkey" >Turkey</option>
        <option value="Uganda" >Uganda</option>
        <option value="Ukraine" >Ukraine</option>
        <option value="United Arab Emirates" >United Arab Emirates</option>
        <option value="United Kingdom" >United Kingdom</option>
        <option value="Venezuela" >Venezuela</option>
        <option value="Vietnam" >Vietnam</option>
        <option value="Wales" >Wales</option>
        <option value="U.A.E." >U.A.E.</option>
        <option value="IRAQ" >IRAQ</option>


    </select>
</div>

<div class="drp_bxx1">
    <select class="slt" name="religion">
        <option value="">Religion</option>
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

    <div class="drp_bxx1">
        <select class="slt" name="marital">
            <option value="">---select---</option>
            <option value="Still Married" >Still Married</option>
            <option value="Divorced" >Divorced</option>
            <option value="Separated">Separated</option>
            <option value="Widowed">Widowed</option>
        </select>
    </div>
<input name="" type="submit" value="SEARCH" class="button" />
</form>
<!-- start popup -->
<div id="small-dialog" class="mfp-hide">
    <div class="pop_up">
        <h2>It is a long established fact</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic</p>
    </div>
</div>
<!-- end popup -->
<div class="srch_list">

    <h5>Search Result&nbsp;<span>- <?php echo count($fetch1) ?> Results are found.</span></h5>

    <?php foreach($fetch1 as $row)
    {

    ?>
    <div class="srch_para">
        <p class="para"><a href="<?php echo site_url('profile_details')?>?id=<?php echo $row['uid']; ?>" > <img src="<?php echo base_url()?>assets/images/<?php echo $row['image'];?>" alt="" width="170" height="158"></a><h4>Here I am&nbsp;<span>&nbsp;&nbsp;&nbsp;<?php echo $row['country'];?>,<?php echo $row['city'];?></span></h4><?php echo $row['description'];?></p>

        <h4><?php echo $row['first_name'] ?>&nbsp;<span>&nbsp;&nbsp;&nbsp;<?php echo $row['looking_for'] ?>. </span><span style="color:green;">&nbsp;&nbsp;&nbsp;<?php if($row['status']=1){echo"online";} ?></span></h4>

        <div class="clear"></div>
    </div>
    <?php
    }
    ?>

</div>














</div>



</div>
</div>
<!-- start top_grid -->
