#!/bin/sh
#wp
wp post generate --post_type=page --post_title=Homepage --allow-root --count=1

#woocommerce
wp post generate --post_type=page --post_title=Statute --allow-root --count=1
wp post generate --post_type=page --post_title=Contact --allow-root --count=1
wp post generate --post_type=page --post_title=About --allow-root --count=1





#curl -N https://loripsum.net/api/5 | wp post generate --post_content --count=10