<?php
   $sqls = new stdclass;
   //config
   setlocale(LC_ALL,'es_MX.UTF-8');
   $sqls->host = "localhost";
   $sqls->user = "foros";
   $sqls->pass = "LWE7XE?!p7SRrJgg";
   $sqls->data = "foros";
   define("USERS","users"); //donde se almacenan los usuarios
   //DB: grant all on foros.* TO "foros"@"localhost" identified by "LWE7XE?!p7SRrJgg";
   $sql = new MySQLi($sqls->host,$sqls->user,$sqls->pass,$sqls->data);
   $sql->Query("SET names 'utf8mb4'");
   function __($t) { return addslashes(strip_tags($t)); }
   $meme=md5('ola ke ase o ke ase'.date('YmdH'));
   $sitio= "https://tar.mx/foros/"; // URL sitio publicado
   $sitios = ["https://tar.mx","http://tar.mx"]; //dominios donde esté el foro
   define('ME','foro'); //variable de sesión
   //SOCIAL para identificarnos con Facebook o Google
   //ver login/config-example.php, renombrarlo a login/config.php
   //
   //
   define('GALLETA','tarforos'); //variable de la cookie
   $host       = parse_url($sitio, PHP_URL_HOST);
   $directorio = parse_url($sitio, PHP_URL_PATH);
