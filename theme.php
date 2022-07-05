<?php
if(isset($_GET['theme'])){
    $theme=$_GET['theme'];
    return json_encode(['success' => $theme]);
}