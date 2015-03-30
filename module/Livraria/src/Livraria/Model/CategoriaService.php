<?php
/**
 * Created by PhpStorm.
 * User: israel
 * Date: 28/03/15
 * Time: 13:08
 */

namespace Livraria\Model;


class CategoriaService
{
    /**
     * @var \Livraria\Model\CategoriaTable
     */
    protected $categoriaTable;

    function __construct(CategoriaTable $table)
    {
        $this->categoriaTable = $table;
    }

    public function fetchAll()
    {
        $resultset=$this->categoriaTable->select();
        return $resultset;
    }
}