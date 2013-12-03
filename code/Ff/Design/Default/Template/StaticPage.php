<html lang="$(system/lang)">
    <head>
        <meta charset="$(system/charset)" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/bootstrap.css" />
    </head>
    <body>
    <form id="page-form" enctype="multipart/form-data" action="" method="POST">
        <div id="page-container" class="container">
            <div id="page-header"></div>
            <div id="page-content" class="content">
                <div id="page-left" class="left"></div>
                <div id="page-middle" class="jumbotron">
                    <data ui-type="Title" class="panel-title">$(page/data/name)</data>
                    <data ui-type="Text" class="panel">$(page/data/content)</data>
                </div>
                <div id="page-right" class="right"></div>
            </div>
            <div id="page-footer" class="panel-footer"></div>
        </div>
    </form>
    <script type="text/javascript" src="/jquery.js"></script>
    <script type="text/javascript" src="/bootstrap.js"></script>
    </body>
</html>