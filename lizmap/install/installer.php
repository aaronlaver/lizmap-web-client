<?php
/**
* @package   lizmap
* @author    3liz
* @copyright 2011 3liz
* @link      http://3liz.com
* @license Mozilla Public License : http://www.mozilla.org/MPL/
*/

require_once (__DIR__.'/../application.init.php');

jApp::setEnv('install');

$installer = new jInstaller(new textInstallReporter());

$installer->installApplication();

try {
    jAppManager::clearTemp();    
}
catch(Exception $e) {
    echo "WARNING: temporary files cannot be deleted because of this error: ".$e->getMessage().".\nWARNING: Delete temp files by hand immediately!\n";
}

