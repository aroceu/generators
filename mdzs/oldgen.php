<?php include ('head.php')?>
    
    <head>
        
        <title>Mo Dao Zu Shi Prompt Generator - Older Generation </title>
<link rel="stylesheet" href="style.css" type="text/css" media="screen">

<style type="text/css">
    body{
background: #fff url('tzxright.png') bottom right fixed no-repeat;
}

@media only screen and (max-width: 900px) and (min-width: 0px) {

html {
-webkit-text-size-adjust: none;
font-size: 90%;
}

body{
    background: #fff;
    margin: 0;
    padding: 0;
}

}
</style>
        
        
        </head>
        <body>
            
            <div id="container">
                
                <h1>MDZS: <font color="#819EAB">Older Generation</font></h1>
                
                <div id="prompts">

<b><?php
$rand_keys = array_rand($oldies, 2);
echo $oldies[$rand_keys[0]] . " &/ ";
echo $oldies[$rand_keys[1]] . "";
?></b>
<br />
<?php print_r(array_random($prompts)); ?></div>

<p align="center"><input type="button" onclick="location.reload();" value="Generate another?" /></p>


                <p>This generator has all of the parental/older generation from MDZS, along with all the prompts.</p>
                
<?php include('footer.php');?>
