<?php require_once(__DIR__ . '/../vendor/tr8n/tr8n-client-sdk/library/Tr8n.php'); ?>
<?php tr8n_init_client_sdk("http://localhost:3000", "7da742563139386ea", "592ede02cbbc85215"); ?>

<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo tr8n_current_language()->locale; ?>"
      lang="<?php echo tr8n_current_language()->locale; ?>"
      dir="<?php echo tr8n_current_language()->direction(); ?>">

<head>
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
    <?php include(__DIR__ . '/../vendor/tr8n/tr8n-client-sdk/library/Tr8n/Includes/Scripts.php'); ?>

    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <title>Welp</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
