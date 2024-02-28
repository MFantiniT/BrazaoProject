<?php
$senha = "Mft291095";
$senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);
echo $senhaCriptografada;