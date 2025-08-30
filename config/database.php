 <?php 
 $dsn="mysql:host=localhost;dbname=users;charset=utf8mb4";
 $dbuser='root';
 $db_password='';
 
try{
 $pdo=new PDO($dsn,$dbuser,$db_password);
 $pdo->setAttribute(
 PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION
 );
 $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
 echo " connection success";
}catch(PDOException $e){
  echo "Connection failed. Please try again later.";
exit();
}
 ?>
