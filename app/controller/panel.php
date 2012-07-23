<?php
class Panel extends A_controller{
	
	public static function conf($options){
		$data['title'] = 'baloran';
		if (array_key_exists($options, $data)) {
			return $data[$options];
		}else{
			echo 'pas trouvé';
		}
	}
}
		
