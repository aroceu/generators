<?php include ('../php/func.php');

$medium=array(" <strong>fanfiction", " <strong>fanwork", " <strong>fictional work", "n <strong>artwork");
$event = array(" gift exchange", " prompt fest", " fan week", " zine", " bang/reverse bang", " team competition");
$subject = array("broader fandom ", "fandom(s) ", "ship(s) ", "character(s) ", "trope ");
$adjective = array("a well-known ", "an underrated ", "any ", "your ");

function getExtra() {
    $extraTrue = rand(0, 1) == 1;
    if ($extraTrue) {
        print_r(" <br /><span class='extra'>");
        $extraArray = array("trope", "movie", "music", "media", "crossover", "prompted", "work size", "remix");
        $extraSelect = array_random($extraArray);
        if($extraSelect == "trope"){
            print_r("and incorporate the following trope: ");
            $tropes = array("apocalypse", "fake dating", "vampires", "historical", "royalty", "werewolves", "space", "pirates", "post-apocalyptic", "fantasy", "robots", "zombies", "daemon", "modern day", "break up make up", "fake out make out", "omegaverse", "accidental marriage", "arranged marriage", "high school", "sharing a bed", "trapped together", "bonded (physical pain)", "handcuffed/physically bound together", "matchmaking", "bodyswap", "coffeeshop", "espionage", "mafia/yakuza", "casefic/mystery", "economical class difference", "hookerfic/rentboy", "hitman/assassin", "wingfic", "5+1", "holidayfic", "reincarnation", "time travel", "amnesia", "bonded (empath/telepath)", "presumed dead", "doppelgangers", "twin au", "animal transformation", "role reversal", "bets/wagers", "oh snap it's you again", "marriage of convenience", "dystopia/utopia", "bachelor/dating show", "competitive sports", "bachelor auction", "immortals/gods", "roadtrip", "soulmate", "fake dating", "groundhog day/timeloop", "enemies with benefits", "friends with benefits", "competitive rivals", "enemies", "childhood friends", "met later/earlier", "maids", "femslash/slash au", "ghosts", "independent business owner", "bakery", "chef/restaurant", "critic", "sick/illness", "angels", "demons", "didn't know they were dating", "steampunk", "fandom au", "internet celebrity", "identity porn/comedy of errors", "kissing practice", "locked in a room", "let me be weak, let me sleep", "catboy/kemonomimi", "were-creature", "mermaids", "neighbors", "roommates", "tattoos", "stripper", "party games (7 mins in heaven, spin the bottle, gay chicken)", "serial killers", "single parent", "kidfic", "established relationship", "getting together", "forced obedience/mind control", "boarding school", "florist", "summer love", "first love", "thief", "pro/famous athlete", "pro/famous gamer", "famous cook/baker", "famous artist", "famous writer", "famous musician", "famous singer", "pro/famous dancer", "famous actor", "famous magician", "famous academic or researcher", "famous critic", "lawyer", "in vino veritas", "massages", "secret admirer", "anonymous notes", "secret santa/anonymous gift exchange", "cultural/language barrier", "bdsm", "mpreg", "pornstar", "harem", "shapeshifter", "ballroom dance lessons", "sex pollen", "virginfic", "first time", "secret virgin", "heat/mating cycles", "sex robot", "sex shop", "fuck or die", "teacher", "con person", "food service/barista", "pet trainer/animal care", "assistant/secretary", "hacker/technology", "retail/customer service", "superpowers/magic", "bodyguard/knight", "gym/dance/yoga instructor", "vigilante", "canon compliant", "post-canon", "pre-canon", "craigslist ad", "fantasy", "supernatural creatures", "human/creature hybrids", "power imbalance", "dominance hierarchy", "genderfuck/sexswap", "epistolary/chatfic", "beachfic", "bars/clubs", "stranded on desert island", "selfcest", "supernatural creature hunter", "wedding planner", "sextape", "phone sex", "kidnapping/hostage", "universe hopping", "camping/hiking", "Bribery", "Magical Wish Fulfillment/Genies", "Delinquent", "Academic Tutor", "Etiquette/Skill Mentor", "Precognition/Future Sight", "Mistletoe", "Summer Camp", "PTSD/Trauma", "Dance/Ball", "Art Thief/Heist", "Social Media Influencer/Content Creator/Streamer");
            $trope = array_random($tropes);
            print_r($trope);
        }
        else if($extraSelect == "movie"){
            print_r("& must be inspired by a <em>movie</em>");
        }
        else if($extraSelect == "music"){
            print_r("& must be inspired by a <em>song/music video</em>");
        }
        else if($extraSelect == "media"){
            print_r("& must be inspired by <em>some form of media</em>");
        }
        else if($extraSelect == "crossover"){
            print_r("& must incorporate a <em>crossover</em> in some way");

        }
        else if($extraSelect == "prompted"){
            print_r("& must be inspired by a provided prompt");
        }
        else if($extraSelect == "work size"){
            $sizeTrue = rand(0, 1) == 1;
            if ($sizeTrue) {
                print_r("for small works only");
            }
            else{
                print_r("for large works only");
            }
        }
        else if($extraSelect == "remix"){
            print_r("& must be a remix of another work");
        }

    }

    else{
        // do nothing
    }

}


?>