<?php
/**
 * @author: Hung Nguyen
 * @package:
 */
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/vendor/autoload.php');
require(__DIR__ . '/vendor/yiisoft/yii2/Yii.php');

function configureApplication()
{
    ensureSSL();

    // load environment info
    $envFile = checkEnv();
    if ($envFile) {
        include $envFile;

        require(__DIR__ . '/common/config/bootstrap.php');
        require(__DIR__ . '/sites/'.SITE_DIR.'/config/'.APP_ID.'/bootstrap.php');

        $config = yii\helpers\ArrayHelper::merge(
            require(__DIR__ . '/common/config/main.php'),
            require(__DIR__ . '/common/config/main-local.php'),
            require(__DIR__ . '/sites/'.SITE_DIR.'/config/'.APP_ID.'/main.php'),
            require(__DIR__ . '/sites/'.SITE_DIR.'/config/'.APP_ID.'/main-local.php')
        );

        Yii::setAlias('site',__DIR__ . '/sites/'.SITE_DIR.'/');

        return $config;
    } else {
        return array();
    }

}

function getHost()
{
    return (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : $_SERVER['SERVER_NAME']);
}

function checkEnv()
{
    $envFile = __DIR__ . '/sites/env/config.' . getHost() . '.php';
    if (file_exists($envFile)) {
        return $envFile;
    } else {
        echo 'Required file ',$envFile;
        die;
        return false;
    }
}

function ensureSSL()
{
    // Handle SSL requirement
    if (isset($_SERVER['HTTP_X_FORWARDED_PROTO'])) {
        $_SERVER['HTTPS'] = 'on';
    }
    if (!isset($_SERVER['HTTPS'])) {
        $_SERVER['HTTPS'] = false;
    }
    if (defined('REQUIRE_SSL') && REQUIRE_SSL && $_SERVER['HTTPS'] == false) {
        header('location:' . 'https://' . REQUESTED_HOST . $_SERVER['REQUEST_URI']);
        die;
    }
}
