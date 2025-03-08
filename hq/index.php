<?php include('header.php')?>

        
        <title>Haikyuu!! Prompt Generators</title>

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
                text-transform: uppercase;
                text-align: center;
                letter-spacing: 2px;
                margin-bottom: 0;
            }
            
            h2{
                font: italic 200% 'Poiret One';
                text-transform: lowercase;
                text-align: center;
                margin-top: 0;
                color: #999;
            }
            
            #footer{
                margin: 2em;
                text-align: center;
            }

            ul#index{
                margin: 30px auto;
                text-align: center;
            }
            
            ul{
                -webkit-padding-start: 0!important;
                -moz-padding-start: 0!important;
                padding-start: 0!important;
                list-style-type: none;
                margin: 0 auto;
            }

            ul li a:link, ul li a:visited{
                display: block;
                text-decoration: none;
                text-align: center;
                padding: 5px;
                font: normal 150% 'Poiret One';
                text-transform: lowercase;
                                margin: 0 1%;

            }

            ul#index li{
                display: inline-block;
                width: 18%;

            }

            ul li a:link, ul li a:visited{
                color: #fff;
            }

            #index a:link, #index a:visited{
                background: #ccc;
            }

            ul li a:hover, ul li a:active, ul li a:focus{
                background: #fff!important;
                color: #000;
            }

            ul#teams{
                margin: 0 auto;
                width: 23%;
            }

            ul#teams li{
                margin: 1em 0;
            }

            .karasuno{
                background: #F49542;
            }
            .seijou{
                background: #61D8CA;
            }
            .nekoma{
                background: #C63E29;
            }
            .fukurodani{
                background: #FFB600;
            }
            .shiratorizawa{
                background: #9B5481;
            }
            .datekou{
                background: #008080;
            }
            .inarizaki{
                background: #9c3543;
            }
            
            #footer a:link, #footer a:visited{
                color: #000;
            }
            #footer a:hover, #footer a:focus{
                text-decoration: none;
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
    padding: 0;
    margin: 0;
}

ul#teams {
    width: 100%;
    margin-bottom: 1em;
}

ul#index{
    margin-bottom: 0;
}

ul#index li{
    display: block;
        width: 100%;
    margin-bottom: 1em;
}

#container{
    width: 98vw;
    padding: 1vw;
}

h1{
    font-size: 250%;
}

}
            
        </style>
        
        </head>
        
        <body>

        <div id="container">

        <h1>Haikyuu!! Prompt Generators</h1>

        <p align="center">Here are prompt generators you can use for fic, art, roleplay, or any other creative purpose.</p>

        <ul id="index"><li><a href="main">All</a></li>
        <li><a href="popular">Popular</a></li>
        <li><a href="rarepairs">Rare</a></li>
        <li><a href="girls">Girls</a></li>
        <li><a href="moresome">Moresomes</a></li></ul>

        <ul id="teams"><li><a href="karasuno" class="karasuno">Karasuno</a></li>
        <li><a href="seijou" class="seijou">Aoba Johsai</a></li>
        <li><a href="nekoma" class="nekoma">Nekoma</a></li>
        <li><a href="fukurodani" class="fukurodani">Fukurodani</a></li>
        <li><a href="shiratorizawa" class="shiratorizawa">Shiratorizawa</a></li>
        <li><a href="datekou" class="datekou">Datekou</a></li>
        <li><a href="inarizaki" class="inarizaki">Inarizaki</a></li>
        </ul>
        

<div id="footer"> &copy; <?php echo date("Y"); ?> &bull; <a href="../">generators</a> &bull; <a href="https://aroceu.com">contact</a></div>

</body>
</html>
