const express = require('express');
const server = express();

server.get('/', (req, res) => {
	res.send('Olá ExpressJS!');
});

server.listen(3000, () => {
	console.log('Executando na porta 3000');
});
