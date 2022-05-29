<?php
	$sql_bv = "SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id_danhmuc='$_GET[id]' ORDER BY id DESC";
	$query_bv = mysqli_query($mysqli,$sql_bv);
	//lay ten danh muc
	$sql_cate = "SELECT * FROM tbl_danhmucbaiviet WHERE tbl_danhmucbaiviet.id_baiviet='$_GET[id]' LIMIT 1";
	$query_cate = mysqli_query($mysqli,$sql_cate);
	$row_title = mysqli_fetch_array($query_cate);
?>
<div class="main">

<div class="main-content">
<h3>Danh mục bài  viết : <span style="text-align: center; "><?php echo $row_title['tendanhmuc_baiviet'] ?></h3></span> 
				
					<?php
					while($row_bv = mysqli_fetch_array($query_bv)){ 
					?>
					<div class="main-items">
                    <a href="index.php?quanly=baiviet&id=<?php echo $row_bv['id'] ?>">
                    <div class="main-items-title">
                    <?php echo $row_bv['tenbaiviet'] ?>
                    </div>
                    <div class="main-items-content">
                        <div class="main-items-pic">
                            <img src="admincp/modules/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh'] ?>" alt="item1">
                        </div>
                        <div class="main-items-text">
                        <?php echo $row_bv['tomtat'] ?>
                        </div>
                    </div></a>
                </div>
					<?php
					} 
					?>
					
				
</div>
</div>
