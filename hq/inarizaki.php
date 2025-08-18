<?php include('header.php')?>

        <title>Haikyuu!! Prompt Generator - Fukurodani</title>
       
        
        <style type="text/css">
          body{
            background: #000000;
            }

            ::selection {
                background: #9c3543;
                color: #fff;
            }
            ::-moz-selection {
                background: #9c3543;
                color: #fff;
            }
            ::-webkit-selection {
                background: #9c3543;
                color: #fff;
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
                color: #9c3543;
            }
            
            #prompts{
                font-size: 200%;
                text-align: center;
                line-height: 130%;
                background: #fff;
                color: #000;
    width: 50%;
    padding: 0.5em;
    font-family: 'Poiret One';
    letter-spacing: 1px;
    margin: 1.5em auto 0;
    border: 1px solid #9c3543;
            }
            
            #footer{
                margin: 2em;
                text-align: center;
            }
            
            a:link, a:visited{
                color: #9c3543;
            }
            
            a:hover, a:active, a:focus{
                text-decoration: none;
            }
            
            input[type="button"]{
                background: #fff;
                color: #000;
                font: normal 150% 'Poiret One', sans-serif;
                border: 1px #9c3543 solid;
                padding: 5px 10px;
                display: block;
                text-align: center;
                margin-bottom: 1.5em;
                text-transform: lowercase;
            }
            
            input[type="button"]:hover, input[type="button"]:focus{
                background: #9c3543;
                color: #000;
                border: 1px #000 solid;
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
                
                <h1><font color="#9c3543">Haikyuu!!</font> Prompt Generator</h1>
                    <h2>Inarizaki</h2>
                
                <div id="prompts">

<?php
$rand_keys = array_rand($inarizaki, 2);
echo $inarizaki[$rand_keys[0]] . "/";
echo $inarizaki[$rand_keys[1]] . "";
?>
<br />
<?php print_r(array_random($hq)); ?>
</div>

<p align="center"><input type="button" onclick="location.reload();" value="Generate another?" /></p>


                <p>This generator has all Haikyuu characters on the Inarizaki boys' volleyball team.


                </p>
                
<?php include('footer.php');?>
