<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA_Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= (isset($g_title) && $g_title != '') ? $g_title : '사과 장터'; ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <?php
  if(isset($js_array)) {
    foreach($js_array AS $var){
    echo '<script src="'.$var.'?v='. date('YmdHis') .'"></script>'.PHP_EOL;
    }
  }
  ?>

<style>

body {
  font-family: 'Merriweather', serif;
}

.nav-pills .nav-link:hover {
	background-color: #A07E59; /* hover 시 배경 색상 */
	color: white; /* hover 시 텍스트 색상 */
}
.nav-pills .nav-link.active {
	background-color: #28a745; /* active 시 배경 색상 */
	color: white; /* active 시 텍스트 색상 */
}

.carousel-item img {
	width: 100%;
	height: 500px; /* 슬라이드 높이 설정 */
	object-fit: cover; /* 이미지가 꽉 차게 */
}

/*메뉴 글자색상 변경 */
.nav-link {
	color: black; /* 원하는 색상으로 변경 */
}

.nav-link:hover {
	color: black; /* 호버시 색상 변경 */
}

</style>
  
</head>
<body>
  <div class="container">
	
  <!--  로그인 상태 -->
  <?php if(isset($ses_id) && $ses_id !='') {   ?>

    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom"> 
		<ul class="nav nav-pills">
		  <li class="nav-item">
		  </li>
		 
      <!-- 관리자인 경우 -->
        <?php if($ses_level == 10) { ?>
		  <li class="nav-item">
			<a class="nav-link " href="./admin/" <?= ($menu_code == 'member') ? 'active': ''; ?>>관리자</a>
		  </li>
		<!-- 일반회원인경우 -->
		<?php } else { ?>
		  <li class="nav-item">
			<a class="nav-link <?= ($menu_code == 'home') ? 'active': ''; ?>" href="index.php">시세정보</a>
		  </li>
		<?php } ?>
      <li class="nav-item">
			<a class="nav-link" href="board.php">게시판</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link <?= ($menu_code == 'member') ? 'active': ''; ?>" href="mypage.php" >회원정보</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link <?= ($menu_code == 'login') ? 'active': ''; ?>" href="./pg/logout.php">로그아웃</a>
		  </li>
		</ul>
    </header>

	<!--  로그아웃 상태 -->
	<?php } else {  ?>

    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom"> 
		<ul class="nav nav-pills">
		  <li class="nav-item">
			<a class="nav-link <?= ($menu_code == 'home') ? 'active': ''; ?>" href="index.php">시세정보</a>
		  </li>
      <li class="nav-item">
			<a class="nav-link" href="board.php">게시판</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link <?= ($menu_code == 'member') ? 'active': ''; ?>" href="stipulation.php">회원가입</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link <?= ($menu_code == 'login') ? 'active': ''; ?>" href="login.php">로그인</a>
		  </li>
		</ul>
    </header>

	<?php } ?>

    <!-- 슬라이드 시작  -->
		<div id="carouselExampleIndicators" class="carousel slide mb-5" data-ride="carousel" data-interval="3000">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./images/vegetables01.jpg" class="d-block w-100">
                </div>
            </div>
        </div>

    <!-- 슬라이드 끝   -->

    <script>
		//메뉴에 active 붙여서 표시 스크립트 
        var currentPath = window.location.pathname;
		currentPath = currentPath.replace("/","").trim();

        
        // 모든 nav-link 요소들을 가져옴
        const navLinks = document.querySelectorAll('.nav-link');

        navLinks.forEach(link => {
			
            if(link.getAttribute('href') === currentPath) {
                link.classList.add('active');
            } 
            if(link.getAttribute('href') === currentPath) {
                link.classList.add('active');
            } 
            if(link.getAttribute('href') === currentPath) {
                link.classList.add('active');
            } 

        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
