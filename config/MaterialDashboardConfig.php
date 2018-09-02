<?php
namespace spl\config;

use Yii;

class MaterialDashboardConfig
{
    public static function sidebarColor()
    {
        /** @var MaterialDashboardAsset $bundle */
        $bundle = Yii::$app->assetManager->getBundle('spl\web\MaterialDashboardAsset');

        return $bundle->sidebarColor;
    }


    public static function sidebarBackgroundColor()
    {
        /** @var MaterialDashboardAsset */
        $bundle = Yii::$app->assetManager->getBundle('spl\web\MaterialDashboardAsset');

        return $bundle->sidebarBackgroundColor;
    }

    public static function sidebarBackgroundImage()
    {
        /** @var MaterialDashboardAsset */
        $bundle = Yii::$app->assetManager->getBundle('spl\web\MaterialDashboardAsset');

        return $bundle->sidebarBackgroundImage;
    }
    
    public static function siteTitle()
    {
        /** @var MaterialDashboardAsset */
        $bundle = Yii::$app->assetManager->getBundle('spl\web\MaterialDashboardAsset');

        return $bundle->siteTitle;
    }
}

