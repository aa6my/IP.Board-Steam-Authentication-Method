<?php

/**
 * @author Adam Lavin (Lavoaster)
 * @copyright 2012
 * @license http://opensource.org/licenses/mit-license.php The MIT License
 */
class steamDisplayButton
{
    public function __construct()
    {
        $this->registry = ipsRegistry::instance();
        ipsRegistry::getClass('class_localization')->loadLanguageFile(array('public_steam_login'), 'core');
    }

    public function getOutput()
    {
        return $this->registry->getClass('output')->getTemplate('steamlogin')->showLoginFormButton();
    }
}