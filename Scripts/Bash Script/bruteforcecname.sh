#!/bin/bash

for domain in $(cat wordlist.txt);
do
host -t cname $domain.$1 | grep "alias for"
done
