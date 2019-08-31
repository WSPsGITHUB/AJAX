<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">


$(document).ready(init);


function init() {
	$("#letter").change(letterChange);
}

function letterChange() {
	var s = $("#letter option:selected").text();
	$.get('getLetterNumberi1.php?letter=' + s, letterChangeDataBack);   //傳出傳入
	$.get('getLetterNumberi2.php?letter=' + s, letterChangeDataBack2); 
}

function letterChangeDataBack(data) {
	$("#letterNumber").html(data);
}

function letterChangeDataBack2(data2) {
	$("#myFormId").attr("action",data2);	
}


</script>
</head>

<body>
	<form id="myFormId" method="post" action="">
		<select name="letter" id="letter">
			<option value="0">台北</option>
			<option value="1" >台中</option>
			<option value="2">台南</option>
		</select>&nbsp;|&nbsp; 
		<select name="letterNumber" id="letterNumber">
			<option value="0">請選擇縣市</option>
			
		</select> 
		<input type="submit" value="OK" /> 
		<br><div id="test"></div>
	</form>
</body>
</html>