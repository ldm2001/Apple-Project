<?php

//db 연결 테스트
include 'inc/dbconfig.php';
include 'inc/member.php';

//아이디 중복 테스트
$email = '01ldm2001@gmail.com';

$mem = new Member($db);

if ($mem->email_exists($email)) {
  echo "이미 사용된 이메일 입니다.";
} else {
  echo "사용 가능한 이메일 입니다.";
}