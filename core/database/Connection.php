<?php

namespace Training\Database;

/**
 * Class Connection
 * @package Training\Metagusto\Git
 * @author Metagûsto <info@metagusto.com>
 */
class Connection
{
    /**
     * @var Database
     */
    protected $database = null;

    /**
     * @return Database
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * @param Database $database
     */
    public function setDatabase($database)
    {
        $this->database = $database;
    }

}