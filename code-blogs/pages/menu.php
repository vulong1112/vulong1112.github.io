<div class="menu">
            <div class="menu-content">
            <div class="menu_logo">
                <a href="index.php?quanly=trangchu">
                <img src="https://qldt.ptit.edu.vn/MessageFile/242794Logo2.gif" alt="logo" width="300" height="200"></a>
               <div>
                <div> HỌC VIỆN CÔNG NGHỆ BƯU CHÍNH VIỄN THÔNG </div> 
                <div style="color:Tomato;"> Posts and Telecommunications Institute of Technology  </div>
                </div>
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
