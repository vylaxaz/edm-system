<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Dashboard</a>
    </div>

    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <?php if(isset($_SESSION["id"])): ?>
            <li><a href="/logout.php"><i class="fa fa-user"></i> Logout</a></li>
        <?php else: ?>
            <li><a href="/"><i class="fa fa-user"></i> Login</a></li>
        <?php endif; ?>
    </ul>

    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <?php if(isset($_SESSION["id"])): ?>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#nav-page" class="" aria-expanded="true">
                        <i class="fa fa-fw fa-file"></i> Pages <i class="fa fa-fw fa-caret-down"></i>
                    </a>
                    <ul id="nav-page" class="collapse" aria-expanded="true">
                        <li><a href="/pages">All Pages</a></li>
                        <li><a href="/pages/unpublished.php"> Unpublished Pages</a></li>
                        <li><a href="/pages/add.php">Create Page</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#nav-portfolio" class="" aria-expanded="true">
                        <i class="fa fa-fw fa-briefcase"></i> Portfolio <i class="fa fa-fw fa-caret-down"></i>
                    </a>
                    <ul id="nav-portfolio" class="collapse" aria-expanded="true">
                        <li><a href="/portfolio">All Portfolio</a></li>
                        <li><a href="/portfolio/add.php">Add Item</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#nav-project" class="" aria-expanded="true">
                        <i class="fa fa-fw fa-file-text"></i> Project <i class="fa fa-fw fa-caret-down"></i>
                    </a>
                    <ul id="nav-project" class="collapse" aria-expanded="true">
                        <li><a href="/project">All Project</a></li>
                        <li><a href="/project/add.php">Add Project</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#nav-gallery" class="" aria-expanded="true">
                        <i class="fa fa-fw fa-picture-o"></i> Gallery <i class="fa fa-fw fa-caret-down"></i>
                    </a>
                    <ul id="nav-gallery" class="collapse" aria-expanded="true">
                        <li><a href="/gallery">View Gallery</a></li>
                        <li><a href="/gallery/upload.php">Upload Photo</a></li>
                        <li><a href="/gallery/add_category.php">Add Category</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#nav-user" class="" aria-expanded="true">
                        <i class="fa fa-fw fa-user"></i> Users <i class="fa fa-fw fa-caret-down"></i>
                    </a>
                    <ul id="nav-user" class="collapse" aria-expanded="true">
                        <li><a href="/users/">All Users</a></li>
                        <li><a href="/users/add.php">Create User</a></li>
                    </ul>
                </li>
            <?php endif; ?>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
    <div>
        <?php echo returnPageMessage(); ?>
    </div>
</nav>
