<?php
namespace Ratchet\Tests\Mock;
use Ratchet\Resource\ConnectionInterface;

class Connection implements ConnectionInterface {
    public $last = array(
        'write' => ''
      , 'end'   => false
    );

    public $remoteAddress = '127.0.0.1';

    public function write($data) {
        $this->last[__FUNCTION__] = $data;
    }

    public function end() {
        $this->last[__FUNCTION__] = true;
    }
}