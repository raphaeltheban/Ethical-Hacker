#!/bin/bash

for ip in $(seq 220 239); #Range de IP encontado com o whois
do
print $ip
#host 37.59.174.$ip
done
