# rename_0ad_replays
this renames the replay folder names

## install

You need a Kotlin compiler and runtime environment (JRE) installed. The easiest way to get this is to use the Kotlin command-line compiler ( kotlinc ) which is part of the Kotlin SDK.

 SDKMAN! is a version manager that makes installing and managing SDKs (including Kotlin) very easy on Linux, macOS, and similar systems.

    *   **Install SDKMAN!** (If you don't already have it)
        ```bash
        curl -s "https://get.sdkman.io" | bash
        source "$HOME/.sdkman/bin/sdkman-init.sh"  # Or follow the instructions printed by the installer
        ```

    *   **Install Kotlin:**
        ```bash
        sdk install kotlin
        ```

    *   **Verify Installation:**
        ```bash
        kotlin -version
        ```
        This should print the Kotlin version.

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

