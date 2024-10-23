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

$ts = array("the 1", "22", "Afterglow", "All Too Well", "All You Had to Do Was Stay", "The Archer", "August", "Back to December", "Bad Blood", "Beautiful Eyes", "Begin Again", "The Best Day", "Better than Revenge", "Beautiful Ghosts", "Betty", "Blank Space", "Breathe", "Call It What You Want", "Cardigan", "Champagne Problems", "Change", "Clean", "Closure", "Cold as You", "Come Back...Be Here", "Come in with the Rain", "Coney Island", "Cornelia Street", "Cowboy Like Me", "Crazier", "Cruel Summer", "Dancing with Our Hands Tied", "Daylight", "Death by a Thousand Cuts", "Dear John", "Delicate", "Don't Blame Me", "Dorothea", "Dress", "Enchanted", "End Game", "Epiphany", "Evermore", "Everything Has Changed", "Exile", "Eyes Open", "False God", "Fearless", "Fifteen", "Forever & Always", "Getaway Car", "Girl at Home", "Gold Rush", "Gorgeous", "Happiness", "Haunted", "Hey Stephen", "Hoax", "Holy Ground", "How You Get the Girl", "I Almost Do", "I Did Something Bad", "I Don't Wanna Live Forever", "I Forgot That You Existed", "I Heart ?", "I Knew You Were Trouble", "I Know Places", "I Think He KNows", "I Wish You Would", "If This Was a Movie", "Illicit Affairs", "Innocent", "Invisible", "Invisible String", "It's Nice to Have a Friend", "It's Time to Go", "I'm Only Me When I'm with You", "Ivy", "Jump Then Fall", "King of My Heart", "The Lakes", "The Last Great American Dynasty", "Last Kiss", "The Last Time", "Long Live", "Long Story Short", "London Boy", "Look What You Made Me Do", "Love Story", "Lover", "The Lucky One", "Mad Woman", "The Man", "Marjorie", "Mary's Song (Oh My My My)", "Me!", "Mean", "Mine", "Mirrorball", "Miss American & the Heartbreak Prince", "The Moment I Knew", "My Tears Ricochet", "Never Grow Up", "New Romantics", "New Year's Day", "No Body, No Crime", "Only the Young", "The Other Side of the Door", "Our Song", "Ours", "Out of the Woods", "The Outside", "Paper Rings", "Peace", "A Perfectly Good Heart", "Picture to Burn", "A Place in This World", "...Ready for It?", "Red", "Right Where You Left Me", "Sad Beautiful Tragic", "Safe & Sound", "Seven", "Shake It Off", "Should've Said No", "So It Goes...", "Soon You'll Get Better", "Sparks Fly", "Speak Now", "Starlight", "State of Grace", "Stay Beautiful", "Stay Stay Stay", "The Story of Us", "Style", "Superman", "Superstar", "Sweeter than Fiction", "Teardrops on My Guitar", "Tell Me Why", "This Is Me Trying", "This Is Why We Can't Have Nice Things", "This Love", "Tied Together with a Smile", "Tim McGraw", "'Tis the Damn Season", "Today Was a Fairytale", "Tolerate It", "Treacherous", "Untouchable", "The Way I Loved You", "We Are Never Ever Getting Back Together", "Welcome To New York", "White Horse", "Wildest Dreams", "Willow", "Wonderland", "You Are in Love", "You Belong with Me", "You Need To Calm Down", "You're Not Sorry");
?>

<html>
    
<head>
    
    <meta name="viewport" content="initial-scale=1.0">
    
    <link href="https://fonts.googleapis.com/css2?family=Arsenal:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="/generators/favico.png" />

    
    <title>
        taylor swift mdzs prompt generator
    </title>
    
    <style type="text/css">
        
        body{
            background: #fff;
            text-transform: lowercase;
            font: normal 100%/150% 'Arsenal', sans-serif;
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
        
    <div id="header">taylor swift mdzs prompt generator
    <br /><small>as inspired by <a href="https://twitter.com/vilevelns">vilevelns'</a> <a href="http://lions-garb.net/playpen/sydney/">marvel/ts generator</a></small></div>

    
    <div id="prompt">

hmmm can't believe *spins wheel* 

<?php print_r(array_random($ts)); ?>

is about *picks names out of hat* 

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