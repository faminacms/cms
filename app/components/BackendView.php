<?php
/**
 * @author: Hung Nguyen
 * @package:
 */

namespace app\components;

use yii\web\View;

class BackendView extends View {

    /** @var  string main message displayed under page heading */
    public $message = '';

    /**
     * render the header of backend page, using layouts/_header.php file
     */
    public function header()
    {
        echo $this->renderFile($this->absolutePath().'/layouts/_header.php');
    }

    /**
     * render the footer of backend page, using layouts/_footer.php file
     */
    public function footer()
    {
        echo $this->renderFile($this->absolutePath().'/layouts/_footer.php');
    }


    public function contentHeading()
    {
        echo $this->renderFile($this->absolutePath().'/layouts/_contentHeading.php');
    }

    /**
     * Render view's content
     */
    public function content($content)
    {
        echo $this->renderFile($this->absolutePath().'/layouts/_content.php',['content' => $content]);
    }

    /**
     * Get the absolute path of current theme
     * @return bool|string
     */
    protected function absolutePath()
    {
        return \yii\BaseYii::getAlias($this->theme->pathMap['@app/views']);
    }
}