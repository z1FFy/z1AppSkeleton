<?php
namespace z1App;

class mysqlClass
{
    private $link;

    function __construct()
    {
        $this->link = mysqli_connect(
          getConfig('dbHost'), getConfig('dbUser'), getConfig('dbPass'), getConfig('dbName')
        );

        if (!$this->link) {
            dbg('Невозможно подключиться к базе данных. Код ошибки: ' . mysqli_connect_error());
            return false;
        } else {
            $this->link->set_charset('utf8');
            return true;
        }
    }

    function query($q)
    {
        $q = mysqli_query($this->link, $q);
        return mysqli_fetch_all($q);
    }
}