<?php 
if (isset($_GET['acao']) and $_GET['acao'] == "login") {
require_once '../protegido/login_adm.php';

}else{
require_once '../protegido/crud_adm.php';
}
?>