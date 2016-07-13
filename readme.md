# Tree Component Example
## Install
- git clone
- composer update


## Simple usage from client code
```php
<?php

use TreeComponent\Application;

require_once "vendor/autoload.php";

// simple configuration example
// it can be configured as object or by another ways
// at this example - this is simple array
$configuration = [
    'factory' => 'TreeComponent\Tree\Composite',
    'renderer' => 'TreeComponent\Renderer\ConsoleRender'
];

$array = [
    // data as a flat array
    // or for example as hierarchical array
    // or as collection of objects
];

Application::init($configuration);

/** @var \TreeComponent\Tree\Composite $root */
$root = Application::factory()->getTree($array);

// print tree from root
$root->renderTree(
   Application::renderer()
);

// print tree from given node (id=3)
$root->findElementById(3)->renderTree(
    Application::renderer()
);

// print path to root
$root->findElementById(4)->renderPath(Application::renderer());
```