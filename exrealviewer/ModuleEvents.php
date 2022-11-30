<?php
/**
 * @package       extenduser
 * @category      module
 * @author        OXID eSales AG
 * @link          http://www.oxid-esales.com/en/
 * @licenses      GNU GENERAL PUBLIC LICENSE. More info can be found in LICENSE file.
 * @copyright (C) OXID e-Sales, 2003-2017
 */

namespace OxidEsales\ExtendUser;

use oxDb;

/**
 * Module on activate and on deactivate events.
 */
class ModuleEvents
{
    /**
     * Creates needed field.
     */
    public static function onActivate()
    {
        $sSql = "ALTER TABLE oxuser ADD EXTENDUSER_ADDITIONALCONTACTINFO VARCHAR(255);";
        oxDb::getDb()->execute($sSql);
    }

    /**
     * Removes field on deactivation.
     */
    public static function onDeactivate()
    {
        $sSql = "ALTER TABLE oxuser DROP COLUMN EXTENDUSER_ADDITIONALCONTACTINFO;";
        oxDb::getDb()->execute($sSql);
    }
}
