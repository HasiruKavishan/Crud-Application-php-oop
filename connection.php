<?php
/**
 * Created by PhpStorm.
 * User: Hasiru Kavishan
 * Date: 10/10/2018
 * Time: 11:43 AM
 */

class connection{
    public $dbConnection;

    public function __construct() {
        $this->dbConnection = mysqli_connect("localhost","root","","employee");
        if($this->dbConnection){
            echo "Successfully";
        }
    }
}


$connectionObj = new connection();

?>




