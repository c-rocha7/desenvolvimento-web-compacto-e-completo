-- listar todos os dados da tabela de amigos
SELECT * FROM amigos

-- listar apenas os nomes do amigos
SELECT nome FROM amigos

-- listar os nomes dos amigos por ordem alfabética
SELECT nome FROM amigos ORDER BY nome ASC

-- listar apenas o amigo cujo id = 2
SELECT * FROM amigos WHERE id = 2

-- listar todos os telefones do amigo cujo id = 5
SELECT * FROM telefones WHERE id_amigo = 5
-- nesse resultado a tabela apresenta os telefones, mas não apresenta
-- o nome do amigo. Quero apenas o nome do amigo e os respectivos telefones

SELECT amigos.nome, telefones.numero
FROM amigos, telefones
WHERE amigos.id = telefones.id_amigo
AND telefones.id_amigo = 5

-- quero apenas os telefones da amiga chamada Cristina
SELECT amigos.nome, telefones.numero FROM amigos, telefones
WHERE amigos.id = telefones.id_amigo
AND amigos.nome = "Cristina" 

-- quero a mesma query, mas com o nome da coluna igual ao nome da Cristina
SELECT telefones.numero 'Cristina' FROM amigos, telefones
WHERE amigos.id = telefones.id_amigo
AND amigos.nome = "Cristina"
