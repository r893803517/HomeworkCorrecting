<?php
 
/* 连接数据库类 MysqlConnect */
 
class MysqlConnect{
    private $dbhost=null;
    private $dbuser=null;
    private $dbpwd=null;
    private $dbname=null;
    private $dbport=null;
    private $ifpdo=null;
    private $dburi=null;
    private $handler=null;
 
 
    function __construct($dbhost,$dbuser,$dbpwd,$dbname,$dbport,$ifpdo,$dburi){
        $this->dbhost=$dbhost;
        $this->dbuser=$dbuser;
        $this->dbpwd=$dbpwd;
        $this->dbname=$dbname;
        $this->dbport=$dbport;
        $this->ifpdo=$ifpdo;
        $this->dburi=$dburi;//PDO的URI参数，可以查手册
        if($this->ifpdo==1){//表示调用PDO来操作数据库
            $this->handler=$this->CreatePdo();
        }elseif($this->ifpdo==0){//这里可以写MYSQLI的方法
            $this->handler=null;
        }
    }
    /* ----------------这里是入口--------------------- */
    //@param sql:外部调用时传递的完整SQL语句
    //@param bindArray:绑定的参数数组，与sql语句有关，如果没有PDO占位符此处为空
    //@param action:传递操作参数，"select"/"update"/"delete"/"insert"
    public function exeSql($sql,$bindArray=array(),$action=""){
            $stmt=$this->handler->prepare($sql);
            $stmt->execute($bindArray);
            switch($action){
                case "select":
                    return $stmt->fetch(PDO::FETCH_ASSOC);
                    break;
                case "selectAll":
                    return $stmt->fetchAll(PDO::FETCH_ASSOC);
                    break;
                case "update":
                case "delete":
                    return $stmt->rowCount();
                    break;
                case "insert":
                    return $this->handler->lastInsertId();
                    break;
                case "count":
                    return $stmt->rowCount();
                default:
                    return "";
            }
    }
    public function query($sql){
        return $this->handler->query($sql);
    }
    private function CreatePdo(){
        try{
            $handler=new PDO($this->dburi,$this->dbuser,$this->dbpwd);
            $handler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $handler;
        }catch(PDOException $e){
            $e->getMessage();
            $this->handler=null;
        }
    }
    private function __get($args){
        if($args=='handler'){
            return $this->handler;
        }
    }
}
require(NEO_A_P.'\data\sqlconfig.php');//这里是sql的连接文件,下面创建对象的时候需要的变量就是这个文件里要有的
$handler=new MysqlConnect($dbhost,$dbuser,$dbpwd,$dbname,$dbport,$ifpdo,$dburi);
?>