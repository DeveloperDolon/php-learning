<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo profile php file</title>
</head>
<body>
    <?php 
        echo "The subject is : " . $_REQUEST['subject'] . ", and the web link is : " . $_REQUEST['web'];
    ?>
</body>
</html>