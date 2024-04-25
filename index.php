<?php 


require_once("./Router.php");
//Router::handle("GET",'/test','test.php');
Router::get('/test',function(){
echo "i'm in function";
});

?>