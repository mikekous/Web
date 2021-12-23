<?php
require_once "../lib/dbconnect.php";
require_once "../lib/board.php";

$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
$input = json_decode(file_get_contents('php://input'),true);

// header("Content-Type: text/plain");
// print "method=$method\n";
// print "Path_info=".$_SERVER['PATH_INFO']."\n";
// print_r($request);


switch ($r=array_shift($request)) {
    case 'board' : 
        switch ($b=array_shift($request)) {
            case '':
            case null: handle_board($method);
                        break;
            case 'piece': 
                        break;
            }
            break;
    case 'status': 
			
			break;
	case 'players': 
			    break;
	default:  header("HTTP/1.1 404 Not Found");
                        exit;
}
function handle_board($method) {
    if($method=='GET') {
            show_board();
    } else if ($method=='POST') {
            reset_board();
    } else {
        header('HTTP/1.1405 Method Not Allowed');
    }
}
?>