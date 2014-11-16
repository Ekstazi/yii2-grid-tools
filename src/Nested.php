<?php
/**
 * Created by PhpStorm.
 * User: Ekstazi
 * Date: 15.11.2014
 * Time: 21:48
 */

namespace ekstazi\widgets\grid;


use yii\base\Widget;
use yii\di\Container;
use yii\grid\GridView;
use yii\helpers\Html;


class Nested extends Widget
{
    /**
     * @var GridView
     */
    public $grid;

    public $route;

    public function init()
    {
        if (!$this->grid instanceof GridView) {
            $this->grid = \Yii::createObject($this->grid);
        }

        $this->grid->afterRow = function ($model, $key, $index, GridView $grid) {
            $colspan = count($grid->columns);
            $options['data-key'] = is_array($key) ? json_encode($key) : (string) $key;
            return Html::tag('tr', Html::tag('td', 'тест', ['colspan' => $colspan]), $options);
        };
    }

    public function run()
    {
        $this->grid->run();
    }

}