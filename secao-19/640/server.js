const http = require('http');

const server = http.createServer((req, res) => {
    console.log('efetuado pedido');
    res.writeHead('resposta do servidor');
	res.end();
});

server.listen(3000, () => {
    console.log('Servidor iniciado');
});
