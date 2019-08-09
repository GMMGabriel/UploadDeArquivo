<?php

if(!empty($_FILES['btnArquivo']['name'])){

    // Caminho da pasta onde as imagens serão armazenadas.
    $upload_dir = "imagens/";

    // Para manipular arquivos, deve ser usado "$_FILES"!!!
    // Armazenando o nome e a extensão do arquivo que foi selecionado.
    $nome_arq = basename($_FILES['btnArquivo']['name']);

    // Verifica o tipo de extensão permitida para o upload do arquivo,
    // usamos o comando "strstr()" para localizar a sequência de caracteres.
    if(strstr($nome_arq,'.jpg') || strstr($nome_arq,'.JPG') || strstr($nome_arq,'.png') || strstr($nome_arq,'.PNG') || strstr($nome_arq,'.jpeg') || strstr($nome_arq,'.JPEG') || strstr($nome_arq,'.gif') || strstr($nome_arq,'.GIF')){
        
        $upload_file = $upload_dir . $nome_arq;
        
        if(move_uploaded_file($_FILES['btnArquivo']['tmp_name'], $upload_file)){
            
            // Código para se o arquivo foi movido com sucesso.
            echo"Certo.";
            
        }else{
            
            // Falha ao mover o arquivo.
            echo"Falha ao mover o arquivo.";
            
        }
        
    }else{
        
        // O arquivo selecionado não é uma imagem.
        echo"O arquivo selecionado não é uma imagem.";
        
    }
}else{
    
    // Nenhum arquivo foi selecionado.
    echo"Nenhum arquivo foi selecionado.";
    
}

?>