<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once (ROOT_PATH . "/resources/templates/fragments/head.php"); ?>
</head>
    <body>
        <?php include_once (ROOT_PATH . "/resources/templates/fragments/frontview/header.php"); ?>
        <div class="container">
            <?php include_once (ROOT_PATH . "/resources/templates/fragments/messages.php"); ?>
            <?php $this->content(); ?>
        </div>
        <?php include_once (ROOT_PATH . "/resources/templates/fragments/frontview/footer.php"); ?>
    </body>
</html>
