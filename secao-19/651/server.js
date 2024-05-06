const express = require('express');
const server = express();

// routes
server.get('/', (req, res) => {
    res.send('Olá ExpressJS!');
});

server.get('/about', (req, res) => {
    res.send({ name: 'João' });
});

server.use((req, res) => {
    res.status(404).send('Erro!');
});

server.listen(3000);
