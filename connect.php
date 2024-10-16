<?php

spl_autoload_register(function ($classe) {
<<<<<<< HEAD
    $filename = "{$classe}.class.php";
    if (file_exists($filename)) {
        include_once $filename;
    } else {
        throw new Exception("Classe {$classe} não encontrada.");
    }
});
=======
    if (file_exists("{$classe}.class.php")) {
        include_once "{$classe}.class.php";
    } });
>>>>>>> 430b78100f3c5414cf9f1bdcfe38a0a9531d8b46

    // cria a instrução de SELECT

    $sql = new TSqlSelect;
<<<<<<< HEAD
     
    //define o nome da entidade
=======

    // define o nome da entidade
>>>>>>> 430b78100f3c5414cf9f1bdcfe38a0a9531d8b46
    $sql->setEntity('famosos');

    // acrescenta colunas a consulta
    $sql->addColumn('codigo');
    $sql->addColumn('nome');

<<<<<<< HEAD
    // crio o critario de seleção 
    $criteria = new TCriteria;

    //obtem a pessoa código "1"
    $criteria->add(new TFilter('codigo','=',1));

    // atribui o criterio de seleção 
    $sql->setCriteria($criteria);

    try {
        // abre conexão com banco de dados my_livro(mysql)
        $conn = TConnection::open('my_livro');

        

=======
    // crio o criterio de seleção
    $criteria = new TCriteria;

    // obtem a pessoa código "1"
    $criteria->add(new TFilter('codigo','=','1'));

    // atribui o criterio de seleção
    $sql->setCriteria($criteria);

    try{
        // abre a conexão com banco de dados my_livro(mysql)
        $conn = TConnection::open('my_livro');

>>>>>>> 430b78100f3c5414cf9f1bdcfe38a0a9531d8b46
        // executa a instrução sql
        $result = $conn->query($sql->getInstruction());
        if ($result){
            $row = $result->fetch(PDO::FETCH_ASSOC);
<<<<<<< HEAD
            // exibe os resultados 

            echo $row['codigo'] .'-'. $row['nome'] ."<br>\n";
                    }

            // fecha a conexão 

                $conn = null;
    }
    catch (PDOException $e) {
        // exibe a mensagem de erro 

        print "ERRO!:".$e->getMessage()."<br>\n";
        die();
    }
    /* try
    {
        // abre conexão com a base pg_livro 
        $conn = TConnection::open('pg_livro');

        // executa a instrução SQL 
=======
            // exibe os resultados

            echo $row['codigo'].'-'.$row['nome']."<br>\n";
        }

        // fecha a conexão

        $conn = null;
    }
    catch(PDOException $e) {
        // exibe a mensagem de erro

        print "ERRO!:" .$e->getMessage()."<br>\n";
        die();
    }
    try
    {
        // abre conexão com a base pg_livro
        $conn = TConnection::open('pg_livro');

        // executa a instrução SQL
>>>>>>> 430b78100f3c5414cf9f1bdcfe38a0a9531d8b46
        $result = $conn->query($sql->getInstruction());
        if ($result){

            $row = $result->fetch(PDO::FETCH_ASSOC);
<<<<<<< HEAD
            // exibe as resultados

            echo $row['codigo'].'-'.$row['nome']."<br>\n";
        }
        // fecho a conexão  
        $conn = null;
    }

    catch (Exception $e){
        // exibe a mensagem de erro 
        print "ERRO!:".$e->getMessage()."<br>\n";
        die();
    }*/
?>


=======
            // exibe os resultados

            echo $row['codigo'].'-'.$row['nome']. "<br>\n";
        }
        // fecho a conexão
        $conn = null;
    }
    catch(Exception $e) {
        // exibe a mensagem de erro
        print "ERRO!" .$e->getMessage()."<br>\n";
        die();
    }

?>
>>>>>>> 430b78100f3c5414cf9f1bdcfe38a0a9531d8b46
