<?php
	header('Content-Type: text/javascript');
	
	require_once file_require(dirname(__FILE__).'/items.php');
	foreach ($blox_items as $item) {
		if( isset($item['js']) && $item['js']!='' ){
			include file_require(dirname(__FILE__).'/'.$item['js']);
		}else {
            if(file_exists($item['item'].'/'.$item['item'].'.js'))
                    include file_require(dirname(__FILE__).'/'.$item['item'].'/'.$item['item'].'.js');
        }
	}
?>