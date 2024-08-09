# 사과 가격 예측 서비스 제작 
## 사과값이 너무 비싸서 선형회귀를 활용한 머신러닝 프로그램 제작
    - 데이터 모델 수집 (기상청, Kamis)
    - 엑셀에 평균기온, 최고기온, 최저기온, 강수량 당일 사과 가격 정리
    - 수집된 데이터 바탕으로 모델 제작
    - 데이터 스케일 조정 (StandardScaler)
    - 플레이스 홀더 정의 부분 상단 데이터 정규화 추가 
    - 코스트 비용 함수 부분 = mse 제곱 오차
    - 옵티마이저 데이터 정규화 학습률: 0.01
    - 경사 하강법 사용
    - 기존 학습 모델 코드의 사과 loss 값 57만에서 17~18만으로 줄임
    - 학습된 모델 바탕으로 예측 한번 해보기
    - MDB에서 페이지 템플릿 다운 후 디자인 전면 수정
    - 웹 폴더(템블릿, 스테이트, 모델) 정리 후 플라스크 웹 서버로 템플릿과 모델 연결 
    - 아나콘다 프롬프트에서 프로젝트 웹 폴더 경로로 디렉터리 변경 후 실행
   
   ![alt text](<image/Apple p1.png>)

# 게시판으로 주변 마트나 시장 가격 확인 후 공유하는 공간 제작
## PHP로 제작한 게시판에 글 작성해서 공유
        - 회원가입시 약관동의 
        - 회원가입 양식
        - 테이블 생성 및 커넥션 코딩
        - Member 클래스 생성
        - 아이디 중복체크
        - 비밀번호 일치 확인
        - 메일 중복 체크
        - 메일 형식 체크
        - 우편번호 찾기
        - 이미지 미리 보기
        - 회원가입 등록처리 
        - 가입 성공 페이지 제작
        - 단방향 암호화 
        - 개인정보수정
        - 관리자 권한 부여
        - 회원관리 페이지
        - 회원 목록
        - 회원관리 페이지네이션
        - 회원 검색
        - 계정 엑셀 저장
        - 회원 삭제
        - 회원 수장
        - 최근 DB 충돌 문제로 해결중
        
  ![alt text](<image/Apple p2.png>)