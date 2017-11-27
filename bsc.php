<!Doctype html>
<html>
<head>
<title>Register</title>
</head>
<body>
<script>
function validate(){
	
	var name=document.form.fname.value;
	find_spcl_char=name.indexof("`")||name.indexof("!")||name.indexof("1")||name.indexof("2")||name.indexof("3")||name.indexof("4")||name.indexof("5")||name.indexof("6")||
	name.indexof("7")||name.indexof("8")||name.indexof("9")||name.indexof("0")||name.indexof("!")||name.indexof("@")||name.indexof("#")||name.indexof("$")||name.indexof("%")||
	name.indexof("^")||name.indexof("&")||name.indexof("*")||name.indexof("(")||name.indexof(")")||name.indexof("-")||name.indexof("~")||name.indexof("_")||name.indexof("+")||
	name.indexof("\\")||name.indexof("[")||name.indexof("]")||name.indexof("{")||	name.indexof("}")||name.indexof(";")||name.indexof(":")||name.indexof("'")||
	name.indexof("\"")||name.indexof(",")||	name.indexof(".")||name.indexof("`>")||name.indexof("?")||name.indexof("/")||name.indexof("<");
	
	var name1=document.form.lname.value;
	find_spcl_char=name1.indexof("`")||name1.indexof("!")||name1.indexof("1")||name1.indexof("2")||name1.indexof("3")||name1.indexof("4")||name1.indexof("5")||name1.indexof("6")||
	name1.indexof("7")||name1.indexof("8")||name1.indexof("9")||name1.indexof("0")||name1.indexof("!")||name1.indexof("@")||name1.indexof("#")||name1.indexof("$")||name1.indexof("%")||
	name1.indexof("^")||name1.indexof("&")||name1.indexof("*")||name1.indexof("(")||name1.indexof(")")||name1.indexof("-")||name1.indexof("~")||name1.indexof("_")||name1.indexof("+")||
	name1.indexof("\\")||name1.indexof("[")||name1.indexof("]")||name1.indexof("{")||	name1.indexof("}")||name1.indexof(";")||name1.indexof(":")||name1.indexof("'")||
	name1.indexof("\"")||name1.indexof(",")||	name1.indexof(".")||name1.indexof("`>")||name1.indexof("?")||name1.indexof("/")||name1.indexof("<");
	
	var name2=document.form.fthr.value;
	find_spcl_char=name2.indexof("`")||name2.indexof("!")||name2.indexof("1")||name2.indexof("2")||name2.indexof("3")||name2.indexof("4")||name2.indexof("5")||name2.indexof("6")||
	name2.indexof("7")||name2.indexof("8")||name2.indexof("9")||name2.indexof("0")||name2.indexof("!")||name2.indexof("@")||name2.indexof("#")||name2.indexof("$")||name2.indexof("%")||
	name2.indexof("^")||name2.indexof("&")||name2.indexof("*")||name2.indexof("(")||name2.indexof(")")||name2.indexof("-")||name2.indexof("~")||name2.indexof("_")||name2.indexof("+")||
	name2.indexof("\\")||name2.indexof("[")||name2.indexof("]")||name2.indexof("{")||	name2.indexof("}")||name2.indexof(";")||name2.indexof(":")||name2.indexof("'")||
	name2.indexof("\"")||name2.indexof(",")||	name2.indexof(".")||name2.indexof("`>")||name2.indexof("?")||name2.indexof("/")||name2.indexof("<");
	
	var name3=document.form.mthr.value;
	find_spcl_char=name3.indexof("`")||name3.indexof("!")||name3.indexof("1")||name3.indexof("2")||name3.indexof("3")||name3.indexof("4")||name3.indexof("5")||name3.indexof("6")||
	name3.indexof("7")||name3.indexof("8")||name3.indexof("9")||name3.indexof("0")||name3.indexof("!")||name3.indexof("@")||name3.indexof("#")||name3.indexof("$")||name3.indexof("%")||
	name3.indexof("^")||name3.indexof("&")||name3.indexof("*")||name3.indexof("(")||name3.indexof(")")||name3.indexof("-")||name3.indexof("~")||name3.indexof("_")||name3.indexof("+")||
	name3.indexof("\\")||name3.indexof("[")||name3.indexof("]")||name3.indexof("{")||	name3.indexof("}")||name3.indexof(";")||name3.indexof(":")||name3.indexof("'")||
	name3.indexof("\"")||name3.indexof(",")||	name3.indexof(".")||name3.indexof("`>")||name3.indexof("?")||name3.indexof("/")||name3.indexof("<");
	
	var name4=document.form.DOB.value;
	find_spcl_char=name4.indexof("`")||name4.indexof("!")||name4.indexof("1")||name4.indexof("2")||name4.indexof("3")||name4.indexof("4")||name4.indexof("5")||name4.indexof("6")||
	name4.indexof("7")||name4.indexof("8")||name4.indexof("9")||name4.indexof("0")||name4.indexof("!")||name4.indexof("@")||name4.indexof("#")||name4.indexof("$")||name4.indexof("%")||
	name4.indexof("^")||name4.indexof("&")||name4.indexof("*")||name4.indexof("(")||name4.indexof(")")||name4.indexof("-")||name4.indexof("~")||name4.indexof("_")||name4.indexof("+")||
	name4.indexof("\\")||name4.indexof("[")||name4.indexof("]")||name4.indexof("{")||	name4.indexof("}")||name4.indexof(";")||name4.indexof(":")||name4.indexof("'")||
	name4.indexof("\"")||name4.indexof(",")||	name4.indexof(".")||name4.indexof("`>")||name4.indexof("?")||name4.indexof("/")||name4.indexof("<");
	
	var name4=document.form.mobile.value;
	find_spcl_char=name5.indexof("`")||name5.indexof("!")||name5.indexof("1")||name5.indexof("2")||name5.indexof("3")||name5.indexof("4")||name5.indexof("5")||name5.indexof("6")||
	name5.indexof("7")||name5.indexof("8")||name5.indexof("9")||name5.indexof("0")||name5.indexof("!")||name5.indexof("@")||name5.indexof("#")||name5.indexof("$")||name5.indexof("%")||
	name5.indexof("^")||name5.indexof("&")||name5.indexof("*")||name5.indexof("(")||name5.indexof(")")||name5.indexof("-")||name5.indexof("~")||name5.indexof("_")||name5.indexof("+")||
	name5.indexof("\\")||name5.indexof("[")||name5.indexof("]")||name5.indexof("{")||	name5.indexof("}")||name5.indexof(";")||name5.indexof(":")||name5.indexof("'")||
	name5.indexof("\"")||name5.indexof(",")||	name5.indexof(".")||name5.indexof("`>")||name5.indexof("?")||name5.indexof("/")||name5.indexof("<");	
	
}	

</script>

<form action="insertion.php" method="POST" name="form">
<table cellpadding="0" cellspacing="0" border="2" align="center"  style="background-color:cyan" width="1000px" height="400px" >
<th colspan="4"><p style="font-size:25px">Personal Information</p></th>
<tr> <td> FIRST NAME: </td> <td> <input type="text" name="fname" required/ > </td> </tr>
<tr>  <td> LAST NAME: </td> <td> <input type="text" name="lname" requied/> </td> </tr>
<tr> <td> FATHERS' NAME: </td> <td> <input type="text" name="fthr" requied/> </td> </tr>
<tr> <td> MOTHER'S NAME: </td> <td> <input type="text" name="mthr" requied/> </<td> </tr>
<tr> <td> DOB: </td> <td> <input type=" number" name="dob" requied/> </td> </tr>
<tr> <td> Mobile No.: </td> <td> <input type="text" name="mobile"/> </tr>
<tr> <td> CATEGORY: </td> <td> <select name="dropdown">  <option value="OBC" > OBC </option>
												  <option value="SC" > SC </option>
												  <option value="GEN" selected> GEN </option>
												  <option value="ST"> ST </option> </select> </tr>
<tr> <td colspan="2"> Whether Physically Handicapped?:    <input type="radio" name="handy" value="Yes">Yes
			 <input type="radio" name="handy" value="no">No 
<p align="right" style="margin-right:20px"><input type="Submit" value="Register" onsubmit="validate();">  <input type="button" value="Cancel"></p>
</td></tr>
			 </table>
		</form>
		</body>
</html>