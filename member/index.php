<?php
session_start();

$ses_id = (isset($_SESSION['ses_id']) &&  $_SESSION['ses_id'] != '') ? $_SESSION['ses_id'] : '';

$g_title = '사과 장터';
$js_array = ['js/home.js'];

$menu_code = 'home';

include 'inc_header.php';
?>

<main class="w-75 mx-auto border rounded-5 p-5 d-flex gap-3" style="height: calc(100vh - 257px)">

<img src="images/사과 상품 소매가 10개 기준(2024.07.08 ~ 2024.07.18).svg" width="700" height="380" alt="">
<div>
  <p>
    24.07.18
    가격: 32,156
    (등략률: 1.51)
  </p>
  <p>
    24.07.17
    가격: 31,090
    (등략률: -0.04)
  </p>
  <p>
    24.07.16
    가격: 0.66
    (등략률: 0.31)
  </p>
  <p>
    24.07.15
    가격: 30,804
    (등략률: 3.29)
  </p>
  <p>
    24.07.12
    가격: 29,822
    (등략률: -3.25)
  </p>
  <p>
    24.07.11
    가격: 30,824
    (등략률: -6.18)
  </p>
  <p>
    24.07.10
    가격: 32,853
    (등략률: -0.28)
  </p>
  <p>저번주보다 0.9% 상승</p>
</div>
</main>

<?php
include 'inc_footer.php';
?>