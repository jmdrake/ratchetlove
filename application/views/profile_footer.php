<div class="w3-row">
            <div class="w3-container">
                <div class="w3-card-4">
                    <div class="w3-row">
                        <div class="w3-col m4">
                            <div class="w3-container">
                                <img src="<?php echo base_url()?>assets/images/<?php echo $profileinfo['galimg1'];?>" alt="profileimage" width="100%"/>
                                <div class="w3-container" style="text-align : center; padding : 2px">
                                    <?php echo $profileinfo['age']?> <?php echo $profileinfo['city'];?> <?php echo $profileinfo['state']?>, <?php echo $profileinfo['height']?>
                                </div>
                                <div style="text-align : center; padding : 2px">
                                    <i class="fa fa-circle" style="color : lightgreen"></i> Online Now
                                </div>
                            </div>
                        </div>
                        <div class="w3-col m4">
                            <h4><?php echo $profileinfo['first_name'] . $profileinfo['last_name'] ;?>: <?php echo $profileinfo['headline'];?></h4>
                            <div class="w3-row">
                                <div class="w3-col m3" style="color : blue">
                                    Name
                                </div>
                                <div class="w3-col m9">
                                    <?php echo $profileinfo['first_name']?> <?php echo $profileinfo['last_name'] ;?>
                                </div>                                
                                <div class="w3-col m3" style="color : blue">
                                    Gender
                                </div>
                                <div class="w3-col m9">
                                    <?php echo $profileinfo['gender']?>
                                </div>                                
                                <div class="w3-col m3" style="color : blue">
                                    Looking for
                                </div>
                                <div class="w3-col m9">
                                    <?php echo $profileinfo['looking_for']?>
                                </div> 
                                <div class="w3-col m3" style="color : blue">
                                    Marital Status
                                </div>
                                <div class="w3-col m9">
                                    <?php echo $profileinfo['marital_status']?>
                                </div>
                                <div class="w3-col m12">
                                    <button type="button" class="w3-btn w3-blue"><i class="fa fa-star"></i>Save</button>
                                    <button type="button" class="w3-btn w3-blue"><i class="fa fa-smile-o"></i>Wink</button>
                                    <button type="button" class="w3-btn w3-blue"><i class="fa fa-envelope"></i>Message</button>
                                </div>
                            </div>
                        </div>
                        <div class="w3-col m4">
                            <div class="w3-image">
                                <img src="<?php echo base_url()?>assets/images/<?php echo $profileinfo['galimg1'];?>" width="100px"/>
                                <img src="<?php echo base_url()?>assets/images/<?php echo $profileinfo['galimg2'];?>" width="100px"/>
                                <img src="<?php echo base_url()?>assets/images/<?php echo $profileinfo['galimg3'];?>" width="100px"/>
                                <img src="<?php echo base_url()?>assets/images/<?php echo $profileinfo['galimg4'];?>" width="100px"/>
                            </div>
                        </div>
                    </div>
                    <div class="w3-row" style="margin-left : 10%">
                        <div class="w3-col m3" style="color : blue">
                            Ethnicity
                        </div>
                        <div class="w3-col m3">
                            <?php echo $profileinfo['ethnicity']?>
                        </div>                                
                        <div class="w3-col m3" style="color : blue">
                            Hair Color
                        </div>
                        <div class="w3-col m3">
                            <?php echo $profileinfo['hair_color']?>
                        </div>
                        <div class="w3-col m3" style="color : blue">
                            Eye Color
                        </div>
                        <div class="w3-col m3">
                            <?php echo $profileinfo['eye_color']?>
                        </div>                                
                        <div class="w3-col m3" style="color : blue">
                            Body Type
                        </div>
                        <div class="w3-col m3">
                            <?php echo $profileinfo['body_type']?>
                        </div>                                
                        <div class="w3-col m3" style="color : blue">
                            Ambitious
                        </div>
                        <div class="w3-col m3">
                            <?php echo $profileinfo['ambitious']?>
                        </div>
                        <div class="w3-col m3" style="color : blue">
                            Income
                        </div>
                        <div class="w3-col m3">
                            <?php echo $profileinfo['income']?>
                        </div>                                                        
                        <div class="w3-col m3" style="color : blue">
                            Owns Car
                        </div>
                        <div class="w3-col m3">
                            <?php echo $profileinfo['own_car']?>
                        </div>                                                        
                        <div class="w3-col m3" style="color : blue">
                            Second Language
                        </div>
                        <div class="w3-col m3">
                            <?php echo $profileinfo['second_language']?>
                        </div>                                                        
                        <div class="w3-col m3" style="color : blue">
                            Education
                        </div>
                        <div class="w3-col m3">
                            <?php echo $profileinfo['education']?>
                        </div>
                        <div class="w3-col m3" style="color : blue">
                            Has Children
                        </div>
                        <div class="w3-col m3">
                            <?php echo $profileinfo['have_children']?>
                        </div>          
                        <div class="w3-col m3" style="color : blue">
                            Wants Children
                        </div>
                        <div class="w3-col m3">
                            <?php echo $profileinfo['want_children']?>
                        </div>                                                        
                        <div class="w3-col m3" style="color : blue">
                            Smokes
                        </div>
                        <div class="w3-col m3">
                            <?php echo $profileinfo['smoke']?>
                        </div>                                                                                
                        <div class="w3-col m3" style="color : blue">
                            Drugs
                        </div>
                        <div class="w3-col m3">
                            <?php echo $profileinfo['drug']?>
                        </div>
                        <div class="w3-col m3" style="color : blue">
                            Drinks
                        </div>
                        <div class="w3-col m3">
                            <?php echo $profileinfo['drink']?>
                        </div>
                        <div class="w3-col m3" style="color : blue">
                            Religion
                        </div>
                        <div class="w3-col m3">
                            <?php echo $profileinfo['religion']?>
                        </div>                        
                        <div class="w3-col m3" style="color : blue">
                            Profession
                        </div>
                        <div class="w3-col m3">
                            <?php echo $profileinfo['profession']?>
                        </div>
                    </div>
                </div>
                <div class="w3-card-4">
                    <div class="txtBlue" style="text-align:center; line-height:42px">
                        <h4>Send A Quick Message!</h4>    
                    </div>
                    <form role="form">
                        <div style="width:90%; margin-left:auto; margin-right: auto">
                            <textarea style="width:100%" rows="4"></textarea>
                        </div>                        
                        <div style="width:30%; margin-left:auto; margin-right: auto">
                            <button type="submit" class="btn btn-default w3-blue" style="width:100%">Send</button>                            
                        </div>                        
                    </form>                
                </div>
                <div class="w3-card-4">                    
                    <div class="txtBlue">Interests</div>
                    <div style="padding-left: 20px">
                        <?php echo $profileinfo['interests']?>
                    </div>
                </div>
                <div class="w3-card-4">
                    <div>
                        <div class="txtBlue">Activities</div>
                    </div>
                    <div style="padding-left: 20px">
                        <p><?php echo $profileinfo['description']?></p>
                    </div>
                </div>
            </div>            
        </div>