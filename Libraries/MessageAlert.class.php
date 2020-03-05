<?php

// Classes should all be their own file!
class MessageAlert {
	function sendMessage( $strMessage='', $strNewLine="\n" ){
		echo $strMessage . $strNewLine;
	}
}
