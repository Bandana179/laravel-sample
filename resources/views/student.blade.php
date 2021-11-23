<html>
<head>
<title>Student Registration Form Using Table in HTML</title>
<style>
   
h2{
 font-family: Sans-serif; 
 font-size: 24px;     
 font-style: normal; 
 font-weight: bold; 
 color: blue;
 text-align: center; 
 text-decoration: underline
}
table{
 font-family: verdana; 
 color:white; 
 font-size: 16px; 
 font-style: normal;
 font-weight: bold;
 background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);  
 border-collapse: collapse; 
 border: 4px solid #000000;
 border-style: dashed;
  
}
table.inner{
 border: 10px
}
input[type=text], input[type=email], input[type=number]{
 width: 50%;
 padding: 6px 12px;
 margin: 5px 0;
 box-sizing: border-box;
}
input[type=submit], input[type=reset]{
 width: 15%;
 padding: 8px 12px;
 margin: 5px 0;
 box-sizing: border-box;
}
</style>
</head>
<body>
<h2>Student Registration Form Using Table in HTML</h3>
    <form action="{{$url }}"  method="POST" >
    @csrf
<table align="center" cellpadding = "10">
<!--------------------- First Name ------------------------------------------>
<tr>
<td> Name</td>
<td><input type="text" name="name" maxlength="50" placeholder="Ghanendra" />
(Max 50 Characters Allowed)
</td>
</tr>
<!-------------------------- Email ID ------------------------------------->
<tr>
<td>Email ID</td>
<td><input type="email" name="email" maxlength="100" placeholder="yghanendra@gmail.com"/></td>
</tr>
<!---------------------- Gender ------------------------------------->
<tr>
<td>Gender</td>
<td>
<input type="radio" name="gender" value="M" />
Male
<input type="radio" name="gender" value="F" />
Female
<input type="radio" name="gender" value="O" />
Other
</td>
</tr>
<tr>
    <td>Address<br /><br /><br /></td>
    <td><textarea name="address" rows="10" cols="50"></textarea></td>
    </tr>
    <tr>
        <td>Class</td>
        <td><input type="number" name="class"/></td>
        </tr>

<!--------------------------Date Of Birth----------------------------------->
<tr>
<td>Date of Birth(DOB)</td>
<td>
    <input type="date" name="date">
</td>
<tr>
    <td colspan="2" align="center">
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
    </td>
    </tr>
</table>
</form>
</body>
</html>