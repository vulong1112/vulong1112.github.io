<div class="menu">
            <div class="menu-content">
            <div class="menu_logo">
                <a href="index.php?quanly=trangchu">
                <img src="./img/Logo_PTIT_University.png" alt="logo"></a>
                <p>Học viện Công nghệ Bưu chính Viễn thông</p>
            </div>
            <ul class="list-menu">
            <?php
	
    $sql_danhmuc_bv = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
    $query_danhmuc_bv = mysqli_query($mysqli,$sql_danhmuc_bv);
    while($row = mysqli_fetch_array($query_danhmuc_bv)){
                
?>
<li><a href="index.php?quanly=danhmucbaiviet&id=<?php echo $row['id_baiviet'] ?>"><?php echo $row['tendanhmuc_baiviet'] ?></a></li>
<?php

} 
?>
                
            </ul>
        </div></div>