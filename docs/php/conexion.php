<?PHP
$hostname_ = "localhost";
$database_ = "localhost";
$username_ = "localhost";
$password_ = "localhost";
$conexion  = mysqli_connect($hostname_, $username_, $password_, $database_) or trigger_error(mysqli_error(), E_USER_ERROR);
mysqli_set_charset($conexion, 'utf8');
