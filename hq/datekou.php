<?php include('header.php')?>

        
        <style type="text/css">
          body{
            background: #008080;
            }

            ::selection {
                background: #00b3b3;
                color: #fff;
            }
            ::-moz-selection {
                background: #00b3b3;
                color: #fff;
            }

            ::-webkit-selection {
                background: #00b3b3;
                color: #fff;
            }

            #container{
                background: #fff;
                padding: 1em;
                margin: 3em auto;
                font: normal 100%/160% 'PT Sans';
                width: 70%;
                border: 1px solid #000;
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
                color: #008080;
            }
            
            #prompts{
                font-size: 200%;
                text-align: center;
                line-height: 130%;
                background: #008080;
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
                color: #008080;
            }
            
            a:hover, a:active, a:focus{
                text-decoration: none;
            }
            
            input[type="button"]{
                color: #000;
                font: normal 150% 'Poiret One', sans-serif;
                background: #008080;
                color: #fff;
                padding: 5px 10px;
                display: block;
                text-align: center;
                margin-bottom: 1.5em;
                text-transform: lowercase;
                border: 1px #008080 solid;
            }
            
            input[type="button"]:hover, input[type="button"]:focus{
                background: #fff;
                color: #000;
                border: 1px #008080 solid;
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
                
                <h1><font color="#008080">Haikyuu!!</font> Prompt Generator</h1>
                    <h2>Datekou</h2>
                
                <div id="prompts">

<?php
$rand_keys = array_rand($datekou, 2);
echo $datekou[$rand_keys[0]] . "/";
echo $datekou[$rand_keys[1]] . "";
?>
<br />
<?php print_r(array_random($hq)); ?></div>

<p align="center"><input type="button" onclick="location.reload();" value="Generate another?" /></p>


                <p>This generator has all Haikyuu characters on the Datekou boys' volleyball team.


                </p>
                
<?php include('footer.php');?>
