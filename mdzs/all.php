<?php include ('head.php')?>
    
    <head>
        
        <title>Mo Dao Zu Shi Prompt Generator - All Characters, All Prompts </title>
<link rel="stylesheet" href="style.css" type="text/css" media="screen">

<style type="text/css">
    body{
background: #fff url('bunny.png') bottom left fixed no-repeat;
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
                
                <h1>MDZS: <font color="#B94546">All Characters</font> & <font color="#819EAB">All Prompts</font></h1>
                
                <div id="prompts">

<b><?php
$rand_keys = array_rand($all, 2);
echo $all[$rand_keys[0]] . " &/ ";
echo $all[$rand_keys[1]] . "";
?></b>
<br />
<?php print_r(array_random($prompts)); ?></div>

<p align="center"><input type="button" onclick="location.reload();" value="Generate another?" /></p>


                <p>This generator has all characters from MDZS, as well as some animals, CQL-only characters, and inanimate objects with names. All prompts are also featured.</p>
                
<?php include('footer.php');?>
