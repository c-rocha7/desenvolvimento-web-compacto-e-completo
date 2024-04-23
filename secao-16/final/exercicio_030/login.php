<?php

$usuario = 'joao@gmail.com';
$senha = '$2y$10$RbxfGXTKxXDFwqyjx.kscOYIclxTDRhICCCoEMtmeagCG0fekFfq6'; // abc123

// verificar se os dados do usuário estão corretos
if($_POST['text_usuario'] == $usuario && password_verify($_POST['text_senha'], $senha)) {
	echo 'Usuário logado com sucesso';
} else {
	echo 'Usuário ou senha incorretos';
}
