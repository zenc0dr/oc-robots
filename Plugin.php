<?php namespace Zen\Robots;

use Backend;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'Robots.txt',
            'description' => 'Simple generating robots.txt',
            'author'      => 'Alexander Ablizin',
            'icon'        => 'icon-leaf'
        ];
    }
    public function registerSettings()
    {
        return [
            'options' => [
                'label'       => 'Robots.txt',
                'description' => 'Generating robots.txt',
                'icon'        => 'icon-android',
                'permissions' => [],
                'class' => 'Zen\Robots\Models\Settings',
                'order' => 600,
            ]
        ];
    }
}
