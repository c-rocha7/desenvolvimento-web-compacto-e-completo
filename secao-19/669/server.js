const express = require('express');
const mysql = require('mysql2');
const cors = require('cors');
const mysql_config = require('./mysql_config');
const functions = require('./functions');

const app = express();
app.listen(3000, () => {
    console.log('Servidor em execução.');
});

app.use(cors());

// mysql connection
const connection = mysql.createConnection(mysql_config);

// routes
app.get('/', (req, res) => {
    connection.query('SELECT * FROM tasks', (err, results) => {
        if (err) {
            res.json(functions.response('error', 'Erro: ' + err.message));
        } else {
            res.json(
                functions.response(
                    'success',
                    'Tasks listadas com sucesso',
                    results
                )
            );
        }
    });
});
