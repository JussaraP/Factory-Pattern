<?php


/* Classe TLogger TXT
* implementa algoritmo de log em TXT
*/

class TLoggerTXT extends TLogger {

    /*
    * método write
    * escreva uma mensagem no arquivo de LOG
    * @param $message = mensagem a ser escrita
    */

    public function write($message)
    {
        date_default_timezone_set('America/São Paulo');
        $time = date('Y-m-d H:i:s');
        // monta a string
        $text = "<log>\n";
        $text .= " <time>$time</time>\n";
        $text .= "<message>$message</message>\n";
        $text .= "</log>\n";

        // adiciona ao final do arquivo 
        $handler = fopen($this->filename, 'a');
        fwrite($handler, $text);
        fclose($handler);
    }
}

?>