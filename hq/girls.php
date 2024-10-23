<?php include('header.php')?>

        <title>Haikyuu!! Prompt Generator - Girls Only</title>
        
        <style type="text/css">
          body{
            background: #efb3e5;
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
                color: #efb3e5;
            }
            
            #prompts{
                font-size: 200%;
                text-align: center;
                line-height: 130%;
                background: #efb3e5;
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
                color: #efb3e5;
            }
            
            a:hover, a:active, a:focus{
                text-decoration: none;
            }
            
            input[type="button"]{
                background: #efb3e5;
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
                color: #efb3e5;
                border: 1px #efb3e5 solid;
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
                
                <h1><font color="#efb3e5">Haikyuu!!</font> Prompt Generator</h1>
                    <h2>Girls</h2>
                
                <div id="prompts">

<?php

$rand_keys = array_rand($girls, 2);
echo $girls[$rand_keys[0]] . "/";
echo $girls[$rand_keys[1]] . "";
?>
<br />
<?php print_r(array_random($hq)); ?>
</div>

<p align="center"><input type="button" onclick="location.reload();" value="Generate another?" /></p>


                <p>This generator has all female Haikyuu characters around school age, who are either managers or siblings of main characters.
                </p>
                
<?php include('footer.php');?>
