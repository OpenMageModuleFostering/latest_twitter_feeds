<?php
class Magekul_Tweets_Model_System_Config_Position extends Varien_Object
{
    const COL_LEFT	        = 'left';
    const COL_RIGHT	        = 'right';

    public function toOptionArray()
    {
        return array(
            self::COL_LEFT    => Mage::helper('tweets')->__('Col left'),
            self::COL_RIGHT   => Mage::helper('tweets')->__('Col right')
        );
    }
}
