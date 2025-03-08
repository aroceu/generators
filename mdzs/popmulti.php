<?php include ('head.php')?>
    
    <head>
        
        <title>Mo Dao Zu Shi Prompt Generator - Popular Ships w/ Multi Prompts</title>
<link rel="stylesheet" href="style.css" type="text/css" media="screen">

<style type="text/css">
    body{
background: #fff url('wangxian rev.png') bottom right fixed no-repeat;
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
                
                <h1>MDZS: <font color="#B94546">Popular Ships</font> w/ <font color="#819EAB">Multi Prompts</font></h1>
                
                <div id="prompts">

<b><?php print_r(array_random($popular)); ?></b>
<br /><span style="text-transform: lowercase;">
<?php

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
?></span></div>

<p align="center"><input type="button" onclick="location.reload();" value="Generate another?" /></p>


                <p>This generator has many popular ships (threesomes included) along with multiple combined prompts at a time, all intended to be present in a single fanwork. However, as this is not an official challenge and is only a generator to help give you ideas, feel free to disregard any number of prompts for your convenience.</p>
                
<?php include('footer.php');?>
