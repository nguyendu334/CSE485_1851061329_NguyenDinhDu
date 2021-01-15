<?php
if (!defined('TEMPLATE')) {
    die("Bạn không có quyền truy cập vào file này!");
}


$sql = "SELECT  FROM sothic ORDER BY id ASC";
$query = mysqli_query($conn, $sql);

if (isset($_POST['sbm'])) {

    $name = $_POST['cat_name'];

    $sql_add = "INSERT INTO sothic(name)
                VALUES('$name')";


    $query_add = mysqli_query($conn, $sql_add);

    if($query_add){
        header('location: index.php?page=sothic');
    }else{
        echo "sai";
    }
}


?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li><a href="">Quản lý danh mục</a></li>
            <li class="active">Thêm sở thích</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm Sở Thích</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-8">
                        <!-- <div class="alert alert-danger">Danh mục đã tồn tại !</div> -->
                        <?php
                        if (isset($error_add)) {
                            echo $error_add;
                        }
                        ?>
                        <form role="form" method="post">
                            <div class="form-group">
                                <label>Tên Sở Thích:</label>
                                <input required type="text" name="cat_name" class="form-control" placeholder="Tên Sở thích...">
                            </div>
                            <button type="submit" name="sbm" class="btn btn-success">Thêm mới</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                    </div>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div>
    <!--/.main-->