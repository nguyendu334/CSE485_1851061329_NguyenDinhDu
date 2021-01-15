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
            <li><a href="">Quản lý thành viên</a></li>
            <li class="active">Thêm Thành Viên</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm Thành Viên</h1>
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
                                <label>Họ & Tên</label>
                                <input name="name" required class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Ngày Sinh</label>
                                <input name="birtday" required class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Giới tính</label>
                                <select name="gender" class="form-control">
                                    <option value="Nam">Nam</option>
                                    <option value="Nữ">Nữ</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Công Việc</label>
                                <input name="work" required class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input name="phone" required type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input name="mail" required type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Quê Quán</label>
                                <select name="address" class="form-control">
                                <?php
                                $sql_add = "SELECT * FROM diachi ORDER BY id ASC";
                                $query_add = mysqli_query($conn, $sql_add);
                                $row_add = mysqli_num_rows($query_add);
                                if ($row_add > 0) {
                                    while ($data = mysqli_fetch_assoc($query_add)) {
                                ?>
                                        <option value=<?php echo $data['id']; ?>><?php echo $data['name']; ?></option>

                                <?php
                                    }
                                }
                                ?>
                                </select>
                            </div>


                          
                            <div class="form-group">
                                <label>Ảnh</label>
                                <input name="picture" required type="file" class="form-control">
                            </div>
                            <button name="sbm" type="submit" class="btn btn-success">Thêm mới</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                    </div>

                    </form>

                    <?php
                    if(isset($_POST['sbm'])){
                        $name = $_POST['name'];
                        $sinhnhat=$_POST['birtday'];
                        $gioiinh=$_POST['gender'];
                        $work=$_POST['work'];
                        $phone=$_POST['phone'];
                        $email=$_POST['mail'];
                        $quequan=$_POST['address'];
                        
                        $image = $_FILES['picture']['name'];
                        $tmp_name = $_FILES['picture']['tmp_name'];
                            
                      
                       $iimg= move_uploaded_file($tmp_name, '../img/'.$image);

                       $sql = "INSERT INTO nguoidung(name,birthday,gender,congviec,phone,email,address,img)
                                VALUE('$name','$sinhnhat','$gioiinh','$work','$phone','$email','$quequan','$iimg')";
                           $query = mysqli_query($conn, $sql);
                        if($query){
                            header('location: index.php?page=user');
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
