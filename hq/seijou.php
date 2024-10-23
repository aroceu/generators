<?php include('header.php')?>

        <title>Haikyuu!! Prompt Generator - Aoba Johsai</title>
       
        
        <style type="text/css">
          body{
            background: #61d8ca;
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
                color: #61d8ca;
            }
            
            #prompts{
                font-size: 200%;
                text-align: center;
                line-height: 130%;
                background: #61d8ca;
                color: #fff;
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
                color: #61d8ca;
            }
            
            a:hover, a:active, a:focus{
                text-decoration: none;
            }
            
            input[type="button"]{
                background: #61d8ca;
                color: #fff;
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
                color: #61d8ca;
                border: 1px #61d8ca solid;
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
                
                <h1><font color="#61d8ca">Haikyuu!!</font> Prompt Generator</h1>
                    <h2>Aoba Johsai</h2>
                
                <div id="prompts">

<?php
$rand_keys = array_rand($seijou, 2);
echo $seijou[$rand_keys[0]] . "/";
echo $seijou[$rand_keys[1]] . "";
?>
<br />
<?php print_r(array_random($hq)); ?>
</div>

<p align="center"><input type="button" onclick="location.reload();" value="Generate another?" /></p>


                <p>This generator has all Haikyuu characters on the Aoba Johsai boys' volleyball team.
                </p>
                
               <?php include('footer.php');?>
