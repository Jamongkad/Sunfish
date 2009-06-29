<?php
require_once 'sunfish_core/core.php';

$urls = Array( 
    '/(.*)' => 'Event',
    '/event/read/(\d+)' => 'Read',
    '/event/hello/(\w+)/(\d+)/(\w+)' => 'Hello'
);

routes($urls);

class Event {
    public function GET() {
       echo "Hello from Events controller!";
    }
}

class Read { 
    public function GET($id) {
        echo "reading at id : $id";
    }
}

class Hello {
    public function GET($word, $id, $phrase) {
        echo "Sprocket Fish $word $id $phrase";
    }
}

?>
