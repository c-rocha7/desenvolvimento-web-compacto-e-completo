-- vamos executar queries da atualização, inserção e eliminação de dados

-- vamos atualizar o nome Cristina para Maria
UPDATE amigos SET nome = "Maria" WHERE nome = "Cristina"

-- quero atualizar todo os telefones que começam pelo algorismo 5
-- e vão passar a ser iniciados por 10 mais o número que já existe
UPDATE telefones SET numero = CONCAT(10,numero) WHERE numero LIKE '5%'

SELECT * FROM telefones WHERE numero LIKE '10%'

-- quero atualizar todos os telefones do joao para que
-- fiquem apenas com os dois últimos algarismos
UPDATE telefones SET numero = SUBSTRING(numero,2,2)
WHERE telefones.id_amigo = (SELECT id FROM amigos WHERE nome = "Joao")

-- quero adicionar mais 1 amigo (apenas o nome)
INSERT INTO amigos(nome) VALUES('Hugo')

-- quero adicionar mais 3 amigos numa única query
INSERT INTO amigos VALUES
(0, "Daniel", NOW(), NOW(), NULL),
(0, "Dinis", NOW(), NOW(), NULL),
(0, "Damasceno", NOW(), NOW(), NULL)

-- quero elimina o amigo cujo id = 2
DELETE FROM amigos WHERE id = 2
-- o mecanismo elimina o amigo e todos os 
-- telefones relacionados (integridade referencial)

-- quero eliminar todos os amigos cujos nomes começam pela letra 'D'
DELETE FROM amigos WHERE nome LIKE 'D%'

-- quero eliminar todos os registos das duas tabelas
-- vai aparecer uma mensagem indicando que esta operação vai
-- ser arriscada porque não tem cláusula where
DELETE FROM amigos

ALTER TABLE amigos AUTO_INCREMENT = 1;
ALTER TABLE telefones AUTO_INCREMENT = 1;

TRUNCATE telefones
TRUNCATE amigos
