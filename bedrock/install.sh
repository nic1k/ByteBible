#!/bin/sh


#source 'console/'$1'.sh'
#source console/generate-content.sh

wp acorn acf:options ThemeOptions --allow-root
wp acorn acf:field Keymap --allow-root