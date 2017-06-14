<?php
namespace core\lib\driver\cache;

use core\lib\config;

class file
{
    public $path;
    public function __construct()
    {
        $config=Config::get('OPTION', 'cache');
        $this->path=$config['PATH'];
    }
/*    public function cache($message, $file = 'cache')
    {
        if (!is_dir($this->path.date('YmdH'))) {
            mkdir($this->path.date('YmdH'), '0777', true);
        }
        return file_put_contents($this->path.date('YmdH').'/'.$file.'.php', date('Y-m-d H:i:s') . json_encode($message).PHP_EOL, FILE_APPEND);
    }*/

    public function set()
    {
    }
    public function get()
    {
    }
    public function inc()
    {
    }
    public function dec()
    {
    }
    public function clear()
    {
    }
    public function rm()
    {
    }
    public function pull()
    {
    }
}
