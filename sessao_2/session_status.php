<?php
//inicia sessao caso nao esteja iniciada
//PHP_SESSION_DISABLE 0 se as sessoes estiverem desabilitadas.
//PHP_SESSION_NONE 1 se as sessoes estiverem habilitada, mas nenhuma existir.
//PHP_SESSION_ACTIVE 2 se as sessoes estibverem habilitadas, e uma existir.

//se nenhuma sessao estiver ativa, inicia uma;
if (session_status() !== PHP_SESSION_ACTIVE) session_start();
if (session_status() === PHP_SESSION_NONE) session_start();
