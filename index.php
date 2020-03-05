<?php


// We should really create a class!
class MessageAlert {
    function sendMessage( $strMessage='' ){
        if( '' !== $strMessage ) echo $strMessage;
    }
}


$objMessageAlert = new MessageAlert();
$objMessageAlert->sendMessage( 'Hello Universe!' );
