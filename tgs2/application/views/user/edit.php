<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> <?php echo $title; ?> </title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="<?= base_url('assets'); ?>/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <i class="navbar-brand">Kelompok</i>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?= base_url('user/index'); ?>"> <i class="menu-icon fa fa-dashboard"></i>Getting Started </a>
                    </li>
                    <li>
                        <a href="<?= base_url('user/table'); ?>"> <i class="menu-icon fa fa-table"></i>Table Information </a>
                    </li>
                    <h3 class="menu-title text-center">User</h3><!-- /.menu-title -->
                    <li>
                        <a href="#"> <i class="menu-icon fa fa-user"></i>My Profile</a>
                    </li>
                    <li>
                        <a href="#"> <i class="menu-icon fa fa-edit"></i>Edit Profile</a>
                    </li>
                    <li>
                        <a href="<?= base_url('auth/logout'); ?>"> <i class="menu-icon fa fa-power-off"></i>Log out</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?= $user['name']; ?>
                            <img class="user-avatar rounded-circle" src="<?= base_url('assets/images/profile/' . $user['image']); ?>" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="menu-icon fa fa-edit"></i>Edit Profile</a>

                            <a class="nav-link" href="<?= base_url('auth/logout'); ?>"><i class="menu-icon fa fa-power-off"></i>Log out</a>
                        </div>
                    </div>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Insert Data</strong>
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="h5 text-center">
                                        Please input your Data
                                    </div>
                                    <?php foreach ($mahasiswa as $a) : ?>
                                        <div class="form-group">
                                            <label for="nim">NIM</label>
                                            <input type="text" class="form-control" id="nim" placeholder="NIM anda" name="nim" value="<?= $a['nim']; ?>"><?php echo form_error('nim', '<div class="text-danger">*', '</div>'); ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" placeholder="Nama Anda" name="nama" value="<?= $a['nama']; ?>"><?php echo form_error('nama', '<div class="text-danger">*', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" id="email" placeholder="Email Anda" name="email" value="<?= $a['email']; ?>"><?php echo form_error('email', '<div class="text-danger">*', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="jurusan">Jurusan</label>
                                            <input type="text" class="form-control" id="jurusan" placeholder="Jurusan Anda" name="jurusan" value="<?= $a['jurusan']; ?>"><?php echo form_error('jurusan', '<div class="text-danger">*', '</div>'); ?>
                                        </div>
                                    <?php endforeach; ?>
                            </div>
                            <br>
                            <!--button submit-->
                            <button type="submit" class="btn btn-outline-primary btn-md btn-block" id="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="<?= base_url('assets'); ?>/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url('assets'); ?>/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url('assets'); ?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets'); ?>/assets/js/main.js"></script>


    <script src="<?= base_url('assets'); ?>/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets'); ?>/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets'); ?>/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('assets'); ?>/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets'); ?>/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?= base_url('assets'); ?>/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?= base_url('assets'); ?>/vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="<?= base_url('assets'); ?>/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url('assets'); ?>/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url('assets'); ?>/vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="<?= base_url('assets'); ?>/assets/js/init-scripts/data-table/datatables-init.js"></script>
    <script src="<?= base_url('assets'); ?>/jquery-3.3.1.js"></script>


</body>

</html>