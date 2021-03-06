# (bong_ari) 봉명고등학교 동아리 지원서 작성 웹페이지 [봉아리] 관련 소스 코드입니다.

* 해당 문서는 MIT 라이선스를 채택하였으며, 이와 관련하여 자세한 내용은 [LICENSE] 문서를 참고해주세요.

* 갑작스러운 코로나 사태에 대처하기 위해 급하게 2일만에 제작하였으며 당시 프로그래밍 실력이 탄탄하지 않았기에 해당 서비스는 불완전하고 보안상의 결함이 존재할 수도 있습니다.
<br>따라서, 해당 레퍼토리를 참고는 하되 무작정 사용하는 것을 추천드리지 않습니다.

* 공식 서비스 기간 동안 사용되었던 모든 코드를 업로드 한 것은 아니지만,<br>핵심 부분과 관련된 코드는 모두 첨부하였기에 응용 및 사용에 문제는 없습니다.
  
* 제공되는 기능은 다음과 같습니다.

  [1] 동아리 관계자 (동아리 부장)
  1) 동아리 등록 (로고 이미지, 활동 이미지, 동아리 관련 텍스트 입력)
  2) 지원서 질문 등록 및 수정
  3) 동아리 지원 현황 실시간 파악
  4) 지원서 인쇄

  [2] 동아리 지원자 (일반 학생)
  1) 메인 페이지에서 신청 가능한 동아리 목록 조회
  2) 특정 동아리 관련 설명 파악 (로고 이미지, 활동 이미지, 동아리 관련 텍스트)
  3) 동아리 지원서 작성 및 신청
  4) 작성된 지원서 수정 및 삭제

* 해당 서비스는 봉명고등학교에서 2020년, 2021년에 활용되었음을 밝힙니다.
  <br>2021년 활용 당시 약간의 개선이 있었지만, 이후로는 추가 업데이트는 없을 예정입니다.
  
* 몇몇 부분은 보안상의 이유로 삭제하였습니다.
  
* 해당 서비스를 이용하기 위해서는 서버와 데이터베이스 구축이 필요합니다.
  <br>데이터베이스 관련 코드는 mysql 기반 문법으로 작성되었습니다.
  
* 데이터베이스 내부에서 사용되는 명칭에 관한 내용은 [database/데이터베이스 명칭.md]에 첨부합니다.
  <br>이를 꼭 참고해야 코드가 어떻게 동작되는지 이해할 수 있습니다.

* 각 파일별 역할을 담은 내용은 [sourceCode/파일별 역할.md]에 첨부합니다.
  <br>이를 꼭 참고해야 코드가 어떻게 동작되는지 이해할 수 있습니다.
  
* 반드시 각 폴더별 [README.md]  읽어주세요.
