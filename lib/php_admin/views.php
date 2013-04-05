<?php
	function javascript_include_tag($path){
		$src = "/{PHPAdmin::Application::$name}/app/assets/javascripts/{$path}.js";
		echo "<script type='text/javascript' src='{$src}'></script>";
	}

	function stylesheet_link_tag(){
		$href = "/{PHPAdmin::Application::$name}/app/assets/stylesheets/{$path}.css";
		echo "<link rel='stylesheet' type='text/css' href='{$hred}'>";
	}
?>