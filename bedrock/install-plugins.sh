#!/bin/sh

# Adapted from https://support.advancedcustomfields.com/forums/topic/download-acf-with-wp-cli-on-clean-install/#post-26191

# get plugin path
acf_zip_file="$(wp --allow-root plugin path)/advanced-custom-fields-pro.zip"

# get acf zip file
wget -O ${acf_zip_file} "http://connect.advancedcustomfields.com/index.php?p=pro&a=download&k=b3JkZXJfaWQ9ODI1MTF8dHlwZT1kZXZlbG9wZXJ8ZGF0ZT0yMDE2LTA1LTI4IDA5OjI3OjMw"

# install & activate acf
wp plugin install ${acf_zip_file} --activate --allow-root

# remove zip file
rm ${acf_zip_file}

wp plugin update --all --allow-root
wp plugin install woocommerce --allow-root --activate
