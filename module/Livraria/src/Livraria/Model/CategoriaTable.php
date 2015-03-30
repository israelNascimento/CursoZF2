<?php
/**
 * Created by PhpStorm.
 * User: israel
 * Date: 28/03/15
 * Time: 12:27
 */

namespace Livraria\Model;

use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Feed\Reader\Collection\Category;

class CategoriaTable extends AbstractTableGateway
{
    protected $table='Categoria';

    function __construct( Adapter $adapter)
    {
        $this->adapter=$adapter;
        $this->resultSetPrototype=new ResultSet();
        $this->resultSetPrototype->getArrayObjectPrototype(new Category());
        $this->initialize();

    }


}