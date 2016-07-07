<?php
//permet de transformer la redirection en type 301(permanente)
header("status:301 Moved Permanently", false, 301);
//redirection TYPE 302(dite temporaire)
//qui passe en 301
header("location:pages/index.php");
 ?>
