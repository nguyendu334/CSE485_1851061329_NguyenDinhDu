<!--/.sidebar-->
<?php
include('../config/connect.php');

?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li><a href="">Quản lý Dự Án</a></li>
            <li class="active">Sửa Dự Án</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sửa Thông Tin</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-8">

                        <form role="form" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Tên Dự Án</label>
                                <input name="name" required class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <input name="birtday" required class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Khách Hàng</label>
                                <input name="khachhang" required class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Thành Viên</label>
                                <input name="thanhvien" required class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Vị Trí</label>
                                <input name="vitri" required type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Vai Trò</label>
                                <input name="vaitro" required type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Công nghệ</label>
                                <input name="congnghe" required type="text" class="form-control">

                            </div>
                            <button name="sbm" type="submit" class="btn btn-success">Thêm mới</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                    </div>

                    </form>
                    <?php
                    if(isset($_POST['sbm'])){
                        $name = $_POST['name'];
                        $mota=$_POST['birtday'];
                        $khachhang=$_POST['khachhang'];
                        $thanhvien=$_POST['thanhvien'];
                        $vitri=$_POST['vitri'];
                        $vaitro=$_POST['vaitro'];
                        $congnghe=$_POST['congnghe'];
                        
                        
                       $sql = "INSERT INTO duan(name,mota,khachhang,thanhvien,vitri,vaitro,congnghe)
                                VALUE('$name','$mota','$khachhang','$thanhvien','$vitri','$vaitro','$congnghe')";
                           $query = mysqli_query($conn, $sql);
                        if($query){
                            header('location: index.php?page=duan');
                        }else{
                            echo 'sai';
                        }
                    }       
                    
                    ?>
                </div>
            </div>
        </div>
        <!-- /.col-->
    </div>
    <!-- /.row -->

</div>
<!--/.main-->

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
