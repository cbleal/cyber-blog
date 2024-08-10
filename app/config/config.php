<?php

/*
    prod.php => produção
    local.php => QA | localhost
*/

$prod = true;

$file = $prod ? 'prod.php' : 'local.php';

require_once('env/' . $file);
