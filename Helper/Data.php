<?php
/**
 * Copyright (c) 2018. Magextensions.io - Martin Hooijer. All Rights reserved.
 *  Magextensions License (https://www.magextensions.io/license/)
 *
 */

namespace Magextensionsio\FacebookCustomerChat\Helper;

use \Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper{

    /**
     * Admin Settings Paths
     */
    const FACEBOOK_PAGE_ID                              = 'magextensionsio_facebook_customer_chat_general/general/facebook_page_id';
    const FACEBOOK_APP_ID                               = 'magextensionsio_facebook_customer_chat_general/general/facebook_app_id';

    //Facebook Customer Chat
    const CUSTOMER_CHAT_PLUGIN_ENABLE                   = 'magextensionsio_facebook_customer_chat_general/general/customer_chat_plugin_enable';
    const CUSTOMER_CHAT_THEME_COLOR                     = 'magextensionsio_facebook_customer_chat_plugin/general/theme_color';
    const CUSTOMER_CHAT_LOGGED_IN_GREETING              = 'magextensionsio_facebook_customer_chat_plugin/general/logged_in_greeting';
    const CUSTOMER_CHAT_LOGGED_OUT_GREETING             = 'magextensionsio_facebook_customer_chat_plugin/general/logged_out_greeting';
    const CUSTOMER_CHAT_GREETING_DIALOG_DISPLAY         = 'magextensionsio_facebook_customer_chat_plugin/general/greeting_dialog_display';
    const CUSTOMER_CHAT_GREETING_DIALOG_DELAY           = 'magextensionsio_facebook_customer_chat_plugin/general/greeting_dialog_delay';

    /**
     * @return String
     */
    function getFacebookPageId(){
        return  $this->getConfigData(self::FACEBOOK_PAGE_ID);
    }

    /**
     * @return String
     */
    function getFacebookAppId(){
        return  $this->getConfigData(self::FACEBOOK_APP_ID);
    }

    /**
     * @return string
     */
    function getFacebookCustomerChatEnabled(){
        return  $this->getConfigData(self::CUSTOMER_CHAT_PLUGIN_ENABLE);
    }
    /**
     * @return string
     */
    function getThemeColor(){
        return  $this->getConfigData(self::CUSTOMER_CHAT_THEME_COLOR);
    }
    /**
     * @return string
     */
    function getLoggedInGreeting(){
        return  $this->getConfigData(self::CUSTOMER_CHAT_LOGGED_IN_GREETING);
    }
    /**
     * @return string
     */
    function getLoggedOutGreeting(){
        return  $this->getConfigData(self::CUSTOMER_CHAT_LOGGED_OUT_GREETING);
    }
    /**
     * @return string
     */
    function getGreetingDialogDisplay(){
        return  $this->getConfigData(self::CUSTOMER_CHAT_GREETING_DIALOG_DISPLAY);
    }
    /**
     * @return int
     */
    function getGreetingDialogDelay(){
        return  $this->getConfigData(self::CUSTOMER_CHAT_GREETING_DIALOG_DELAY);
    }
    /**
     * @param $path
     * @param null $store_id
     * @return bool|mixed
     */
    public function getConfigData($path, $store_id = null)
    {
        if (!empty($path)) {
            return $this->scopeConfig->getValue(
                $path,
                \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
                $store_id
            );
        }
        return false;
    }
}