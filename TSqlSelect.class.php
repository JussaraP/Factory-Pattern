<?php
/* classe TSqlSelect
* Esta classe prove meios para manipulação de uma instrução SQL de Select no BD
*/

final class TSqlSelect extends TSqlInstruction {

<<<<<<< HEAD
    private $columns = []; // array de colunas a serem retornadas.

    /* Método addColumn
    * Adiciona uma coluna a ser retornada pelo SELECT
    * @param $column = coluna da tabela
    */
    public function addColumn($column) {
        $this->columns[] = $column;
    }

    /* Método getInstruction()
    * Retorna a instrução de SELECT em forma de string
    */
    public function getInstruction() {
        // Verifica se há colunas a serem retornadas
        if (empty($this->columns)) {
            throw new Exception("Nenhuma coluna foi adicionada ao SELECT.");
        }

        // Monta a instrução SQL inicial
        $this->sql = 'SELECT ';

        // Monta a string com os nomes das colunas
        $this->sql .= implode(', ', $this->columns);

        // Adiciona na cláusula FROM o nome da tabela
        $this->sql .= ' FROM ' . $this->entity;

        // Obtém a cláusula WHERE do objeto criteria
        if ($this->criteria) {
            $expression = $this->criteria->dump();
            if ($expression) {
                $this->sql .= ' WHERE ' . $expression;
            }

            // Obtém as propriedades do critério
=======
    private $columns; // array de colunas a serem retornadas.

    /*Método addColumn
    * adiciona uma coluna a ser retornada pelo SELECT
    * @param $column = coluna da tabela
    */

    public function addColumn($column){
        $this->columns[] = $column;
    }
    /* método getInstruction()
    * retorna a instrução de SELECT em forma de string
    */

    public function getInstruction()
    {
        // monta a instrução SQL

        $this->sql = 'SELECT';

        //monta string com os nomes das colunas 
        $this->sql .= implode(',',$this->columns);

        //adiciona na clausula FROM o nome da tabela
        $this->sql .='FROM' . $this->entity;

        //obtem a clausula where do objeto criteria
        if($this->criteria){
            $expression = $this->criteria->dump();
            if($expression){
                $this->sql .='WHERE' . $expression;
            }

            //obtem as propriedades do critério

>>>>>>> 430b78100f3c5414cf9f1bdcfe38a0a9531d8b46
            $order = $this->criteria->getProperty('order');
            $limit = $this->criteria->getProperty('limit');
            $offset = $this->criteria->getProperty('offset');

<<<<<<< HEAD
            // Adiciona a ordenação do SELECT
            if ($order) {
                $this->sql .= ' ORDER BY ' . $order;
            }
            // Adiciona o limite de registros
            if ($limit) {
                $this->sql .= ' LIMIT ' . $limit;
            }
            // Adiciona o offset (deslocamento)
            if ($offset) {
                $this->sql .= ' OFFSET ' . $offset;
            }
        }

        return $this->sql;
    }
=======
            // obtem a ordenação do SELECT

            if($order){
                $this->sql.= 'ORDER BY'.$order;
            }
            if($limit){
                $this->sql .= 'LIMIT'.$limit;
            }
            if($offset){    
                $this->sql .= 'OFFSET'.$offset;
        }
    }
    return $this->sql;
}

>>>>>>> 430b78100f3c5414cf9f1bdcfe38a0a9531d8b46
}

?>
