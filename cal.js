
var hour;


function hour1(day)
{
  document.cookie = "day = " + day;
  hour="2:00PM";
  document.cookie = "hour = " + hour;
  var outputSelect = document.getElementById("selection");
  var message=day+" - 2:00PM";
 
  outputSelect.innerHTML = message;
  confirme=message;
}

function hour2(day)
{
  document.cookie = "day = " + day;
  hour="3:55PM";
  var outputSelect = document.getElementById("selection");
  var message=day+" - 3:55PM";
  outputSelect.innerHTML = message;
  confirme=message;
}

function hour3(day)
{
  document.cookie = "day = " + day;
  hour="5:00PM";
  var outputSelect = document.getElementById("selection");
  var message=day+" - 5:00PM";
  outputSelect.innerHTML = message;
  confirme=message;
}

function hour4(day)
{
  document.cookie = "day = " + day;
  hour="6:45PM";
  var outputSelect = document.getElementById("selection");
  var message=day+" - 6:45PM";
  outputSelect.innerHTML = message;
  confirme=message;
}




