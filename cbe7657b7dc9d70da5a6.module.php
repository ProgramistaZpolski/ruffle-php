<?php
// czemu?
// ruffle wymaga content-type jako application/wasm
// enjoy this awesome proxy ~pzpl
header('Content-type: application/wasm');
echo file_get_contents("cbe7657b7dc9d70da5a6.module.wasm");
?>