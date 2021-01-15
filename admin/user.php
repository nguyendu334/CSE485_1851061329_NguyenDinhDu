
<?php
include('../config/connect.php');
$sql = "SELECT * FROM nguoidung";
$query =mysqli_query($conn, $sql);

?>
<!--/.sidebar-->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Danh sách thành viên</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách thành viên</h1>
        </div>
    </div>
    <!--/.row-->
    <div id="toolbar" class="btn-group">
        <a href="index.php?page=add_user" class="btn btn-success">
            <i class="glyphicon glyphicon-plus"></i> Thêm thành viên
        </a>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table style="text-align: center;" data-toolbar="#toolbar" data-toggle="table">

                        <thead>
                            <tr>
                                <th data-field="id" data-sortable="true">ID</th>
                                <th data-field="name" data-sortable="true">Họ & Tên</th>
                                <th>Ngày Sinh</th>
                                <th>Giới Tính</th>
                                <th>Công Việc</th>
                                <th>Phone</th>
                              
                                
                                <th data-field="price" data-sortable="true">Email</th>
                                
                                <th>Địa chỉ</th>
                                <th>Ảnh</th>
                                
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while($row = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td style="">
<?php echo $row['id'];?>
                                </td>
                                <td style="">
                                <?php echo $row['name'];?>
                                </td>
                                <td style="">
                                <?php echo $row['birthday'];?>
                                </td>
                                <td style="">
                                <?php echo $row['gender'];?>
                                </td>
                                <td style="">
                                <?php echo $row['congviec'];?>
                                </td>
                                <td style="">
                                <?php echo $row['phone'];?>
                                </td>
                                <td style="">
                                <?php echo $row['email'];?>
                                </td>
                                <td style="">
                                <?php echo $row['address'];?>
                                </td>
                                <td><img width="130px" height="180px" src="../img/<?php echo $row['img']; ?>" alt="">
                                </td>
                                <td class="form-group">
											<a href="index.php?page=edit_user&id=<?php echo $row['id']; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
											<a onclick="return confirm('Bạn muốn xóa không ?')" href="index.php?page=del_user&id=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
										</td>
                            </tr>

                       
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>

<!--/.main-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-table.js"></script>
<!--/.main-->
