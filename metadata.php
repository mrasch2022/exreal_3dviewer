<?php
/**
 * @package       exreal3dstore
 * @category      module
 * @author        OXID eSales AG
 * @link          http://www.oxid-esales.com/en/
 * @licenses      GNU GENERAL PUBLIC LICENSE. More info can be found in LICENSE file.
 * @copyright (C) OXID e-Sales, 2003-2017
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = array(
    'id'           => 'exreal3dviewer',
    'title'        => 'exreal 3d Store',
    'description'  => array(
        'de' => 'exreal 3d Store.',
        'en' => 'exreal 3d Store.',
    ),
    'version'      => '1.0.0',
    'author'       => 'OXID eSales AG',
    'url'          => 'http://www.oxid-esales.com',
    'email'        => 'melanie.rasch@exreal.de',
    'extend'       => array(
    ),
    'blocks' => array(
        array(
            'template'  => 'page/details/inc/tabs.tpl',
            'block'     => 'details_tabs_longdescription',
            'file'      => 'out/blocks/page/details/inc/tabs_3dviewer.tpl'
        ),
    ),
    'controllers'         => array(
        'exreal3dviewerdetails' => \Exreal3dViewer\ExrealViewer\Application\Controller\Admin\Exreal3dViewer::class
    ),
    'templates'     => array(
        'article_exreal_3dviewer.tpl' => 'exreal_3dViewer/exrealviewer/Application/views/admin/tpl/article_exreal_3dviewer.tpl'
    ),
    'events'        => array(
        'onActivate' => '\Exreal3dViewer\ExrealViewer\Core\Events\Exreal3dViewerEvent::onActivate',
        'onDeactivate' => '\Exreal3dViewer\ExrealViewer\Core\Events\Exreal3dViewerEvent::onDeactivate'
    ),
    'settings' => []
);
