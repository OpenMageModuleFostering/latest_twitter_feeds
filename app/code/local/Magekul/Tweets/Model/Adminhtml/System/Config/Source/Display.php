<?php
class Magekul_Tweets_Model_Adminhtml_System_Config_Source_Display
{
    public function toOptionArray()
    {
		$array = array(
			array('value'=>'right', 'label'=>'Right'),
			array('value'=>'left', 'label'=>'Left'),
			array('value'=>'custom', 'label'=>'Custom')
		);
        return $array;
    }
}
