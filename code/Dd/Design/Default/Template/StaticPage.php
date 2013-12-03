<html>
    <body>
    <form id="page-form">
        <div id="page-container" class="container">
            <div id="page-header" class="header">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Menu</a>
                    </div>
                    <div class=" collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav" data-collection="topmenu">
                            <li nif="@(has_items)">
                                <a href="#">@(title)</a>
                            </li>
                            <li if="@(has_items)">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span>@(title)</span>
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu" role="menu" data-collection="items">
                                    <li>@(title)</li>
                                </ul>
                            </li>
                        </ul>
                        <div class="navbar-form navbar-right">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        </form>
    </body>
</html>