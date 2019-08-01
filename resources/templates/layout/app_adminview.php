<!DOCTYPE html>
<html lang="en">
<head>
        <?php include_once (ROOT_PATH. "/resources/templates/fragments/head.php"); ?>
    <style>
        header, main, footer {
            padding-left: 300px;
        }

        @media only screen and (max-width : 992px) {
            header, main, footer {
                padding-left: 0;
            }
        }
    </style>
</head>
    <body>
        <?php include_once (ROOT_PATH . "/resources/templates/fragments/adminview/header.php"); ?>
        <main>
            <div class="container">
                <?php include_once (ROOT_PATH . "/resources/templates/fragments/messages.php"); ?>
                <?php $this->content(); ?>
            </div>
        </main>
        <?php include_once (ROOT_PATH . "/resources/templates/fragments/adminview/footer.php"); ?>
    </body>

</html>
