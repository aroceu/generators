<!doctype html>

<?php include('../php/func.php')?>
<?php include('../php/yoi.php') ?>
<?php include('../php/fandom.php')?>
<html lang="en">
    
    <head>
        
        <title>Yuri!!! on Ice Prompt Generator - Main Characters</title>
<link rel="shortcut icon" type="image/x-icon" href="/generators/favico.png" />
        <meta name="viewport" content="initial-scale=1.0">


<link href="https://fonts.googleapis.com/css?family=Unica+One" rel="stylesheet">
        
        <style type="text/css">
          body{
              color: #254270;
            background: #050a2f; /* Old browsers */
background: -moz-linear-gradient(-45deg, #050a2f 0%, #477bb4 51%, #477bb4 51%, #ffffff 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(-45deg, #050a2f 0%,#477bb4 51%,#477bb4 51%,#ffffff 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(135deg, #050a2f 0%,#477bb4 51%,#477bb4 51%,#ffffff 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#050a2f', endColorstr='#ffffff',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
background-repeat: no-repeat;
		background-attachment: fixed;

            }
        
            #container{
                background: #fff;
                padding: 1em;
                margin: 4em auto;
                font: normal 100%/160% inherit;
                width: 70%;
    box-shadow: -0.5em -0.5em 0em #608DBE;            }
            
            h1{
                font: normal 300% 'Unica One';
                text-transform: uppercase;
                text-align: center;
                margin-bottom: 0;
                color: #254270;
                text-shadow: 0.05em 0.05em 0em #A2BCD9;
            }
            
            #prompts{
                font-size: 200%;
                text-align: center;
                line-height: 130%;
 background: #254270;   width: 50%;
    padding: 0.5em;
    font-family: 'Unica One';
    letter-spacing: 1px;
    margin: 1.5em auto 0;
    text-transform: uppercase;
    color: #fff;
        box-shadow: 0.2em 0.2em 0em #A2BCD9;            }
            
            
            a:link, a:visited{
                color: #A2BCD9;
            }
            
            a:hover, a:active{
                text-decoration: none;
            }
            
            input[type="button"]{
                background: #254270;
                color: #fff;
                font: normal 150% 'Unica One', sans-serif;
                border: 1px #fff solid;
                padding: 5px 10px;
                display: block;
                text-align: center;
                margin-bottom: 1.5em;
                text-transform: lowercase;
                box-shadow: 0.2em 0.2em 0em #A2BCD9; 
            }
            
            input[type="button"]:hover{
                background: #fff;
                color: #000;
                border: 1px #eee solid;
            }
            
            #footer{
                margin: 2em;
                text-align: center;
                font: normal 100% 'Unica One', sans-serif;
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

#container{
        width: 96vw;
    padding: 2vw;
    box-shadow: none;
    border-bottom: 1em #608dbe solid;
    border-top: 1em solid #608dbe;
}

#prompts{
    width: 80%;
}

h1{
    font-size: 250%;
}

}
        </style>
        
        </head>
        
        <body>
            
            <div id="container">
                
                <h1>Yuri!! on Ice Prompt Generator</h1>

                <div id="prompts">

<?php
$rand_keys = array_rand($yoi, 2);
echo $yoi[$rand_keys[0]] . "/";
echo $yoi[$rand_keys[1]] . "";
?>
<br />
<?php print_r(array_random($fandom)); ?>

</div>

<p align="center"><input type="button" onclick="location.reload();" value="Generate another?" /></p>

<div id="footer">
 &copy; <?php echo date("Y"); ?> &bull; <a href="/generators/">generators</a> &bull; <a href="https://aroceu.com">contact</a></div>
    
    </div>
    
    </div>
    
    </body>
    
    </html>
