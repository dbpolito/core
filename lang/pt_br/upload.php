<?php

return array(
	\Upload::UPLOAD_ERR_OK						=> 'O arquivo foi enviado com sucesso',
	\Upload::UPLOAD_ERR_INI_SIZE				=> 'O arquivo ultrapassa a regra "upload_max_filesize" do php.ini',
	\Upload::UPLOAD_ERR_FORM_SIZE				=> 'O arquivo ultrapassa a regra "MAX_FILE_SIZE" que foi definida no formulário HTML',
	\Upload::UPLOAD_ERR_PARTIAL					=> 'O arquivo foi somente parcialmente enviado',
	\Upload::UPLOAD_ERR_NO_FILE					=> 'Nenhum arquivo enviado',
	\Upload::UPLOAD_ERR_NO_TMP_DIR				=> 'Configuração de diretorio temporário indisponível',
	\Upload::UPLOAD_ERR_CANT_WRITE				=> 'Falha ao escrever no diretório de envio',
	\Upload::UPLOAD_ERR_EXTENSION				=> 'Envio bloqueado por uma extensão do PHP instalada',
	\Upload::UPLOAD_ERR_MAX_SIZE				=> 'O arquivo enviado ultrapassa o tamanho máximo permitido',
	\Upload::UPLOAD_ERR_EXT_BLACKLISTED			=> 'Envio de arquivos com esta extensão não permitido',
	\Upload::UPLOAD_ERR_EXT_NOT_WHITELISTED		=> 'Envio de arquivos com esta extensão não permitido',
	\Upload::UPLOAD_ERR_TYPE_BLACKLISTED		=> 'Envio de arquivo deste tipo não é permitido',
	\Upload::UPLOAD_ERR_TYPE_NOT_WHITELISTED	=> 'Envio de arquivo deste tipo não é permitido',
	\Upload::UPLOAD_ERR_MIME_BLACKLISTED		=> 'Envio de arquivo deste tipo não é permitido',
	\Upload::UPLOAD_ERR_MIME_NOT_WHITELISTED	=> 'Envio de arquivo deste tipo não é permitido',
	\Upload::UPLOAD_ERR_MAX_FILENAME_LENGTH		=> 'O nome do arquivo enviado ultrapassa o máximo de caracteres permitido',
	\Upload::UPLOAD_ERR_MOVE_FAILED				=> 'Não foi possível mover o arquivo enviado para seu destino final',
	\Upload::UPLOAD_ERR_DUPLICATE_FILE 			=> 'Um arquivo com o nome do arquivo enviado já existe',
	\Upload::UPLOAD_ERR_MKDIR_FAILED			=> 'Não foi possível criar diretório do arquivo',
);
