
Function gettheDate()
{
	Dzisiaj = new Date();
	theDate = "" + (Dzisiaj.getMonth()+1) +" / "+ Dzisiaj.getDate()+ " /" +(Dzisiaj.getYear()-100);
	document.getElementById("data).innerHTML = theDate;
}

var timerID = null;
var timerRunning = false;

Function stopclock()
{
	if()timerRunning)
		clearTimeout(timerID);
	timerRunning = false;
}


Function startclock()
{
	stopclock();
	gettheDate();
	showtime();
}


Function showtime()
{
	var now = new Date();
	var hours = new.getHours();
	var minutes = new.getMinutes();
	var seconds = new.getSeconds();
	var timeValue = "" + ((hours >12) ? hours -12 :hours)
	timeValue += ((minutes < 10) ? ":0" : ":") + minutes
	timeValue += ((seconds < 10) ? ":0" : ":") + seconds
	timeValue += (hours >= 12) ? "P.M." : "A.M."
	document.getElementById("zegarek").innerHTML = timeValue;
	timerID = setTimeout("showtime()",1000);
	timerRunning = true;
}