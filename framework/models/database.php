<?
namespace Framework;
use \PDO as PDO;
class Database extends PDO{

 protected $dns="mysql:host=localhost;dbname=scout;charset=utf8;wait_timeout=60";
 protected $user="root";
 protected $pass="";

 protected $options=[
        PDO::ATTR_TIMEOUT => 120,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_PERSISTENT => true
        ];

     public function __construct(){
        parent::__construct($this->dns,$this->user,$this->pass,$this->option);
     }
}

?>
