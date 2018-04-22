<?php
/**
 * Copyright (c) 2018. Magextensions.io - Martin Hooijer. All Rights reserved.
 *  Magextensions License (https://www.magextensions.io/license/)
 *
 */

namespace Magextensionsio\FacebookCustomerChat\Block\Frontend;

class FacebookCustomerChat extends \Magento\Framework\View\Element\Template
{
    protected $helper;
    protected $storeInterface;
    public function __construct(\Magento\Framework\View\Element\Template\Context $context,
                                \Magextensionsio\FacebookCustomerChat\Helper\Data $helper,
                                \Magento\Store\Api\Data\StoreInterface $storeInterface)
    {
        parent::__construct($context);

        $this->helper = $helper;
        $this->storeInterface = $storeInterface;
    }

    /**
     * @return boolean
     */
    public function getFacebookCustomerChatEnabled(){
        return $this->helper->getFacebookCustomerChatEnabled();
    }

    /**
     * @return string
     */
    public function getFacebookPageId(){
        return $this->helper->getFacebookPageId();
    }

    /**
     * @return string
     */
    public function getFacebookAppId(){
        return $this->helper->getFacebookAppId();
    }
    /**
     * @return string
     */
    public function getThemeColor(){
        return $this->helper->getThemeColor();
    }
    /**
     * @return string
     */
    public function getLoggedInGreeting(){
        return $this->helper->getLoggedInGreeting();
    }
    /**
     * @return string
     */
    public function getLoggedOutGreeting(){
        return $this->helper->getLoggedOutGreeting();
    }
    /**
     * @return string
     */
    public function getGreetingDialogDisplay(){
        return $this->helper->getGreetingDialogDisplay();
    }
    /**
     * @return int
     */
    public function getGreetingDialogDelay(){
        return $this->helper->getGreetingDialogDelay();
    }
    /**
     * @return mixed
     */
    public function getLocaleCode(){
        return $this->storeInterface->getLocaleCode();
    }
}