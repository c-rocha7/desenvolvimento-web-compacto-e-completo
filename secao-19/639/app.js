const fs = require('fs');

// escrever um log
let log = 'Mensagem de log.\n';

// fs.writeFileSync('./logs.log', log, { flag: 'a+' });

// fs.writeFile('./logs.log', log, { flag: 'a+' }, (err) => {
//     if (err) {
//         console.log(err);
//     }
// });

fs.unlinkSync('./logs.log');

console.log('FIM');
