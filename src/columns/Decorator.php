<?php
/**
 * Created by PhpStorm.
 * User: Ekstazi
 * Date: 15.11.2014
 * Time: 22:06
 */

namespace ekstazi\widgets\grid\columns;


use yii\grid\Column;
use yii\helpers\Html;

class Decorator extends Column{
    /**
     * @var Column
     */
    public $decorated;

    protected function renderDataCellContent($model, $key, $index)
    {
        $content = $this->decorated->renderDataCellContent($model,$key,$index);
        return Html::a(Html::img(''),[]).$content;
    }

    public function renderHeaderCell()
    {
        return $this->decorated->renderHeaderCell();
    }

    public function renderFilterCell()
    {
        return $this->decorated->renderFilterCell();
    }

    public function renderFooterCell()
    {
        return $this->decorated->renderFooterCell();
    }

}