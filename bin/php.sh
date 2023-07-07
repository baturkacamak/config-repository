#!/bin/bash
/home/baturkacamak/.config/composer/vendor/bin/php-cs-fixer fix --config="/media/baturkacamak/Windows/Local Sites/CONFIG-FILES/.php-cs-fixer.dist.php" --allow-risky=yes "$1" #&& \ 
# /home/baturkacamak/.config/composer/vendor/bin/phpcbf --standard="/media/baturkacamak/Windows/Local Sites/CONFIG-FILES/phpcs.xml.dist" "$1" --colors && \ 
# /home/baturkacamak/.config/composer/vendor/bin/phpcs --colors --standard="/media/baturkacamak/Windows/Local Sites/CONFIG-FILES/phpcs.xml.dist" "$1"