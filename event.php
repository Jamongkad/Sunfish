<?php
require_once 'sunfish_core/core.php';

$urls = Array( 
    '/(.*)' => 'Index',
    '/event/read/(\d+)' => 'Read'
);

routes($urls);

class Index {
    public function GET() {
       echo "Hello from Events controller!";
    }
}

class Read { 
    public function GET($id) {
       echo "reading at id : $id";
    }
}

?>
