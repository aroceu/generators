<?php include('fandom.php')?>


<?php

$main = array("Hinata","Kageyama","Yamaguchi","Tsukishima","Yachi","Ennoshita","Daichi","Sugawara","Asahi","Nishinoya","Tanaka","Kiyoko","Narita","Kinoshita", "Yui", "Ushijima","Shirabu","Tendou","Goshiki","Semi","Oohira","Yunahama","Kawanishi","Yamagata", "Soekawa","Shibata","Sagae","Akakura","Oikawa","Iwaizumi","Hanamaki","Matsukawa","Watari","Kyoutani","Yahaba","Kindaichi","Kunimi","Kuroo","Kenma","Yamamoto","Inuoka","Kai","Yaku","Fukunaga","Lev","Shibayama","Yukie","Kaori","Washio","Sarukui","Bokuto","Akaashi","Konoha","Komi","Onaga","Mai","Kamasaki","Moniwa","Sasaya","Futakuchi","Aone", "Obara", "Sakunami", "Koganegawa","Kita", "Omimi", "Aran", "Ginjima", "Atsumu", "Osamu", "Suna", "Kosaku", "Riseki", "Akagi","Saeko","Alisa","Yukie","Kaori","Akane","Hana","Kanoka","Runa","Mai","Mika", "Akiteru");
$karasuno = array("Hinata","Kageyama","Yamaguchi","Tsukishima","Yachi","Ennoshita","Daichi","Sugawara","Asahi","Nishinoya","Tanaka","Kiyoko","Narita","Kinoshita", "Yui");
$shiratorizawa = array("Ushijima","Shirabu","Tendou","Goshiki","Semi","Oohira","Yunahama","Kawanishi","Yamagata", "Soekawa","Shibata","Sagae","Akakura");
$seijou = array("Oikawa","Iwaizumi","Hanamaki","Matsukawa","Watari","Kyoutani","Yahaba","Kindaichi","Kunimi");
$nekoma = array("Kuroo","Kenma","Yamamoto","Inuoka","Kai","Yaku","Fukunaga","Lev","Shibayama");
$fukurodani = array("Yukie","Kaori","Washio","Sarukui","Bokuto","Akaashi","Konoha","Komi","Onaga");
$datekou = array("Mai","Kamasaki","Moniwa","Sasaya","Futakuchi","Aone", "Obara", "Sakunami", "Koganegawa");
$inarizaki = array("Kita", "Omimi", "Aran", "Ginjima", "Atsumu", "Osamu", "Suna", "Kosaku", "Riseki", "Akagi");
$girls = array("Yachi","Kiyoko","Yui","Saeko","Alisa","Yukie","Kaori","Akane","Hana","Kanoka","Runa","Mai","Mika");

/** pairings **/
$popular = array("Hinata/Kageyama","Kuroo/Tsukishima","Oikawa/Iwaizumi", "Hanamaki/Matsukawa", "Tanaka/Nishinoya","Yaku/Lev", "Daichi/Sugawara",
"Akaashi/Bokuto","Oikawa/Kageyama", "Kyoutani/Yahaba", "Kuroo/Kenma", "Tsukishima/Yamaguchi", "Kiyoko/Yachi", "Ukai/Takeda", 
"Ushijima/Oikawa", "Asahi/Nishinoya", "Kenma/Hinata", "Yamaguchi/Yachi","Daichi/Yui", "Akiteru/Saeko", "Oikawa/Sugawara", "Bokuto/Kuroo", "Kuroo/Daichi",
"Oikawa/Kuroo", "Atsumu/Hinata", "Sakusa/Atsumu");
$rarepairs = array("Ennoshita/Futakuchi", "Ushijima/Moniwa", "Iwaizumi/Yaku", "Alisa/Saeko", "Ennoshita/Yahaba", "Akaashi/Kuroo", "Kuroo/Suga", 
"Bokuto/Daichi", "Kindaichi/Kageyama", "Kunimi/Kageyama", "Ikejiri/Daichi", "Kouji/Izumi", "Kenma/Sugawara", "Akaashi/Iwaizumi", "Iwaizumi/Sugawara",
"Iwaizumi/Kageyama", "Hinata/Lev", "Bokuto/Asahi", "Ushijima/Ushijima", "Oikawa/Daichi", "Iwaizumi/Daichi", "Ennoshita/Kageyama", "Kenma/Kunimi", 
"Oikawa/Yamaguchi", "Akagi/Kita", "Akagi/Yamagata", "Daishou/Kuroo", "Ennoshita/Atsumu", "Ennoshita/Osamu", "Ginjima/Kita", "Ginjima/Suna", "Kamasaki/Daichi", "Kita/Aone",  "Kita/Daichi", "Kita/Ushijima", "Kuroo/Meian", "Atsumu/Akaashi", "Atsumu/Bokuto", "Atsumu/Futakuchi", "Atsumu/Ginjima", "Atsumu/Hirugami", "Atsumu/Hoshiumi", "Atsumu/Iwaizumi", "Atsumu/Kageyama", "Atsumu/Kita", "Atsumu/Komori", "Atsumu/Kenma", "Atsumu/Kunimi", "Atsumu/Kuroo", "Atsumu/Meian", "Atsumu/Nishinoya", "Atsumu/Nishinoya", "Atsumu/Oikawa", "Atsumu/Aran", "Atsumu/Omimi Ren", "Atsumu/Daichi", "Atsumu/Suna", "Atsumu/Terushima", "Atsumu/Tsukishima", "Atsumu/Yaku", "Osamu/Akaashi", "Osamu/Kageyama", "Osamu/Kita", "Osamu/Oikawa", "Osamu/Sakusa", "Osamu/Semi", "Osamu/Yaichi", "Osamu/Yamaguchi", "Ojiro Aran/Asahi", "Ojiro Aran/Kamasaki", "Ojiro Aran/Kita", "Omimi Ren/Akagi", "Omimi Ren/Kita", "Suna /Akaashi", "Suna /Kita", "Suna /Komori", "Suna/Atsumu", "Suna/Ojiro Aran", "Suna/Tsukishima", "Hinata/Pedro");

/** prompts **/
$hq = $fandom;
array_push($hq, "Non-volleyball AU",
"Final Haikyuu Quest AU",
"Different sport AU",
"Teamswap",
"Training Camp",
"Win/Loss AU"
);
?>