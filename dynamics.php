<!doctype>
<html lang="en">
    <head>
        <title>The Dynamics Generator (...to Lovers remix)</title>
        
       <meta name="robots" content="noai, noimageai">
        <meta name="description" content="Prompt generators originally made for fannish use, but may have other applications. These generators include some fandom-specific generators, the Sexy Times with Wangxian tag generator, a handful of lyric generators, kink generators, and other types of prompt generators I come up with whenever I feel like making them."/>

		<meta charset="UTF-8">
        <meta name="description" content="Prompt generators originally made for fannish use, but may have other applications. These generators include some fandom-specific generators, the Sexy Times with Wangxian tag generator, a handful of lyric generators, kink generators, and other types of prompt generators I come up with whenever I feel like making them."/>
        <meta property="og:title" content="aroceu's prompt generators" />
        <meta property="og:description" content="Prompt generators originally made for fannish use, but may have other applications. These generators include some fandom-specific generators, the Sexy Times with Wangxian tag generator, a handful of lyric generators, kink generators, and other types of prompt generators I come up with whenever I feel like making them." />
        <meta property="og:image" content="https://aroceu.com/generators/preview.png" />
        <meta property="og:url" content="https://aroceu.com/generators" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="shortcut icon" type="image/x-icon" href="loverico.png" />

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Playfair+Display:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">

        <style type="text/css">
            body{
            background: url('img/wdiag.png') #fff;
            }
            
            #generator{
            margin: 3em auto;
            width: 800px;
            color: #fff;
            font: normal 180%/200% 'Playfair Display', sans-serif;
            padding: 1.5em;
            background: url('img/rdiag.png') #86001E;
            box-shadow: 5px 5px 0 #ddd;
            }
            
            .flavor{
            text-align: center;
            margin: 2em auto;
            }
            
            input[type="button"]{
            color: #fff;
            font: normal 80% 'Playfair Display', sans-serif;
            border: 1px #fff solid;
            padding: 5px 10px;
            background: none;
            text-transform: lowercase;
            }
            
            input[type="button"]:hover, input[type="button"]:focus{
            background: #fff;
            color: #86001E;
            border: 1px #fff solid;
            }
            
            b{
            color:rgb(184, 70, 70);
            font: normal 100% 'Dancing Script', serif;
            display: inline-block;
            padding: 0 0.5em;
            }
            
            h1{
            font: normal 280% 'Dancing Script', serif;
            color: #fff;
            text-align: center;
            margin: 0;
            padding: 0;
            text-shadow: 3px 3px 0 rgb(202, 67, 67);
            }
            
            #footer{
            font-size: 60%;
            text-align: right;
            line-height: 130%;
            margin-top: 4em;
            }
            
            a:link, a:visited{
            color: #fff;
            border-bottom: 1px solid #fff;
            text-decoration: none;
            }
            
            a:hover, a:active, a:focus{
            border-bottom: none;
            }

            .subtitle{
                font-size: 0.6em;
                text-align: center;
                text-transform: lowercase;
                margin: 0;
                padding: 0;
            }
            
            @media only screen and (max-width: 960px) {

    html {
    -webkit-text-size-adjust: none;
    }

    body{
            background: url('img/rdiag.png') #86001E;
    }

    #generator{
        width: 95%;
        margin: 15% auto;
        padding: 2%;
        font-size: 130%;
        border: none;
        box-shadow: none;
    }

    input[type="button"]{
        font-size: 100%;
    }

    #footer{
        font-size: 70%;
    }

    }
            
        </style>
    </head>
</html>

<body>

<div id="generator">
    
  
  <h1>Dynamics Generator</h1>  

  <p class="subtitle">(a remix of the <a href="lovers">to lovers</a> generator)</p>

<p class="flavor"><?php
$input_array=["friends","lovers","enemies","strangers","friends with benefits","enemies with benefits","lovers","friends","enemies","strangers","friends with benefits","enemies with benefits","lovers"];
$count=mt_rand(2,4);                  // declare number of elements to extract

$result=[];
while(sizeof($result)<$count){        // iterate until count is fulfilled
    if(($new_val=$input_array[array_rand($input_array)])!=end($result)){
        $result[]=$new_val;           // add new value if different from previous value
    }
}
echo implode(' <b>&rarr;</b> ',$result);       // display values (joined by ' and ')

?></p>

<p align="center"><input type="button" onclick="location.reload();" value="Generate another?" />

<div id="footer">
    credit is not required, but always appreciated <font color="#ca4343">&hearts;</font> 
    <br />&copy; <?php echo date("Y"); ?> <font color="#ca4343">&hearts;</font> <a href="../generators">generators</a> <font color="#ca4343">&hearts;</font> <a href="https://aroceu.com">aroceu</a> 
</div>

</div>

</body>
</html>
