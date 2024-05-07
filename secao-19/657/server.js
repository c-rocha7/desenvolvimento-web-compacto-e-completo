const express = require('express');
var morgan = require('morgan');
const server = express();
server.listen(3000);

server.use(morgan('Método = :method | Status = :url | Url = :status'));

server.get('/', (req, res) => {
    res.send('teste');
});
