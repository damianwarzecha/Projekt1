<?php
	session_start();
	
	function erro($err){
		if( isset($_SESSION[$err]) ){
			echo 'title="'.$_SESSION[$err].'"'.'style="border-color: red; box-shadow: 0.1px 0.1px 5px red"';
			unset($_SESSION[$err]);
		}
	}

	function onload($x){
		if( isset($_SESSION[$x]) ){
		    if ($_SESSION[$x]==true) {
		        unset($_SESSION[$x]);
		        return;
            }
            echo 'onload="openRegister()"';
			unset($_SESSION[$x]);
		}
	}
?>