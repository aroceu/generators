<html lang="en">
    
    <head>
        
        <title>Mitski Lyric Generator</title>
        
       <meta name="robots" content="noai, noimageai">
        <meta name="description" content="Prompt generators originally made for fannish use, but may have other applications. These generators include some fandom-specific generators, the Sexy Times with Wangxian tag generator, a handful of lyric generators, kink generators, and other types of prompt generators I come up with whenever I feel like making them."/>

		<meta charset="UTF-8">
        <meta name="description" content="Prompt generators originally made for fannish use, but may have other applications. These generators include some fandom-specific generators, the Sexy Times with Wangxian tag generator, a handful of lyric generators, kink generators, and other types of prompt generators I come up with whenever I feel like making them."/>
        <meta property="og:title" content="aroceu's prompt generators" />
        <meta property="og:description" content="Prompt generators originally made for fannish use, but may have other applications. These generators include some fandom-specific generators, the Sexy Times with Wangxian tag generator, a handful of lyric generators, kink generators, and other types of prompt generators I come up with whenever I feel like making them." />
        <meta property="og:image" content="https://aroceu.com/generators/preview.png" />
        <meta property="og:url" content="https://aroceu.com/generators" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
            <link rel="shortcut icon" type="image/x-icon" href="puberty2.ico" />
        
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,700;1,400;1,700&family=Pinyon+Script&display=swap" rel="stylesheet">
        
        <style type="text/css">
            
            body{
                background: url('bg.png') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-attachment: fixed;
  background-repeat: no repeat;
                font: normal 120%/160% 'Crimson Text';
                color: #ffffff;
            }
            
            #container{
                width: 45em;
                margin: 5em auto;
            }
            
            h1{
                font: normal 400% 'Pinyon Script';
                color: #ffffff;
                text-align: center;
                margin: 0;
            }
            
            #prompt{
                border: 3px solid #ffffff;
                padding: 1.5em 0.5em 0.5em;
                color: #ffffff;
                text-transform: lowercase;
                font: normal 180% 'Crimson Text';
                text-align: center;
                margin-top: -0.8em;
            }
            
            input[type="button"]{
                font: normal 100% 'Pinyon Script', sans-serif;
                color: #C09B4F;
                text-transform: lowercase;
                text-align: center;
                border:none;
                display: block;
                padding: 0.3em 0.8em;
                background: #fff;
                margin: 0;
                border: 3px solid #ffffff;
            }

            
            input[type=button]:hover{
            cursor: pointer;
            border: 3px solid #C09B4F;
            }
            
            #blurb, #footer{
                text-shadow: 0.03em 0.03em 0.03em #C09B4F;
                text-align: right;
                background: #3D4A42;
                opacity: 0.7;
                margin: 0;
                padding: 0.5em;
                font-size: 90%;
            }
            
            #footer{
                padding-bottom: 1.5em;
            }
            
            a:link, a:visited{
                color: #fff;
            }
            
            a:hover, a:active{
                text-decoration: none;
            }
            
            @media only screen and (max-width: 430px) and (min-width: 0px) {

html {
-webkit-text-size-adjust: none;
font-size: 90%;
background: url('bg.png') no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    height: 100%;
    overflow: hidden;
}


#container {
    width: 100%;
    margin: 5vh auto;
    
}

}
            
            
        </style>
        
    </head>
    
    <body>
        
        <div id="container">
        
        <h1>
            
            Mitski Lyric Generator
            
        </h1>
        
        <div id="prompt">
            
            <?php

$f_contents = file("lyrics.txt");
$line = $f_contents[array_rand($f_contents)];
$data = $line;

print($data);

?>

<p align="center"><input type="button" onclick="location.reload();" value="Generate another?" /></p>


</div>

<div id="blurb">
    <p>This contains lines from Mitski's <i>Lush</i>, <i>Retired From Sad</i>, <i>Bury Me at Makeout Creek</i>, <i>Puberty 2</i>, <i>Be The Cowboy</i>, <i>Laurel Hell</i>, and <i>The Land Is Inhospitable and So Are We</i>.
    <br />Feel free to use your result as a fic title, premise, or anything else.
    <br />If you roll one that has a typo, punctuation issue, or is put awkwardly, feel free to contact me.
    <br />Credit for using this is not required, but always appreciated.</p>
</div>

<div id="footer">
    &copy; <?php echo date("Y"); ?> &bull; <a href="../">Generators</a> &bull; <a href="../ts">Taylor Swift</a> &bull; <a href="../crj">Carly Rae Jepsen</a> &bull; <a href="https://aroceu.com">Contact</a>
    </div>
</div>
        
        
        </div>
        
    </body>
</html>