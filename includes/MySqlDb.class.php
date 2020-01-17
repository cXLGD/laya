<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/1/15
 * Time: 20:34
 */

class MySqlDb {
    private $host;
    private $user;
    private $pwd;
    private $dbname;
    private $link;
    private $prefix;
    private $charset;
    private static $conn;

    /**
     * 构造函数
     * @param $config   [配置信息]
     */
    private function __construct($config){
        $this->init($config);
        $this->connect();
        $this->charSet();
    }

    /**
     * 简介数据库
     */
    private function connect(){
        $this->link = mysqli_connect($this->host, $this->user, $this->pwd, $this->dbname);

        if(!$this->link){
            die('数据库连接失败!');
        }
    }

    /**
     * 设置字符集编码
     */
    private function charSet(){
        mysqli_set_charset($this->link, $this->charset);
    }

    /**
     * 初始化配置信息
     * @param $config   [配置信息]
     */
    private function init($config){
        $this->host = empty($config['host']) ? '127.0.0.1' : $config['host'];
        $this->user = empty($config['user']) ? 'root' : $config['user'];
        $this->pwd = empty($config['pwd']) ? '' : $config['pwd'];
        $this->dbname = empty($config['dbname']) ? '' : $config['dbname'];
        $this->prefix = empty($config['prefix']) ? '' : $config['prefix'];
        $this->charset = empty($config['charset']) ? 'utf8' : $config['charset'];
    }

    /**
     * 防止克隆
     */
    private function __clone(){

    }

    /**
     * @param $config   [配置信息]
     * @return MySqlDb  [返回数据库资源对象]
     */
    public static function getInstance($config){
        if(!self::$conn instanceof self){
            return self::$conn = new self($config);
        }
        return self::$conn;
    }

    function __destruct(){
        mysqli_close($this->link);
    }

    /**
     * 执行查询语句
     * @param $sql                  [查询语句]
     * @return bool|mysqli_result   [返回查询到的对象]
     */
    private function query($sql){
        $res = mysqli_query($this->link, $sql);
        if(!$res){
            echo '查询出错!错误信息：'.mysqli_error($this->link).'<br>';
            echo '查询语句：'.$sql.'<br>';
            die;
        }
        return $res;
    }

    /**
     * 查询多条
     * @param $table                [表名]
     * @param string $ele           [查询元素]
     * @param string $condition     [查询条件]
     * @param string $type          [查询方式]
     * @return array                [返回结果集]
     */
    function selectAll($table, $ele='*', $condition='', $type='array'){
        $sql = "SELECT $ele FROM `$this->prefix$table` $condition";
        //echo $sql.'<br>';
        $res = $this->query($sql);
        $types = ['array', 'assoc', 'row'];
        $type = in_array($type, $types) ? $type : 'array';
        $fetch = 'mysqli_fetch_'.$type;
        if($res && mysqli_num_rows($res) > 0){
            $data_arr = [];
            while($row = $fetch($res)){
                $data_arr[] = $row;
            }
        }
        return empty($data_arr) ? array() : $data_arr;//如果查询结果集为空 返回空数组 防止报错
    }

    /**
     * 查询一条
     * @param $table                [表名]
     * @param string $ele           [查询元素]
     * @param string $condition     [查询条件]
     * @param string $type          [查询方式]
     * @return array                [返回结果集]
     */
    function selectOne($table, $ele='*', $condition='', $type='array'){
        $data_arr = $this->selectAll($table, $ele, $condition, $type);
        return $data_arr[0];
    }

    function insert($table, $data_arr){
        $key = '';
        $value = '';

        foreach($data_arr as $k => $v){
            $key .= "`$k`, ";
            $value .= "`$v`, ";
        }

        $key = rtrim($key, ',');
        $value = rtrim($value, ',');

        $sql = "INSERT INTO $table $key VALUE $value";

        $res = $this->query($sql);

        if($res){
            $info['code'] = 1;
            $info['msg'] = '添加成功';
        }else{
            $info['code'] = 0;
            $info['msg'] = '添加失败';
        }
        return $info;
    }

    function update($table, $value, $condition=''){
        $sql = "UPDATE `$this->prefix$table` SET $value $condition";
        //pre($sql);die;
        $res = mysqli_query($this->link, $sql);
        return $res;
    }

    function delData($table, $condition)
    {
        $del_res = $this->selectOne($table, '*', $condition);

        $sql = "DELETE FROM `$this->prefix$table` $condition";
        //pre($sql);
        if($res = mysqli_query($this->link, $sql)){
            if($del_res){
                foreach($del_res as $val){
                    if(is_file($val)){
                        unlink($val);
                    }
                }
            }
        }
        return $res;
    }
}