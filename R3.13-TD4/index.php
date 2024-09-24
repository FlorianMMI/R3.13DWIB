<?php

var_dump($_COOKIE);

setcookie("Cookie", "Test", time()+3600, "/","",0);