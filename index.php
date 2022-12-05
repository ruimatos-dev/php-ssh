<?php 

require __DIR__.'/vendor/autoload.php';

use App\Rui\SSH;
use App\Rui\Protocolo as Proto;

$ssh = new SSH();

$protocolo = new Proto();

$protocolo->hello();