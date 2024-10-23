<?php include('../php/func.php')?>
<?php include('../php/tsn.php')?>
<html lang="en">
    
    <head>
        
        <title>The Social Network Kink Generator</title>
        <meta name="viewport" content="initial-scale=1.0">

<link rel="shortcut icon" type="image/x-icon" href="/generators/favico.png" />
<style type="text/css">
        body{
            margin: 0;
            padding: 0;
            background: #E9EBEE;
        }
        
        #header{
    background: #3B5998;
    color: #ffffff;
    width: 100%;
    position: absolute;
    top: 0;
    padding: 4px 0 0 0;
    height: 38;
        }
        
        #title{
    font: bold 130% 'Tahoma', sans-serif;
    text-transform: lowercase;
    margin: 10px 0 0 50px;
    display: inline-block;
    float: left;
        }
        
        #title a:link, #title a:visited{
   background: #ffffff;
    text-decoration: none;
    padding: 5px 0px 0px 0px;
    line-height: 20px;
    border-radius: 3px;
    color: #3B5998;
        }
        
        #title a:hover{
            color: #233c72;
        }
        
        ul#nav {
    float: right;
    text-align: right;
    color: #ffffff;
    font: bold 85% 'Helvetica', sans-serif;
    margin: 5px 50px 0 0;
        }
        
        #nav li {
    list-style-type: none;
    -webkit-padding-start: 0 !important;
    display: inline-block;
        }
        
        #nav li a:link, #nav li a:visited {
    color: #ffffff;
    text-decoration: none;
    margin: -4px 1em 0 1em;
    padding: 8px 15px;
    display: inline-block;
}

#nav li a:hover, #nav li a:active {
    background: #233c72;
    border-radius: 3px;
}

#container{
    margin: 20vh auto;
    width: 80%;
}

#prompts, #index{
    border: 1px solid #ccc;
    font: normal 180% 'Futura', sans-serif;
    text-align: center;
    padding: 1em;
    margin-top: -18px;
    background: #fff;
}

#prompts{
    color: #3B5998;
}

#index{
    color: #666;
}

input[type="button"]{
    background: #F6F7F9;
    font: normal 100% 'Helvetica', sans-serif;
    font-weight: bold;
    color: #233c72;
    padding: 10px;
    border: 1px solid #DDDFE2;
    border-radius: 30px;
}

input[type=button]:hover{
    background: #DDDFE2;
    color: #4b4f56;
}

._4-h8{
    display: block;
    border-bottom: 8px solid #ccc;
    border-left: 8px solid transparent;
    border-right: 8px solid transparent;
    font-size: 0;
    height: 0;
    bottom: 18px;
    left: 21%;
    line-height: 0;
    position: relative;
    width: 0;
}

._4-h8:after {
    border-bottom: 8px solid #fff;
    border-left: 8px solid transparent;
    border-right: 8px solid transparent;
    content: '';
    left: -8px;
    position: absolute;
    top: 1px;
}

#bar{
    font: normal 9pt 'Helvetica Neue', sans-serif;
    width: 40%;
    margin: 3em auto;
}

#info{
    margin: 2em 1em 1em;
    color: #1d2129;
    padding: 0.5em 1em;
    background: #fff;
    border: #ccc 1px solid;
}

h1{
        font: normal 200% 'Futura';
    color: #fff;
    text-transform: uppercase;
    text-shadow: 0.05em 0.05em 0 #233c72;  
}

#bar #footer{
    margin-right: 1em!important;
}

#footer{
    text-align: right;
    color: #90949c;
    margin: 1em 0;
    font: normal 9pt 'Helvetica Neue';
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

#container{
    width: 90%;
    margin: 15vh auto;
}

#bar{
    width: 100%;
}

}
</style>

        
        </head>
        
        <body>
            
            <div id="header">
                <div id="title"><a href="">TSN</a></div>
                
                <ul id="nav">
                    <li><a href="/generators">Generators</a></li>
                </ul></div>
            
            <div id="container">


            <h1>Prompt Generator</h1>
            <span class="_4-h8"></span>
                
                <div id="prompts">
<?php

$rand_keys = array_rand($tsnchars, 2);
echo $tsnchars[$rand_keys[0]] . "/";
echo $tsnchars[$rand_keys[1]] . "";
?>
<br />
<?php print_r(array_random($tsnprompts)); ?>
</div>

<p align="center"><input type="button" onclick="location.reload();" value="Generate another?" /></p>



                </p>

            
            <div id="bar">
    <div id="info">
    <p>Welcome to The Social Network prompt generator! Feel free to refresh or click to generate new prompts, and to utilize any prompts for creative work (including fanfiction, fanart, or fanvideos.)</p>

    <p>Warning for possible incest combinations. This generator has some NSFW prompts.
    </p></div>

    <div id="footer">
    &copy; <?php echo date("Y"); ?> &bull; <a href="/generators/">generators</a> &bull; <a href="https://aroceu.com">contact</a>
    </div>
    </div>
    </div>

    </body>

