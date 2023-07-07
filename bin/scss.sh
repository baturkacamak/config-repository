#!/bin/bash
/usr/local/bin/stylelint --fix --config "/media/baturkacamak/Windows/Local Sites/CONFIG-FILES/.stylelintrc.json" "$1" && \
/usr/local/bin/sass --style=compressed "$1":"$2" && \
/usr/local/bin/rtlcss "$2" && \
/usr/local/bin/postcss --no-map -u autoprefixer css-mqpacker -r "$3"