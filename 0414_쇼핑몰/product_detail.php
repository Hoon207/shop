<?php
	session_start();
  include('./db/dbconn.php');
	//세션에 아이디 값이 있다면 id, name 을 저장  
  if(isset($_SESSION['mb_id'])){
	$userid = $_SESSION['mb_id'];
	$username = $_SESSION['mb_name'];
	//그렇지 않다면 id없음 name없음 
  }else{
	$userid = '';
	$username = '';
  }

	$no = $_GET['no'];
	echo $userid . '<br>';

	echo $no;

	$sql = "SELECT * FROM shop_data WHERE no='$no'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);

	$no = $row['no']; //상품번호
	$name = $row['name']; //상품명
	$comment = $row['comment']; //상품설명
	$memo = $row['memo']; //상품가격
	$price = $row['price']; //상품사진
	$img = $row['img'];



?>


<!DOCTYPE html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="반려동물용품 쇼핑몰">
		<meta name="author" content="STORE BOM 쇼핑몰">
		<title>STORE BOM - 서브페이지(상품상세페이지)</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/prettyPhoto.css" rel="stylesheet">
		<link href="css/price-range.css" rel="stylesheet">
		<link href="css/animate.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">
		<script src="./js/jquery.js"></script>
		<script src="./js/price-range.js"></script>
		<script src="./js/jquery.scrollUp.min.js"></script>
		<script src="./js/bootstrap.min.js"></script>
		<script src="./js/jquery.prettyPhoto.js"></script>
		<script src="./js/main.js"></script>
	</head><!--/head-->
	<body>
		<header id="header"><!--header-->
			<div class="header-middle"><!--header-middle-->
				<div class="container">
					<div class="row">
						<div class="col-md-4 clearfix">
							<h1 class="logo pull-left">
								<a href="index.php"><img src="./images/logo.png" alt="상단로고" width="220" /></a>
							</h1>
						</div>
						<div class="col-md-8 clearfix">
							<div class="shop-menu clearfix pull-right">
								<ul class="nav navbar-nav">
									<?php
									if(!$userid) {
									?>
										<li><a href="order_list.php"><i class="fa fa-shopping-cart"></i>주문정보</a></li>
										<li><a href="cart.php"><i class="fa fa-shopping-cart"></i>장바구니</a></li>
										<li><a href="login.php"><i class="fa fa-user"></i>로그인</a></li>
										<li><a href="sign.php"><i class="fa fa-lock"></i>회원가입</a></li>
									<?php
									} else {
									?>
										<li><a href="#"><i class="fa fa-lock"></i>
										<?php echo $username; echo '('. $userid; echo ')'; ?>님 환영합니다.</a></li>
										<li><a href="order_list.php"><i class="fa fa-shopping-cart"></i>주문정보</a></li>
										<li><a href="cart.php"><i class="fa fa-shopping-cart"></i>장바구니</a></li>
										<li><a href="./php/logout.php"><i class="fa fa-user"></i>로그아웃</a></li>
									<?php } ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div><!--/header-middle-->

			<div class="header-bottom"><!--header-bottom-->
				<div class="container">
					<div class="row">
						<div class="col-sm-9">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div class="mainmenu pull-left">
								<ul class="nav navbar-nav collapse navbar-collapse">
									<li><a href="index.php">HOME</a></li>
									<li><a href="index.php">베스트상품</a></li>
									<li><a href="index.php">MD추천상품</a></li>
									<li><a href="index.php">10%할인쿠폰</a></li>
									<li><a href="index.php">구매후기</a></li>
									<li><a href="index.php">상품Q&A</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div><!--/header-bottom-->
		</header><!--/header-->
		
		<section>
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<div class="left-sidebar">
							<h2>Category</h2>
							<div class="panel-group category-products" id="accordian"><!--category-productsr-->
								<div class="panel panel-default">

									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordian" href="#cate01">
												<span class="badge pull-right"><i class="fa fa-plus"></i></span>
												함께하는 공간
											</a>
										</h4>
									</div>
									<div id="cate01" class="panel-collapse collapse">
										<div class="panel-body">
											<ul>
												<li><a href="cate.php?cate=cate01">미끄럼방지매트</a></li>
												<li><a href="cate.php?cate=cate01">계단</a></li>
												<li><a href="cate.php?cate=cate01">하우스/침대</a></li>
												<li><a href="cate.php?cate=cate01">식기테이블</a></li>
												<li><a href="cate.php?cate=cate01">배변매트</a></li>
											</ul>
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordian" href="#cate02">
												<span class="badge pull-right"><i class="fa fa-plus"></i></span>
												함께하는 외출
											</a>
										</h4>
									</div>
									<div id="cate02" class="panel-collapse collapse">
										<div class="panel-body">
											<ul>
												<li><a href="cate.php?cate=cate02">펫라이트</a></li>
												<li><a href="cate.php?cate=cate02">카시트</a></li>
												<li><a href="cate.php?cate=cate02">이동가방</a></li>
												<li><a href="cate.php?cate=cate02">하네스, 리드줄</a></li>
											</ul>
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"><a href="cate.php?cate=cate03">함께하는 목욕</a></h4>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"><a href="cate.php?cate=cate04">건강한 간식</a></h4>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"><a href="#">Story</a></h4>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"><a href="#">Community</a></h4>
									</div>
								</div>

							</div><!--/category-products-->
						</div>
					</div>

					<!-- 상품상세페이지 -->
					<div class="col-sm-9 padding-right">
						<!-- <h2 class="title text-center">Product Detail</h2> -->
						<div class="product-details"><!--상품 디테일-->
							<div class="col-sm-5">
									<div class="view-product">
										<!-- 대표사진 -->
										<img src="./images/shop/<?= $img ?>" alt="대표사진" style="width:350px;">
									</div>
									<div id="similar-product" class="carousel slide" data-ride="carousel">
										<div class="carousel-inner">
											<div class="item active">
                        <!-- 썸네일 이미지 목록 -->
												<?php
													$sql = "SELECT img, no FROM shop_data";
													$result2 = mysqli_query($conn, $sql);
								
													while($row2 = mysqli_fetch_array($result2)){
													?>
														<a href="http://127.0.0.1/shop/product_detail.php?no=<?=$row2['no']?>">
															<img src="./images/shop/<?=$row2['img'] ?> " alt = "" style="width:70px; height:70px;">
														</a>
													<?php }?>
												
											</div>
										</div>
								<!-- Controls -->
									<a class="left item-control" href="#similar-product" data-slide="prev"><i class="fa fa-angle-left"></i>
								</a>
									<a class="right item-control" href="#similar-product" data-slide="next"><i class="fa fa-angle-right"></i>
								</a>
							</div>
						</div>

						<!-- 오른쪽 상품제목, 가격, 수량, 버튼, new아이콘 -->
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="./images/product-details/new.jpg" class="newarrival" alt="">
								<form action="./php/cart_insert.php?no=<?=$no?>" method="post">
									<h2><?=$name?></h2>
									
									<p>상품번호: <?=$no?></p>
										<img src="./images/product-details/rating.png" alt="상품평 별점">
										<br>
										<span>
											<span>
												<?= number_format($price) ?> 원</span>
												<br>
												<label>수량: </label>
												<input type="text" name ="quantity" id ="quantity" value="1">
												<br>
												<button type="submit" class="btn btn-default dart">
													<i class="fas fa-shopping-cart"></i>
													장바구니추가
												</button>
												<br>	
											</span>
											<p><b>제품정보:</b> <?= $comment ?></p>
											</form>
                <!-- 폼양식 삽입 -->

							</div><!--/product-information-->
						</div>
					</div>
					<hr>
          <!-- 메모, 상세이미지 -->
					 
					<p><?=$memo?></p>
					<img src="./images/product-details/<?= $img ?>" alt="상세페이지">
				</div>
			</div>
		</section>
		
		<footer class="text-center">
			<address>copyright&copy;2023 shoppingmall allrightes resverved.</address>
		</footer>
	</body>
</html>
