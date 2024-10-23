<?php include ('head.php')?>
    
    <head>
        
        <title>Mo Dao Zu Shi Prompt Generator - Multiple Prompts</title>
<link rel="stylesheet" href="/generators/mdzs/style.css" type="text/css" media="screen">

<style type="text/css">
    body{
background: #fff url('ok1.png') bottom right fixed no-repeat;
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
                
                <h1>MDZS: <font color="#819EAB">Multiple Prompts</font></h1>
                
                <div id="prompts">

<span style="text-transform: lowercase;">
<b><?php

$rand_keys = array_rand($multi, $i=rand(2,4));
echo $multi[$rand_keys[0]] . " + ";

if($i == 2){
    echo $multi[$rand_keys[1]];
}
else{
    for($c = 1; $c < $i - 1; ++$c){
        echo $multi[$rand_keys[$c]] . " + ";
    }
    echo $multi[$rand_keys[$i - 1]];
}
?></b></span></div>

<p align="center"><input type="button" onclick="location.reload();" value="Generate another?" /></p>


                <p>This generator has multiple prompts intended to be combined in a single fanwork. As this is not an official challenge and only serves to help give you ideas, feel free to disregard any number of prompts at a time.</p>
                
<?php include('footer.php');?>
