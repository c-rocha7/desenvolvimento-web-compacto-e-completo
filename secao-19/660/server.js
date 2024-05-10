const express = require('express');
const app = express();
app.listen(3000, () => {
    console.log('Servidor em execução.');
});

app.get('/', (req, res) => {
    res.send('Testes com parâmetros');
});

app.get('/distancia/:pontoA-:pontoB', (req, res) => {
    const pontoA = req.params.pontoA;
    const pontoB = req.params.pontoB;
    const distancia = pontoB - pontoA;
    res.send(`A distância entre ${pontoA} e ${pontoB} é ${distancia}`);
});

app.get('/distancia/:pontoA.:pontoB', (req, res) => {
    const pontoA = req.params.pontoA;
    const pontoB = req.params.pontoB;
    const distancia = pontoB - pontoA;
    res.send(`A distância entre ${pontoA} e ${pontoB} é ${distancia}`);
});
