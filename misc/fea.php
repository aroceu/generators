<?php include('../php/func.php')?>
<?php include('../php/fea.php')?>
<?php include('../php/fandom.php') ?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        
        <title>Fire Emblem: Awakening Prompt Generator</title>
       <meta name="robots" content="noai, noimageai">
        <meta name="description" content="Prompt generators originally made for fannish use, but may have other applications. These generators include some fandom-specific generators, the Sexy Times with Wangxian tag generator, a handful of lyric generators, kink generators, and other types of prompt generators I come up with whenever I feel like making them."/>

		<meta charset="UTF-8">
        <meta name="description" content="Prompt generators originally made for fannish use, but may have other applications. These generators include some fandom-specific generators, the Sexy Times with Wangxian tag generator, a handful of lyric generators, kink generators, and other types of prompt generators I come up with whenever I feel like making them."/>
        <meta property="og:title" content="aroceu's prompt generators" />
        <meta property="og:description" content="Prompt generators originally made for fannish use, but may have other applications. These generators include some fandom-specific generators, the Sexy Times with Wangxian tag generator, a handful of lyric generators, kink generators, and other types of prompt generators I come up with whenever I feel like making them." />
        <meta property="og:image" content="https://aroceu.com/generators/preview.png" />
        <meta property="og:url" content="https://aroceu.com/generators" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

                <link rel="shortcut icon" type="image/x-icon" href="../favico.png" />
                <link href="https://fonts.googleapis.com/css?family=Bellefair|Zilla+Slab" rel="stylesheet">
                
        <style type="text/css">
        
        body{
            margin: 0;
            padding: 0;
            background: #7A778A;
        }
        
        #header{
        font: normal 300% 'Bellefair';
        letter-spacing: 2px;
        text-transform: lowercase;
        text-align: center;
        margin: 2em auto 0;
        z-index: 99999;
        color: #5B4C55;
        }

#container{
    margin: -12px auto;
    width: 40em;
}

#prompts{
    color: #5B4C55;
    font: normal 180% 'Zilla Slab', serif;
    text-align: center;
    padding: 1em;
    background: #fff;
}

input[type="button"]{
    background: #5B4C55;
    font: normal 120% 'Bellefair', sans-serif;
    color: #fff;
    padding: 10px;
    border-radius: 30px;
    border: 1px #5B4C55 solid;
}

input[type=button]:hover{
    background: #fff;
    color: #5B4C55;
    border: 1px solid #fff;
}

#footer{
    background: #fff;
    font: normal 100% 'Zilla Slab';
    padding: 1em;
    width: 38em;
    margin: 2em auto;
    text-align: center;
}

a:link, a:visited{
    color: #7A778A;
    border-bottom: 1px dotted #7A778A;
    text-decoration: none;
}

a:hover{
    border-bottom: 1px solid #7A778A;
}

@media only screen and (max-width: 960px) and (min-width: 431px) {

html {
-webkit-text-size-adjust: none;
}

}

@media only screen and (max-width: 430px) and (min-width: 0px) {

html {
-webkit-text-size-adjust: none;
font-size: 90%;
}

body{
    margin: 0;
    padding: 0;
}

#container, #footer{
    width: 100%;
    padding: 1em 0;
}

#header{
    font-size: 250%;
}

}
                  </style>
        
        </head>
        
        <body>
            
            <div id="header">
                Fire Emblem: Awakening Prompt Generator
                </div>
            
            <div id="container">
                
                <div id="prompts">

<?php
$rand_keys = array_rand($fea, 2);
echo $fea[$rand_keys[0]] . "/";
echo $fea[$rand_keys[1]] . "";
?>
<br />
<?php print_r(array_random($fandom)); ?>
</div>

<p align="center"><input type="button" onclick="location.reload();" value="Generate another?" /></p>



                </p>
                
</div>


<div id="footer">
     &copy; <?php echo date("Y"); ?> &bull; <a href="../">generators</a> &bull; <a href="https://aroceu.com">contact</a>
    </div>
</div>