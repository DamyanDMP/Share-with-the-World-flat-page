<?php
namespace App\Models\articleOptionModel;

class articleOptionModel
{
    private $option;
    public function __construct($option)
    {
        $this->option = $option;
    }

    public function returnData()
    {
        $app = \Yee\Yee::getInstance();
        $element = $app->db['default']->where("id",$this->option)->getOne('articles');
        //$result = $app->db['default']->getOne('articles');
        //$asd = $app->db['default']->get('articles');
        return $element;
    }
}