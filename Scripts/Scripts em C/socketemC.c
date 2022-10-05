#include <stdio.h>
#include <sys/socket.h>
#include <netdb.h>

int main(int argc, char *argv[]){

	int  meusocket;
	int conecta;

	int porta;
	int inicio = 0;
	int final = 1024;
	char *destino; //ser lido pelo argumento
	destino = argv[1];//ser lido pelo argumento passado

	struct sockaddr_in alvo;

	//Laço para correr pelas portas
	for(porta=inicio;porta<final;porta++){

	//prepara a conexão
	meusocket = socket(AF_INET,SOCK_STREAM,0);
	alvo.sin_family = AF_INET;
	alvo.sin_port = htons(porta);
	alvo.sin_addr.s_addr = inet_addr(destino);

	//faz a conexão com do destino já informado
	conecta = connect(meusocket, (struct sockaddr *)&alvo, sizeof alvo);

	//Verifica se está conectou e retorna a porta aberta
	if(conecta == 0){
		printf("Porta %d - [ABERTA] \n", porta);
		close(meusocket);
		close(conecta);
	} else {
		close(meusocket);
		close(conecta);
	}
	}
}
