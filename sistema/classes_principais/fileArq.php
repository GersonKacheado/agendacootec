<?php
class UPLOADSDOC
{
    public $status;
    function status(){
        return $this->status;
    }
    function uploadArq($nmDir /*Diretorio que vai criar a pasta*/,$nm_arq /*novo nome do arquivo*/  , $filephp /*entrada $_FILE*/, $nameinput /*nome do input*/, $extension)
    {
        //Diretorio que sera criado caso não exista a pasta
        $fileForm =  $filephp;//entrada

        $Diretorio = $nmDir;

        $nameinput = $nameinput;

        $extension = $extension;
        /*Checa se a pasta existe - caso negativo ele cria*/
        if (!file_exists($Diretorio)) {
                mkdir($Diretorio);
        }

        if ($fileForm) { // Verificando se existe o envio de arquivos.
            if ($fileForm[$nameinput]) { // Verifica se o campo não está vazio.
                $dir = $Diretorio; // Diretório que vai receber o arquivo.
                $tmpName = $fileForm[$nameinput]['tmp_name']; // Recebe o arquivo temporário.

                $name = $fileForm[$nameinput]['name']; // Recebe o nome do arquivo.
                preg_match_all('/\.[a-zA-Z0-9]+/', $name, $extensao);
                if (!in_array(strtolower(current(end($extensao))), array(''.$extension.''))) {
                    $this->status =('Permitido apenas arquivos :'.$extension.'');
                }
                $ext = pathinfo($name, PATHINFO_EXTENSION);
                $name = $nm_arq.".".$ext;
                // move_uploaded_file( $arqTemporário, $nomeDoArquivo )
                if (move_uploaded_file($tmpName, $dir.$name)) { // move_uploaded_file irá realizar o envio do arquivo.        
                    $this->status = true;
                } else {
                    $this->status = false;
                }    
            }  
        }        
    }
 
}


?>