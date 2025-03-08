<?php include ('head.php')?>
    
    <head>
        
        <title>Mo Dao Zu Shi Prompt Generator - Main Characters </title>
<link rel="stylesheet" href="style2.css" type="text/css" media="screen">
        
        <style type="text/css">
            body{
                background: #fff url('wwx.png') bottom right no-repeat fixed;
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
                
                <h1>MDZS: <font color="#B94546">Main Characters</font></h1>
                
                <div id="prompts">

<b><?php
$rand_keys = array_rand($main, 2);
echo $main[$rand_keys[0]] . "/";
echo $main[$rand_keys[1]] . "";
?></b>
<br />
<?php print_r(array_random($prompts)); ?></div>

<p align="center"><input type="button" onclick="location.reload();" value="Generate another?" /></p>


                <p>This generator has all the main characters from MDZS. Main Characters are defined by those who have speaking roles and have a relatively important role in the plot. Note that Jin Zixun is not in here, but Su She and Qin Su are.</p>
                
<?php include('footer.php');?>
