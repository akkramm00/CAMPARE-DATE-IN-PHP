<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
// Methode n°1 :


  $date1 ="2023-03-27";
  $date2 ="2023-04-01";

  if($date1 > $date2){
    echo "La date 1 est plus récente";
  }else{
    echo "la date 2 est plus récente";
  }
echo "<br>";

// La méthode 2 :
if (strtotime($date1)>strtotime($date2)) {
  echo "la date 1 est plus récente";
}else{
  echo "la date 2 est plus récente";
}
echo "<br>";


?>
 
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>