<?php get_comp('head'); 
get_comp('navbar');
get_comp('navbar2')?>
<div class="skillsbackground">
    <div class="search-title">
    <h1 class="">Search</h1>
</div>
<!-- <form class="form1" >
<div class="text_cont">
    
<input type="text" name="" class="text_bar"  >

</div> 
<div class="searchbtn">
<input class="button-1" type="submit" value="Submit" >
</div>
</form> -->
<form id="searchform" >
        <input  class="text_bar" id="textcont" type="text" placeholder="SEARCH FOR MOVIES" name="query" >
        <button class="button-1" id="submited1">Search</button>
     </form>
       <div class=wallwidth> <div class="images1">
<!-- <button class="animes">ANIMES</button> -->

<!-- <ul id="anime_names" >


</ul> -->
    </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<?php get_scripts('api'); ?>
</body>
</html>