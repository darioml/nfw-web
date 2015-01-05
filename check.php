<?

 $dbname = 'scc_finance';
  $user = 'scc_finance';
  $pass = 'phqxNcL6BLSfLBjr';
$connect = mysql_connect('localhost', $user, $pass);
$sql = $connect;
if (!$connect) {
    die('Could not connect: ' . mysql_error());
    }
    mysql_select_db($dbname, $connect);

if (isset($_POST['Submit'])) { 

$email = $_POST['email'];
$password = $_POST['password'];

$checkexist = mysql_query("SELECT * FROM table_name WHERE email='$email' AND password='$password'");
$ncheckexist = mysql_num_rows($checkexist);

if($ncheckexist > 0){

//OK - print application details, and status





}else{
// Tell them to fuck off
echo 'Unfortunately, your details are incorrect. Please try again.';

}
}



?>
