<?php
/**
 * JBZoo App is universal Joomla CCK, application for YooTheme Zoo component
 * @package     jbzoo
 * @version     2.x Pro
 * @author      JBZoo App http://jbzoo.com
 * @copyright   Copyright (C) JBZoo.com,  All rights reserved.
 * @license     http://jbzoo.com/license-pro.php JBZoo Licence
 * @coder       Denis Smetannikov <denis@jbzoo.com>
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Class JBCartElementShippingFieldText
 */
class JBCartElementShippingFieldSimplegeolocation extends JBCartElementShippingField
{
    public function renderSubmission($params = array())
    {

    	$html[] = '<script src="//api-maps.yandex.ru/2.0/?load=package.standard&lang=ru-RU" type="text/javascript"></script>
    	<script>jQuery(document).ready(function($) {
    		ymaps.ready(init);
    		function init() {
    			 var geolocation = ymaps.geolocation;
    			 if (geolocation) {
    				 $("'.$this->config->get('inputidcountry').'").attr("value",geolocation.country);
    				 $("'.$this->config->get('inputidregion').'").attr("value",geolocation.region);
    			     $("'.$this->config->get('inputidgorod').'").attr("value",geolocation.city);
                     $("'.$this->config->get('inputidinputidregiongorod').'").attr("value",geolocation.region + ", " + geolocation.city);
    			 } else {
    				 console.log("Не удалось установить местоположение");
    			 }
    		}
    	});
</script>';


            return implode(PHP_EOL, $html);

    }
}
