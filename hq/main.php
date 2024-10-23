<?php include('header.php')?>

        <title>Haikyuu!! Prompt Generator - Main Characters</title>

        <style type="text/css">
          body{
            background: #ccc;
            }
        
            #container{
                background: #fff;
                padding: 1em;
                margin: 3em auto;
                font: normal 100%/160% 'PT Sans';
                width: 70%;
            }
            
            h1{
                font: normal 300% 'Poiret One';
                text-transform: lowercase;
                text-align: center;
                letter-spacing: 1px;
                margin-bottom: 0;
            }
            
            h2{
                font: italic 200% 'Poiret One';
                text-transform: lowercase;
                text-align: center;
                margin-top: 0;
                color: #999;
            }
            
            #prompts{
                font-size: 200%;
                text-align: center;
                line-height: 130%;
                background: #eee;
    width: 50%;
    padding: 0.5em;
    font-family: 'Poiret One';
    letter-spacing: 1px;
    margin: 1.5em auto 0;
            }
            
            #footer{
                margin: 2em;
                text-align: center;
            }
            
            a:link, a:visited{
                color: #f49542;
            }
            
            a:hover, a:active, a:focus{
                text-decoration: none;
            }
            
            input[type="button"]{
                background: #eee;
                color: #000;
                font: normal 150% 'Poiret One', sans-serif;
                border: 1px #fff solid;
                padding: 5px 10px;
                display: block;
                text-align: center;
                margin-bottom: 1.5em;
                text-transform: lowercase;
            }
            
            input[type="button"]:hover, input[type="button"]:focus{
                background: #fff;
                color: #000;
                border: 1px #eee solid;
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
}

h1{
    font-size: 250%;
}

h2{
    font-size: 180%;
}

#prompts{
    font-size: 180%;
    width: 80vw;
}

}
        </style>
        
        </head>
        
        <body>
            
            <div id="container">
                
                <h1><font color="#f49542">Haikyuu!!</font> Prompt Generator</h1>
                    <h2>All Characters</h2>
                
                <div id="prompts">

<?php
$rand_keys = array_rand($main, 2);
echo $main[$rand_keys[0]] . "/";
echo $main[$rand_keys[1]] . "";
?>
<br />
<?php print_r(array_random($hq)); ?></div>

<p align="center"><input type="button" onclick="location.reload();" value="Generate another?" /></p>


                <p><b>Update 2022:</b> This generator now contains all characters available on each team page, as well as all the girls (without overlap) and the addition of some other characters within the main characters' generation.</p>
                
<?php include('footer.php');?>
