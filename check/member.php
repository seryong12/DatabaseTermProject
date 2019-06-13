<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">


<head>
    <meta charset="utf-8">
    <title>회원가입</title>
    <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.min.js"></script><!--jquery.js 불러오기-->
    <script type="text/javascript" src="http://cdn.bootcss.com/bootstrap-select/2.0.0-beta1/js/bootstrap-select.js"></script><!--부트스트랩 셀렉트박스.js 불러오기-->
    <link rel="stylesheet" type="text/css" href="http://cdn.bootcss.com/bootstrap-select/2.0.0-beta1/css/bootstrap-select.css"><!--부트스스트랩 셀렉트박스.css 불러오기-->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet"><!--부트스트랩.css 불러오기-->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script><!--부트스트랩.js 불러오기-->

    <script>
        function change_box1(data)
        {
          if(data == "2019") {
          $('#mb_2').html('<option disabled>Choose College..</option><option title="디자대" value="디자대">College of Art & Design (디자인대학)</option><option title="인사대" value="인사대">College of Liberal Arts and Convergence (인문사회융합대학)</option><option title="과기대" value="과기대">College of Science and Technology (과학기술대학)</option><option title="의생대" value="의생대">College of Biomedical and Health Science (의료생명대학)</option><option title="연합전공" value="연합전공">Union Department (연합전공)</option>');}
          //19학번을 고르면 나타나는 2번째 셀렉트박스

            else if(data == "2018") {
          $('#mb_2').html('<option disabled>Choose College..</option><option title="디자대" value="디자대">College of Art & Design (디자인대학)</option><option title="인사대" value="인사대">College of Liberal Arts and Convergence (인문사회융합대학)</option><option title="과기대" value="과기대">College of Science and Technology (과학기술대학)</option><option title="의생대" value="의생대">College of Biomedical and Health Science (의료생명대학)</option><option title="연합전공" value="연합전공">Union Department (연합전공)</option>');}
            //18학번을 고르면 나타나는 2번째 셀렉트박스

            else if(data == "2017") {
          $('#mb_2').html('<option disabled>Choose College..</option><option title="미커대" value="미커대">College of Media and Communication (미디어커뮤니케이션대학)</option><option title="디자대" value="디자대">College of Art & Design (디자인대학)</option><option title="국비대" value="과기대">College of International business (국제비지니스대학)</option><option title="공인대" value="공인대">College of Public Service and Education (공공인재대학)</option><option title="과기대" value="과기대">College of Science and Technology (과학기술대학)</option><option title="의생대" value="의생대">College of Biomedical and Health Science (의료생명대학)</option>');}
            //17학번을 고르면 나타나는 2번째 셀렉트박스

            else if(data == "2016") {
          $('#mb_2').html('<option disabled>Choose College..</option><option title="미커대" value="미커대">College of Media and Communication (미디어커뮤니케이션대학)</option><option title="디자대" value="디자대">College of Art & Design (디자인대학)</option><option title="국비대" value="국비대">College of International business (국제비지니스대학)</option><option title="공인대" value="공인대">College of Public Service and Education (공공인재대학)</option><option title="과기대" value="과기대">College of Science and Technology (과학기술대학)</option><option title="의생대" value="의생대">College of Biomedical and Health Science (의료생명대학)</option>');}
            //16학번을 고르면 나타나는 2번째 셀렉트박스

             else if(data == "2015") {
          $('#mb_2').html('<option disabled>Choose College..</option><option title="미커대" value="미커대">College of Media and Communication (미디어커뮤니케이션대학)</option><option title="디자대" value="디자대">College of Art & Design (디자인대학)</option><option title="국비대" value="국비대">College of International business (국제비지니스대학)</option><option title="공인대" value="공인대">College of Public Service and Education (공공인재대학)</option><option title="과기대" value="과기대">College of Science and Technology (과학기술대학)</option><option title="의생대" value="의생대">College of Biomedical and Health Science (의료생명대학)</option>');}
             //15학번을 고르면 나타나는 2번째 셀렉트박스

            else if(data == "2014") {
          $('#mb_2').html('<option disabled>Choose College..</option><option title="미커대" value="미커대">College of Media and Communication (미디어커뮤니케이션대학)</option><option title="디자대" value="디자대">College of Art & Design (디자인대학)</option><option title="국비대" value="국비대">College of International business (국제비지니스대학)</option><option title="공인대" value="공인대">College of Public Service and Education (공공인재대학)</option><option title="과기대" value="과기대">College of Science and Technology (과학기술대학)</option><option title="의생대" value="의생대">College of Biomedical and Health Science (의료생명대학)</option>');}
            //14학번을 고르면 나타나는 2번째 셀렉트박스

            else if(data == "2013") {
          $('#mb_2').html('<option disabled>Choose College..</option><option title="미커대" value="미커대">College of Media and Communication (미디어커뮤니케이션대학)</option><option title="디자대" value="디자대">College of Art & Design (디자인대학)</option><option title="국비대" value="국비대">College of International business (국제비지니스대학)</option><option title="공인대" value="공인대">College of Public Service and Education (공공인재대학)</option><option title="과기대" value="과기대">College of Science and Technology (과학기술대학)</option><option title="의생대" value="의생대">College of Biomedical and Health Science (의료생명대학)</option>');}
            //13학번을 고르면 나타나는 2번째 셀렉트박스

            else {
          $('#mb_2').html('<option>Select selectbox 1 first</option>');
          }
            //19,18,17,16,15,14,13 학번 외에 (Ex, Choose college 부분을 한번 더 고름) 골랐을 때 나타나는 2번째 셀렉트박스

          $('#mb_3').html('<option value="앞에 선택">Select selectbox 2 first</option>');
          $('.selectpicker').selectpicker("refresh");
        }
        //아무선택지나 골랐을때 2번째 셀렉트박스말고 3번째 셀렉트박스는 이렇게 바뀐다는 뜻. #mb_3이 3번째 셀렉트박스라는 뜻임

        function change_box2(data)
          {
                   if(data == "디자대") {
             $('#mb_3').html('<option disabled>Now Choose Department...</option><optgroup label="디자인학부"><option value="산업디자인전공">산업디자인전공</option><option value="실내디자인전공">실내디자인전공</option><option value="패션디자인전공">패션디자인전공</option></optgroup><optgroup label="미디어학부"><option value="시각영상디자인전공">시각영상디자인전공</option><option value="미디어콘텐츠전공">미디어콘텐츠전공</option><option value="조형예술학과">조형예술학과</option></optgroup>');}
             //data 11  19학번 - 디자인대학을 골랐을때 3번 셀렉트박스에 나오는 선택지

              else if(data == "인사대") {
             $('#mb_3').html('<option disabled>Now Choose Department...</option><optgroup label="국제비지니스학부"><option value="경영학전공">경영학전공</option><option value="경제통상학전공">경제통상학전공</option></optgroup><optgroup label="공공인재학부"><option value="경찰학과">경찰학과</option><option value="문헌정보학과">문헌정보학과</option><option value="유아교육과">유아교육과</option></optgroup><optgroup label="문화콘텐츠학부"><option value="신문방송학전공">신문방송학전공</option><option value="동화한국어문화전공">동화한국어문화전공</option><option value="영어문화학전공">영어문화학전공</option></optgroup>');}
              //data 12  19학번 - 인문사회융합대학을 골랐을때 3번 셀렉트 박스에 나오는 선택지

              else if(data == "과기대") {
             $('#mb_3').html('<option disabled>Now Choose Department...</option><optgroup label="ICT융합공학부"><option value="기계전자전공">기계전자전공</option><option value="소프트웨어전공">소프트웨어전공</option><option value="의학공학전공">의학공학전공</option></optgroup><optgroup label="친환경과학부"><option value="녹색환경시스템전공">녹색환경시스템전공</option><option value="에너지소재학전공">에너지소재학전공</option></optgroup>')}
              //data 13  19학번 - 과학기술대학을 골랐을때 3번 셀렉트 박스에 나오는 선택지

              else if(data == "의생대") {
             $('#mb_3').html('<option disabled>Now Choose Department...</option><optgroup label="간호복지학부"><option value="간호학과">간호학과</option><option value="사회복지학과">사회복지학과</option></optgroup><optgroup label="바이오융합화학부"><option value="바이오의약학전공">바이오의약학전공</option><option value="바이오생명공학전공">바이오생명공학전공</option><option value="식품학전공">식품학전공</option><option value="뷰티화장품전공">뷰티화장품전공</option></optgroup><optgroup label="스포츠헬스과학부"><option value="스포츠건강학전공">스포츠건강학전공</option><option value="골프산업전공">골프산업전공</option></optgroup>')}
              //data 14  19학번 - 의료생명대학을 골랐을때 3번 셀렉트 박스에 나오는 선택지

              else if(data == "연합전공") {
          $('#mb_3').html('<option disabled>Now Choose Department...</option><option value="HIT 창의융합전공" >HIT 창의융합전공</option><optgroup label="힐링바이오공유대학"><option value="바이오기능성식품융합전공">바이오기능성식품융합전공</option><option value="당뇨바이오헬스케어융합전공">당뇨바이오헬스케어융합전공</option><option value="반려동물융합전공">반려동물융합전공</option><option value="융합치유전공">융합치유전공</option></optgroup><optgroup label="사회맞춤형학과(연합전공)"><option value="힐링바이오융합전공">힐링바이오융합전공</option></optgroup>')}
              //data 15 19학번 - 연합전공을 골랐을 때 3번 셀렉트 박스에 나오는 선택지


              else if(data == "디자대") {
          $('#mb_3').html('<option disabled>Now Choose Department...</option><optgroup label="디자인학부"><option value="산업디자인전공">산업디자인전공</option><option value="실내디자인전공">실내디자인전공</option><option value="패션디자인전공">패션디자인전공</option></optgroup><optgroup label="미디어학부"><option value="시각영상디자인전공">시각영상디자인전공</option><option value="미디어콘텐츠전공">미디어콘텐츠전공</option><option value="조형예술학과">조형예술학과</option></optgroup>');}
              //data 21 18학번 - 디자인대학을 골랐을 때 3번 셀렉트 박스에 나오는 선택지


              else if(data == "인사대") {
          $('#mb_3').html('<option disabled>Now Choose Department...</option><optgroup label="국제비지니스학부"><option value="경영학전공">경영학전공</option><option value="경제통상학전공">경제통상학전공</option></optgroup><optgroup label="공공인재학부"><option value="경찰학과">경찰학과</option><option value="문헌정보학과">문헌정보학과</option><option value="유아교육과">유아교육과</option></optgroup><optgroup label="문화콘텐츠학부"><option value="신문방송학전공">신문방송학전공</option><option value="동화한국어문화전공">동화한국어문화전공</option><option value="영어문화학전공">영어문화학전공</option></optgroup>');}
              //data 22 18학번 - 인문사회융합대학을 골랐을 때 3번 셀렉트 박스에 나오는 선택지

              else if(data == "과기대") {
          $('#mb_3').html('<option disabled>Now Choose Department...</option><optgroup label="ICT융합공학부"><option value="기계전자전공">기계전자전공</option><option value="소프트웨어">소프트웨어전공</option><option value="의학공학전공">의학공학전공</option></optgroup><optgroup label="친환경과학부"><option value="녹색환경시스템전공">녹색환경시스템전공</option><option value="에너지소재학전공">에너지소재학전공</option></optgroup>')}
              //data 23 18학번 - 과학기술대학을 골랐을 때 3번 셀렉트 박스에 나오는 선택지

              else if(data == "의생대") {
          $('#mb_3').html('<option disabled>Now Choose Department...</option><optgroup label="간호복지학부"><option value="간호학과">간호학과</option><option value="사회복지학과">사회복지학과</option></optgroup><optgroup label="바이오융합화학부"><option value="바이오의약학전공">바이오의약학전공</option><option value="바이오생명공학전공">바이오생명공학전공</option><option value="식품학전공">식품학전공</option><option value="뷰티화장품전공">뷰티화장품전공</option></optgroup><optgroup label="스포츠헬스과학부"><option value="스포츠건강학전공">스포츠건강학전공</option><option value="골프산업전공">골프산업전공</option></optgroup>')}
              //data 24 18학번 - 의료생명대학을 골랐을 때 3번 셀렉트 박스에 나오는 선택지

              else if(data == "연합전공") {
          $('#mb_3').html('<option disabled>Now Choose Department...</option><option value="HIT 창의융합전공" >HIT 창의융합전공</option><optgroup label="힐링바이오공유대학"><option value="바이오기능성식품융합전공">바이오기능성식품융합전공</option><option value="당뇨바이오헬스케어융합전공">당뇨바이오헬스케어융합전공</option><option value="반려동물융합전공">반려동물융합전공</option></optgroup><optgroup label="사회맞춤형학과(연합전공)"><option value="힐링바이오융합전공">힐링바이오융합전공</option></optgroup>')}
              //data 25 18학번 - 연합전공을 골랐을 때 3번 셀렉트 박스에 나오는 선택지


             else if(data == "미커대")  {
          $('#mb_3').html('<option disabled>Now Choose Department...</option><optgroup label="방송영상학부"><option value="신문방송학전공">신문방송학전공</option><option value="다이나믹미디어전공">다이나믹미디어전공</option></optgroup><optgroup label="문화컨텐츠학부"><option value="동화미디어콘텐츠전공">동화미디어콘텐츠전공</option><option value="한국어문콘텐츠전공">한국어문콘텐츠전공</option><option value="영어문화학전공">영어문화학전공</option>');}
             //data 31 17학번 - 미디어커뮤니케이션대학을 골랐을 때 3번 셀렉트 박스에 나오는 선택지

             else if(data == "디자대")  {
          $('#mb_3').html('<option disabled>Now Choose Department...</option><optgroup label="디자인학부"><option value="패션디자인전공">패션디자인전공</option><option value="뷰티디자인">뷰티디자인전공</option><option value="산업디자인">산업디자인전공</option><option value="시각광고디자인전공">시각광고디자인전공</option><option value="영상디자인전공">영상디자인전공</option><option value="실내디자인전공">실내디자인전공</option></optgroup><optgroup label="조형예술학부"><option value="도자디자인전공">도자디자인전공</option><option value="금속디자인전공">금속디자인전공</option><option value="회화전공">회화전공</option></optgroup>');}
             //data 32 17학번 - 디자인대학을 골랐을 때 3번 셀렉트 박스에 나오는 선택지

             else if(data == "국비대")  {
          $('#mb_3').html('<option disabled>Now Choose Department...</option><optgroup label="경영경제학부"><option value="경영학전공">경영학전공</option><option value="경제학전공">경제학전공</option></optgroup><optgroup label="국제통상문화학부"><option value="국제통상학전공">국제통상학전공</option><option value="관세물류전공">관세물류전공</option><option value="국제지역문화학전공">국제지역문화학전공</option></optgroup>');}
             //data 33 17학번 - 국제비지니스대학을 골랐을 때 3번 셀렉트 박스에 나오는 선택지

             else if(data == "공인대")  {
          $('#mb_3').html('<option disabled>Now Choose Department...</option><option value="경찰학과">경찰학과</option><option value="문헌정보학과">문헌정보학과</option><option value="유아교육과">유아교육과</option><optgroup label="행정복지학부"><option value="행정학전공">행정학전공</option><option value="사회복지학전공">사회복지학전공</option></optgroup>');}
             //data 34 17학번 - 공공인재대학을 골랐을 때 3번 셀렉트 박스에 나오는 선택지

             else if(data == "과기대")  {
          $('#mb_3').html('<option disabled>Now Choose Department...</option><option value="녹색기술융합학과">녹색기술융합학과</option><optgroup label="ICT융합공학부"><option value="나노전자기계공학전공">나노전자기계공학전공</option><option value="컴퓨터공학전공">컴퓨터공학전공</option><option value="의학공학전공">의학공학전공</option></optgroup><optgroup label="스포츠과학부"><option value="생활체육학전공">생활체육학전공</option><option value="골프지도전공">골프지도전공</option></optgroup>');}
             //data 35 17학번 - 과학기술대학을 골랐을 때 3번 셀렉트 박스에 나오는 선택지

             else if(data == "의생대")  {
          $('#mb_3').html('<option disabled>Now Choose Department...</option><option value="간호학과">간호학과</option><option value="HIT 창의융합전공">HIT 창의융합전공(연합전공)</option></option><optgroup label="바이오융합과학부"><option value="의생명화학전공">의생명화학전공</option><option value="생명공학전공">생명공학전공</option><option value="식품생명과학전공">식품생명과학전공</option></optgroup>');}
             //data 36 17학번 - 의료생명대학을 골랐을 때 3번 셀렉트 박스에 나오는 선택지


              else if(data == "미커대")  {
          $('#mb_3').html('<option disabled>Now Choose Department...</option><option value="신문방송학과">신문방송학과</option><option value="동화미디어콘텐츠학과">동화미디어콘텐츠학과</option><option value="영미어문학과">영미어문학과</option><optgroup label="다이나믹미디어학과"><option value="방송영상전공 트랙">방송영상전공 트랙</option><option value="광고홍보전공 트랙">광고홍보전공 트랙</option></optgroup><optgroup label="커뮤니케이션문화학부"><option value="한국어문화전공 트랙">한국어문화전공 트랙</option><option value="417">미디어문예창작전공 트랙</option></optgroup>');}
             //data 41 16학번 - 미디어커뮤니케이션대학을 골랐을 때 3번 셀렉트 박스에 나오는 선택지

             else if(data == "디자대")  {
          $('#mb_3').html('<option disabled>Now Choose Department...</option><option value="실내디자인학과">실내디자인학과</option><option value="회화학과">회화학과</option><optgroup label="패션디자인학부"><option value="패션디자인전공">패션디자인전공</option><option value="뷰티디자인전공">뷰티디자인전공</option></optgroup><optgroup label="산업디자인학부"><option value="산업디자인전공">산업디자인전공</option><option value="도자디자인전공">도자디자인전공</option><option value="금속디자인전공">금속디자인전공</option></optgroup><optgroup label="시각영상디자인학부"><option value="시각광고디자인전공">시각광고디자인전공</option><option value="영상디자인전공">영상디자인전공</option></optgroup>');}
             //data 42 16학번 - 디자인대학을 골랐을 때 3번 셀렉트 박스에 나오는 선택지

             else if(data == "국비대")  {
          $('#mb_3').html('<option disabled>Now Choose Department...</option><option value="영어학과">영어학과</option><optgroup label="경영경제학부"><option value="경영학전공 트랙">경영학전공 트랙</option><option value="경제학전공 트랙">경제학전공 트랙</option></optgroup><optgroup label="국제통상문화학부"><option value="국제통상학전공">국제통상학전공</option><option value="관세물류전공">관세물류전공</option><option value="국제지역문화학전공">국제지역문화학전공</option></optgroup>');}
             //data 43 16학번 - 국제비지니스대학을 골랐을 때 3번 셀렉트 박스에 나오는 선택지

             else if(data == "공인대")  {
          $('#mb_3').html('<option disabled>Now Choose Department...</option><option value="경찰학과">경찰학과</option><option value="유아교육과">유아교육과</option><option value="문헌정보학과">문헌정보학과</option><optgroup label="행정복지학부"><option value="행정학전공">행정학전공</option><option value="사회복지학전공">사회복지학전공</option></optgroup><optgroup label="자율전공학부"></optgroup>');}
             //data 44 16학번 - 공공인재대학을 골랐을 때 3번 셀렉트 박스에 나오는 선택지

             else if(data == "과기대") {
          $('#mb_3').html('<option disabled>Now Choose Department...</option><option value="녹색기술융합학과">녹색기술융합학과</option><option value="컴퓨터공학과">컴퓨터공학과</option><option value="나노전자기계공학과">나노전자기계공학과</option><optgroup label="스포츠과학부"><option value="생활체육학전공">생활체육학전공</option><option value="골프지도전공">골프지도전공</option></optgroup>');}
             //data 45 16학번 - 과학기술대학을 골랐을 때 3번 셀렉트 박스에 나오는 선택지

             else if(data == "의생대") {
          $('#mb_3').html('<option disabled>Now Choose Department...</option><option value="생명공학과">생명공학과</option><option value="간호학과">간호학과</option><optgroup label="의생명화학과"><option value="응용생화학전공 트랙">응용생화학전공 트랙</option><option value="응용화학전공 트랙">응용화학전공 트랙</option></optgroup><optgroup label="식품생명과학부"><option value="동물성식품소재학전공 트랙">동물성식품소재학전공 트랙</option><option value="식품영양학전공 트랙">식품영양학전공 트랙</option></optgroup><optgroup label="의학공학부"><option value="의용전자공학전공 트랙">의용전자공학전공 트랙</option><option value="의용메카트로닉스전공 트랙">의용메카트로닉스전공 트랙</option></optgroup>');}
             //data 46 16학번 - 의료생명대학을 골랐을 때 3번 셀렉트 박스에 나오는 선택지


             else if(data == "미커대")  {
          $('#mb_3').html('<option disabled>Now Choose Department...</option><option value="신문방송학과">신문방송학과</option><option value="동화미디어콘텐츠학과">동화미디어콘텐츠학과</option><option value="영미어문학과">영미어문학과</option><optgroup label="다이나믹미디어학과"><option value="방송영상전공 트랙">방송영상전공 트랙</option><option value="광고홍보전공 트랙">광고홍보전공 트랙</option></optgroup><optgroup label="커뮤니케이션문화학부"><option value="한국어문화전공 트랙">한국어문화전공 트랙</option><option value="미디어문예창작전공 트랙">미디어문예창작전공 트랙</option></optgroup>');}
             //data 51 15학번 - 미디어커뮤니케이션대학을 골랐을 때 3번 셀렉트 박스에 나오는 선택지

             else if(data == "디자대")  {
          $('#mb_3').html('<option disabled>Now Choose Department...</option><option value="실내디자인학과">실내디자인학과</option><option value="회화학과">회화학과</option><optgroup label="패션디자인학부"><option value="패션디자인전공">패션디자인전공</option><option value="뷰티디자인전공">뷰티디자인전공</option></optgroup><optgroup label="산업디자인학부"><option value="산업디자인전공">산업디자인전공</option><option value="도자디자인전공">도자디자인전공</option><option value="금속디자인전공">금속디자인전공</option></optgroup><optgroup label="시각영상디자인학부"><option value="시각광고디자인전공">시각광고디자인전공</option><option value="영상디자인전공">영상디자인전공</option></optgroup>');}
             //data 52 15학번 - 디자인대학을 골랐을 때 3번 셀렉트 박스에 나오는 선택지

             else if(data == "국비대")  {
          $('#mb_3').html('<option disabled>Now Choose Department...</option><option value="영어학과">영어학과</option><optgroup label="경영경제학부"><option value="경영학전공 트랙">경영학전공 트랙</option><option value="경제학전공 트랙">경제학전공 트랙</option></optgroup><optgroup label="국제통상문화학부"><option value="국제통상학전공">국제통상학전공</option><option value="관세물류전공">관세물류전공</option><option value="국제지역문화학전공">국제지역문화학전공</option></optgroup>');}
             //data 53 15학번 - 국제비지니스대학을 골랐을 때 3번 셀렉트 박스에 나오는 선택지

             else if(data == "공인대")  {
          $('#mb_3').html('<option disabled>Now Choose Department...</option><option value="경찰학과">경찰학과</option><option value="유아교육과">유아교육과</option><option value="문헌정보학과">문헌정보학과</option><optgroup label="행정복지학부"><option value="행정학전공">행정학전공</option><option value="사회복지학전공">사회복지학전공</option></optgroup><optgroup label="자율전공학부"></optgroup>');}
             //data 54 15학번 - 공공인재대학을 골랐을 때 3번 셀렉트 박스에 나오는 선택지

             else if(data == "과기대") {
          $('#mb_3').html('<option disabled>Now Choose Department...</option><option value="녹핵기술융합학과">녹색기술융합학과</option><option value="컴퓨터공학과">컴퓨터공학과</option><option value="나노전자기계공학과">나노전자기계공학과</option><optgroup label="스포츠과학부"><option value="생활체육학전공">생활체육학전공</option><option value="골프지도전공">골프지도전공</option></optgroup>');}
             //data 55 15학번 - 과학기술대학을 골랐을 때 3번 셀렉트 박스에 나오는 선택지

             else if(data == "의생대") {
          $('#mb_3').html('<option disabled>Now Choose Department...</option><option value="생명공학과">생명공학과</option><option value="간호학과">간호학과</option><optgroup label="의생명화학과"><option value="응용생화학전공 트랙">응용생화학전공 트랙</option><option value="응용화학전공 트랙">응용화학전공 트랙</option></optgroup><optgroup label="식품생명과학부"><option value="동물성식품소재학전공 트랙">동물성식품소재학전공 트랙</option><option value="식품영양학전공 트랙">식품영양학전공 트랙</option></optgroup><optgroup label="의학공학부"><option value="의용전자공학전공 트랙">의용전자공학전공 트랙</option><option value="의용메카트로닉스전공 트랙">의용메카트로닉스전공 트랙</option></optgroup>');}
              //data 46 15학번 - 의료생명대학을 골랐을 때 3번 셀렉트 박스에 나오는 선택지


              else if(data == "미커대")  {
             $('#mb_3').html('<option disabled>Now Choose Department...</option><option value="신문방송학과">신문방송학과</option><option value="동화미디어콘텐츠학과">동화미디어콘텐츠학과</option><option value="영미어문학과">영미어문학과</option><optgroup label="다이나믹미디어학과"><option value="방송영상전공 트랙">방송영상전공 트랙</option><option value="광고홍보전공 트랙">광고홍보전공 트랙</option></optgroup><optgroup label="커뮤니케이션문화학부"><option value="한국어문화전공 트랙">한국어문화전공 트랙</option><option value="미디어문예창작전공 트랙">미디어문예창작전공 트랙</option></optgroup>');}
               //data 61 14학번 - 미디어커뮤니케이션대학을 골랐을 때 3번 셀렉트 박스에 나오는 선택지

              else if(data == "디자대")  {
             $('#mb_3').html('<option disabled>Now Choose Department...</option><option value="실내디자인학과">실내디자인학과</option><option value="회화학과">회화학과</option><optgroup label="패션디자인학부"><option value="패션디자인전공">패션디자인전공</option><option value="뷰티디자인전공">뷰티디자인전공</option></optgroup><optgroup label="산업디자인학부"><option value="산업디자인전공">산업디자인전공</option><option value="도자디자인전공">도자디자인전공</option><option value="금속디자인전공">금속디자인전공</option></optgroup><optgroup label="시각영상디자인학부"><option value="시각광고디자인전공">시각광고디자인전공</option><option value="영상디자인전공">영상디자인전공</option></optgroup>');}
               //data 62 14학번 - 디자인대학을 골랐을 때 3번 셀렉트 박스에 나오는 선택지

              else if(data == "국비대")  {
             $('#mb_3').html('<option disabled>Now Choose Department...</option><option value="영어학과">영어학과</option><optgroup label="경영경제학부"><option value="경영학전공 트랙">경영학전공 트랙</option><option value="경제학전공 트랙">경제학전공 트랙</option></optgroup><optgroup label="국제통상문화학부"><option value="국제통상학전공">국제통상학전공</option><option value="관세물류전공">관세물류전공</option><option value="국제지역문화학전공">국제지역문화학전공</option></optgroup>');}
               //data 63 14학번 - 국제비지니스대학을 골랐을 때 3번 셀렉트 박스에 나오는 선택지

              else if(data == "공인대")  {
             $('#mb_3').html('<option disabled>Now Choose Department...</option><option value="경찰학과">경찰학과</option><option value="유아교육과">유아교육과</option><option value="문헌정보학과">문헌정보학과</option><optgroup label="행정복지학부"><option value="행정학전공">행정학전공</option><option value="사회복지학전공">사회복지학전공</option></optgroup><optgroup label="자율전공학부"></optgroup>');}
               //data 64 14학번 - 공공인재대학을 골랐을 때 3번 셀렉트 박스에 나오는 선택지

               else if(data == "과기대") {
             $('#mb_3').html('<option disabled>Now Choose Department...</option><option value="녹색기숧융합학과">녹색기술융합학과</option><option value="컴퓨터공학과">컴퓨터공학과</option><option value="나노전자기계공학과">나노전자기계공학과</option><optgroup label="스포츠과학부"><option value="생활체육학전공">생활체육학전공</option><option value="골프지도전공">골프지도전공</option></optgroup>');}
               //data 65 14학번 - 과학기술대학을 골랐을 때 3번 셀렉트 박스에 나오는 선택지

               else if(data == "의생대") {
             $('#mb_3').html('<option disabled>Now Choose Department...</option><option value="생명공학과">생명공학과</option><option value="간호학과">간호학과</option><optgroup label="의생명화학과"><option value="응용생화학전공 트랙">응용생화학전공 트랙</option><option value="응용화학전공 트랙">응용화학전공 트랙</option></optgroup><optgroup label="식품생명과학부"><option value="동물성식품소재학전공 트랙">동물성식품소재학전공 트랙</option><option value="식물영양학전공 트랙">식품영양학전공 트랙</option></optgroup><optgroup label="의학공학부"><option value="의용전자공학전공 트랙">의용전자공학전공 트랙</option><option value="의용메카트로닉스전공 트랙">의용메카트로닉스전공 트랙</option></optgroup>');}
               //data 66 14학번 - 의료생명대학을 골랐을 때 3번 셀렉트 박스에 나오는 선택지


               else if(data == "미커대")  {
             $('#mb_3').html('<option disabled>Now Choose Department...</option><option value="신문방송학과">신문방송학과</option><option value="동화마디어콘텐츠학과">동화미디어콘텐츠학과</option><option value="영미어문학과">영미어문학과</option><optgroup label="다이나믹미디어학과"><option value="방송영상전공 트랙">방송영상전공 트랙</option><option value="광고홍보전공 트랙">광고홍보전공 트랙</option></optgroup><optgroup label="커뮤니케이션문화학부"><option value="한국어문화전공 트랙">한국어문화전공 트랙</option><option value="미디어문예창작전공 트랙">미디어문예창작전공 트랙</option></optgroup>');}
                //data 71 13학번 - 미디어커뮤니케이션대학을 골랐을 때 3번 셀렉트 박스에 나오는 선택지

               else if(data == "디자대")  {
             $('#mb_3').html('<option disabled>Now Choose Department...</option><option value="실내디자인학과">실내디자인학과</option><option value="회화학과">회화학과</option><optgroup label="패션디자인학부"><option value="패션디자인전공">패션디자인전공</option><option value="뷰티디자인전공">뷰티디자인전공</option></optgroup><optgroup label="산업디자인학부"><option value="산업디자인전공">산업디자인전공</option><option value="도자디자인전공">도자디자인전공</option><option value="금속디자인전공">금속디자인전공</option></optgroup><optgroup label="시각영상디자인학부"><option value="시각광고디자인전공">시각광고디자인전공</option><option value="영상디자인전공">영상디자인전공</option></optgroup>');}
                 //data 72 13학번 - 디자인대학을 골랐을 때 3번 셀렉트 박스에 나오는 선택지

               else if(data == "국비대")  {
             $('#mb_3').html('<option disabled>Now Choose Department...</option><option value="영어학과">영어학과</option><optgroup label="경영경제학부"><option value="경영학전공 트랙">경영학전공 트랙</option><option value="경제학전공 트랙">경제학전공 트랙</option></optgroup><optgroup label="국제통상문화학부"><option value="국제통상학전공">국제통상학전공</option><option value="관세물류전공">관세물류전공</option><option value="국제지역문화학전공">국제지역문화학전공</option></optgroup>');}
                 //data 73 13학번 - 국제비지니스대학을 골랐을 때 3번 셀렉트 박스에 나오는 선택지

               else if(data == "공인대")  {
             $('#mb_3').html('<option disabled>Now Choose Department...</option><option value="경찰학과">경찰학과</option><option value="유아교육과">유아교육과</option><option value="문헌정보학과">문헌정보학과</option><optgroup label="행정복지학부"><option value="행정학전공">행정학전공</option><option value="사회복지학전공">사회복지학전공</option></optgroup><optgroup label="자율전공학부"></optgroup>');}
                 //data 74 13학번 - 공공인재대학을 골랐을 때 3번 셀렉트 박스에 나오는 선택지

                else if(data == "과기대") {
             $('#mb_3').html('<option disabled>Now Choose Department...</option><option value="녹색기술융합학과">녹색기술융합학과</option><option value="컴퓨터공학과">컴퓨터공학과</option><option value="나노전자기계공학과">나노전자기계공학과</option><optgroup label="스포츠과학부"><option value="생활체육학전공">생활체육학전공</option><option value="골프지도전공">골프지도전공</option></optgroup>');}
                 //data 75 13학번 - 과학기술대학을 골랐을 때 3번 셀렉트 박스에 나오는 선택지

                else if(data == "의생대") {
             $('#mb_3').html('<option disabled>Now Choose Department...</option><option value="생명공학과">생명공학과</option><option value="간호학과">간호학과</option><optgroup label="의생명화학과"><option value="응용생화학전공 트랙">응용생화학전공 트랙</option><option value="응용화학전공 트랙">응용화학전공 트랙</option></optgroup><optgroup label="식품생명과학부"><option value="동물성식품소재학전공 트랙">동물성식품소재학전공 트랙</option><option value="식품영양학전공 트랙">식품영양학전공 트랙</option></optgroup><optgroup label="의학공학부"><option value="의용전자공학전공 트랙">의용전자공학전공 트랙</option><option value="의용메카트로닉스전공 트랙">의용메카트로닉스전공 트랙</option></optgroup>');}
                 //data 76 13학번 - 의료생명대학을 골랐을 때 3번 셀렉트 박스에 나오는 선택지



             else {
             $('#mb_3').html('<option>박스3-2 선택</option><option value="321">박스3-2-1</option><option value="322">박스3-2-2</option>');
          }
          $('.selectpicker').selectpicker("refresh");
        }
        
        $(window).on('load', function () {

            $('.selectpicker').selectpicker({
                'selectedText': 'cat'
            });
            // $('.selectpicker').selectpicker('hide');
        });
      </script><!--2번째셀렉트박스와 3번째셀렉트박스 내용물이 있는 스크립트-->
</head><!--head의 끝!-->


<body class="bg-light">

<nav class="navbar navbar-default" role="navigation" >
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Join us to learn about "Graduation Requirements"</a>
    </div>
  </div>
</nav>
    <div class="container">
        <div class="py-5 text-left">
            <img class="d-block mx-auto mb-4" src="../img/logo.jpg" alt="" width="300" height="150">
            <h2>Sign Up</h2>
            <p class="lead">간단한 정보만 기재하면 됩니다.</p>
        </div>
            <form class="card p-2"></form>
    </div>


<form class="form-signin" method = "post" action="../check/member_ok.php">
    <div class="container">
        <div class="outer">
            <div class="inner">
                <div class="centered">
                    <div class="col-md-8 order-md-1">
                        <form class="needs-validation" novalidate></form>
						
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" name="firstName" placeholder="이름" value="" maxlength="2" required autofocus>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" name="lastName" placeholder="성" value="" maxlength="5" required>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                        </div>
                    </div>
                    <br>
					 <div class="mb-3">
                        <label for="id">ID <span class="text-muted"></span></label>
                        <input type="text" class="form-control" name="id" placeholder="아이디" maxlength="20" required>
                            <div class="invalid-feedback">
                                Please enter a valid ID.
                            </div>
                    </div>
                    <br>
					 <div class="mb-3">
                        <label for="password">Password <span class="text-muted"></span></label>
                        <input type="password" class="form-control" name="password" placeholder="비밀번호" maxlength="20" required>
                            <div class="invalid-feedback">
                                Please enter a valid Password.
                            </div>
                    </div>
                    <br>
                    <div class="mb-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label for="name"><span class="input-group-username">Username</span></label>
                            </div>
                            <input type="text" class="form-control" name="name" placeholder="닉네임" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Your username is required.
                                </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="country">Department</label>
                                <div id="comment">
                                    <div class="col-lg-4">
                                        <select title="Choose Admission year.." name="mb_1" class="form-control selectpicker show-tick"  data-live-search="true" onChange="change_box1(this.value)" required>
                                            <option >Choose Admission year..</option>
                                            <option title="19학번" value="2019">Class of 23 (19학번)</option>
                                            <option title="18학번" value="2018">Class of 22 (18학번)</option>
                                            <option title="17학번" value="2017">Class of 21 (17학번)</option>
                                            <option title="16학번" value="2016">Class of 20 (16학번)</option>
                                            <option title="15학번" value="2015">Class of 19 (15학번)</option>
                                            <option title="14학번" value="2014">Class of 18 (14학번)</option>
                                            <option title="13학번" value="2013">Class of 17 (13학번)</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <select id="mb_2" name="mb_2"  required class="custom-select d-block w-100 form-control input-md selectpicker show-tick" data-live-search="true" onChange="change_box2(this.value)">
                                            <option value="앞에 선택">Choose College..</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <select id="mb_3" name="mb_3" required class="custom-select d-block w-100 form-control input-md selectpicker show-tick" data-live-search="true">
                                            <option value="앞에 선택">Choose Department..</option>
                                        </select>
                                    </div>
                                </div>
                            <div class="invalid-feedback">
                                Please select a valid department.
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                        <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="same-address" required>
                        <label class="custom-control-label" for="same-address">
                            <a href="javascript:PopWin('personalinformation.html','450','500','no');">
                                <h6>
                                    <strong>건국대학교 졸업요건 회원가입을 위한 개인정보 수집·이용(및 제공)에 대한 내용을 숙지하였습니다.</strong>
                                </h6>
                            </a>
                        </label>
                        </div>
                        <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="save-info" required>
                        <label class="custom-control-label" for="save-info">
                            <a href="javascript:PopWin('originalinformation.html','450', '500', 'no');">
                                <h6>
                                    <strong>건국대학교 졸업요건 회원가입을 위한 고유식별정보 수집·이용(및 제공)에 대한 내용을 숙지하였습니다.</strong>
                                </h6>
                            </a>
                        </label>
                        </div>
                        <br>
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Complete Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
    </body>
</html>