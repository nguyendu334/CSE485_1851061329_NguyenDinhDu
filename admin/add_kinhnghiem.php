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
            <li class="active">Kinh Ngiệm</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Kinh Nghiêm</h1>
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
                                <label>Thời Gian</label>
                                <input name="name" required class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Địa Điểm</label>
                                <input name="birtday" required class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Chức Vụ</label>
                                <input name="chucvu" required class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Công Việc</label>
                                <input name="work" required class="form-control" placeholder="">
                            </div>
                        
                            <button name="sbm" type="submit" class="btn btn-success">Thêm mới</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                    </div>

                    </form>
                    <?php
                    if(isset($_POST['sbm'])){
                        $date = $_POST['name'];
                        $add = $_POST['birtday'];
                        $chucvu = $_POST['chucvu'];
                        $congviec = $_POST['work'];

                        $sql = "INSERT INTO kinhnghiem(date,kinhng,chucvu,congviec)
                                VALUE('$date','$add','$chucvu','$congviec')";
                        $query=mysqli_query($conn, $sql);
                        if($query){
                            header('location: index.php?page=kinhnghiem');
                        }else{
                            echo "sai";
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
