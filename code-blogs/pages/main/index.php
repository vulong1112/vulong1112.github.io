

<?php
	$sql_bv = "SELECT * FROM tbl_baiviet WHERE tinhtrang=1 ORDER BY id DESC";
	$query_bv = mysqli_query($mysqli,$sql_bv);
	
?>
<div class="main">
<div class="main-content">
				
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