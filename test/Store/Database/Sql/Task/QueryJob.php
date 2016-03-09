<?php
/**
 * Created by PhpStorm.
 * User: yuzhenfan
 * Date: 16/3/8
 * Time: 下午3:58
 */
namespace Zan\Framework\Test\Store\Database\Sql\Task;
use Zan\Framework\Store\Facade\Db;
use Zan\Framework\Test\Foundation\Coroutine\Task\Job;

class QueryJob extends Job
{
    public function run()
    {
        $db = new Db();
        $sid = '';
        $data = [];
        $options = [];
        $response = (yield $db->executer($sid, $data, $options));
        $this->context->set('response', $response);
        yield $response;
    }
}