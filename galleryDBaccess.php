<?
//connect to the database server

// this is the file your database connection information. It is stored in your websites root directory (public_html form)

//in the connection below, the localhost means the server you are currently on. The dbname is the database you want to connect to

try {
    $myPOD = new PDO("mysql:host=localhost; 
    dbname=ch729b_photo", 
    ch729b_padmin	, Halo2@age2004!);
} catch (PDOException $e) {
    echo $e->getMessage();   
}






?>
