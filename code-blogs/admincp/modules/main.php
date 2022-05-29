<div class="clear"></div>
<div class="main">

	<?php

				if(isset($_GET['action']) && $_GET['query']){
					$tam = $_GET['action'];
					$query = $_GET['query'];
				}else{
					$tam = '';
					$query = '';
				}
				
				}if($tam=='quanlydanhmucbaiviet' && $query=='them'){
					include("modules/quanlydanhmucbaiviet/them.php");
					include("modules/quanlydanhmucbaiviet/lietke.php");

				}elseif($tam=='quanlydanhmucbaiviet' && $query=='sua'){
					include("modules/quanlydanhmucbaiviet/sua.php");

				}elseif($tam=='quanlybaiviet' && $query=='them'){
					include("modules/quanlybaiviet/them.php");
					include("modules/quanlybaiviet/lietke.php");
					
				}elseif($tam=='quanlybaiviet' && $query=='sua'){
					include("modules/quanlybaiviet/sua.php");
				}
				
				else{
					include("modules/dashboard.php");
				}
	?> 
	
</div>
// update  by thuong
