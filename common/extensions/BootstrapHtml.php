<?php
/**
 * @author: Hung Nguyen
 * @package:
 */

namespace common\extensions;

use yii\helpers\Html;

/**
 * Class BootstrapHtml
 *
 * @package common\extensions
 */
class BootstrapHtml extends Html {

    /**
     * @var int columnCount number of columns in the current row
     */
    protected $columnCount;
    /**
     * Begin a row
     * @param array $classes additional classes for div.row container
     */
    public function beginRow($columnCount = 1, array $classes = []) {
        $classes[] = 'row';
        echo "\n<div class=\"".implode(' ',$classes)."\">";

        $this->columnCount = $columnCount;
    }

    /**
     * End a row
     */
    public function endRow() {
        echo "\n</div>";
    }

    public function beginColumn(array $classes = []) {
        $classes[] = 'col-md-'.(12/$this->columnCount);
        echo "\n<div class=\"".implode(' ',$classes)."\">";
    }

    public function endColumn() {
        echo "\n</div>";
    }
}