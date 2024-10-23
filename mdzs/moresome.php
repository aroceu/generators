<?php include ('head.php')?>
    
    <head>
        
        <title>Mo Dao Zu Shi Prompt Generator - Moresomes</title>
<link rel="stylesheet" href="/generators/mdzs/style2.css" type="text/css" media="screen">

<style type="text/css">
    body{
background: #fff url('wangxian rev.png') bottom left fixed no-repeat;
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
                
                <h1>MDZS: <font color="#B94546">Three/Foursomes</font></h1>
                
                <div id="prompts">

<b><?php

$rand_keys = array_rand($main, $i=rand(3,4));
echo $main[$rand_keys[0]] . "/";
echo $main[$rand_keys[1]] . "/";

if($i == 3){
    echo $main[$rand_keys[2]];
}
else{
    for($c = 2; $c < $i - 1; ++$c){
        echo $main[$rand_keys[$c]] . "/";
    }
    echo $main[$rand_keys[$i - 1]];
}

?>

</span></b></div>

<p align="center"><input type="button" onclick="location.reload();" value="Generate another?" /></p>


                <p>This generator creates a threesome or a foursome between any of the main characters of MDZS. Main Characters are defined by those who have speaking roles and have a relatively important role in the plot. Note that Jin Zixun is not in here, but Su She and Qin Su are.</p>
                
<?php include('footer.php');?>
