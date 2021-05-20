# rename_0ad_replays.php
this renames the replay folder names

## example install php-cli

sudo apt -y install php7.4-cli

## setpath0

search for and change this:

$path0 = '/home/x/snap/0ad/206/.local/share/0ad/replays/0.0.24/';

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

recomandet !!!! uncoment into the source:

$doRenameAll = false; # rename only new folder (means new games without good name)
