<html>
<head>
  <title>form태그 input태그</title>
  
</head>
<style>
 table{
   text-align: center;
 }
 td{
   width: 100px;
   height: 30px;
   border: 1px solid;
 }
</style>

<body>
  <!-- //<center> -->
<h1>
회원가입</h1>
<form>
    <table>
<tr>
    <td>First Name:</td>
    <td><input name="firstname" type="text" value="first name" /><br /></td>
  </tr>
<tr>
    <td>Last Nane:</td>
    <td><input name="lastname" type="text" /> </td>
  </tr>
<tr> <td> id :</td>
    <td><input maxlength="10" name="id" type="text" /><br /></td>
  </tr>
<tr>
    <td>password :</td>
    <td><input maxlength="12" name="pwd" type="password" /> </td>
  </tr>
<tr> <td> 취미 :</td>
    <td><input name="hobby" type="checkbox" value="travel" />여행
    <input name="hobby" type="checkbox" value="cook" /> 요리
    <input name="hobby" type="checkbox" value="workout" />운동
    <input name="hobby" type="checkbox" value="game" />게임 </td>
  </tr>
<tr> <td> 결혼유무 :</td>
    <td><input name="marry" type="radio" value="yes" />기혼
    <input name="marry" type="radio" value="no" />미혼 </td>
  </tr>
<tr> <td> 성별 :</td>
    <td><input name="sex" type="radio" value="male" />남자
    <input name="sex" type="radio" value="female" />여자 <br /> </td>
  </tr>
<tr> <td> 이메일 :</td>
    <td><input name="email" type="text" value="" />@
    <select name="email">
      <option value="google.com">google.com</option>
      <option value="naver.com">naver.com</option>
      <option value="daum.net">daum.net</option>
      <option value="yahoo.com">yahoo.com</option>
    </select></td>
  </tr>
<tr><td>좋아하는 색상 :</td>
          <td>  <input name="col" type="color" /> </td>
  </tr>
<tr> <td> 생일 :</td>
    <td><input name="birth" type="date" /></td>
  </tr>
<tr><td colspan="2"><textarea cols="80" name="document" rows="8">
      자기소개를 해보아요~
    </textarea></td></tr>
<tr><td colspan="2"><input type="submit" value="제출" /></td></tr>
</table>
</form>
<!--</center>-->
</body>
</html>