<?php
/**
 * Created by PhpStorm.
 * User: fede
 * Date: 14/11/18
 * Time: 08:50
 */

namespace AppBundle\Menu;


use Knp\Menu\MenuFactory;

class Builder
{
    public function mainMenu(MenuFactory $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->addChild('Home', ['route' => 'homepage']);
        return $menu;
    }
}