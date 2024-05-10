const http = require('http');
const fs = require('fs');
let port = 3000;
let host = 'localhost';

const server = http.createServer((req, res) => {
    // header
    res.setHeader('Content-Type', 'text/html');

    // preparar o conteúdo de HTML
    fs.readFile('./html/pag1.html', (err, data) => {
        if (err) {
            console.log('erro!');
            res.write('erro!');
            res.end();
        } else {
            res.write(data);
            res.end();
        }
    });
});

server.listen(port, host, () => {
    console.log('Servidor iniciado');
});
