extern system
global _main

section .text

_main:
    push 0x00657865
    push 0x2E646D63
    push esp
    pop eax
    push eax
    mov ebx, 0x74E54FB0
    call ebx