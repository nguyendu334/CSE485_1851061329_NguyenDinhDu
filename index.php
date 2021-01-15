<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Nguyên Đình Du</title>
        <link rel="icon" type="image/x-icon" href="img/user-solid.svg" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet"
            type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>

    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Nguyễn Đình Du</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2"
                        src="img/profile.jpg" alt></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Giới Thiệu</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Học Vấn</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Kinh Nghiệm</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Kĩ Năng</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Dự Án</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Sở Thích</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- Gioi thieu-->
            <?php
      
        include('config/connect.php');
        $sql = "SELECT * FROM nguoidung";
        $query =mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($query);
        ?>

            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        <?php echo $row['name'];?>
                    </h1>
                    <div class="subheading mb-5">
                        <div class="add">Giới Tính: <?php echo $row['gender'];?></div>
                        <div class="add">Ngày Sinh: <?php echo $row['birthday'];?></div>
                        Địa Chỉ: <?php echo $row['address'];?>

                        <div class="add">SĐT: <?php echo $row['phone'];?></div>
                        <a href="mailto:nguyendu334@email.com"> <?php echo $row['email'];?></a>
                    </div>
                    <p class="lead mb-5"></p>
                    <div class="social-icons">
                        <a class="social-icon" href="#"><i class="fab fa-github"></i></a>
                        <a class="social-icon" href="#"><i class="fab fa-instagram"></i></a>
                        <a class="social-icon" href="facebook.com/haha193"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Học Vấn</h2>
                    <?php 
                    $sql_hv = "SELECT * FROM hocvan";
                    $query_hv=mysqli_query($conn,$sql_hv);
                   while($row_hv = mysqli_fetch_array($query_hv)) {
                ?>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"><?php echo $row_hv['text']; ?></h3>
                            <div class="subheading mb-3"><?php echo $row_hv['chucvu']; ?></div>
                            <p><?php echo $row_hv['congviec']; ?></p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"><?php echo $row_hv['giaidoan']; ?></span>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Kinh Nghiệm</h2>
                    <?php 
                    $sql_kn = "SELECT * FROM kinhnghiem";
                    $query_kn=mysqli_query($conn,$sql_kn);
                   while($row_kn = mysqli_fetch_array($query_kn)) {
                ?>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"><?php echo $row_kn['kinhng']; ?></h3>
                            <div class="subheading mb-3"><?php echo $row_kn['chucvu']; ?></div>
                            <div><?php echo $row_kn['congviec']; ?></div>
                            <p>GPA: <?php echo $row_kn['diem']; ?></p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"><?php echo $row_kn['date']; ?></span>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Kĩ Năng</h2>
                    <div class="subheading mb-3">Ngôn ngữ lập trình và công cụ hỗ trợ</div>
                    <ul class="list-inline dev-icons">
                        <li class="list-inline-item"><i class="fas fa-code"></i></li>
                        <li class="list-inline-item"><i class="fab fa-php"></i></li>
                        <li class="list-inline-item"><i class="fab fa-python"></i></li>
                        <li class="list-inline-item"><i class="fab fa-cuttlefish"></i>++</li>
                        <li class="list-inline-item"><i class="fas fa-atom"></i></li>
                        <li class="list-inline-item"><i class="fas fa-user-md"></i></li>
                        <li class="list-inline-item"><i class="fas fa-paint-roller"></i></li>
                    </ul>
                    <div class="subheading mb-3">Quy Trình Làm Việc</div>
                    <ul class="fa-ul mb-0">
                        <?php
                $sql_kng = "SELECT * FROM kinang";
                $query_kng = mysqli_query($conn, $sql_kng);
                while($row_kng=mysqli_fetch_array($query_kng)){
                ?>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span> <?php echo $row_kng['congviec']; ?>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">Dự Án</h2>
                    <div class="du-an">
                        <?php 
                        $sql_da="SELECT * FROM duan";
                        $query_da=mysqli_query($conn,$sql_da);
                        $row_da=mysqli_fetch_array($query_da);
                        ?>
                        <div class="line"></div>
                        <div style="margin: 25px 0; font-weight: bold">
                        </div>
                        <div class="name_shop">
                            <h3><?php echo $row_da['name']; ?></h3>
                        </div>
                        <div>
                            <table>

                                <tr>
                                    <th>Khách hàng</th>
                                    <th>
                                        <?php echo $row_da['khachhang']; ?>
                                    </th>
                                </tr>
                                <tr>
                                    <td>Mô Tả</td>
                                    <td>
                                        <?php echo $row_da['mota']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Số lượng thành viên</td>
                                    <td>
                                        <?php echo $row_da['thanhvien']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Vị trí công việc</td>
                                    <td>
                                        <?php echo $row_da['vitri']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Vai trò trong dự án</td>
                                    <td>
                                        <?php echo $row_da['vaitro']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Công nghệ sử dụng</td>
                                    <td>
                                        <?php echo $row_da['congnghe']; ?>
                                    </td>

                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->
            <section class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5">Sở Thích</h2>
                    <ul class="fa-ul mb-0">
                        <?php
                $sql_st = "SELECT * FROM sothic";
                $query_st = mysqli_query($conn, $sql_st);
                while($row_st=mysqli_fetch_array($query_st)){
                ?>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            <?php echo $row_st['name']; ?>
                        </li>
                        <?php } ?>

                    </ul>
                </div>
            </section>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>

</html>
