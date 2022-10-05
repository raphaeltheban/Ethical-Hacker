#!/bin/bash

for domain in $(cat wordlist.txt);do host -t a $domain.$1 | grep -v "NXDOMAIN";done
