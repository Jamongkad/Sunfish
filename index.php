<?php
require_once 'sunfish_core/core.php';
require_once 'h2o-php/h2o.php';

$urls = Array(
    '/(.*)' => 'Index',
    '/test/(\d+|\w+)' => 'Test',
    '/shift' => 'Shift',
    '/santa' => 'Santa'
);

routes($urls);

class Index {
    public function GET() {
        $view = new h2o('views/index.html');
        $person = Array(
            'name' => 'Mathew'
        );
        echo $view->render(compact('person'));
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
