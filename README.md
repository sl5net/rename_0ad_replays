# rename_0ad_replays
this renames the replay folder names

## save it in already existing replays folder

for example:

~/snap/0ad/206/.local/share/0ad/replays/0.0.24

rename in script 

0ad/239

to your version

for example

0ad/242

## setpath0

search for and change this:

$path0 = '/home/x/snap/0ad/206/.local/share/0ad/replays/0.0.242/';

uncoment 

//$doRenameAll = true;

if you want.

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

