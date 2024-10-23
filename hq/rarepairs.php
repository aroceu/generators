<?php include('header.php')?>
 
        <title>Haikyuu!! Prompt Generator - Rare Pairings</title>
      
        <style type="text/css">
          body{
            background: #fff;
            }
        
            #container{
                background: #000;
                padding: 1em;
                margin: 3em auto;
                font: normal 100%/160% 'PT Sans';
                width: 70%;
                color: #fff;
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
                color: #eee;
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
                background: #fff;
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
                background: #000;
                color: #fff;
                border: 1px #fff solid;
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
                    <h2>Rare Pairings</h2>
                
                <div id="prompts">

<?php print_r(array_random($rarepairs)); ?>
<br />
<?php print_r(array_random($hq)); ?>

</div>

<p align="center"><input type="button" onclick="location.reload();" value="Generate another?" /></p>

                <p>This generator has requested rarepairings from Haikyuu, usually between cross-team members. It also has sibling ships, and pairings with extremely minor characters.</p>
                
                <p>If you would like to request a rarepairing to be added, please feel free to <a href="https://aroceu.com">contact me</a>.</p>
                
<?php include('footer.php');?>
