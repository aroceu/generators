<!-- UNDER CONSTRUCTION -->

<?php include ('head.php')?>

<html>
    
    <head>
        
        <title>Mo Dao Zu Shi Prompt Generator - Main Characters, No Incest Combinations </title>
<link rel="stylesheet" href="/generators/mdzs/style.css" type="text/css" media="screen">
        
        <style type="text/css">
            body{
                background: #fff url('wwx.png') bottom left no-repeat fixed;
            }
        </style>
        
        </head>
        <body>
            
            <div id="container">
                
                <h1>MDZS: <font color="#819EAB">Main Characters w/o Incest</font></h1>
                
                <div id="prompts">

<b><?php
$rand_keys = array_rand($main, 2);
$nocest2 = $main[$rand_keys[1]];

if($main[$rand_keys[0]].str_starts_with('Jiang')){
    echo 'Jiang';
}

if($main[$rand_keys[0]].str_starts_with('Jin')){
    echo 'Jin';
}

if($main[$rand_keys[0]].str_starts_with('Nie')){
    echo 'Nie';
}

if($main[$rand_keys[0]].str_starts_with('Lan')){
    echo 'Lan';
}

if($main[$rand_keys[0]].str_starts_with('Wen')){
    echo 'Wen';
}

?></b>
<br />
<?php print_r(array_random($prompts)); ?></div>

<p align="center"><input type="button" onclick="location.reload();" value="Generate another?" /></p>


                <p>This generator has all the main characters from MDZS. Main Characters are defined by those who have speaking roles and have a relatively important role in the plot. Note that Jin Zixun is not in here, but Su She and Qin Su are.</p>
                
<?php include('footer.php');?>
