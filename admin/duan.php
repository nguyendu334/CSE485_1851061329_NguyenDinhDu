<script >
        function ConfirmDelete() {
            var x = confirm("bạn có xác nhận xóa không?");
            if (x)
                return true;
            else
                return false;
        }
    </script>
<?php
include('../config/connect.php');
$sql = "SELECT * FROM duan";
$query =mysqli_query($conn, $sql);

?>
<!--/.sidebar-->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Danh sách Dự án</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách dự án</h1>
        </div>
    </div>
    <!--/.row-->
    <div id="toolbar" class="btn-group">
        <a href="index.php?page=add_duan" class="btn btn-success">
            <i class="glyphicon glyphicon-plus"></i> Thêm dự án
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
                                <th data-field="name" data-sortable="true">Tên dự án</th>
                                <th>Mô Tả</th>
                                <th>Khách Hàng</th>
                                <th>Thành Viên</th>
                                <th>Vị Trí</th>
                              
                                
                                <th data-field="price" data-sortable="true">Vai Trò</th>
                                
                                <th>Công Nghệ</th>
                               
                                
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
                                <?php echo $row['mota'];?>
                                </td>
                                <td style="">
                                <?php echo $row['khachhang'];?>
                                </td>
                                <td style="">
                                <?php echo $row['thanhvien'];?>
                                </td>
                                <td style="">
                                <?php echo $row['vitri'];?>
                                </td>
                                <td style="">
                                <?php echo $row['vaitro'];?>
                                </td>
                                <td style="">
                                <?php echo $row['congnghe'];?>
                                </td>
                                
                                <td class="form-group">
											<a href="index.php?page=edit_duan&id=<?php echo $row['id']; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
											<a onclick="ConfirmDelete()" href="index.php?page=del_duan&id=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
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
