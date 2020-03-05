<?php

class MessageAlert {
	function sendMessage( $strMessage='' ){
		if( '' !== $strMessage ) echo $strMessage;
	}
}

$objMessage = new MessageAlert( 'Hello World! This is better' );
