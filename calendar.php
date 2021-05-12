<html>
<head>
</head>
<body>
<center>
<script language="javascript" type="text/javascript">
var day_of_week = new Array('Sun','Mon','Tue','Wed','Thu','Fri','Sat');
var month_of_year = new Array('January','February','March','April','May','June','July','August','September','October','November','December');

var Calendar = new Date();

var year = Calendar.getFullYear();     // Returns year
var month = Calendar.getMonth();    // Returns month (0-11)
var today = Calendar.getDate();    // Returns day (1-31)
var weekday = Calendar.getDay();    // Returns day (1-31)

var DAYS_OF_WEEK = 7;
var DAYS_OF_MONTH = 31;
var cal;

Calendar.setDate(1);
Calendar.setMonth(month);

var TR_start = '<TR>';
var TR_end = '</TR>';
var highlight_start = '<TD WIDTH="30"><TABLE CELLSPACING=0 BORDER=1 BGCOLOR=gray BORDERCOLOR=white><TR><TD WIDTH=35><B><CENTER>';
var highlight_end   = '</CENTER></TD></TR></TABLE></B>';
var TD_start = '<TD WIDTH="50"><CENTER>';
var TD_end = '</CENTER></TD>';

cal =  '<TABLE BORDER=10 CELLSPACING=0 BGCOLOR=gray CELLPADDING=0 BORDERCOLOR=white><TR><TD>';
cal += '<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=15 BORDERCOLOR=white>' + TR_start;
cal += '<TD COLSPAN="' + DAYS_OF_WEEK + '" BGCOLOR="white"><CENTER><B>';
cal += month_of_year[month]  + '   ' + year + '</B>' + TD_end + TR_end;
cal += TR_start;

for(index=0; index < DAYS_OF_WEEK; index++)
{

if(weekday == index)
cal += TD_start + '<B>' + day_of_week[index] + '</B>' + TD_end;

else
cal += TD_start + day_of_week[index] + TD_end;
}

cal += TD_end + TR_end;
cal += TR_start;

for(index=0; index < Calendar.getDay(); index++)
cal += TD_start + '  ' + TD_end;

for(index=0; index < DAYS_OF_MONTH; index++)
{
if( Calendar.getDate() > index )
{
	
  week_day =Calendar.getDay();
  
  if(week_day == 0)
  cal += TR_start;

  if(week_day != DAYS_OF_WEEK)
  {

  var day  = Calendar.getDate();

  if( today==Calendar.getDate() )
  cal += highlight_start + day + highlight_end + TD_end;

  else
  cal += TD_start + day + TD_end;
  }

  if(week_day == DAYS_OF_WEEK)
  cal += TR_end;
  }

  Calendar.setDate(Calendar.getDate()+1);

}

cal += '</TD></TR></TABLE></TABLE>';

document.write(cal);

</script>
</center>
<br/><div style="clear:both"></div>
</body>
</html>
