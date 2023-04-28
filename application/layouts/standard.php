<h1><? echo $title; ?></h1>
<? echo $body; ?>
<?
    if (isset($faqs)) {
        include MODULES . 'my_module.php';   
    }
?>