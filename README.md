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
    - MDB에서 페이지 템플릿 다운 후 디자인 바꿈
    - 그 후 웹 폴더에 정리 후 플라스트 웹 서버로 템플릿과 연결 
    - 아나콘다 프롬프트에서 디렉터리 변경 후 ip주소 활성화 후 들어감

# 게시판으로 주변 마트나 시장 가격 확인 후 공유하는 공간 제작
## PHP로 제작한 게시판에 글 작성해서 공유
        - 현재 회원 정보 수정 부분까지 제작
        
