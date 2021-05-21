<?php

ini_set("SMTP","smtp.gmail.com");
ini_set("smtp_port","25");
ini_set('sendmail_from', 'sendmail500@gmail.com');

mail ( "sendmail500@gmail.com" , "test" ,"test message");

