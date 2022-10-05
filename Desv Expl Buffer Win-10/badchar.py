#!/usr/bin/python

for num in range(1, 256):
 print hex(num).replace('0x','\\x'),
