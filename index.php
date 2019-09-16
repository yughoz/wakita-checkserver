<?php 


$username = $_GET['username'] ?? "test url 21";

// $arrUsername = implode("@",$username);
$arrUsername = explode("@", $username);



// echo ($username);
// echo print_r($arrUsername);

switch ($arrUsername[1]) {
    case "tofix.com":
        $url = "https://tofix.wakita.id/tofix/";
        break;
    default:
        $url = "http://149.129.248.52/wablas/";
}

echo json_encode([
	"url" => $url,
]);
?>