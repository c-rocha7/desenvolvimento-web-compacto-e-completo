const express = require('express');
const server = express();
server.listen(3000);

// Rotas
server.get('/', (req, res) => {
    res.sendFile('./views/home.html', { root: __dirname });
});

server.get('/services', (req, res) => {
    res.sendFile('./views/services.html', { root: __dirname });
});

server.get('/about', (req, res) => {
    res.sendFile('./views/about.html', { root: __dirname });
});

server.use((req, res) => {
    res.status(404).sendFile('./views/404.html', { root: __dirname });
});
