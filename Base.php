function _log($obj) {
    echo $obj."<br>";
}

function _console($obj) {
    echo "<script>console.log('PHP: " . $obj . "');</script>";
}

function getPostData() {
    return file_get_contents("php://input");
}


