<?php

require("./MessageAlert.class.php");


$objMessageAlert = new MessageAlert();
$objMessageAlert->sendMessage( 'Hello Universe!' );
