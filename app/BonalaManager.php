<?php

namespace BonalaPHP\App;

/**
 * Class BonalaManager used to generate dynamically the View and Model
 * @package BonalaPHP\App
 */
class BonalaManager
{
    /**
     * @param string $view Contains the view we want to generate
     */
    public function getView($view)
    {
		$path = ROOT_PATH . 'view/' . $view . '.php';
        if (is_file($path)) {
            require $path;
		} else {
            exit('The "' . $path . '" file doesn\'t exist'); 
		}
    }

    /**
     * @param string $model Contains the view we want to generate
     */
    public function getModel($model)
    {
		$path = ROOT_PATH . 'model/' . $model . '.php';
        if (is_file($path)){
            require $path;
		} else {
            exit('The "' . $path . '" file doesn\'t exist');
		}
    }
	
}