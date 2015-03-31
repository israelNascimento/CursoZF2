<?php
/**
 * Created by PhpStorm.
 * User: israel
 * Date: 30/03/15
 * Time: 16:20
 */

namespace Livraria\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @ORM\Entity
 * @ORM\Table(name="Categoria")
 * @ORM\Entity(repositoryClass="Livraria\Entity\CategoriaRepository")
 */
class Categoria
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @var int
     */
    protected $id;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    protected $nome;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function __toString()
    {
        return $this->nome;
    }

    public function toArray()
    {
        return array(
            'id'=>$this->getId(),
            'nome'=>$this->getNome()
        );
    }


}