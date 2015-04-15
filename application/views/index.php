<div data-role="page" data-theme="a">
  <div data-role="header">
  </div>
	<div data-role="content">
	  <h3>工作帮！</h3>
	  <p>为您呈现最真实的工作信息！</p>
	  <p>为您推荐最合适的工作岗位！</p>
	  <p>为您搭建与企业之间交流的平台！</p>
	  <h2>立即注册下载，更多惊喜等着您！！！</h2>
		<form method="post" action="#">
			<label for="phoneNumber">手机号:</label>
			<span id="msg"></span>
			<input type="text" name="phoneNumber" id="phoneNumber" onBlur="checkNumber()" placeholder="手机号" />
			<div class="ui-grid-b">
				<label for="verificationCode">验证码:</label>
     				<div class="ui-block-a" style="border: 0px solid transparent;">
     				<input type="text" name="verificationCode" id="verificationCode"  placeholder="验证码">
     				</div>
     				<div class="ui-block-b" style="border: 0px solid transparent;">
     				</div>
     				<div class="ui-block-c" style="border: 0px solid transparent;">
     				<button id="btn" data-corners="true">获取验证码</button>
     				</div>
   			</div>
			<input type="button" id="regist" value="注册">
		</form>
	</div>
</div>
<script type="text/javascript">
var wait=60;
var xmlHttp;
function time(o) {
		if (wait == 0) {
			o.removeAttribute("disabled");
			$("#btn").text("获取验证码");
			wait = 60;
		} else {
			o.value="重新发送(" + wait + ")";
			o.setAttribute("disabled", true);
			$("#btn").text(o.value);
			wait--;
			setTimeout(function() {
				time(o)
			},
			1000)
		}
	}
document.getElementById("btn").onclick=function(){time(this);}
/*
	* ajax phone number check
 */


function createXMLHttp()
{
	if( window.XMLHttpRequest) {
		xmlHttp = new XMLHttpRequest();
	}
	else {
		xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
}

/*
	* 验证手机号的格式，以及ajax响应是否被注册
 */

function checkNumber() {
	var phoneNum = $("#phoneNumber").val();
	var reg = /^[1][358]d{9}$/;
	if(phoneNum == "")
	{
		alert("手机号为空!");
	}
	else if(!reg.test(phoneNum))
	{
		alert("手机号格式输入错误!");
	}
	else
	{
		createXMLHttp();
		xmlHttp.onreadystatechange = callback;
		xmlHttp.open("post", "ajax.php?phonenumber=" + phoneNum);
		xmlHttp.send();
		$("#msg").innerHTML="";
	}
}

function callback() {
	if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {
		var flag = xmlHttp.response;
		if(flag == false);
		$("#msg").innnerHTML="该手机号已被注册";
	}
}


</script>
