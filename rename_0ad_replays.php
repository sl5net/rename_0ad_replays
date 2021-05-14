<?php
/*
 * what you probably want:
 * sudo apt -y install php7.xxxxxxxxxxxxxx
 * example:
 * sudo apt -y install php7.4-cli
 *
 * Tipps:
 * https://github.com/paulmillr/chokidar
 *
 * clear ; php ~/php/SL5_preg_contentFinder-master/examples/0ad-replay/commands_txt2output_txt.php
 * writes info.txt
 * script reads --source1=./commands.txt
 * script write --result1=./result.txt
 *
 * used in a command line. Example:
 * $ clear ; php ./php/SL5_preg_contentFinder-master/examples/0ad-replay/commands_txt2output_txt.php --source1="commands.txt" --result1="test.txt"

 *
 * attributes source1, result1 are not optional.
*/

$bugIt=true;
#$bugIt=false;
if($bugIt)echo __LINE__.':  :-) ' . "\n";

$path0 = '/home/xyz/snap/0ad/206/.local/share/0ad/replays/0.0.24/2021-03-15_0001 Alistair (1432 kush) vs seeh (926 maur) in maps skirmishes alpine_valleys_2p/';
$path0 = '/home/xyz/snap/0ad/206/.local/share/0ad/replays/0.0.24/';

//$dirs = array_filter(glob('*'), 'is_dir');
//$sub_directories = array_map('basename', glob($directory_path . '/*', GLOB_ONLYDIR));

//$bugIt=false;

$doRenameAll = true;
if($doRenameAll) { # rescan rename all but not folders with leading YT
    $files = scandir($path0);
    foreach ($files as $folderName) {
        $substrYT = strtolower(substr($folderName, 0, 2));
//        echo $substrYT . "\n";
        if (is_dir($path0 . "/" . $folderName) === TRUE
            && strlen($folderName) > 8
            && $substrYT != 'yt')
            workThisFolder($path0, $folderName, $bugIt);
//            if (preg_match("/^\d{4}-\d{2}-\d{2}_\d{4}$/", $folderName))
//                echo $folderName . "\n";
    }
    die(__LINE__ . ': die');
}

    $files = scandir($path0);
foreach ($files as $folderName) {
    if (is_dir($path0."/". $folderName) === TRUE)
        if(preg_match("/^\d{4}-\d{2}-\d{2}_\d{4}$/",$folderName))
            workThisFolder($path0, $folderName, $bugIt);
//            echo "\n $$filename ... found :) "; # 2021-05-09_0007

}

//print_r( $dirs);

die(__LINE__);


$folderName = '2021-05-10_0002';


/**
 * @param $path0
 * @param string $folderName
 * @param $bugIt
 * @param $fileAddress_result1
 */
function workThisFolder($path0, string $folderName, $bugIt): void
{
    $path = $path0 . "/" . $folderName;
    $fileAddress = $path . '/commands.txt';

    if(!$path0)
        die(__LINE__ . "':  \$path0) = " . $path0 . "\n");
    if(!$fileAddress)
        die(__LINE__ . "':  \$fileAddress) = " . $fileAddress . "\n");
    echo __LINE__ . "':  \$fileAddress) = " . $fileAddress . "\n";

//$fileAddress = './commands.txt';

    $file_content = file_get_contents($fileAddress);
//    if ($bugIt) echo __LINE__ . ':  :-) ' . substr($file_content, 0, 700) . "...\n";;
    if(strlen($file_content)<9)
    {
        echo __LINE__ . ":  strlen($file_content)<9 ";
        return;
    }
    $actual_contentArray = getContentOfFile_commandsTXT2shortInfoTXT($file_content);
    $newFileName = "" . $actual_contentArray['sortedString'] . " IN " . $actual_contentArray['map'] . ", " . $actual_contentArray['gameSpeed'] . " speed";
    echo $newFileName;
    $infoTXTpath = $path . '/info.txt';
    file_put_contents($infoTXTpath, $newFileName . " $folderName"); // Write data to a file
    // Renames the directory
//    die(__LINE__ . ": rename($path, $newFileName);" );
    $folderPathNew = $path0 . '/' . $newFileName; # . ' ' . $folderName;


    rename($path, $folderPathNew);


    if(!is_dir($folderPathNew)){
        die(__LINE__. "\n\n\n not renamed: \n$path\n\n not exist: \n\n" . $folderPathNew . "\n");
    }

//    die("\ndie at " . __LINE__);
    if($bugIt)echo "\n" . __LINE__ . "  :-) result written to fileAddress='\n" . $infoTXTpath . "'\n";
    if($bugIt)echo "\n" . __LINE__ . "  :-) renamed to='\n" . $folderPathNew . "'\n";
}

//workThisFolder($path0, $folderName, $bugIt, $fileAddress_result1);

die(__LINE__ . " DODO save it");

if(strlen($file_content) == strlen($actual_contentArray))
    if($bugIt)echo __LINE__.":  result length not changed. maybe nothing changed.\n";

#######################################
######### end of program , start of functions
########################################

function recursion_example4($source, $arguments) { # ($file_content, $arguments);
    if (true) {

        $cf = new SL5_preg_contentFinder($source);
//        $cf->setBeginEnd_RegEx('{', '}');


        for ($i = 0; $i < 2; $i++) {
            # rebuild with search tool. find every number
            # do this many times should be no problem
            $rebuild = '';
            for ($pos = 0; $pos < count($sourceArray); $pos += 3) {
                $p = $cf->getBorders( $b = '{', $e = '}', $pos);
                if (is_null($p['begin_begin'])) {
                    die(__FUNCTION__ . __LINE__);
                }

                $rebuild_1 = '(' . $cf->getContent($b, $e, $pos) . ')';
                $rebuild_2 = '(' . $cf->getContent() . ')';
                if ($rebuild_1 != $rebuild_2) {
                    die(__FUNCTION__ . __LINE__ . ": '$rebuild_1' != '$rebuild_2' (rebuild_1 != rebuild_2");
                }
                $rebuild .= $rebuild_1;
            }
            if (!$silentMode) {
                echo __LINE__ . ':$rebuild= <br>' . $rebuild . '<br>';
            }
            if (!$silentMode) {
                echo $numbers . '<br>';
            }
            if ($source != $rebuild) {
                die(__LINE__ . ":ERROR <br>$source != <br>$rebuild");
            }
            if (!$silentMode) {
                echo '<hr>';
            }
            if (!$silentMode) {
                echo '--:' . $numbers . '<br>';
            }
            for ($pos = 0; $pos < count($sourceArray); $pos += 3) {
                if ($pos == 3) {
                    132465789;
                }
                $p = $cf->getBorders( '(', ')', $pos);
                if (is_null($p['begin_begin'])) {
                    die(__FUNCTION__ . __LINE__);
                }
                if (!$silentMode) {
                    echo ($pos > 9) ? "$pos:" : "0$pos:";
                }
                if ($pos - 2 >= 0) {
                    if (!$silentMode) {
                        echo str_repeat('_', $pos - 2);
                    }
                }
                if (!$silentMode) {
                    echo $cf->getContent_Prev();
                }
                if ($pos > 0) {
                    if (!$silentMode) {
                        echo ')';
                    }
                }
                $cf->getBorders( '(', ')', $pos);
                if (!$silentMode) {
                    echo '(' . @$cf->getContent();
                }
                if (!$silentMode) {
                    echo ')(';
                }
                $cf->getBorders( '(', ')', $pos);
                if (!$silentMode) {
                    echo '' . $cf->getContent_Next();
                }

                if (!$silentMode) {
                    echo '<br>';
                }
            }
        }

    }

    if (1) {
        ######## borders beetween #########
        $cf->getBorders( '(1)', '(7)', 0);
        $c = @$cf->getContent();
        if (!$silentMode) {
            echo __LINE__ . ': ' . $c . '<br>';
            echo __LINE__ . ':$rebuild= <br>' . $rebuild . '<br>';
            echo __LINE__ . ': BetweenID 0,2<br>=' . $cf->getContent_BetweenIDs(0, 2) . '<br>';
            echo __LINE__ . ': BetweenID 1,3<br>=' . $cf->getContent_BetweenIDs(1, 3) . '<br>';
            echo __LINE__ . ': BetweenID 2,4<br>=' . $cf->getContent_BetweenIDs(2, 4) . '<br>';
            echo __LINE__ . ': BetweenID 0,4<br>=' . $cf->getContent_BetweenIDs(0, 4) . '<br>';
            echo __LINE__ . ': BetweenNext2Current<br>=' . $cf->getContent_BetweenNext2Current() . '<br>';
            echo __LINE__ . ': BetweenPrev2Current<br>=' . $cf->getContent_BetweenPrev2Current() . '<br>';
            echo '<br>';
        }
        if ($rebuild != $source) {
            die(__FUNCTION__ . __LINE__ . ': $rebuild != $source');
        }
        ######## borders beetween #########
    }


    return $rebuild;
}


function getContentOfFile_commandsTXT2shortInfoTXT($file_content, $arguments = null) {
    if(!isset($file_content)) die('15-06-25_15-07 $f_input');
    $bugIt=true;
//    if($bugIt)echo __LINE__."':  strlen($file_content) = " . strlen($file_content) . "\n";
    if(!strlen($file_content)){
        echo __LINE__."':  strlen($file_content) = " . strlen($file_content) . "\n";
        return false;
    }

    preg_match_all('/Name":"([^"(]+)(?:\((\d*)\))?([^"]*)","Civ":"([^"]+)",.*?"Team":(-?\d+)/'
        , $file_content
        , $matchesOFFSET
        , PREG_OFFSET_CAPTURE
        , 0);
//    var_dump($matches);

    $contentBehind = getContentBehind($matchesOFFSET, $file_content,900);
//    if($bugIt)echo __LINE__.':  :-) ' . "\n";
//    echo "\n\n\n \$contentBehind = " . $contentBehind . "\n\n\n";

    //    "gameSpeed":1,"mapType":"random","map":"maps/random/mainland"
//    if($bugIt)echo __LINE__.':  :-) ' . "\n";
    preg_match('/"gameSpeed":(\d+).*"map":"([^"]+)"/', $contentBehind,$matchesMAPandSPEED);
    $gameSpeed = $matchesMAPandSPEED[1];
    $map = substr( str_replace("/", "∕", $matchesMAPandSPEED[2]),7 ); # pseudo backslash with no problems as filename# maps/
//    die(__LINE__ . ": $map");

//    var_dump($matches2);

    # TODO: not performant solution. but works.
    # now very quick and dirty solution. historically. not good for performance do the match to times. maybe there is no caching
    preg_match_all('/Name":"([^"(]+)(?:\((\d*)\))?([^"]*)","Civ":"([^"]+)",.*?"Team":(-?\d+)/'
        , $file_content
        , $matchesOFFSET
        , PREG_SET_ORDER
        , 0);

//    if($bugIt)echo __LINE__.':  :-) ' . var_export($matchesOFFSET) . "\n";


//    var_dump($lastKey);
//    die(__LINE__);
    $returnStr = '';
    $returnStr2 = '';
    $returnStr3 = '';
    $returnStr4 = '';
    $returnStr5 = '';
//    $echo2 = '';
//    $echo3 = '';
    $teamNrOld = 0;
    $teamNrTop = 0;
    $playerNr = 0;

    $teamNrArr = array();
//    $teamNrArr[0][0]["rating"]= 0;

    $teamNr = -1;
    foreach ($matchesOFFSET as $index => $match) {
//        var_dump($match);

//        if($bugIt)echo __LINE__.':  :-) \n' . var_export($match) . "\n";


        $name = trim($match[1]);
        $rating = trim($match[2]);
//        if($rating)$rating .= ' ';
        $civ = $match[4];

        if($match[5] == '-1') {
            $teamNr++;
            # if($bugIt)
//            echo __LINE__.':  $teamNr= ' . $teamNr . "\n";

        }else
            $teamNr = $match[5];

        $thisArr = [
            "civ" => $civ,
            "name" => $name,
            "rating" => $rating
        ];

        if($teamNrOld <> $teamNr) {
//            $playerNr = 0;
            $returnStr .= ' VS ';
            $returnStr2 .= ' VS ';
            $returnStr3 .= ' VS ';
            $returnStr4 .= ' VS ';
            $returnStr5 .= ' VS ';
        }
        if(isset($teamNrArr[$teamNr][0]["rating"]) && $thisArr["rating"] > $teamNrArr[$teamNr][0]["rating"]){
            # highest rating player should top
            $t0old = $teamNrArr[$teamNr][0];
            $teamNrArr[$teamNr][0] = $thisArr;
            $teamNrArr[$teamNr][$playerNr] = $t0old;

        }else
            $teamNrArr[$teamNr][$playerNr] = $thisArr;


        $echo = "($name $rating$civ)";
        if($teamNrOld == $teamNr) {
            $echo2 = '|';
            $echo3 = '#';
            $echo4 = '+';
            $echo5 = ',';
        }else{
            $echo2 = '';
            $echo3 = '';
            $echo4 = '';
            $echo5 = '';
        }
        $echo2 .= "$name $rating$civ";
        $echo3 .= "$name $rating$civ";
        $echo4 .= "$name $rating$civ";
        $echo5 .= "$name$rating$civ";
        $returnStr .= $echo;
        $returnStr2 .= $echo2;
        $returnStr3 .= $echo3;
        $returnStr4 .= $echo4;
        $returnStr5 .= $echo5;
//        $teamNrOld = $teamNr;
//        if($bugIt)echo __LINE__.":  :-) $teamNrOld = $teamNr; \n";

        $playerNr++;
//        break;
    }

    foreach ($teamNrArr as $index => $team) {
        if($teamNrArr[0][0]["rating"] < $team[0]["rating"]) {
            # change the teams
            $t0old = $teamNrArr[0];
            $teamNrArr[0] = $team;
            $teamNrArr[$index] = $t0old;
        }
    }


    $sortedStringBestRatingFirst = sortArray2string($teamNrArr);
//    echo "\n\n sortedStringBestRatingFirst = " . $sortedStringBestRatingFirst . "\n\n";

    return array('sortedString'=>$sortedStringBestRatingFirst,'gameSpeed'=>$gameSpeed,'map'=>$map,'unSortedArray'=>$teamNrArr);

//    if($bugIt)echo __LINE__.':  :-) ' . var_export($teamNrArr) . "\n";

//    var_dump($teamNrArr);
#    echo implode(',',$teamNrArr);

//    return ltrim($returnStr)
//        . "\n" . ltrim($returnStr2,"| ")
//        . "\n" . ltrim($returnStr3,"# ")
//        . "\n" . ltrim($returnStr4,"+ ")
//        . "\n" . ltrim($returnStr5,", ")
//        . "\n" . $sortedStringBestRatingFirst
//        . '';


}

/**
 * @param $matches
 * @param $file_content
 * using array_key_last (PHP 7 >= 7.3.0, PHP 8)
 * @return string contentBehind
 */
function getContentBehind($matches, $file_content, $maxLength=100){
//    var_dump($matches);
    $last1ArrayValue = $matches[array_key_last($matches)];
    $last2ArrayValue = $last1ArrayValue[array_key_last($last1ArrayValue)];
    $lastKey = array_key_last($last2ArrayValue);
    $lastPos = $last2ArrayValue[$lastKey];
    $posBehindLastSearch = $lastPos + $last1ArrayValue[array_key_last($last1ArrayValue) - 1][$lastKey - 1];
//    echo "\n\n\n" . $lastPos . "\n\n\n";
//    echo "\n\n\n" . $posBehindLastSearch . "\n\n\n";
    $contentBehind = substr($file_content, $posBehindLastSearch, $maxLength);
//    echo "\n\n\n" . $contentBehind;
    return $contentBehind;
}

/**
 * @param array $teamNrArr
 */
function sortArray2string(array $teamNrArr){
    $delimiter = ", ";
    $r = '';
    $teamNrOld = 0;

    $countOfTeam1 = count($teamNrArr[1]);
    if($countOfTeam1 >2) {
        $delimiter = trim($delimiter); # . $countOfTeam1;
    }

    foreach ($teamNrArr as $teamIDhere => $team) {
        foreach ($team as $playerID => $player) {

            if ($teamNrOld <> $teamIDhere) {
                $playerNr = 0;
                $r .= ' VS ';

            } else $r .= $delimiter;
            $r .= $player['rating'];
            $r .= $player['civ'];
            $r .= ucfirst( $player['name']);
            $teamNrOld = $teamIDhere;
        }
    }
    $r = ltrim($r, $delimiter. " ");
    return $r;
}

// --name1="value1" --name2="value2"
function arguments($argv) {
    $_ARG = array();
    foreach($argv as $arg) {
        if(preg_match_all('/--([^=]+)="?([^"]*)"?/', $arg, $reg)) {
            foreach($reg[1] as $k => $v) {
                $var = $reg[2][$k];
                $_ARG[$v] = $var;
            }
        }
        elseif(preg_match_all('/-([^=]+)="?([^"]*)"?/', $arg, $reg)) {
            $_ARG[$reg[1]] = 'true';
        }
    }
    return $_ARG;
}

