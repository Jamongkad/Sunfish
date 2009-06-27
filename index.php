<?php
require_once 'sunfish_core/core.php';

$urls = Array(
    '/(.*)' => 'Index',
    '/test/(\d+|\w+)' => 'Test',
    '/shift' => 'Shift',
    '/santa' => 'Santa'
);

routes($urls);

class Index {
    public function GET() {
        echo "Hello Mathew";
    }
}

Class Test {
    public function GET($id) {
        echo "Hello from test $id";
    }
}

Class Shift {
    public function GET() {
        echo "My dicko";
    }
}

class Santa {
    public function GET() {
        echo "My Santa";
    }
}
?>
