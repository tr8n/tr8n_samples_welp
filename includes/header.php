<?php require_once(__DIR__ . '/../vendor/translationexchange/tml/src/init.php'); ?>

<?php
tml_init(array(
    "key" => "f8208e72a4ce860e9291ac93ecb6b92c1db822987f6b23c6aeb4914cf6f0dbf4",
    "host" => "http://localhost:3000",
    "cdn_host" => "https://trex-snapshots-dev.s3-us-west-1.amazonaws.com",

    "agent" => array(
        "host" => "http://localhost:8282/dist/agent.js"
    ),

    "cache" => array(
        "enabled" => true,
        "adapter" => "memcache",
        "host" => "localhost",
        "namespace" => "f8208e72a4ce860e",
        "port" => 11211,
        "version_check_interval" => 30
    ),

    "log" => array(
        "enabled" => true,
        "severity" => "debug",
        "path" => "./logs/tml.log"
    )
));
?>

<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml"
      lang="<?php echo tml_current_language()->locale; ?>"
      dir="<?php echo tml_current_language()->direction(); ?>">

<head>
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8"/>
    <?php tml_scripts() ?>

    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="google" value="notranslate">
    <title>Welp</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
