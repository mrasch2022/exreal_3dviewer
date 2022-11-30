<?php
  
namespace Exreal3dViewer\ExrealViewer\Core\Events;
 
use \OxidEsales\Eshop\Core\DbMetaDataHandler;
 
class Exreal3dViewerEvent {
 
    public static function onActivate() {
        $oMetaData = oxNew("oxDbMetaDataHandler");
        $dbQueries = [];
 
        if(!$oMetaData->fieldExists("viewer_glb_file", "oxarticles")) {
            $dbQueries[] = "ALTER TABLE `oxarticles` ADD COLUMN `viewer_glb_file` VARCHAR(40) NOT NULL AFTER `OXSHOWCUSTOMAGREEMENT`";
        }
        if(!$oMetaData->fieldExists("viewer_cam_position_x", "oxarticles")) {
            $dbQueries[] = "ALTER TABLE `oxarticles` ADD COLUMN `viewer_cam_position_x` VARCHAR(40) NOT NULL AFTER `viewer_glb_file`";
        }
        if(!$oMetaData->fieldExists("viewer_cam_position_y", "oxarticles")) {
            $dbQueries[] = "ALTER TABLE `oxarticles` ADD COLUMN `viewer_cam_position_y` VARCHAR(40) NOT NULL AFTER `viewer_cam_position_x`";
        }
        if(!$oMetaData->fieldExists("viewer_cam_position_alpha", "oxarticles")) {
            $dbQueries[] = "ALTER TABLE `oxarticles` ADD COLUMN `viewer_cam_position_alpha` VARCHAR(40) NOT NULL AFTER `viewer_cam_position_y`";
        }
        if(!$oMetaData->fieldExists("viewer_cam_position_beta", "oxarticles")) {
            $dbQueries[] = "ALTER TABLE `oxarticles` ADD COLUMN `viewer_cam_position_beta` VARCHAR(40) NOT NULL AFTER `viewer_cam_position_alpha`";
        }
        if(!$oMetaData->fieldExists("viewer_zoom", "oxarticles")) {
            $dbQueries[] = "ALTER TABLE `oxarticles` ADD COLUMN `viewer_zoom` VARCHAR(40) NOT NULL AFTER `viewer_cam_position_beta`";
        }
        if (count($dbQueries) === 0) return true;
 
        $oMetaData->executeSql($dbQueries);
        $oMetaData->updateViews();
    }
 
    public static function onDeactivate() {
 
    }
 
}