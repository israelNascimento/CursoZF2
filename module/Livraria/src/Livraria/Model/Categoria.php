<?php
/**
 * Created by PhpStorm.
 * User: israel
 * Date: 28/03/15
 * Time: 12:59
 */

namespace Livraria\Model;


class Categoria
{
    public $id;
    public $nome;

    public function exchangeArray($data)
    {
        $this->id=(isset($data['id']))?$data['id']:null;
        $this->id=(isset($data['nome']))?$data['nome']:null;

    }
}