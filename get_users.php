<?php
include_once 'diwan/dbconfig.php';
//$db = new PDO('sqlite:leaflet.sqlite');
$sql = "SELECT id, nim, name, website, city, lat, lng, tlp, foto, timestamp FROM users;";

$rs = $DB_con->query($sql);
if (!$rs) {
    echo "An SQL error occured.\n";
    exit;
}


$rows = array();
while($r = $rs->fetch(PDO::FETCH_ASSOC)) {
    $rows[] = $r;
}
print json_encode($rows);
$db = NULL;
?>
