<?php get_comp('head'); 
get_comp('navbar');
get_comp('navbar2')?>
<div class="skillsbackground">
<div class="about" >
    <h1>SKILLS</h1>
    </div>
    <div class="slickright">
    <div class="slick">
        <div style="display:flex" class="box box-1" > <img  src="<?php echo APPURL.'apps/'.APPDIR; ?>/assets/images/faiz1.hief.jpg" alt="">
        </div>
        <div style="display:flex" class="box box-2" > <img  src="<?php echo APPURL.'apps/'.APPDIR; ?>/assets/images/faiz2.hief.jpg" alt="">
    </div>
  
        <div style="display:flex" class="box box-4" > <img  src="<?php echo APPURL.'apps/'.APPDIR; ?>/assets/images/faiz4.hief.jpg" alt="">
    </div>
    </div>
    <p class="p0" style="padding:8px; text-align:center; display: flex;">THIS PHOTOGRAPH WAS TAKEN BY SHAIKH ABRAR AROUND 9:00PM. </p>
    <p class="p1" style="padding:8px; text-align:center; display: flex; align-items: center; display:none; ">THIS IS ME SWIMMING AROUND 3:00 PM. </p>
    <p class="p2" style="padding:8px; text-align:center; display: flex; align-items: center; display:none; ">THIS PICTURE WAS ALSO TAKEN BY SHAIKH ABRAR AND THIS PICTURE INCLUDES MY BIKE WHICH IS CALLED AS REVOLT.</p>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<?php get_scripts('slick,skills,index');?>