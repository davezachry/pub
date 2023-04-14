<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><? echo $metadata['meta_title']; ?></title>
    <meta name="description" content="<? echo $metadata['meta_description']; ?>">
</head>
<body>
    <header>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </header>
    <!-- HEADER -->
    <? echo $layout; ?>
    <!-- FOOTER -->
    <footer>Copyright 2022</footer>
</body>
</html>