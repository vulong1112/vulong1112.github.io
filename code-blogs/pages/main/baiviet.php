<?php
	$sql_bv = "SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id='$_GET[id]' LIMIT 1";
	$query_bv = mysqli_query($mysqli,$sql_bv);
    $query_bv_all = mysqli_query($mysqli,$sql_bv);
	//lay ten danh muc
	
	$row_bv_title = mysqli_fetch_array($query_bv);
?>
<div class="main">
<div class="main-content2">

<h3> Bài Viết : <span style="text-align: center; "><?php echo $row_bv_title['tenbaiviet'] ?></h3></span> 
				
					<?php
					while($row_bv = mysqli_fetch_array($query_bv_all)){ 
					?>
					<div class="main-items2">
                   
                    <div class="main-items-title">
                    <?php echo $row_bv['tenbaiviet'] ?>
                    </div>
                    <div class="main-items-content">
                        <div class="item-noidung">
                        <?php echo $row_bv['noidung'] ?>
                        </div>
                    </div>
                </div>
					<?php
					} 
					?>
</div>                
</div>
