const express = require('express')
const server = express()
server.listen(3000)

// middleware
server.use((req, res, next) => {
	console.log('teste')
	next()
})

server.get('/', (req, res) => {
	res.send('<h1>Teste</h1>')
})
