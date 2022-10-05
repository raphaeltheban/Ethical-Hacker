#!/bin/bash

sudo hping3 -S -c 1 -p $2 $1 2> /dev/null | grep "flags=SA" | cut -d " " -f 2 | cut -d "=" -f 2
