<?php

require("./MessageAlert.class.php");


$objMessageAlert = new MessageAlert();
$objMessageAlert->sendMessage( 'This is my newish message' );
