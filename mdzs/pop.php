<?php include ('head.php')?>
    
    <head>
        
        <title>Mo Dao Zu Shi Prompt Generator - Popular Ships </title>
<link rel="stylesheet" href="/generators/mdzs/style2.css" type="text/css" media="screen">

<style type="text/css">
    body{
background: #fff url('wangxian.png') bottom left fixed no-repeat;
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
                
                <h1>MDZS: <font color="#B94546">Popular Ships</font></h1>
                
                <div id="prompts">

<b><?php print_r(array_random($popular)); ?></b>
<br />
<?php print_r(array_random($prompts)); ?></div>

<p align="center"><input type="button" onclick="location.reload();" value="Generate another?" /></p>


                <p>This generator has many popular ships along with a single prompt.</p>
                
<?php include('footer.php');?>
