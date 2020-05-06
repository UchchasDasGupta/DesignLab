<script type = "text/javascript">
function validate()
{

	var RE_UID = /^\d{3}$/;
	var RE_PASS =/^(\w)+$/;
	var RE_NAME = /^[A-Za-z]+(\s)+[A-Za-z]+$/;
	var RE_CONTACTNO = /^\d{10,11}$/;
	var RE_EMAIL = /^(\w+[\-\.])*\w+@(\w+\.)+[A-Za-z]+$/;
	
	
	
var uid=document.getElementById("t1").value;
if(uid=="")
{
alert("USER ID can't be blank");
return false;
}
if(!RE_UID.test(uid))
{
	alert("user id has to be numaric & can't be more than 3 number");
	return false;
}

var pwd=document.getElementById("t2").value;
if(pwd=="")
{
alert("PASSWORD can't be blank");
return false;
}
if(!RE_PASS.test(pwd))
{
	alert("password has to be alphanumeric");
	return false;
}


var cpwd=document.getElementById("t3").value;
if(cpwd=="")
{
alert("CONFIRM PASSWORD can't be blank");
return false;
}
if(pwd!=cpwd)

{
	alert("password and confirm password have to be same");
	return false;
}

var name=document.getElementById("t4").value;
if(name=="")
{
alert("name can't be blank");
return false;
}
if(!RE_NAME.test(name))
{
	alert("name has to be alphabhet");
	return false;
}

var email=document.getElementById("t5").value;
if(email=="")
{
alert("EMAIL can't be blank");
return false;
}
if(!RE_EMAIL.test(email))
{
	alert("email has to be alphanumeric");
	return false;
}

var cnt=document.getElementById("t6").value;
if(cnt=="")
{
alert("CONTACT can't be blank");
return false;
}
if(!RE_CONTACTNO.test(cnt))
{
	alert("CONTACT has to be numeric");
	return false;
}
}

	
</script>
