<? php
$ host = "localhost" ;
$ userName = "root" ;
$ password = "" ;
$ dbName = "hm" ;
// Créer une connexion à la base de données
$ conn = new mysqli ( $ host, $ userName, $ password, $ dbName ) ;
// Vérifier la connexion
if ( $ conn-> connect_error ) {
die ( "La connexion a échoué:" . $ conn-> connect_error ) ;
}

return $conn;
}

function CloseCon($conn)
{
$conn -> close();
}
  
?>

