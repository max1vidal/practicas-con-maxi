$link = mysql_connect('localhost', 'root', 'password');
if (!$link)
   die('Error al conectarse con MySQL: ' . mysql_error().' <br>Número del error: '.mysql_errno());
if (! @mysql_select_db("db_AdMX",$link)){
   echo "No se pudo conectar correctamente con la Base de datos";
   exit();
}