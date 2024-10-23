<?php include ('head.php')?>

<html lang="en">
    
    <head>
        
        <title>Mo Dao Zu Shi Prompt Generator - Main Generation </title>
<link rel="stylesheet" href="/generators/mdzs/style2.css" type="text/css" media="screen">

<style type="text/css">
    body{
background: #fff url('tzxleft.png') bottom left fixed no-repeat;
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
                
                <h1>MDZS: <font color="#B94546">Main Generation</font></h1>
                
                <div id="prompts">

<b><?php
$rand_keys = array_rand($normies, 2);
echo $normies[$rand_keys[0]] . " &/ ";
echo $normies[$rand_keys[1]] . "";
?></b>
<br />
<?php print_r(array_random($prompts)); ?></div>

<p align="center"><input type="button" onclick="location.reload();" value="Generate another?" /></p>


                <p>This generator has all of the characters from the main generation of MDZS (Wei Wuxian, Jiang Yanli, Wen Qing, etc.), along with all the prompts. The Yi City Trio is also here to take CQL-canon into account, but A-Qing is not.</p>
                
<?php include('footer.php');?>
