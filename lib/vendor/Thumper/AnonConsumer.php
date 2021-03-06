<?php

require_once(dirname(__FILE__)  . '/Consumer.php');

class AnonConsumer extends Consumer
{
  public function __construct($host, $port, $user, $pass, $vhost)
  {
    parent::__construct($host, $port, $user, $pass, $vhost);
    
    $this->setQueueOptions(array('name' => '', 'passive' => false, 'durable' => false,
                                     'exclusive' => true, 'auto_delete' => true, 'nowait' => false,
                                     'arguments' => null, 'ticket' => null));
  }
}

?>