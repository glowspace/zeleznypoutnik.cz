<?php

namespace Poutnik;

/**
 * Model admina
 *
 * @author Michael Dojčár <michael.dojcar@gmail.com>
 * @version 0.03
 */

class User
{

    /**
     * @var object Objekt připojení k databázi
     */
    protected $db;

    /**
     * User constructor.
     */
    function __construct()
    {
        $this->db = new Database();
    }

    /**
     * @param $id int
     */
    function getNick($id)
    {

    }

}