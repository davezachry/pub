<h1><? echo $title; ?></h1>
<?
    if (isset($body)) {
        echo $body;
    }
?>
<?
    if (isset($faqs)) {
        include MODULES . 'sample_module.php';   
    }
?>