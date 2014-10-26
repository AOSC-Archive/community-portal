#!/bin/bash
# document.write_expand.sh < in.js > out
# Expands only document.write used for git.
# Does not fetch css.

# To automate:
# find . -depth SOMEDIR | {
# while read line; do
# grep "<script src=\"https://gist.github.com/.*js\"></script>" "$line" | {
# while read script; do
# [[ $script =~ https://gist.github.com/.*js ]] && curl script | tail -n +2 | document.write_expand.sh > # SEND IT INTO A FILE OR SO, AND SED IT.

bash <<< $(cat | sed -r -e 's/\\\"/\"/g; s/\\\//\//g; s/document.write\(/echo -e /g; s/\)$//g')

