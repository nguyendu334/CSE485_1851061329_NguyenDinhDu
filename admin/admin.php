<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Trang Chủ Admin</title>
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/datepicker3.css" rel="stylesheet" />
    <link href="css/bootstrap-table.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />

    <!--Icons-->
    <script src="js/lumino.glyphs.js"></script>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
                <a class="navbar-brand" href="#">Nguyễn Đình Du</a>
                <ul class="user-menu">
                    <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg
									class="glyph stroked male-user">
									<use xlink:href="#stroked-male-user"></use>
								</svg>
								<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="#"><svg class="glyph stroked male-user">
											<use xlink:href="#stroked-male-user"></use>
										</svg>
										Hồ sơ</a>
                            </li>
                            <li>
                                <a href="logout.php"><svg class="glyph stroked cancel">
											<use xlink:href="#stroked-cancel"></use>
										</svg>
										Đăng xuất</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>

    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <form role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search" />
            </div>
        </form>
        <ul class="nav menu">
            <li class="active">
                <a href="admin.php"><svg class="glyph stroked dashboard-dial">
							<use xlink:href="#stroked-dashboard-dial"></use>
						</svg>
						Trang chủ</a>
            </li>
            <li>
                <a href="index.php?page=user"><svg class="glyph stroked male user">
							<use xlink:href="#stroked-male-user" /></svg>Giới Thiệu</a>
            </li>
            <li>
                <a href="index.php?page=hocvan">
                    <i class="fas fa-school"></i> Học Vấn</a>
            </li>
            <li>
                <a href="index.php?page=kinhnghiem"><i class="fas fa-graduation-cap"></i>
					Kinh Nghiệm</a>
            </li>
            <li>
                <a href="index.php?page=kinang"><i class="fas fa-skiing-nordic"></i>
					
						Kĩ Năng</a>
            </li>
            <li>
                <a href="index.php?page=duan"><i class="fas fa-tasks"></i>
						
						Dự Án</a>
            </li>
            <li>
                <a href="index.php?page=sothic"><i class="fab fa-gratipay"></i>
						Sở Thích</a>
            </li>
        </ul>
    </div>
    <!--/.sidebar-->
    <?php
    if (isset($_GET['page'])) {
		switch ($_GET['page']) {
			case 'user':
				include_once('user.php');
				break;
			case 'add_user':
				include_once('add_user.php');
				break;
			case 'edit_user':
				include_once('edit_user.php');
				break;
			case 'del_user':
				include_once('del_user.php');
				break;
			case 'hocvan':
				include_once('hocvan.php');
				break;
			case 'edit_hocvan':
				include_once('edit_hocvan.php');
				break;
			case 'add_hocvan':
				include_once('add_hocvan.php');
				break;
			case 'del_hocvan':
				include_once('del_hocvan.php');
				break;
			case 'kinang':
				include_once('kinang.php');
				break;
			case 'edit_kinang':
				include_once('edit_kinang.php');
				break;
			case 'add_kinang':
				include_once('add_kinang.php');
				break;
			case 'del_kinang':
				include_once('del_kinang.php');
				break;
			case 'kinhnghiem':
				include_once('kinhnghiem.php');
				break;
			case 'edit_kinhnghiem':
				include_once('edit_kinhnghiem.php');
				break;
			case 'add_kinhnghiem':
				include_once('add_kinhnghiem.php');
				break;
			case 'del_kinhnghiem':
				include_once('del_kinhnghiem.php');
				break;
			case 'duan':
				include_once('duan.php');
				break;
			case 'edit_duan':
				include_once('edit_duan.php');
				break;
			case 'add_duan':
				include_once('add_duan.php');
				break;
			case 'del_duan':
				include_once('del_duan.php');
				break;
			case 'sothic':
				include_once('sothic.php');
				break;
			case 'edit_sothic':
				include_once('edit_sothic.php');
				break;
			case 'add_sothic':
				include_once('add_sothic.php');
				break;
			case 'del_sothic':
				include_once('del_sothic.php');
				break;
		}
	} else {
		include_once('dashboard.php');
	}
    ?>
</body>

</html>