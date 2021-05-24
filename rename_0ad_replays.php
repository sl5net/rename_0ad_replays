#!/usr/bin/env  sh

# permanently answert yes install:
# https://unix.stackexchange.com/questions/388129/automatically-input-yes-on-the-bash-file
# yes yes | install.sh


#/‾‾‾ apt -y install ‾‾‾
# 2021-01-09: gerade new installed Kubuntu, it was helpfull change all:
# sudo apt install
# sudo apt -y install
#\___ apt -y install ___


######## sudo sudo
# https://askubuntu.com/a/147265
# sudo visudo
# oder
################ this is not working hiere - no error: echo "otheruser ALL=(ALL:ALL) NOPASSWD: ALL" | sudo tee /etc/sudoers.d/o

firefox -new-tab "https://github.com/sl5net"
firefox -new-tab "https://github.com/sl5net/Lintalist4Linux"
firefox -new-tab "https://social.tchncs.de/"
firefox -new-tab "https://mail.google.com/"
firefox -new-tab "https://www.youtube.com/"
firefox -new-tab "https://calendar.google.com"
firefox -new-tab "https://github.com/federico-terzi/espanso"

#/‾‾‾ remove
sudo apt remove fonts-noto-color-emoji
#\___ remove



sudo apt -y install git
sudo apt -y install cloud-guest-utils
apt -y install xfsprogs

#/‾‾‾ OBS
# OBS alt + space : obs <= habs so  gemacht
# sudo apt -y install ffmpeg
# sudo add-apt-repository ppa:obsproject/obs-studio
# # sudo apt update
# sudo apt -y install obs-studio
# sudo apt-get update
#\___ 

#/‾‾‾ git GUI ‾‾‾
sudo apt-get -y install gitk

#/‾‾‾ gitKraken ‾‾‾
# sudo apt-get -y install apt-transport-https ca-certificates curl software-properties-
# curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
# sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu
# $(lsb_release -cs) stabl
# firefox -new-tab "https://support.gitkraken.com/enterprise/how-to-install-enterprise/#install_ubuntu"

# Install Docker:
# sudo apt-get -y install docker-ce
# Switch to root user:
# sudo su
# Download Docker Compose:
# curl -L https://github.com/docker/compose/releases/download/1.14.0/docker-compose-`uname -s`-`uname -m` > /usr/local/bin/docker-compose
# Apply executable permissions:
# sudo chmod +x /usr/local/bin/docker-compose
# Install GitKraken Self-Hosted -  https://support.gitkraken.com/enterprise/how-to-install-enterprise/#install_enterprise
# Load the images into Docker:
# sudo sh loadImages.sh
# http://localhost:3000
#\___ gitKraken ___


#/‾‾‾ numlockx on
# https://matrix.to/#/!RxYpoQLvTqkNfnZsKr:matrix.org/$16103512068375VWSyq:tchncs.de?via=matrix.org&via=tchncs.de&via=bluw.ems.host
# https://askubuntu.com/questions/1240734/how-can-i-set-num-lock-on-as-the-boot-default-in-ubuntu-20-04/1302516#1302516
sudo apt -y install numlockx
numlockx on
#\___ numlockx on


#/‾‾‾ backintime
sudo add-apt-repository ppa:bit-team/stable
sudo apt-get update
sudo apt-get -y install backintime-qt4
#\___ backintime ___




#/‾‾‾ timeshift
# has a bug: https://github.com/teejee2008/timeshift/issues/496
#sudo apt-add-repository -y ppa:teejee2008/ppa
#sudo apt-get update
#sudo apt-get -y install timeshift
#\___ timeshift ___

#timeshift alternative:
#sudo apt-get install restic # zu kompliziert und geht nur mit passwort

# https://wiki.ubuntuusers.de/rsync/

# repository auf andere platte ! ???


# sudo apt-get install -y btrfs-tools


#/‾‾‾ AutoKey ‾‾‾
# AutoKey Installing
# Install AutoKey from the AutoKey GitHub repository for your user only:
# Install git master. Should be stable and include additional bug fixes. If in doubt, use a specific release instead
sudo apt -y -y install python3-pip
# pip3 install --user git+https://github.com/autokey/autokey <==== nicht gefunden
# Install a specific release: Replace the version with the latest release.
# pip3 install --user https://github.com/autokey/autokey/archive/v0.95.7.zip <== irgendwie später konnte nicht gestarte werden
# Or install from a local copy (git checkout or extracted release ZIP archive):
# pip3 install --user /replace/with/path/to/extracted/autokey/release
# AutoKey will be located in your user directory: ~/.local/bin/autokey
# AutoKey - nicht die QT version aus dem manager konte gestaertet werden

# sudo apt-get install -y autokey-gtk # <= not for KDE
sudo apt-get -y install autokey-qt
#\___ AutoKey ___

firefox -new-tab "https://stackoverflow.com/a/63396200/2891692"
firefox -new-tab "https://gist.github.com/3b951b1d6c29191be3d7c8c4100b424b"
sudo apt-get -y install python3-autopilot

#/‾‾‾ rofi
# windows snipper
sudo apt -y install rofi
#https://askubuntu.com/questions/1281728/assign-shortcut-key-alttab-to-run-a-script-in-kubuntu-from-ubunto
rofi -show
#import os
#myCmd = '~/sh/rofi.sh'
#os.system(myCmd)
#\___ rofi

# already done by terminal:
# Große Maus Cursor

#/‾‾‾ sudo without Password
# Execute sudo without Password?
# https://askubuntu.com/a/147265
#\___


# Universal Access, then Cursor Size.
# > dconf-editor

# Bildschirm - Screen locking:
# Search for : Edge Tiling
# War Energieverwaltung: Bildschirm sperren wenn in energiesparmodus deaktivieren
# ubuntu window snapping disable
# Einfach im Terminal eingeben (root nicht erforderlich)
gsettings set org.gnome.desktop.screensaver ubuntu-lock-on-suspend 'false'

# passwort  entsprerren: Da du wahrscheinlich weder luks noch restricted grub  eingerichtet hast ist ein entsprerren des passwortes eine sache von 2  reboots. :) (zem)
# kein passwort schlimm?
# https://social.tchncs.de/@seeh/104933041339942518
# enabling your root account:
# set new password:
# sudo passwd root
# Re-disabling your root account:
# sudo passwd -dl root

# Gparted
# paritionsgrösse ändern   <=========== geht nicht
# daten partition wo? extern?
# https://apfelböck.de/linux-und-die-datentraeger/

# https://github.com/sl5net/Lintalist4Linux

# douple comander:
sudo apt-get install doublecmd-qt

# cliper 2048 normal history possible - its installed per default
# shortcut auf Ctrl+! gesetzt. 2021-01-09

# copyq copyq copyq copyq copyq copyq copyq copyq:
# sudo apt-get update
# sudo apt-get install copyq
# set:
#  history: 9999
# items > images: no
# shortcuts: ctl + shift + 1 : toggle main window (first entry)
# General > Always on Top , Autostart
# General > Auto-complete Commands ????????????
# https://copyq.readthedocs.io/en/latest/command-examples.html
# General > Historex: 9999
# Items > Images UNCHECK
# Items > Text > Uncheck save and display HTML , Rich-Text
# https://www.onlineocr.net/de/


#Where to find saved items and configuration?
#
#You can find configuration and saved items in:
#
#    Windows folder %APPDATA%\copyq for installed version of CopyQ.
#    Windows sub-folder config in unzipped portable version of CopyQ.
#    Linux directory ~/.config/copyq.
#    In a directory specific to a given CopyQ instance - see Sessions.
#( https://copyq.readthedocs.io/en/latest/faq.html )
# https://stackoverflow.com/questions/11145270/how-to-replace-an-entire-line-in-a-text-file-by-line-number
# maxitems=9999
#sed -i "Ns/.*/foo=$myVar" ~/.config/copyq/copyq.conf
# https://wiki.ubuntuusers.de/awk/
nawk '/maxitems=[0-9]+/ {
    print "maxitems=9997";next}
    1' ~/.config/copyq/copyq.conf > tmp  && mv tmp ~/.config/copyq/copyq.conf
# autostart=false
nawk '/autostart=[a-z]/ {
    print "autostart=true";next}
    1' ~/.config/copyq/copyq.conf > tmp  && mv tmp ~/.config/copyq/copyq.conf
nawk '/itemimage\enabled=[a-z]/ {
    print "itemimage\enabled=false";next}
    1' ~/.config/copyq/copyq.conf > tmp  && mv tmp ~/.config/copyq/copyq.conf
# ~/.config/copyq/copyq-commands.ini
# 8\Shortcut=ctrl+shift+!
nawk '/8\\[a-zA-Z]*Shortcut=[^\n]+/ {
    print "8\GlobalShortcut=ctrl+shift+!";next}
    1' ~/.config/copyq/copyq-commands.ini > tmp  && mv tmp ~/.config/copyq/copyq-commands.ini


#/‾‾‾ 
# sound  sound  sound  sound  sound  sound  sound  sound  sound  sound  sound  sound
# sudo apt-get install sox
# play -q -n synth 2 pluck C5
# play -n synth 0.1 sine 880 vol 0.5
#\___ 
#/‾‾‾ # rust rust rust rust  rust rust rust rust  rust rust rust rust  rust rust rust rust
# https://www.rust-lang.org/tools/install
# https://doc.rust-lang.org/book/ch01-03-hello-cargo.html
#\___ 

#/‾‾‾ espanso espanso espanso espanso espanso espanso espanso espanso rust tool
sudo apt -y install libssl-dev
# is `cmake` not installed?
sudo apt -y install cmake
# https://github.com/federico-terzi/espanso/issues/483
sudo apt -y install libxdo-dev
# a) espanso for testing purposes (without hot reload), you can use ( https://github.com/federico-terzi/espanso/issues/485#issuecomment-705028642 ):
# a) cargo run -- -v worker
# as daemon:
# b.1) cargo build --release
# b.2) then copy the resulting binary (/target/release/espanso) inside /usr/local/bin.
# b.3) Then you will be able to use espanso as advertised in the docs :)
#\___ 


# KShutdown https://sourceforge.net/p/kshutdown/wiki/Extras/ add sound
# maybe:
# x Progress Bar

# pycharm
# sudo apt -y install snapd snapd-xdg-open
sudo snap -y install pycharm-community --classic

# clonezillaclonezillaclonezillaclonezillaclonezilla
# [] Backup, falls du überschreibst
# clonezilla bzw partclone 0.3.11 installieren:
# https://pads.ccc.de/Vjd160oalT

# Von einem Live USB (Kubuntu) booten (hier muss nicht).

# Log von partclone 0.3.11 (https://partclone.org/news/)



#/‾‾‾ kdenlive
# https://linuxhint.com/install_kdenlive_ubuntu/
sudo add-apt-repository -y ppa:kdenlive/kdenlive-stable
sudo apt update
sudo apt -y install kdenlive
#\___ kdenlive




#/‾‾‾ clonezilla ‾‾‾
# clonezilla installiert so:
# sudo apt-get update
# sudo apt-get install clonezilla

# look freespace:
# df -h -l --output=avail,size,source,target|sed '/\/dev\//!d'|sort -nr -k2

# Ziel USB nicht mounten. hier 60 GB USB-Stick
# Quelle HDD mounten. hier 26GB voll 250GB HD

# Das Image dieser Partition kann wiederhergestellt werden: sda5
# Alle   Images von Partitionen oder logischen Volumes in diesem Image wurden   überprüft und können wiederhergestellt werden: 2020-09-29-16-img
# Partition table file for disk was found: sda
# MBR file for this disk was found: sda
# Das Image dieser Partition kann wiederhergestellt werden: sda1
# Das Image dieser Partition kann wiederhergestellt werden: sda5
# Alle   Images von Partitionen oder logischen Volumes in diesem Image wurden   überprüft und können wiederhergestellt werden: 2020-09-29-16-img
#\___ clonezilla ___


#/‾‾‾ element-desktop ‾‾‾
# element ⚝  ⚝  ⚝  ⚝  ⚝  ⚝  ⚝  ⚝  ⚝  ⚝  ⚝  ⚝  ⚝  ⚝  ⚝  ⚝  ⚝  ⚝  ⚝  ⚝  ⚝  ⚝  ⚝  ⚝  ⚝  ⚝  ⚝  ⚝  ⚝  ⚝  ⚝  ⚝  ⚝
sudo apt -y install wget apt-transport-https
sudo wget -O /usr/share/keyrings/riot-im-archive-keyring.gpg https://packages.riot.im/debian/riot-im-archive-keyring.gpg
echo "deb [signed-by=/usr/share/keyrings/riot-im-archive-keyring.gpg] https://packages.riot.im/debian/ default main" | sudo tee /etc/apt/sources.list.d/riot-im.list
sudo apt update
sudo apt -y install element-desktop
#\___ element-desktop ___

#/‾‾‾ Autostart ‾‾‾
# 1. System Settings > Autostart > ...
#\___ Autostart ___


#/‾‾‾ Autostart-exaples ‾‾‾
# 1. System Settings > Autostart > Add Script: `/home/m/gulp.sh`
# command line examples: https://askubuntu.com/questions/598195/how-to-add-a-script-to-startup-applications-from-the-command-line

# add to:
# ~/.config/autostart/
# e.g. with 744 for element-desktop

# https://askubuntu.com/a/598202
#\___ Autostart-exaples ___



#/‾‾‾ flatpak
# sudo apt install flatpak
# https://www.flathub.org/apps/details/org.telegram.desktop
# flatpak install flathub org.telegram.desktop
# flatpak run org.telegram.desktop
#\___

#/‾‾‾ install flathub telegram
# dont works
sudo apt -y install flatpak
flatpak remote-add --if-not-exists flathub https://flathub.org/repo/flathub.flatpakr
flatpak install flathub org.telegram.desktop
#==> telegram - Command 'telegram' not found
#\___ install flathub telegram


# filelight via packetmanager discove<
sudo apt -y install filelight


#/‾‾‾ wine ‾‾‾
# wine so:
# http://ubuntuhandbook.org/index.php/2020/01/install-wine-5-0-stable-ubuntu-18-04-19-10/
# sudo dpkg --add-architecture i386
# wget -nc https://dl.winehq.org/wine-builds/winehq.key; sudo apt-key add winehq.key
# sudo apt-add-repository 'deb https://dl.winehq.org/wine-builds/ubuntu/ eoan main'
# sudo add-apt-repository ppa:cybermax-dexter/sdl2-backport
# sudo apt update && sudo apt -y install --install-recommends winehq-stable
#\___ wine ___

# großen backup usb frei machen. z.b. 60 GB
# [] USB-Iso brennen
# https://kubuntu.org/getkubuntu/
#-Taste, Usb tippen, Tools starten (is schon vorinstalliert bei Kubuntu - Mini)
# Interessante Tools:
# https://www.addictivetips.com/ubuntu-linux-tips/back-up-your-linux-pc-with-backintime/
# https://clonezilla.org/liveusb.php#linux-method-a
# https://borgbackup.readthedocs.io/en/stable/installation.html#pyinstaller-binary
# mit tar, aber so aufführlich braucht man nicht unbedingt:
# https://wiki.archlinux.org/index.php/Full_system_backup_with_tar#Backup_Script
# gulp installieren:

# https://www.digitalocean.com/community/tutorials/how-to-install-node-js-on-ubuntu-20-04-de
sudo apt update
sudo apt -y install nodejs

# laufende gulp backups:
# https://github.com/search?q=gulp

# eventuell: https://www.npmjs.com/package/gulper

# run att startup: https://askubuntu.com/questions/814/how-to-run-scripts-on-start-up/816#816

# Checks linux is working:
# https://unix.stackexchange.com/questions/274737/how-do-i-know-if-crontab-is-working-fine

# rapair sudo:
# https://wiki.ubuntu.com/RecoveryMode
# https://askubuntu.com/questions/452860/usr-bin-sudo-must-be-owned-by-uid-0-and-have-the-setuid-bit-set/471503#471503

# problems with gulp:
# I try to start [gulp](https://gulpjs.com/docs/en/getting-started/quick-start) by running `/home/m/gulp` at the start up Kubuntu 20.04 LTS  (from Ubuntu).
# It was not possible to run gulp with just one line Console/Terminal:
# `/home/m/gulp`
# `bash: ./gulp: No such file or directory`
# That's probably normal.
# so i tried successful:
# cd /home/m
# gulp

# Therefore i stored this inside `/home/m/gulp.sh` SH-Script.
# It works as expected if I start it manually by typing `/home/m/gulp.sh` into the terminal.
# I got no results  after reboots by these tries:
# 1. System Settings > Autostart > Add Script: `/home/m/gulp.sh`
# 1. sudo crontab -e
# 
# cr
# ontab -e
# @reboot `/home/m/gulp.sh`
# 
# I changed the SH-Script and it works now also  automatically after reboot:
# cd /home/m
# sudo gulp
# That   works for me. But I find it a bit strange that I sometimes need a sudo   in the sh script and sometimes not. If I start it via crontab it needs  a  sudo, if I start it myself (manually) I don't need a sudo.

# 1. System Settings > Autostart > Add Script: `/home/m/sh/autostart.sh`
# ... sh/autostart.sh  `System Settings > Autostart > Shell script path`

# What are the best Linux image editing tools?
sudo apt -y install krita
# or so:
# snap install krita # snap hat mir nicht so gefallen hier wegen dem verstecken öffnen dialog: snap remove

#/‾‾‾ anydesk ‾‾‾
# parket manager discove: anyDesk installed
sudo apt update
sudo apt -y upgrade
# Import AnyDesk GPG key for signing APT packages.
wget -qO - https://keys.anydesk.com/repos/DEB-GPG-KEY | sudo apt-key add -
# Then add AnyDesk repository content to your Ubuntu system.
echo "deb http://deb.anydesk.com/ all main" | sudo tee /etc/apt/sources.list.d/anydesk-stable.list
# Step 3: Install AnyDesk on Ubuntu 20.04/18.04 LTS
# Finally update apt cache and install the latest release of AnyDesk on Ubuntu 20.04/18.04 Linux.
sudo apt update
sudo apt -y install anydesk

# https://computingforgeeks.com/how-to-install-anydesk-on-ubuntu/
sudo systemctl disable anydesk
#\___ anydesk ___

# https://wiki.ubuntuusers.de/Festplattenbelegung/
sudo apt-get -y install baobab

#Change Cursor size on Ubuntu Through the Command Line. https://vitux.com/how-to-change-cursor-size-on-ubuntu-desktop/
gsettings set org.gnome.desktop.interface cursor-size 96
#24: Default
#32: Medium
#48: LargeAdvertisement
#64: Larger
#96: Largest

#If true you can turn off screen saver locking with:
gsettings set org.gnome.desktop.screensaver lock-enabled false

#disable window-to window snapping with
dconf write /org/gnome/mutter/edge-tiling false
dconf write /org/gnome/shell/overrides/edge-tiling false

# Z.B. more screen-contrast:
# xgamma -gamma 0.6
# xgamma -gamma 0.7
# https://askubuntu.com/questions/91195/how-do-i-adjust-the-screen-contrast
xgamma -gamma 0.6

#/‾‾‾ golang ‾‾‾
# run the learn tour ( https://stackoverflow.com/a/64536094/2891692 ):
#tar -C /usr/local -xzf go1.15.3.linux-amd64.tar.gz
#export PATH=$PATH:/usr/local/go/bin
#go get golang.org/x/tour
#~/go/bin/tour
#\___ golang

#/‾‾‾ 0ad game ‾‾‾
# funktinrt nicht jan 2021:
# sudo apt -y install flatpak
# # flatpak install flathub com.play0ad.zeroad
# flatpak run com.play0ad.zeroad
# oder so

# sudo add-apt-repository ppa:wfg/0ad
# sudo apt-get update
# sudo apt-get install 0ad0
#\___ 0ad game ___

sudo apt -y install kshutdown

#/‾‾‾ vscodium ‾‾‾
# https://vscodium.com/
# achtung folgende line dauerte mindsten 3 minuten. gedult
wget -qO - https://gitlab.com/paulcarroty/vscodium-deb-rpm-repo/# raw/master/pub.gpg | gpg --dearmor | sudo dd of=/etc/apt/trusted.gpg.d/vscodium.gpg
echo 'deb https://paulcarroty.gitlab.io/vscodium-deb-rpm-repo/# debs/ vscodium main' | sudo tee --append /etc/apt/sources.list.d/vscodium.list
sudo apt update && sudo apt -y install codium
#\___ vscodium ___


sudo apt -y install php7.4-cli

#/‾‾‾ Skype
# Ich (Debian) hab’s mir über Flathub installiert. Snap ist Teufelswerk
# sudo apt install flatpak
# https://www.flathub.org/apps/details/com.skype.Client
# flatpak install -y flathub com.skype.Client
#\___ Skype

# Disable featrue kwallet:
# i did this: https://askubuntu.com/a/1205323/1017209
# maybe good: Open the kwallet configuration file: ~/.config/kwalletrc"
# Go to section: [Wallet] Change the line Enabled=true to Enabled=false;
# Log out and log in; Note: I've also made this file write-protected because this setting was changed recently (probably by some app or system module) without my knowledge.


# Backup Platte permanent mounten durch Zeile in /etc/fstab
# UUID=2398230e-4ed4-41ab-9ee3-a6e47e9ec276 /media/m/2398230eXYZ ext4 defaults  0 0
# UUID=2398230e-4ed4-41ab-9ee3-a6e47e9ec276 /media/x/ssd-1tb ext4 defaults  0 0
# https://askubuntu.com/questions/1286336/permanently-mount-hdd-as-snaphot-folder-for-back-in-time
# https://mail.google.com/mail/u/0/h/vksk89r9m75p/?&th=17556f27b64633cf&v=c&s=s
