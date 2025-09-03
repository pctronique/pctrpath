<?php

include_once dirname(__FILE__) . '/src/class/pctrpath/Path.php';
include_once dirname(__FILE__) . '/src/class/pctrpath/PathDef.php';
include_once dirname(__FILE__) . '/src/class/pctrpath/Platform.php';
include_once dirname(__FILE__) . '/src/class/pctrpath/PathServe.php';

function displaypath(null|PathDef $pathdef): void { ?>
<div class="table_value">
<label>Diskname :</label><p><?= $pathdef->getDiskname() ?></p>
<label>Name :</label><p><?= $pathdef->getName() ?></p>
<label>Parent :</label><p><?= $pathdef->getParent() ?></p>
<label>AbsolutePath :</label><p><?= $pathdef->getAbsolutePath() ?></p>
<label>Path :</label><p><?= $pathdef->getPath() ?></p>
<label>AbsoluteParent :</label><p><?= $pathdef->getAbsoluteParent() ?></p>
</div>
<?php }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/style_media.css" />
    <link rel="stylesheet" href="./css/tabtest.css" />
    <link rel="stylesheet" href="./css/pathtest.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
</head>
<body>
    <section class="firstsection">
        <h1>Path</h1>
        <?php $test1 = new Path("./folder1/../folder1///folder2", "file"); ?>
        <div>
          <h2>'new Path("./folder1/../folder1///folder2", "file");'</h2>
          <?php displaypath($test1); ?>
        </div>
    </section>
    <section class="firstsection">
        <h1>Path</h1>
        <?php 
        $path = __DIR__ . "/../../../plugins/";
        $test1 = new Path($path, "plugins1"); ?>
        <div>
          <h2>'new Path(__DIR__ . "/../../../plugins/", "plugins1");'</h2>
          <?php displaypath($test1); ?>
        </div>
    </section>
    <section>
        <h1>PathServe</h1>
        <?php $test1 = new PathServe("./folder1/../folder1///folder2", "file"); ?>
        <div>
          <h2>'new PathServe("./folder1/../folder1///folder2", "file");'</h2>
          <?php displaypath($test1); ?>
        </div>
    </section>
  </body>
</html>
