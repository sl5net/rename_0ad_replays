# rename_0ad_replays.php
this renames the replay folder names

## save it in already existing replays folder

for example:

~/snap/0ad/206/.local/share/0ad/replays/0.0.24

## example install php-cli

sudo apt -y install php7.4-cli

## setpath0

search for and change this:

$path0 = '/home/x/snap/0ad/206/.local/share/0ad/replays/0.0.242/';

uncoment 

//$doRenameAll = true;

if you want.

## run php script example in your bash/console/terminal:

 clear ; php ~/php/commands_txt2output_txt.php


## exemple result:

1849maurRauls, 988persBobert VS 1408maurDamianos, 926romeSeeh IN random∕lake, 1 speed

folder name before:

202020-12-19_0001

## run it every minute

crontab -e

*/1 * * * * /home/x/php/commands_txt2output_txt.php 

recommended !!!! uncoment into the source:

$doRenameAll = false; # rename only new folder (means new games without good name)

## run it using JavaScript FileWatcher:
needs nodejs. example install for ubuntu v20.4

>sudo apt install nodejs

```
/*
node ~/snap/0ad/206/.local/share/0ad/replays/0.0.242/file-watcher.js

dont look for comands.txt is genarated when game started to record.
commands.txt size grows during the game. if its not there. 

look better for metadata.json . this is only exist if game is finiesed



*/
const { exec } = require("child_process");

var chokidar = require('chokidar');
//var watcher = chokidar.watch('file or dir', {ignored: /^\./, persistent: true});
var watcher = chokidar.watch('/home/x/snap/0ad/206/.local/share/0ad/replays/0.0.242/*/metadata.json',{ignored: /$^/, persistent: true}); // “match nothing”
// {ignored: /^[^\.].*$/, persistent: true}
// https://regex101.com/r/XnKYcf/1
watcher
  .on('add', function(path) {
      // 2021-03-15_0001
      if(path.match(/\/\d{4}-\d{2}-\d{2}_\d{4}\/commands\.txt/)){
        console.log('File', path, 'new game add found :) ');
      }
      
//  * clear ; php ~/php/SL5_preg_contentFinder-master/examples/0ad-replay/commands_txt2output_txt.php
    var cmd = 'php /home/x/php/SL5_preg_contentFinder-master/examples/0ad-replay/commands_txt2output_txt.php';
    exec(cmd, (error, stdout, stderr) => {
    if (error) {
        // console.log(`error: ${error.message}`); // ==> its works here but sends error-messages
        return;
    }
    if (stderr) {
        console.log(`stderr: ${stderr}`);
        return;
    }
    console.log(`stdout: ${stdout}`);
    });
      
})
  .on('change', function(path) {
      // 2021-03-15_0001
      if(path.match(/\/\d{4}-\d{2}-\d{2}_\d{4}\/commands\.txt/)){
        console.log('File', path, 'new game change found :) ');
      }
})
  .on('unlink', function(path) {console.log('File', path, 'has been removed  :-O ');})
  .on('error', function(error) {console.error('Error happened', error);})
  
  
/*  
\b(?:(?!a)\w)+\b
# word boundary, neg. lookahead, disallowing "a",
# afterwards match as many word characters as possible
# in the end another word boundary  
  
; 
*/
```
