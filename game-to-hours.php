<?php
if(isset($_GET['gameId'])) {
    $gameId = strtolower(trim(urldecode($_GET['gameId'])));
    echo gameId;
}
?>