#!/bin/sh


#source 'console/'$1'.sh'
#source console/generate-content.sh

#wp acorn acf:options ThemeOptions --allow-root
#wp acorn acf:field Keymap --allow-root
#wp acorn acf:partial SvgList --allow-root
wp acorn acf:partial MainCategoriesOption --allow-root
wp acorn acf:partial SvgOption --allow-root
#wp acorn acf:options SvgOptions --allow-root
