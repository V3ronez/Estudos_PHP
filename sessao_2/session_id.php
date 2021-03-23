<?php
//inicia a sessao
session_start();

//gera um novo ID para sessao;
session_regenerate_id();

//mostra ID da sessao ou setar o ID;
echo session_id();

//mostra o caminho onde o arquivo da sessao salvo no servidor
echo session_save_path();