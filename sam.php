<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body onload="timer()">
	<p>Remaining time:</p>
	<p>Min : Sec</p>
<input type="text" id="dat" value="41" disabled style="width: 20px;color: lightseagreen;">
<input type="text" id="dats" value="60" disabled style="width: 20px;color: red;">
</body>
</html>
<script type="text/javascript">

	setInterval(timer,100);

	function timer(){
		var v=	document.getElementById('dat').value;
		var time = parseInt(v);
		time = time-1;
		if (time!=0) {
			document.getElementById('dat').value =time;
		}
		if (time==0) {
			document.getElementById('click').setAction=click;
		}
		
		 
		
	}
	setInterval(secTimer,1000)
	function secTimer(){
		var x = document.getElementById('dats').value;
		var stimer = parseInt(x);
		stimer = stimer-1;
		if (stimer!=0) {
			document.getElementById("dats").value=stimer;
		}
		if (stimer==0) {
		document.getElementById("dats").value=60;
		}

	}
	
	
</script>
<form action="oh.php" method="get">
	
	<input type="text" name="safal">
	<input type="submit" value="submit" id="click">
</form>