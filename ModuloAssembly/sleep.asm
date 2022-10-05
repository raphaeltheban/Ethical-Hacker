global _main

section .text

_main:
    xor eax, eax
    mov eax, 9000
    push eax
    mov ebx, 0x75401AB0
    call ebx