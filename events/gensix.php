<?php include ('../php/func.php');

function generateSix(){
    $six = array();
    $prompts = array("music", "colors", "pretend", "morning", "identity","comedy",
"angst",
"fluff",
"romance",
"friends",
"teamwork",
"competition",
"food",
"red",
"orange",
"yellow",
"green",
"blue",
"purple",
"black",
"white",
"duality",
"future",
"past",
"fix-it",
"space",
"boxes",
"notes",
"pairs",
"magic",
"animals",
"afternoon",
"evening",
"seasons",
"day",
"night",
"light",
"sky",
"water",
"fire",
"earth",
"hearts",
"hands",
"blood",
"creatures",
"fantasy",
"science",
"technology",
"messages",
"internet",
"royalty",
"end of days",
"robots",
"break up",
"make up",
"kisses",
"sex",
"accidents",
"marriage",
"beds",
"enclosed spaces",
"bond",
"mystery",
"wings",
"tentacles",
"fairy tales",
"mythology",
"holidays",
"time",
"reversal",
"convenience",
"sports",
"travel",
"immortality",
"ghosts",
"celebrity",
"trapped",
"shelter",
"party",
"ink",
"death",
"family",
"school",
"flower",
"summer",
"winter",
"autumn",
"spring",
"first",
"last",
"stolen",
"found",
"famous",
"career",
"touch",
"sight",
"scent",
"taste",
"sound",
"balance",
"barrier",
"language",
"anonymity",
"secrets",
"dance",
"heat",
"wishes",
"outdoors",
"alternate universe",
"phones",
"videos",
"beach",
"canon",
"instrument",
"bones",
"teeth",
"cloud",
"ocean",
"zero",
"flight",
"mirror",
"shadow",
"mind",
"twin",
"queen",
"flame",
"electricity",
"hero",
"sidekick",
"rival",
"enemy",
"shape",
"circle",
"square",
"triangle",
"broken",
"uniform",
"return",
"switch",
"numbers",
"fashion",
"assist",
"partner",
"nature",
"grey",
"yarn",
"crime",
"sweet",
"rain",
"weather",
"snow",
"humidity",
"sharing",
"lost",
"seed",
"plant",
"root",
"power",
"healing",
"second",
"best",
"worst",
"rough",
"soft",
"silver",
"gold",
"lock / key",
"steps",
"door",
"window",
"room",
"meal",
"culture",
"communication",
"wood",
"possess",
"umbrella",
"curtain", 
"plastic",
"jewelry",
"home",
"neighbor",
"loyalty",
"betrayal",
"weaponry",
"game",
"midnight",
"dawn",
"coffee"
);
    for ($i = 0; $i < 6; $i++) {
        $selection = array_random($prompts);
        if (in_array($selection, $six)) {
            $i--;
        } else {
            array_push($six, $selection);
        }
    }
    
    for ($i = 0; $i < count($six); $i++) {
        print_r($six[$i]);
        echo "<br /> ";
    }

}