<?php
$myServer="mysql:dbname=".DB.";host=".SERVER;
try {
    $pdo = new PDO($myServer, USER, PASSWORD,
    array(PDO::MYSQL_ATTR_ATTR_INIT_COMMAND=>"SET NAME utf8")
);
echo "<script> alert('DB Connection works!!') </script>";
} catch (PDOException $e) {
    echo "<scritpt> alert('Error'</script";
}
?>