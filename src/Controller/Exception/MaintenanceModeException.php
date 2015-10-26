<?php
namespace App\Controller\Exception;

use Cake\Core\Exception\Exception;
use Cake\Core\Configure;

class MaintenanceModeException extends Exception
{
    public function __construct($message)
    {
        Configure::write('debug', true);
        parent::__construct($message, 403);
    }
}
