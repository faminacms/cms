<?php
/** @var \backend\components\BackendView $this */
?>
<!DOCTYPE html>
<html class="ls-top-navbar ls-bottom-footer show-sidebar sidebar-r1 sidebar-l2 app-mobile" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ThemeKit - Modern UI Kits for Apps &amp; Websites</title>

    <!-- Compressed App Style Bundle
    Includes core vendor styling such as the customized Bootstrap and other 3rd party libraries used for the current theme/module
    Note: The bundle was tweaked for the current theme/module and does NOT include ALL of the standalone modules below
    The bundle was generated using modern frontend development tools that are provided with the package
    To learn more about the development process, please refer to the documentation. -->
    <link href="<?php echo $this->theme->baseUrl ?>/css/default.css" rel="stylesheet">

    <!-- Standalone Modules
    As a convenience, we provide the entire UI framework broke down in separate modules
    Some of the standalone modules were not used with the current theme/module but ALL are 100% compatible -->
    <!--
    <link href="css/module-essentials.min.css" rel="stylesheet" />
    <link href="css/module-layout.min.css" rel="stylesheet" />
    <link href="css/module-sidebar.min.css" rel="stylesheet" />
    <link href="css/module-sidebar-skins.min.css" rel="stylesheet" />
    <link href="css/module-navbar.min.css" rel="stylesheet" />
    <link href="css/module-media.min.css" rel="stylesheet" />
    <link href="css/module-timeline.min.css" rel="stylesheet" />
    <link href="css/module-cover.min.css" rel="stylesheet" />
    <link href="css/module-chat.min.css" rel="stylesheet" />
    <link href="css/module-charts.min.css" rel="stylesheet" />
    <link href="css/module-maps.min.css" rel="stylesheet" />
    <link href="css/module-colors-alerts.min.css" rel="stylesheet" />
    <link href="css/module-colors-background.min.css" rel="stylesheet" />
    <link href="css/module-colors-buttons.min.css" rel="stylesheet" />
    <link href="css/module-colors-calendar.min.css" rel="stylesheet" />
    <link href="css/module-colors-progress-bars.min.css" rel="stylesheet" />
    <link href="css/module-colors-text.min.css" rel="stylesheet" />
    -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries
    WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<?php $this->header(); ?>

<div class="sidebar left sidebar-size-2 sidebar-offset-0 sidebar-skin-blue sidebar-visible-desktop" data-type=dropdown>
    <div class="sidebar-menu split-vertical">
        <div class="sidebar-block">
            <h4 class="category">Sidebar Header</h4>
            <p>With fluid height</p>
        </div>
        <div class="split-vertical-body">
            <div class="split-vertical-cell">
                <div data-scrollable>
                    <h4 class="category">Blank Sidebar Placeholder</h4>
                    <div class="sidebar-block">
                        <p>To see all the various sidebar content elements, including submenu types</p>
                        <p><a href="../sidebar/index.html" class="btn btn-default btn-block">see the Sidebar Kit</a>
                        </p>
                        <p>Also, check out these awesome</p>
                        <a href="../sidebar/transitions.html" class="btn btn-default btn-block">Sidebar Transitions</a>
                    </div>
                    <ul>
                        <li class="category">Sample Heading</li>
                        <li><a href=""><i class="fa fa-home"></i> <span>Sample Menu</span></a>
                        </li>
                        <li class="hasSubmenu">
                            <a href="#submenu"><i class="fa fa-bar-chart-o"></i> <span>Sample Submenu</span></a>
                            <ul id="submenu">
                                <li><a href=""><span>Sample Menu</span></a>
                                </li>
                                <li><a href=""><span>Sample Menu</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <h4 class="category">Scrollable</h4>
                    <div class="sidebar-block">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus facilis quia voluptates! Iure, quibusdam ratione sunt unde ut vero voluptatibus.</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>Bottom of scrollable content</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar-block">
            <h4 class="category">Sidebar Footer</h4>
            <p>With fluid height</p>
        </div>
    </div>
</div>

<div class="navbar navbar-default" style="margin-top: -20px;">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="#" class="navbar-brand">&nbsp;</a>
            <button data-target="#collapse-simple-menus" data-toggle="collapse" class="navbar-toggle" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="collapse-simple-menus" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">

                <!-- simple menus -->
                <li><a href="#"><i class="fa fa-home fa-fw"></i></a>
                </li>
                <li><a href="#">Link</a>
                </li>
                <li><a href="#"><i class="fa fa-graduation-cap fa-fw"></i> Icon</a>
                </li>

                <!-- // END simple menus -->
            </ul>
        </div>
    </div>
</div>

<div id="content">
    <div class="container-fluid split-vertical">


        <?php $this->contentHeading(); ?>
        <?php $this->content($content); ?>


    </div>

    <?php $this->footer(); ?>
</div>

<div class="sidebar right sidebar-size-1 sidebar-offset-0 sidebar-skin-white-blue sidebar-visible-desktop" data-type=dropdown>
    <div class="sidebar-menu split-vertical">
        <div class="sidebar-block">
            <h4 class="category">Sidebar Header</h4>
            <p>With fluid height</p>
        </div>
        <div class="split-vertical-body">
            <div class="split-vertical-cell">
                <div data-scrollable>
                    <h4 class="category">Blank Sidebar Placeholder</h4>
                    <div class="sidebar-block">
                        <p>To see all the various sidebar content elements, including submenu types</p>
                        <p><a href="../sidebar/index.html" class="btn btn-default btn-block">see the Sidebar Kit</a>
                        </p>
                        <p>Also, check out these awesome</p>
                        <a href="../sidebar/transitions.html" class="btn btn-default btn-block">Sidebar Transitions</a>
                    </div>
                    <ul>
                        <li class="category">Sample Heading</li>
                        <li><a href=""><i class="fa fa-home"></i> <span>Sample Menu</span></a>
                        </li>
                        <li class="hasSubmenu">
                            <a href="#submenu"><i class="fa fa-bar-chart-o"></i> <span>Sample Submenu</span></a>
                            <ul id="submenu">
                                <li><a href=""><span>Sample Menu</span></a>
                                </li>
                                <li><a href=""><span>Sample Menu</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <h4 class="category">Scrollable</h4>
                    <div class="sidebar-block">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus facilis quia voluptates! Iure, quibusdam ratione sunt unde ut vero voluptatibus.</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>Bottom of scrollable content</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar-block">
            <h4 class="category">Sidebar Footer</h4>
            <p>With fluid height</p>
        </div>
    </div>
</div>

<!-- Inline Script for colors and config objects; used by various external scripts; -->
<script>
    var colors = {
        "danger-color": "#e74c3c",
        "success-color": "#81b53e",
        "warning-color": "#f0ad4e",
        "inverse-color": "#2c3e50",
        "info-color": "#2d7cb5",
        "default-color": "#6e7882",
        "default-light-color": "#cfd9db",
        "purple-color": "#9D8AC7",
        "mustard-color": "#d4d171",
        "lightred-color": "#e15258",
        "body-bg": "#f6f6f6"
    };
    var config = {
        debug: true,
        theme: "layout",
        skins: {
            "default": {
                "primary-color": "#16ae9f"
            }
        }
    };
</script>

<!-- Compressed Vendor Scripts Bundle
Includes 3rd party JavaScript libraries used for the current theme/module
Note: The bundle was tweaked for the current theme/module and it includes only libraries used with the theme/module
The bundle was generated using modern frontend development tools that are provided with the package
To learn more about the development process, please refer to the documentation. -->
<script src="<?php echo $this->theme->baseUrl?>/js/vendor-bundle-all.min.js"></script>

<!-- Compressed App Scripts Bundle
Includes Custom Application JavaScript used for the current theme/module -->
<script src="<?php echo $this->theme->baseUrl?>/js/module-bundle-main.min.js"></script>

<!-- Standalone Modules
As a convenience, we provide the entire UI framework broke down in separate modules
Some of the standalone modules were not used with the current theme/module but ALL are 100% compatible -->
<!--
<script src="js/module-essentials.min.js"></script>
<script src="js/module-layout.min.js"></script>
<script src="js/module-sidebar.min.js"></script>
<script src="js/module-navbar.min.js"></script>
<script src="js/module-media.min.js"></script>
<script src="js/module-timeline.min.js"></script>
<script src="js/module-chat.min.js"></script>
<script src="js/module-maps.min.js"></script>
-->
</body>
</html>