<?php
/*
задаем константы отвечающие за подключение, но лучше их вынести в отдельный файл
*/
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'date');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHAR', 'utf8');

class DB
{
    /*
    Указатель на объект
    */
    protected static $instance = null;

    public function __construct() {}
    public function __clone() {}
    /*
    Объект создается через этот метод если он еще ни создан, если создан, то объект просто переприсваивается, тем самым мы создаем только один объект подключения
    */
    public static function instance()
    {
        if (self::$instance === null)
        {

            $dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset='.DB_CHAR;
            self::$instance = new PDO($dsn, DB_USER, DB_PASS);
        }
        return self::$instance;
    }
    /*
запускается при вызове недоступных методов в статическом контексте.
*/
    public static function __callStatic($method, $args)
    {
        return call_user_func_array(array(self::instance(), $method), $args);
    }
    /*
    Выполняем запрос sql -сам запрос
    Args- массив параметров
    */
    public static function run($sql, $args = array())
    {
        if (!$args)
        {
            return self::instance()->query($sql);
        }
        $stmt = self::instance()->prepare($sql);
        $stmt->execute($args);
        return $stmt;
    }
}
