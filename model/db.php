<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_db = 'dbmiproyecto';

$mysqli = @new mysqli(
        $db_host,
        $db_user,
        $db_password,
        $db_db
        );

if ($mysqli->connect_error) {
    echo 'La conexión a la base de datos de MYSQL No es correcta.';
    echo 'Errno: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
}

echo 'La conexion a base de datos MYSQL fue exitosa';
echo '<br>';
echo 'Host information: ' . $mysqli->host_info;
echo '<br>';
echo 'Protocol version' . $mysqli->protocol_version;
?>

