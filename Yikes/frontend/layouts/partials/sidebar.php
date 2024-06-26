<section class="hero">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="hero__categories">
						<div class="hero__categories__all">
							<i class="fa fa-bars"></i>
							<span>Thương hiệu</span>
						</div>
						<?php
		include_once __DIR__.'/../../../dbconnect.php';

		$sql = <<<EOT
									SELECT *
									FROM `thuonghieu` 
		EOT;

		$result = mysqli_query($conn, $sql);

		$data = [];
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$data[] = array(
				'th_id' => $row['th_id'],
				'th_ten' => $row['th_ten'],
			);
		}
	?>

						<ul>
							<?php  foreach ($data as $thuonghieu) : ?>
							<li><a href="/Yikes/frontend/sanpham/brand.php?th_id=<?= $thuonghieu['th_id'] ?>"><?= $thuonghieu['th_ten']?></a></li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
<style type="text/css">
	.ui-autocomplete-row
	{
		padding:8px;
		background-color: #f4f4f4;
		border-bottom:1px solid #ccc;
		font-weight:bold;
	}
	.ui-autocomplete-row:hover
	{
		background-color: #ddd;
	}
</style>
				<div class="col-lg-9">
					<div class="hero__search">
						<div class="hero__search__form">
							<form  action="/Yikes/frontend/sanpham/find.php" method="GET" id="search-form">
								
								<input type="text" name="timkiem" id="search_data" autocomplete="off" class="form-control input-lg" placeholder="Bạn đang tìm kiếm sản phẩm điện thoại?" autofocus>
								<button type="submit" class="site-btn" name="btnTimkiem" value="timkiem">TÌM KIẾM SẢN PHẨM</button>
							</form>
						</div>
					</div>
					<div class="hero__item set-bg" data-setbg="/Yikes/assets/vendor/frontend/img/hero/banner1.png">
						<div class="hero__text">
							<span>Sản Phẩm mới</span>
							<h2>Chất lượng <br /> Bảo hành 100%</h2>
							<p>Nhận và giao hàng miễn phí</p>
							<a href="/Yikes" class="primary-btn">Hãy mua ngay</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>