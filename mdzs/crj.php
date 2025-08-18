<?php

/** only used for one of DIFFERENT TYPES or just ONE **/
function array_random($arr, $num = 1) {
    shuffle($arr);
    
    $r = array();
    for ($i = 0; $i < $num; $i++) {
        $r[] = $arr[$i];
    }
    return $num == 1 ? $r[0] : $r;
}




?>

<?php include('fandom.php')?>

<?php

$mdzsboys = array("Wei Wuxian", "Lan Wangji", "Lan Xichen", "Jiang Cheng", "Jin Zixuan", "Jin Guangyao", "Jin Zixun", "Su She", "Nie Mingjue", "Nie Huaisang", "Wen Ning", "Xiao Xingchen", "Song Lan", "Xue Yang", "Wen Xu", "Wen Chao", "Mo Xuanyu");

$crj = array("All That", "Almost Said It", "Automatically in Love", "Beautiful", "Backseat", "Black Heart", "Body Language", "Both Sides Now", "Boy Problems", "Bucket", "Call Me Maybe", "Cry", "Curiosity", "Cut to the Feeling", "Drive", "E&bull;MO&bull;TION", "Everything He Needs", "Favourite Colour", "Feels Right", "Fever", "First Time", "For Sure", "Gimmie Love", "Good Time", "Guitar String / Wedding Ring", "Happy Not Knowing", "Hate That You Know Me", "Heavy Lifting", "Higher", "Hotel Shampoos", "Hurt So Good", "I Didn't Just Come Here to Dance", "I Know You Have a Girlfriend", "I Really Like You", "I Still Wonder", "I'll Be Your Girl", "In My Bedroom", "It Takes Two", "Julien", "Just a Step Away", "L.A. Hallucinations", "Let's Get Lost", "Love Again", "Making the Most of the Night", "Money and the Ego", "More than a Memory", "Never Get to Hold You", "No Drug Like Me", "Now That I Found You", "Party for One", "Picture", "Real Love", "Right Words Wrong Time", "Roses", "Run Away with Me", "Sour Candy", "Store", "Sunshine on My Shoulders", "Sweet Talker", "Sweetie", "Take a Picture", "Talk to Me", "Tell Me", "The One", "The Sound", "This Kiss", "Tiny Little Bows", "To Be Without You", "Tonight I'm Getting Over You", "Too Much", "Tug of War", "Turn Me Up", "Want You in My Room", "Warm Blood", "When I Needed You", "Worldly Matters", "Wrong Feels So Right", "Your Heart Is a Muscle", "Your Type", "This Love Isn't Crazy", "Window", "Felt This Way", "Window", "Felt This Way", "Stay Away", "This Is What They Say", "Heartbeat", "Summer Love", "Fake Mona Lisa", "Let's Sort the Whole Thing Out", "Comeback", "Solo", "Now I Don't Hate California After All", "Let's Be Friends", "Always on My Mind", "OMG", "ok on your own");
?>

<html lang="en">
    
<head>
    
    <meta name="viewport" content="initial-scale=1.0">
    
    <link href="https://fonts.googleapis.com/css2?family=Arsenal:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="../../generators/favico.png" />

    
    <title>
        carly rae jepsen mdzs prompt generator
    </title>
    
    <style type="text/css">
        
        body{
            background: #fff;
            text-transform: lowercase;
            font: normal 100%/150% 'Arsenal', sans-serif;
            color: #333;
        }

        ::selection {
            background: #ffe4fa;
            color: #333;
        }
        ::-moz-selection {
            background: #ffe4fa;
            color: #333;
        }

        ::-webkit-selection {
            background: #ffe4fa;
            color: #333;
        }

        #container{
            margin: 10vh auto;
            width: 50vw;
        }
        
        #header{
            margin: 0.5em auto 1em;
            text-transform: lowercase;
             text-align: center;
            border-top: #000 2px solid;
             padding-top: 0.5em;
             color: #974235;
             font: italic 200% 'Arsenal';
        }
        
        #header small{
            font-size: 50%;
            color: #333;
        }
        
        a:link, a:visited{
            color: #333;
        }
        
        a:hover, a:active{
            text-decoration: none;
        }
        
        #blurb{
            margin: 3em auto;
        }
        
        u, underline{
            text-decoration: none;
            background: #eaeaea;
        }
        
        #prompt{
            font: normal 180%/130% 'Arsenal';
            margin: 2em auto 1em;
        }
        
        input[type="button"]{
    font: normal 130% 'Arsenal', sans-serif;
    color: #974235;
    text-transform: lowercase;
    text-align: center;
    border: #333 1px solid;
    margin: 0 auto 3em;
    display: block;
    padding: 0.5em;
    background: #fff;
}

input[type=button]:hover{
cursor: pointer;
background: #eaeaea;
}

@media only screen and (max-width: 430px) and (min-width: 0px) {

html {
-webkit-text-size-adjust: none;
}

#container{
    width: 90%;
    margin: 5vh auto;
}

#prompt{
    margin: 1em auto;
}

#blurb{
    margin: -1.5em auto 1.5em;
}
    </style>
    
</head>

<body>
    
    <div id="container">
        
    <div id="header"><span style="color:#ff00ff">C</span><span style="color:#ff00cc">a</span><span style="color:#ff0099">r</span><span style="color:#ff0066">l</span><span style="color:#ff0033">y</span><span style="color: transparent;text-shadow: none;"> </span><span style="color:#ff0000">R</span><span style="color:#ff3300">a</span><span style="color:#ff6600">e</span><span style="color: transparent;text-shadow: none;"> </span><span style="color:#ff9900">J</span><span style="color:#ffcc00">e</span><span style="color:#ffff00">p</span><span style="color:#ccff00">s</span><span style="color:#99ff00">e</span><span style="color:#66ff00">n</span><span style="color: transparent;text-shadow: none;"> </span><span style="color:#33ff00">P</span><span style="color:#00ff00">r</span><span style="color:#00ff33">o</span><span style="color:#00ff66">m</span><span style="color:#00ff99">p</span><span style="color:#00ffcc">t</span><span style="color: transparent;text-shadow: none;">  </span><span style="color:#00ffff">G</span><span style="color:#00ccff">e</span><span style="color:#0099ff">n</span><span style="color:#0066ff">e</span><span style="color:#0033ff">r</span><span style="color:#0000ff">a</span><span style="color:#3300ff">t</span><span style="color:#6600ff">o</span><span style="color:#9900ff">r</span>
    <br /><small>as inspired by <a href="https://twitter.com/vilevelns">vilevelns'</a> <a href="http://lions-garb.net/playpen/sydney/">marvel/ts generator</a></small></div>

    
    <div id="prompt">

hmmm can't believe *throws dart* 

<?php print_r(array_random($crj)); ?>

is about *rolls die* 

<?php

$rand_keys = array_rand($mdzsboys, 2);
echo $mdzsboys[$rand_keys[0]] . "/";
echo $mdzsboys[$rand_keys[1]] . "";
?>


</div>

<p><input type="button" onclick="location.reload();" value="Generate another?" /></p>

    <div id="blurb">
        <p>this generator contains only the <u>boys</u> in <u>wei wuxian's generation</u> from <b>the untamed</b>. (this includes the yi city boys.) incest combos are also possible, but feel free to intrepret prompts any way you want.</p></div>

<center><?php include('footer.php');?>



</div>

</div>

</body>

    
</html>