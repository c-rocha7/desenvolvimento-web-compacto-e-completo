const fs = require('fs');

// criar pasta (síncrono)
// fs.mkdirSync('logs');

// criar pasta (assíncrono)
// fs.mkdir('logs2', (err) => {
//     if (err) {
//         console.log(err);
//     }
// });

// remover uma pasta
if (fs.existsSync('./logs')) {
	fs.rmdirSync('./logs');
}

console.log('FIM');
