<?php
/**
 * Copyright (c) 2018. Magextensions.io - Martin Hooijer. All Rights reserved.
 *  Magextensions License (https://www.magextensions.io/license/)
 *
 */

namespace Magextensionsio\FacebookCustomerChat\Model\Config\Source;

class GreetingDialogDisplay implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'show', 'label' => __('Show')],
            ['value' => 'hide', 'label' => __('Hide')],
            ['value' => 'fade', 'label' => __('Fade')],
        ];
    }
}