<?php
class Connect
{

    private $_host = "localhost";
    private $_dbName = "kiliroy_shop";
    private $_user = "kiliroy";
    private $_pass = "N4rutokado";
    private $_db;
    // 2RaM58IvpCHmSxit 
    // USER 'Kiliroy-PC' 

    public function __construct($host = NULL, $dbName = NULL, $user = NULL, $password = NULL)
    {
        if ($host != NULL) {
            $this->_host = $host;
            $this->_dbName = $dbName;
            $this->_user = $user;
            $this->_pass = $password;
        }

        try {
            $this->_db = new PDO('mysql:host=' . $this->_host . ';dbname=' . $this->_dbName, $this->_user, $this->_pass);
            $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Impossible d'acceder à la base de donnée");
        }
    }

    public function query()
    {
        $req = $this->_db->query('select * from articles');
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
}
$DB = new Connect();
