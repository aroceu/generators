<html lang="en">
    
    <head>
        
        <title>Pok&eacute;mon Prompt Generator</title>
<link rel="shortcut icon" type="image/x-icon" href="/generators/favico.png" />
            <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
        <meta name="viewport" content="initial-scale=1.0">


        <style type="text/css">
        
        body{
            font: normal 100%/160% 'Press Start 2P', monospace;
        }
        
        #container{
            width: 70%;
            margin: 4em auto;
        }
        
        #prompts{
            border: 5px double #000;
            border-radius: 10px;
            padding: 50px;
            text-align: center;
            font-size: 180%;
            margin: 2em auto 0;
        }
        
        a.refresh{
                color: #000;
                font-size: 150%;
                border: 5px #000 double;
                border-radius: 10px;
                padding: 20px;
                display: block;
                text-align: center;
                text-transform: lowercase;
                width: 60%;
            }
            
            a.refresh:hover{
                cursor: pointer;
            }
            
            a.refresh:hover:before{
                content: " > ";
            }
            
            h1{
                text-align: center;
                text-transform: uppercase;
            }
            
            #footer{
                margin-top: 3em;
                text-align: right;
            }
            
            #footer a:link, #footer a:visited{
                color: #000;
            }
            #footer a:hover{
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
line-height: 150%;
}

body{
    margin: 0;
    padding: 0;
}

#container{
    width: 98vw;
    padding: 1vw;
}

#prompts{
    width: 85vw;
    padding: 3vw;
    font-size: 100%;
}

a.refresh{
    font-size: 100%;
    padding: 2%;
}

h1{
    font-size: 150%;
}

#footer{
    text-align: center;
    font-size: 80%;
}

}
          
        </style>
        
        </head>
        
        <body>
            
            <div id="container">
                
                <h1>Pok&eacute;mon Ship Generator</h1>

                <div id="prompts">

<?php
$input = array("Red","Green Ookido","Blue (Leaf)", "Gold (Ethan)", "Silver", "Crystal", "Lyra", "Brendan", "May", "Wally", "Diamond","Pearl (Barry)", "Platinum",
"Black (Hilbert)", "White (Hilda)", "N", "Cheren", "Bianca", "Hugh", "Nate", "Rosa","Tierno", "Trevor", "Shauna", "Calem", "Serena", "Moon", "Sun", "Lillie", "Gladion", "Hau",
"Professor Oak (Ookido)", "Daisy Oak (Ookido)","Bill", "Mom", "Jessie", "James", "Youngster Joey",
"Brock", "Misty", "Lt. Surge", "Erika", "Koga", "Sabrina", "Blaine", "Giovanni", "Lorelei", "Bruno", "Agatha", "Lance",
"Professor Elm", "Falkner", "Bugsy", "Whitney", "Morty", "Chuck", "Jasmine", "Pryce", "Clair", "Will", "Karen", "Janine",
"Archer", "Ariana",
"Professor Birch", "Roxanne", "Brawly", "Wattson", "Flannery", "Norman", "Winona", "Tate", "Liza", "Wallace", "Sidney", "Phoebe", "Glacia", "Drake", "Steven Stone",
"Mr. Briney", "Mr. Stone", "Lanette",
"Maxie", "Archie", "Tabitha", "Courtney", "Matt", "Shelly",
"Scott", "Juan", "Noland", "Greta", "Tucker", "Lucy", "Spenser", "Brandon", "Anabel",
"Cheryl", "Mira", "Riley", "Marley", "Buck", 
"Professor Rowan", "Roark", "Gardenia", "Maylene", "Crasher Wake", "Fantina", "Byron", "Candice", "Volkner", "Aaron", "Bertha", "Lucian", "Cynthia", "Cyrus", "Mars", "Jupiter", "Saturn", "Palmer",
"Looker", "Charon", "Thorton", "Dahlia", "Darach", "Argenta",
"Professor Juniper", "Cilan", "Chili", "Cress", "Burgh", "Elesa", "Clay", "Skyla", "Brycen", "Iris", "Drayden", "Shauntal", "Grimsley", "Alder", "Fennel", "Ghetsis",
"Colress", "Roxie", "Marlon", "Benga",
"Professor Sycamore", "Alexa", "Bonnie", "Viola", "Grant", "Korrina", "Ramos", "Clemont", "Valerie", "Olympia", "Wulfric", "Malva", "Siebold", "Wikstrom", "Drasna", "Diantha", 
"Aliana", "Bryony", "Celosia", "Mable", "Xerosic", "Lysandre", "AZ", "Evelyn", "Morgan", "Dana", "Nita","Emma",
"Aarune", "Lisia", "Zinnia", 
"Professor Kukui", "Ilima", "Lana", "Kiawe", "Mallow", "Sophocles", "Acerola", "Mina", "Hala", "Olivia", "Nanu", "Hapu", "Kahili", "Molayne", "Ryuki", "Plumeria", "Guzma", "Wicke", "Faba", "Lusamine" 
);
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . " &/ ";
echo $input[$rand_keys[1]] . "";
?>
</div>

<p align="center"><a class="refresh" onclick="location.reload();">Generate another?</a></p>
                
<div id="footer">
 &copy; <?php echo date("Y"); ?> &bull; <a href="/generators/">generators</a> &bull; <a href="https://aroceu.com">contact</a></div>
