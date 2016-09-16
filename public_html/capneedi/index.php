<?php ob_start("ob_gzhandler"); ?>
<!DOCTYPE html PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN' 'http://www.w3.org/TR/html4/loose.dtd'>
<html manifest='iphone.manifest'><head><title>Retirement Saving</title>
<meta http-equiv="Content-Type"                    content="text/html; charset=UTF-8">
<meta name="viewport"                              content="width=400, user-scalable=no">
<meta name="apple-mobile-web-app-capable"          content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="description"                           content="Calculate the size your portfolio needs to be at retirement. An iPhone web app">
<meta name="keywords"                              content="retirement, capital needs, capital need, investment calculator, iPhone">

<link rel="apple-touch-icon"  type="image/png"     href="apple-touch-icon.png">


<style type="text/css"> /* Styles needed by SpreadsheetConverter */
*.ee100 { color : windowtext; font-family : "Times New Roman" , serif; 
font-size : 20.00pt; font-style : normal; font-weight : 400; 
padding-left : 1px; padding-right : 1px; padding-top : 1px; 
text-align : center; text-decoration : underline; vertical-align : middle }
*.ee103 { color : windowtext; font-family : "Times New Roman" , serif; 
font-size : 16.00pt; font-style : normal; font-weight : 400; 
text-decoration : underline; text-underline-style : single }
*.ee107 { color : windowtext; font-family : "Times New Roman" , serif; 
font-size : 20.00pt; font-style : normal; font-weight : 400; 
padding-left : 1px; padding-right : 1px; padding-top : 1px; 
text-align : left; vertical-align : middle }
*.ee110 { color : windowtext; font-family : Arial; font-size : 10.00pt; 
font-style : normal; font-weight : 400; padding-left : 1px; 
padding-right : 1px; padding-top : 1px; text-align : left; 
vertical-align : bottom }
*.ee113 { color : windowtext; font-family : Arial; font-size : 10.00pt; 
font-style : normal; font-weight : 400; padding-left : 0px; 
padding-right : 1px; padding-top : 0px; text-align : right; 
vertical-align : bottom }
*.ee115 { color : windowtext; font-family : Arial; font-size : 10.00pt; 
font-style : normal; font-weight : 400; text-align : right; 
vertical-align : bottom }
*.ee116 { color : windowtext; font-family : Arial; font-size : 10.00pt; 
font-style : normal; font-weight : 400; padding-left : 1px; 
padding-right : 1px; padding-top : 1px; text-align : left; 
vertical-align : middle }
*.ee119 { border-bottom : 2.00pt double windowtext; color : windowtext; 
font-family : Arial; font-size : 10.00pt; font-style : normal; 
font-weight : 400; padding-left : 1px; padding-right : 1px; 
padding-top : 1px; text-align : left; vertical-align : bottom }
*.ee120 { border-bottom : 2.00pt double windowtext; color : windowtext; 
font-family : Arial; font-size : 10.00pt; font-style : normal; 
font-weight : 400; padding-left : 0px; padding-right : 1px; 
padding-top : 0px; text-align : right; vertical-align : bottom }
*.ee121 { color : windowtext; font-family : Arial; font-size : 10.00pt; 
font-style : normal; font-weight : 400; padding-left : 1px; 
padding-right : 1px; padding-top : 1px; text-align : right; 
vertical-align : middle }
*.ee123 { color : windowtext; font-family : Arial; font-size : 10.00pt; 
font-style : normal; font-weight : 400; text-align : right; 
vertical-align : middle }
*.ee124 { color : windowtext; font-family : Arial; font-size : 10.00pt; 
font-style : normal; font-weight : 400; padding-left : 0px; 
padding-right : 1px; padding-top : 0px; text-align : right; 
vertical-align : middle }
*.ee125 { color : windowtext; font-family : Arial; font-size : 10.00pt; 
font-style : normal; font-weight : 400; padding-left : 1px; 
padding-right : 1px; padding-top : 1px; text-align : center; 
vertical-align : middle }
*.ee128 { border-bottom : 0.50pt solid windowtext; 
border-left : 0.50pt solid windowtext; border-top : 0.50pt solid windowtext; 
color : windowtext; font-family : Arial , sans-serif; font-size : 11.00pt; 
font-style : normal; font-weight : 700; padding-left : 1px; 
padding-right : 1px; padding-top : 1px; text-align : center; 
vertical-align : bottom }
*.ee131 { border : 0.50pt solid windowtext; color : windowtext; 
font-family : Arial , sans-serif; font-size : 10.00pt; font-style : normal; 
font-weight : 700; padding-left : 1px; padding-right : 1px; 
padding-top : 1px; text-align : center; vertical-align : bottom }
*.ee134 { color : windowtext; font-family : Arial; font-size : 11.00pt; 
font-style : normal; font-weight : 400; padding-left : 1px; 
padding-right : 1px; padding-top : 1px; text-align : left; 
vertical-align : bottom }
*.ee137 { border-right : 0.50pt solid windowtext; color : windowtext; 
font-family : Arial; font-size : 11.00pt; font-style : normal; 
font-weight : 400; padding-left : 0px; padding-right : 1px; 
padding-top : 0px; text-align : right; vertical-align : bottom }
*.ee139 { color : windowtext; font-family : Arial; font-size : 11.00pt; 
font-style : normal; font-weight : 400; text-align : right; 
vertical-align : bottom }
*.ee140 { border-right : 0.50pt solid windowtext; color : windowtext; 
font-family : Arial; font-size : 11.00pt; font-style : normal; 
font-weight : 400; padding-left : 0px; padding-right : 1px; 
padding-top : 0px; text-align : center; vertical-align : bottom }
*.ee142 { color : windowtext; font-family : Arial; font-size : 11.00pt; 
font-style : normal; font-weight : 400; text-align : center; 
vertical-align : bottom }
*.ee143 { border-bottom : 0.50pt solid windowtext; color : windowtext; 
font-family : Arial; font-size : 11.00pt; font-style : normal; 
font-weight : 400; padding-left : 1px; padding-right : 1px; 
padding-top : 1px; text-align : left; vertical-align : bottom }
*.ee144 { border-bottom : 0.50pt solid windowtext; 
border-right : 0.50pt solid windowtext; color : windowtext; 
font-family : Arial; font-size : 11.00pt; font-style : normal; 
font-weight : 400; padding-left : 0px; padding-right : 1px; 
padding-top : 0px; text-align : right; vertical-align : bottom }
*.ee145 { border-bottom : 0.50pt solid windowtext; 
border-right : 0.50pt solid windowtext; color : windowtext; 
font-family : Arial; font-size : 11.00pt; font-style : normal; 
font-weight : 400; padding-left : 0px; padding-right : 1px; 
padding-top : 0px; text-align : center; vertical-align : bottom }

textarea {  overflow: auto; }
</style>
<style type="text/css" media="screen">
.eetabs {display:block;}</style>
<style type="text/css" media="print">
.eetabs {display:none;}</style>
<script language="javascript" type="text/javascript">
 

var co = new Object;
function recalc_onclick(ctl) {
  if (true) {


co.Years_to_Retirement=eeparseFloat(document.formc.Years_to_Retirement.value);co.Years_in_Retirement=eeparseFloat(document.formc.Years_in_Retirement.value);co.Current_Portfolio_Amount=eeparseFloatTh(document.formc.Current_Portfolio_Amount.value);co.Inflation_Rate=eeparsePercent(document.formc.Inflation_Rate.value);co.Investment_Return=eeparsePercent(document.formc.Investment_Return.value);co.Expected_Income_Requirement=eeparseFloatTh(document.formc.Expected_Income_Requirement.value);co.Outside_Sources_of_Income=eeparseFloatTh(document.formc.Outside_Sources_of_Income.value);calc(co);document.formc.Inflation_Adjusted_Investment_Return.value=eedisplayPercentND(co.Inflation_Adjusted_Investment_Return,2);document.formc.Income_Needed_from_Investments.value=eedatefmt(fmtdate7,co.Income_Needed_from_Investments);document.formc.First_Year_s_Investment_Withdrawal.value=eedatefmt(fmtdate7,co.First_Year_s_Investment_Withdrawal);document.formc.p1B15.value=eedatefmt(fmtdate7,co.p1B15);document.formc.p1C15.value=eedatefmt(fmtdate7,co.p1C15);document.formc.p1B16.value=eedatefmt(fmtdate7,co.p1B16);document.formc.p1C16.value=eedatefmt(fmtdate7,co.p1C16);document.formc.p1B17.value=eedatefmt(fmtdate7,co.p1B17);document.formc.p1C17.value=eedatefmt(fmtdate7,co.p1C17);document.formc.p1B18.value=eedatefmt(fmtdate7,co.p1B18);document.formc.p1C18.value=eedatefmt(fmtdate7,co.p1C18);
};};


var eeisus=1;var eetrue="TRUE";var eefalse="FALSE";var eedec=".";var eeth=",";var eedecreg=new RegExp("\\.","g");var eethreg=new RegExp(",","g");var eecurrencyreg=new RegExp("[$]","g");var eepercentreg=new RegExp("%","g"); var fmtdaynamesshort=new Array("Sun","Mon","Tue","Wed","Thu","Fri","Sat"); var fmtdaynameslong=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"); var fmtmonthnamesshort=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"); var fmtmonthnameslong=new Array("January","February","March","April","May","June","July","August","September","October","November","December"); var fmtstrings=new Array(","," ","$"); var fmtdate6=new Array(34,25,2); var fmtdate7=new Array(34,25,0);

function calc(data){var c1B2=data.Years_to_Retirement;var c1B3=data.Years_in_Retirement;var c1B4=data.Current_Portfolio_Amount;var c1B5=data.Inflation_Rate;var c1B6=data.Investment_Return;var c1B9=data.Expected_Income_Requirement;var c1B10=data.Outside_Sources_of_Income;var c1B7=(((((((1)+(c1B6)))/(((1)+(c1B5)))))-(1)));var c1B11=(((c1B9)-(c1B10)));var c1B13=(((fv((c1B5),(c1B2),(0),(c1B11),(0)))*(-1)));var c1B15=(((pv((c1B7),(c1B3),(c1B13),(0),(1)))*(-1)));var c1C15=(((((pmt((((c1B6)/(12))),(((c1B2)*(12))),(c1B4),(((c1B15)*(-1))),(0)))>(0)))?(pmt((((c1B6)/(12))),(((c1B2)*(12))),(c1B4),(((c1B15)*(-1))),(0))):(0)));var c1B16=(((((pv((c1B6),(c1B3),(0),(c1B15),(1)))*(-1)))+(c1B15)));var c1C16=(((((pmt((((c1B6)/(12))),(((c1B2)*(12))),(c1B4),(((c1B16)*(-1))),(0)))>(0)))?(pmt((((c1B6)/(12))),(((c1B2)*(12))),(c1B4),(((c1B16)*(-1))),(0))):(0)));var c1B17=(((pv((c1B7),(c1B3),(c1B13),(c1B15),(1)))*(-1)));var c1C17=(((((pmt((((c1B6)/(12))),(((c1B2)*(12))),(c1B4),(((c1B17)*(-1))),(0)))>(0)))?(pmt((((c1B6)/(12))),(((c1B2)*(12))),(c1B4),(((c1B17)*(-1))),(0))):(0)));var c1B18=(((c1B13)/(0.04)));var c1C18=(((((pmt((((c1B6)/(12))),(((c1B2)*(12))),(c1B4),(((c1B18)*(-1))),(0)))>(0)))?(pmt((((c1B6)/(12))),(((c1B2)*(12))),(c1B4),(((c1B18)*(-1))),(0))):(0)));data.Inflation_Adjusted_Investment_Return=c1B7;data.Income_Needed_from_Investments=c1B11;data.First_Year_s_Investment_Withdrawal=c1B13;data.p1B15=c1B15;
 data.p1C15=c1C15;data.p1B16=c1B16;data.p1C16=c1C16;data.p1B17=c1B17;data.p1C17=c1C17;data.p1B18=c1B18;data.p1C18=c1C18;};

 function myIsNaN(x){return(isNaN(x)||(typeof x=='number'&&!isFinite(x)));};function mod(n,d){return n-d*Math.floor(n/d);};function round(n,nd){if(isFinite(n)&&isFinite(nd)){var sign_n=(n<0)?-1:1;var abs_n=Math.abs(n);var factor=Math.pow(10,nd);return sign_n*Math.round(abs_n*factor)/factor;}else{return NaN;}};function eeparseFloat(str){str=String(str).replace(eedecreg,".");var res=parseFloat(str);if(isNaN(res)){return 0;}else{return res;}};function eeparsePercent(str){var parts=String(str).split('%');var tmp=String(parts[0]).replace(eedecreg,".");var res=parseFloat(tmp)/100;if(isNaN(res)){return 0;}else{return res;}};var near0RegExp=new RegExp("[.](.*0000000|.*9999999)");function eedisplayFloat(x){if(myIsNaN(x)){return Number.NaN;}else{var str=String(x);if(near0RegExp.test(str)){x=round(x,8);str=String(x);}return str.replace(/\./g,eedec);}};function eedisplayScientific(x,nd){if(myIsNaN(x)){return Number.NaN;}else{var str=String(x.toExponential(nd));return str.replace(/\./g,eedec);}};function eedisplayFloatND(x,nd){if(myIsNaN(x)){return Number.NaN;}else{var res=round(x,nd);if(nd>0){var str=String(res);if(str.indexOf('e')!=-1)return str;if(str.indexOf('E')!=-1)return str;var parts=str.split('.');if(parts.length<2){var decimals=('00000000000000').substring(0,nd);return(parts[0]).toString()+eedec+decimals;}else{var decimals=((parts[1]).toString()+'00000000000000').substring(0,nd);return(parts[0]).toString()+eedec+decimals;}}else{return res;}}};function eedisplayPercent(x){if(myIsNaN(x)){return Number.NaN;}else{return eedisplayFloat(x*100)+'%';}};
 function eedisplayPercentND(x,nd){if(myIsNaN(x)){return Number.NaN;}else{return eedisplayFloatND(x*100,nd)+'%';}}function eeparseFloatTh(str){str=String(str).replace(eethreg,"");str=String(str).replace(eedecreg,".");var res=parseFloat(str);if(isNaN(res)){return 0;}else{return res;}};function eedisplayFloatNDTh(x,nd){if(myIsNaN(x)){return Number.NaN;}else{var res=round(x,nd);if(nd>0){var str=String(res);if(str.indexOf('e')!=-1)return str;if(str.indexOf('E')!=-1)return str;var parts=str.split('.');var res2=eeinsertThousand(parts[0].toString());if(parts.length<2){var decimals=('00000000000000').substring(0,nd);return(res2+eedec+decimals);}else{var decimals=((parts[1]).toString()+'00000000000000').substring(0,nd);return(res2+eedec+decimals);}}else{return(eeinsertThousand(res.toString()));}}};function eedisplayPercentNDTh(x,nd){if(myIsNaN(x)){return Number.NaN;}else{return eedisplayFloatNDTh(x*100,nd)+'%';}}function eeinsertThousand(whole){if(whole==""||whole.indexOf("e")>=0){return whole;}else{var minus_sign="";if(whole.charAt(0)=="-"){minus_sign="-";whole=whole.substring(1);};var res="";var str_length=whole.length-1;for(var ii=0;ii<=str_length;ii++){if(ii>0&&ii%3==0){res=eeth+res;};res=whole.charAt(str_length-ii)+res;};return minus_sign+res;}};function eedatefmt(fmt,x){if(!isFinite(x))return Number.NaN;var padding=0;var tmp=0;var res="";var len=fmt.length;for(var ii=0;ii<len;ii++){if(fmt[ii]>31){res+=fmtstrings[fmt[ii]-32];}else{switch(fmt[ii]){case 2:res+=eemonth(x);break;case 3:tmp=eemonth(x);if(tmp<10){res+="0";};res+=tmp;break;case 4:res+=fmtmonthnamesshort[eemonth(x)-1];break;case 5:res+=fmtmonthnameslong[eemonth(x)-1];break;case 6:res+=eeday(x);break;case 7:tmp=eeday(x);if(tmp<10){res+="0";};res+=tmp;break;case 8:res+=fmtdaynamesshort[weekday(x,1)-1];break;case 9:res+=fmtdaynameslong[weekday(x,1)-1];break;case 10:tmp=year(x)%100;if(tmp<10){res+="0";};res+=tmp;break;case 11:res+=year(x);break;case 12:res+=hour(x);break;case 13:tmp=hour(x);if(tmp<10){res+="0";};res+=tmp;break;case 14:tmp=hour(x)%12;if(tmp==0){res+="12";}else{res+=tmp%12;};break;case 15:tmp=hour(x)%12;if(tmp==0){res+="12";}else{if(tmp<10){res+="0";};res+=tmp;};break;case 16:res+=minute(x);break;case 17:tmp=minute(x);if(tmp<10){res+="0";};res+=tmp;break;case 18:res+=second(x);break;case 19:tmp=second(x);if(tmp<10){res+="0";};res+=tmp;break;case 21:case 22:if(hour(x)<12){res+="AM";}else{res+="PM";};break;case 23:res+=eedisplayFloat(x);break;case 24:tmp=fmt[++ii];res+=eedisplayFloatND(x,tmp);break;case 25:tmp=fmt[++ii];res+=eedisplayFloatNDTh(x,tmp);break;case 26:res+=eedisplayPercent(x);break;case 27:tmp=fmt[++ii];res+=eedisplayPercentND(x,tmp);break;case 28:tmp=fmt[++ii];res+=eedisplayPercentNDTh(x,tmp);break;case 29:tmp=fmt[++ii];res+=eedisplayScientific(x,tmp);break;case 30:padding=fmt[++ii];tmp=hour(x)+Math.floor(x)*24;tmp=tmp.toString();if(tmp.length<padding){res+=('00000000000000').substring(0,padding-tmp.length);}res+=tmp;break;};};};return res;};
 function leap_gregorian(year){return((year%4)==0)&&(!(((year%100)==0)&&((year%400)!=0)));}var GREGORIAN_EPOCH=1721425;function gregorian_to_jd(year,month,day){return(GREGORIAN_EPOCH-0)+(365*(year-1))+Math.floor((year-1)/4)+(-Math.floor((year-1)/100))+Math.floor((year-1)/400)+Math.floor((((367*month)-362)/12)+((month<=2)?0:(leap_gregorian(year)?-1:-2))+day);}function jd_to_gregorian(jd){var wjd,depoch,quadricent,dqc,cent,dcent,quad,dquad,yindex,year,yearday,leapadj;wjd=Math.floor(jd);depoch=wjd-GREGORIAN_EPOCH-1;quadricent=Math.floor(depoch/146097);dqc=mod(depoch,146097);cent=Math.floor(dqc/36524);dcent=mod(dqc,36524);quad=Math.floor(dcent/1461);dquad=mod(dcent,1461);yindex=Math.floor(dquad/365);year=(quadricent*400)+(cent*100)+(quad*4)+yindex;if(!((cent==4)||(yindex==4))){year++;}yearday=wjd-gregorian_to_jd(year,1,1);leapadj=((wjd<gregorian_to_jd(year,3,1))?0:(leap_gregorian(year)?1:2));var month=Math.floor((((yearday+leapadj)*12)+373)/367);var day=(wjd-gregorian_to_jd(year,month,1))+1;return new Array(year,month,day);}function eeday(serial_number){if(!isFinite(serial_number))return Number.NaN;if(serial_number<1){return 0;}if(serial_number>60)serial_number--;var res=jd_to_gregorian(serial_number+2415020);return res[2];};function hour(serial_number){if(!isFinite(serial_number))return Number.NaN;var res=Math.floor((serial_number-Math.floor(serial_number))*86400+0.5);return Math.floor(res/3600);}function minute(serial_number){if(!isFinite(serial_number))return Number.NaN;var res=Math.floor((serial_number-Math.floor(serial_number))*86400+0.5);return Math.floor(res/60)%60;};
 function eemonth(serial_number){if(!isFinite(serial_number))return Number.NaN;if(serial_number<1){return 1;}if(serial_number>60)serial_number--;var res=jd_to_gregorian(serial_number+2415020);return res[1];};function second(serial_number){if(!isFinite(serial_number))return Number.NaN;var res=Math.floor((serial_number-Math.floor(serial_number))*86400+0.5);return res%60;};function weekday(serial_number,return_type){if(!isFinite(return_type)||!isFinite(serial_number))return Number.NaN;if(return_type<1||return_type>3)return Number.NaN;var res=Math.floor(serial_number+6)%7;switch(Math.floor(return_type)){case 1:return res+1;case 2:return(res+6)%7+1;case 3:return(res+6)%7;};return "hej";};function year(serial_number){if(!isFinite(serial_number))return Number.NaN;if(serial_number<1){return 1900;}if(serial_number>60)serial_number--;var res=jd_to_gregorian(serial_number+2415020);return res[0];};function fv(rate,nper,pmt,pv,type){if(!isFinite(type)||!isFinite(pv)||!isFinite(pmt)||!isFinite(nper)||!isFinite(rate))return Number.NaN;if(rate==0)return-(pv+nper*pmt);var type1=(type!=0)?1:0;var pvif=Math.pow(1+rate,nper);var fvifa=(Math.pow(1+rate,nper)-1)/rate;return(-((pv*pvif)+pmt*(1+rate*type1)*fvifa));};function pmt(rate,nper,pv,fv,type){if(rate==0){return-pv/nper;}else{var pvif=Math.pow(1+rate,nper);var fvifa=(Math.pow(1+rate,nper)-1)/rate;var type1=(type!=0)?1:0;return((-pv*pvif-fv)/((1+rate*type1)*fvifa));}};function pv(rate,nper,pmt,fv,type){if(!isFinite(type)||!isFinite(fv)||!isFinite(pmt)||!isFinite(nper)||!isFinite(rate))return Number.NaN;if(rate==0)return-(fv+nper*pmt);var type1=(type!=0)?1:0;var pvif=Math.pow(1+rate,nper);var fvifa=(Math.pow(1+rate,nper)-1)/rate;if(pvif==0)return Number.NaN;return((-fv-pmt*(1+rate*type)*fvifa)/pvif);};

</script>
 
<!-- SpreadsheetConverter Header end -->
</head><body onload="initial_update();try{document.formc.Years_to_Retirement.focus();document.formc.Years_to_Retirement.select();}catch(err){};"   >

<!-- SpreadsheetConverter Body start -->

<form id="formc" name="formc" method="post" action=""> <div style="display:none"> 


	
	


</div>
 
<a href="http://www.georgefisheradvisors.com">
<img width="230" height="40" style="border: solid 2px #8C8169" src="http://www.georgefisheradvisors.com/graphics/iphone_header.png" alt="George Fisher Advisors LLC">
</a>

<div id="panel1" style='display:block'>
<table width="368.00" style='border-collapse:collapse' border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
<col width="219.00" />
<col width="84.00" />
<col width="65.00" />
<tr style='height:50pt'> 
<td class='ee100' colspan="2">
Capital
Needs Analysis: <br /><font class='ee103'>Investment Portfolio at Retirement</font>
</td>
<td class='ee107'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee110'>
Years to Retirement
</td>
<td class='ee113'>
<input value="20" name="Years_to_Retirement" id="Years_to_Retirement" type="text" onblur="this.value=eedisplayFloatND(eeparseFloat(this.value),0);recalc_onclick('Years_to_Retirement')" tabindex="1"
style=' width:100% '
class='ee115'>
</td>
<td class='ee116'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee110'>
Years in Retirement
</td>
<td class='ee113'>
<input value="30" name="Years_in_Retirement" id="Years_in_Retirement" type="text" onblur="this.value=eedisplayFloatND(eeparseFloat(this.value),0);recalc_onclick('Years_in_Retirement')" tabindex="2"
style=' width:100% '
class='ee115'>
</td>
<td class='ee116'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee110'>
Current Portfolio Amount
</td>
<td class='ee113'>
<input value="1,000,000" name="Current_Portfolio_Amount" id="Current_Portfolio_Amount" type="text" onblur="this.value=eedisplayFloatNDTh(eeparseFloatTh(this.value),0);recalc_onclick('Current_Portfolio_Amount')" tabindex="3"
style=' width:100% '
class='ee115'>
</td>
<td class='ee116'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee110'>
Inflation Rate
</td>
<td class='ee113'>
<input value="3.00%" name="Inflation_Rate" id="Inflation_Rate" type="text" onblur="this.value=eedisplayPercentND(eeparsePercent(this.value),2);recalc_onclick('Inflation_Rate')" tabindex="4"
style=' width:100% '
class='ee115'>
</td>
<td class='ee116'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee110'>
Investment Return
</td>
<td class='ee113'>
<input value="8.00%" name="Investment_Return" id="Investment_Return" type="text" onblur="this.value=eedisplayPercentND(eeparsePercent(this.value),2);recalc_onclick('Investment_Return')" tabindex="5"
style=' width:100% '
class='ee115'>
</td>
<td class='ee116'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee110'>
Inflation-Adjusted Investment Return
</td>
<td class='ee113'>
<input value="0" name="Inflation_Adjusted_Investment_Return" id="Inflation_Adjusted_Investment_Return" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee115'>
</td>
<td class='ee116'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee110' colspan="2">
&nbsp;
</td>
<td class='ee116'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee110'>
Expected Income Requirement
</td>
<td class='ee113'>
<input value="200,000" name="Expected_Income_Requirement" id="Expected_Income_Requirement" type="text" onblur="this.value=eedisplayFloatNDTh(eeparseFloatTh(this.value),0);recalc_onclick('Expected_Income_Requirement')" tabindex="6"
style=' width:100% '
class='ee115'>
</td>
<td class='ee116'>
&nbsp;
</td>
</tr>
<tr style='height:14pt'> 
<td class='ee119'>
Outside Sources of Income (-)
</td>
<td class='ee120'>
<input value="14,000" name="Outside_Sources_of_Income" id="Outside_Sources_of_Income" type="text" onblur="this.value=eedisplayFloatNDTh(eeparseFloatTh(this.value),0);recalc_onclick('Outside_Sources_of_Income')" tabindex="7"
style=' width:100% '
class='ee115'>
</td>
<td class='ee116'>
&nbsp;
</td>
</tr>
<tr style='height:14pt'> 
<td class='ee110'>
Income Needed from Investments
</td>
<td class='ee113'>
<input value="-" name="Income_Needed_from_Investments" id="Income_Needed_from_Investments" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee115'>
</td>
<td class='ee121'>
<span> </span>(Today)
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee110'>
&nbsp;
</td>
<td class='ee110'>
&nbsp;
</td>
<td class='ee116'>
&nbsp;
</td>
</tr>
<tr style='height:29pt'> 
<td class='ee110'>
First
Year's Withdrawal <br /><span>  </span>(Inflation-Adjusted)
</td>
<td class='ee124'>
<input value="-" name="First_Year_s_Investment_Withdrawal" id="First_Year_s_Investment_Withdrawal" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee123'>
</td>
<td class='ee125'>
&nbsp;
</td>
</tr>
<tr style='height:39pt'> 
<td class='ee128' colspan="2">
Minimum
Investment Portfolio Size<br />
at Retirement
</td>
<td class='ee131'>
Monthly Savings <br />
Required
</td>
</tr>
<tr style='height:20pt'> 
<td class='ee134'>
Run the Portfolio Down to Zero
</td>
<td class='ee137'>
<input value="-" name="p1B15" id="p1B15" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee139'>
</td>
<td class='ee140'>
<input value="-" name="p1C15" id="p1C15" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee142'>
</td>
</tr>
<tr style='height:20pt'> 
<td class='ee134'>
Maintain Same Dollar Amount
</td>
<td class='ee137'>
<input value="-" name="p1B16" id="p1B16" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee139'>
</td>
<td class='ee140'>
<input value="-" name="p1C16" id="p1C16" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee142'>
</td>
</tr>
<tr style='height:20pt'> 
<td class='ee134'>
Number 2. Inflation-Adjusted
</td>
<td class='ee137'>
<input value="-" name="p1B17" id="p1B17" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee139'>
</td>
<td class='ee140'>
<input value="-" name="p1C17" id="p1C17" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee142'>
</td>
</tr>
<tr style='height:20pt'> 
<td class='ee143'>
Withdraw no more than 4%<span> </span>
</td>
<td class='ee144'>
<input value="-" name="p1B18" id="p1B18" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee139'>
</td>
<td class='ee145'>
<input value="-" name="p1C18" id="p1C18" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee142'>
</td>
</tr>
</table>
<p></p>
</div>
  

<!-- Start of StatCounter Code -->
<script type="text/javascript">
sc_project=1770955; 
sc_invisible=1; 
sc_partition=16; 
sc_security="fb8cf3f2"; 
</script>

<script type="text/javascript"
src="http://www.statcounter.com/counter/counter.js"></script><noscript><div
class="statcounter"><a title="free hit counters"
href="http://www.statcounter.com/" target="_blank"><img
class="statcounter"
src="http://c17.statcounter.com/1770955/0/fb8cf3f2/1/"
alt="free hit counters" ></a></div></noscript>
<!-- End of StatCounter Code -->
<script language="javascript" type="text/javascript">
function postcode(){};function eequerystring(){var querystring=document.location.search;if(querystring.length>0){variables=(querystring.substring(1)).split("&");var variable;var key;var value;for(var ii=0;ii<variables.length;ii++){variable=variables[ii].split("=");key=unescape(variable[0]);value=unescape(variable[1]);if(document.formc[key]!=null){document.formc[key].value=value;}}}}function initial_update(){postcode('');eequerystring();recalc_onclick('');}
</script>
</form>


<!-- SpreadsheetConverter Body end -->


<noscript>The browser does not support JavaScript. The calculations created using  <a href='http://www.spreadsheetconverter.com/poweredby.htm' target='_blank'>SpreadsheetConverter</a>  will not work. Please access the web page using another browser.<p></p></noscript>
</body>
</html>
