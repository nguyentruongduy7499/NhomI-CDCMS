<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}

$less = new lessc;
$less->compileFile('less/9.less', 'css/9.css');
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Module 9</title>
  <link rel='stylesheet' href='<?php echo $url_path ?>/css/font-awesome.min.css' type='text/css'/>
  <link rel='stylesheet' href='<?php echo $url_path ?>/css/bootstrap.min.css' type='text/css'/>
  <link rel='stylesheet' href='<?php echo $url_path ?>/css/9.css' type='text/css'/>
</head>
    <body >
        <?php include './9-content.php'; ?>
    </body>
</html>