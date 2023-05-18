<?php

function busca_criterio($conn){
    $query = "SELECT nm_exemplo, exemplo, nm_tipo FROM tb_criterios_sucesso, tb_diretriz, tb_nivel WHERE fk_cd_diretriz = cd_diretriz and fk_cd_nivel = cd_nivel and cd_nivel = 2";
    
    $result = mysqli_query($conn, $query);
    
    return $result;
    
}


?>