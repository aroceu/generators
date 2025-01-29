<?php include ('head.php')?>
    
    <head>
        
        <title>Mo Dao Zu Shi Prompt Generator - Sect Shuffle</title>
<link rel="stylesheet" href="/generators/mdzs/style2.css" type="text/css" media="screen">

<style type="text/css">
    body{
background: #fff url('ok2.png') bottom left fixed no-repeat;
}

.jiang{
    color: #4B3F70;
}

.jin{
    color: #A35034;
}

.lan{
color: #284750;
}

.nie{
    color: #4A4F2F;
}

.wen{
    color: #4D2625;
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
                
                <h1>MDZS: <font color="#B94546">Sect Shuffle</font></h1>
                
                <div id="prompts">

<b><?php

print_r(array_random($main));?></b>
gets raised by the

<b><?php
print_r(array_random($sects));?></b>
sect.

</span></b></div>

<p align="center"><input type="button" onclick="location.reload();" value="Generate another?" /></p>


                <p>This generator shuffles around all the <a href="main"><i>main characters</i></a> being raised by any of the following sects: Yunmeng Jiang, Lanling Jin, Gusu Lan, Qinghe Nie, Qishan Wen, Yao, and Ouyang sects.</p>
                
<?php include('footer.php');?>
