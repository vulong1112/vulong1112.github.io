<div id="main">
			<div class="maincontent">
				<?php
				if(isset($_GET['quanly'])){
					$tam = $_GET['quanly'];
				}else{
					$tam = '';
				}
				if($tam=='danhmucsanpham'){
					include("main/danhmuc.php");

				}
				elseif($tam=='danhmucbaiviet'){
					include("main/danhmucbaiviet.php");
				}
				elseif($tam=='baiviet'){
					include("main/baiviet.php");
				}else{
					include("main/index.php");
				}
				?>
			</div>

		</div>
// update by thuong
