<?php ob_start("ob_gzhandler"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html manifest='iphone.manifest'><head><title>Real Estate Investment</title>
<meta http-equiv=Content-Type                      content="text/html; charset=UTF-8">
<meta name="viewport"                              content="width=240, user-scalable=no">
<meta name="apple-mobile-web-app-capable"          content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="description"                           content="Calculate the investment value of income-producing real estate. An iPhone web app">
<meta name="keywords"                              content="Real estate investment, investment calculator, iPhone, cap rate, roe, return on equity, return on investment, roi">

<link rel="apple-touch-icon"  type="image/png"     href="apple-touch-icon.png">

<style type="text/css"> /* Styles needed by SpreadsheetConverter */
*.ee100 { color : windowtext; font-family : Arial; font-size : 10.00pt; 
font-style : normal; font-weight : 400; padding-left : 1px; 
padding-right : 1px; padding-top : 1px; text-align : left; 
vertical-align : bottom }
*.ee102 { color : windowtext; font-family : Arial; font-size : 10.00pt; 
font-style : normal; font-weight : 400; text-align : left; 
vertical-align : bottom }
*.ee103 { color : windowtext; font-family : Arial; font-size : 10.00pt; 
font-style : normal; font-weight : 400; padding-left : 0px; 
padding-right : 1px; padding-top : 0px; text-align : right; 
vertical-align : bottom }
*.ee105 { color : windowtext; font-family : Arial; font-size : 10.00pt; 
font-style : normal; font-weight : 400; text-align : right; 
vertical-align : bottom }
*.ee106 { color : windowtext; font-family : Arial; font-size : 10.00pt; 
font-style : normal; font-weight : 400; padding-left : 0px; 
padding-right : 1px; padding-top : 0px; text-align : left; 
vertical-align : bottom }
*.ee107 { border-top : 0.50pt solid windowtext; color : windowtext; 
font-family : Arial; font-size : 10.00pt; font-style : normal; 
font-weight : 400; padding-left : 1px; padding-right : 1px; 
padding-top : 1px; text-align : left; vertical-align : bottom }
*.ee108 { border-right : 0.50pt solid windowtext; 
border-top : 0.50pt solid windowtext; color : windowtext; 
font-family : Arial; font-size : 10.00pt; font-style : normal; 
font-weight : 400; padding-left : 0px; padding-right : 1px; 
padding-top : 0px; text-align : right; vertical-align : bottom }
*.ee109 { border-right : 0.50pt solid windowtext; color : windowtext; 
font-family : Arial; font-size : 10.00pt; font-style : normal; 
font-weight : 400; padding-left : 0px; padding-right : 1px; 
padding-top : 0px; text-align : right; vertical-align : bottom }
*.ee110 { color : windowtext; font-family : Arial , sans-serif; 
font-size : 10.00pt; font-style : normal; font-weight : 700; 
padding-left : 1px; padding-right : 1px; padding-top : 1px; 
text-align : left; vertical-align : bottom }
*.ee113 { border-right : 0.50pt solid windowtext; color : windowtext; 
font-family : Arial , sans-serif; font-size : 10.00pt; font-style : normal; 
font-weight : 700; padding-left : 0px; padding-right : 1px; 
padding-top : 0px; text-align : right; vertical-align : bottom }
*.ee115 { color : windowtext; font-family : Arial , sans-serif; 
font-size : 10.00pt; font-style : normal; font-weight : 700; 
text-align : right; vertical-align : bottom }
*.ee116 { border-right : 0.50pt solid black; color : red; 
font-family : Arial , sans-serif; font-size : 9.00pt; font-style : normal; 
font-weight : 700; padding-left : 0px; padding-right : 1px; 
padding-top : 0px; text-align : center; vertical-align : bottom }
*.ee118 { color : red; font-family : Arial , sans-serif; font-size : 9.00pt; 
font-style : normal; font-weight : 700; text-align : center; 
vertical-align : bottom }
*.ee122 { color : windowtext; font-family : Arial; font-size : 10.00pt; 
font-style : normal; font-weight : 400; padding-left : 1px; 
padding-right : 1px; padding-top : 1px; text-align : right; 
vertical-align : bottom }
*.ee123 { border-bottom : 0.50pt solid windowtext; color : windowtext; 
font-family : Arial; font-size : 10.00pt; font-style : normal; 
font-weight : 400; padding-left : 1px; padding-right : 1px; 
padding-top : 1px; text-align : right; vertical-align : bottom }
*.ee124 { border-bottom : 0.50pt solid windowtext; 
border-right : 0.50pt solid windowtext; color : windowtext; 
font-family : Arial; font-size : 10.00pt; font-style : normal; 
font-weight : 400; padding-left : 0px; padding-right : 1px; 
padding-top : 0px; text-align : right; vertical-align : bottom }
*.ee125 { color : red; font-family : Arial , sans-serif; font-size : 9.00pt; 
font-style : normal; font-weight : 700; padding-left : 1px; 
padding-right : 1px; padding-top : 1px; text-align : center; 
vertical-align : bottom }
*.ee126 { border-top : 0.50pt solid windowtext; color : windowtext; 
font-family : Arial; font-size : 10.00pt; font-style : normal; 
font-weight : 400; padding-left : 0px; padding-right : 1px; 
padding-top : 0px; text-align : right; vertical-align : bottom }
*.ee127 { border-right : 0.50pt solid windowtext; 
border-top : 0.50pt solid windowtext; color : windowtext; 
font-family : Arial; font-size : 10.00pt; font-style : normal; 
font-weight : 400; padding-left : 1px; padding-right : 1px; 
padding-top : 1px; text-align : left; vertical-align : bottom }
*.ee128 { color : red; font-family : Arial; font-size : 10.00pt; 
font-style : normal; font-weight : 400; padding-left : 0px; 
padding-right : 1px; padding-top : 0px; text-align : right; 
vertical-align : bottom }
*.ee129 { color : red; font-family : Arial; font-size : 10.00pt; 
font-style : normal; font-weight : 400; text-align : right; 
vertical-align : bottom }
*.ee130 { border-right : 0.50pt solid windowtext; color : windowtext; 
font-family : Arial; font-size : 10.00pt; font-style : normal; 
font-weight : 400; padding-left : 0px; padding-right : 1px; 
padding-top : 0px; text-align : left; vertical-align : bottom }
*.ee131 { border-bottom : 0.50pt solid windowtext; color : windowtext; 
font-family : Arial; font-size : 10.00pt; font-style : normal; 
font-weight : 400; padding-left : 0px; padding-right : 1px; 
padding-top : 0px; text-align : right; vertical-align : bottom }
*.ee132 { border-right : 0.50pt solid windowtext; color : windowtext; 
font-family : Arial; font-size : 10.00pt; font-style : normal; 
font-weight : 400; padding-left : 1px; padding-right : 1px; 
padding-top : 1px; text-align : left; vertical-align : bottom }
*.ee133 { border-bottom : 0.50pt solid windowtext; color : red; 
font-family : Arial; font-size : 10.00pt; font-style : normal; 
font-weight : 400; padding-left : 0px; padding-right : 1px; 
padding-top : 0px; text-align : right; vertical-align : bottom }
*.ee134 { border-bottom : 0.50pt solid windowtext; color : windowtext; 
font-family : Arial; font-size : 10.00pt; font-style : normal; 
font-weight : 400; padding-left : 1px; padding-right : 1px; 
padding-top : 1px; text-align : left; vertical-align : bottom }
*.ee135 { border-bottom : 0.50pt solid windowtext; 
border-right : 0.50pt solid windowtext; color : windowtext; 
font-family : Arial; font-size : 10.00pt; font-style : normal; 
font-weight : 400; padding-left : 1px; padding-right : 1px; 
padding-top : 1px; text-align : left; vertical-align : bottom }
*.ee136 { border-top : 0.50pt solid windowtext; color : red; 
font-family : Arial , sans-serif; font-size : 9.00pt; font-style : normal; 
font-weight : 700; padding-left : 0px; padding-right : 1px; 
padding-top : 0px; text-align : center; vertical-align : bottom }
*.ee137 { color : red; font-family : Arial , sans-serif; font-size : 9.00pt; 
font-style : normal; font-weight : 700; padding-left : 0px; 
padding-right : 1px; padding-top : 0px; text-align : center; 
vertical-align : bottom }
*.ee138 { color : red; font-family : Arial , sans-serif; font-size : 9.00pt; 
font-style : normal; font-weight : 700; padding-left : 1px; 
padding-right : 1px; padding-top : 1px; text-align : left; 
vertical-align : bottom }

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


co.Purchase_Price=eeparseFloatTh(document.formc.Purchase_Price.value);co.acquisition_pct=eeparsePercent(document.formc.acquisition_pct.value);co.Monthly_Rent=eeparseFloatTh(document.formc.Monthly_Rent.value);co.Upgrade_Costs=eeparseFloatTh(document.formc.Upgrade_Costs.value);co.Debt_to_Value=eeparsePercent(document.formc.Debt_to_Value.value);co.Interest_Rate=eeparsePercent(document.formc.Interest_Rate.value);co.Term=eeparseFloatTh(document.formc.Term.value);co.p1C22=eeparsePercent(document.formc.p1C22.value);co.p1B23=eeparseFloatTh(document.formc.p1B23.value);co.opex_pct_pgi=eeparsePercent(document.formc.opex_pct_pgi.value);co.p1C27=eeparsePercent(document.formc.p1C27.value);co.p1C43=eeparsePercent(document.formc.p1C43.value);co.p1B47=eeparsePercent(document.formc.p1B47.value);co.p1B48=eeparsePercent(document.formc.p1B48.value);calc(co);document.formc.p1B1.value=eedatefmt(fmtdate7,co.p1B1);document.formc.p1B2.value=eedatefmt(fmtdate7,co.p1B2);document.formc.Total_Acquisition_Cost.value=eedisplayFloatNDTh(co.Total_Acquisition_Cost,0);document.formc.Loan_Amount.value=eedatefmt(fmtdate6,co.Loan_Amount);document.formc.Equity.value=eedatefmt(fmtdate6,co.Equity);document.formc.Debt_Service.value=eedatefmt(fmtdate6,co.Debt_Service);document.formc.Debt_Service_Ratio_NOI.value=eedisplayFloatND(co.Debt_Service_Ratio_NOI,2);document.formc.p1B16.value=eedisplayFloatND(co.p1B16,2);document.formc.p1A17.value=co.p1A17;document.formc.principal.value=eedatefmt(fmtdate6,co.principal);document.formc.FC.value=eedisplayPercentND(co.FC,2);
document.formc.PGI.value=eedatefmt(fmtdate6,co.PGI);document.formc.p1B22.value=eedatefmt(fmtdate6,co.p1B22);document.formc.EGI.value=eedatefmt(fmtdate6,co.EGI);document.formc.opex.value=eedatefmt(fmtdate6,co.opex);document.formc.NOI.value=eedatefmt(fmtdate6,co.NOI);document.formc.reserves.value=eedatefmt(fmtdate6,co.reserves);document.formc.CFO.value=eedatefmt(fmtdate6,co.CFO);document.formc.p1B29.value=eedatefmt(fmtdate6,co.p1B29);document.formc.CFE.value=eedatefmt(fmtdate6,co.CFE);document.formc.CFE_plus_Principal.value=eedatefmt(fmtdate6,co.CFE_plus_Principal);document.formc.p1A32.value=co.p1A32;document.formc.ROA.value=eedisplayPercentND(co.ROA,2);document.formc.p1A35.value=co.p1A35;document.formc.ROE.value=eedisplayPercentND(co.ROE,2);document.formc.p1A37.value=co.p1A37;document.formc.p1B38.value=eedisplayFloatNDTh(co.p1B38,0);document.formc.p1B40.value=eedatefmt(fmtdate6,co.p1B40);document.formc.p1B41.value=eedatefmt(fmtdate6,co.p1B41);document.formc.p1B42.value=eedatefmt(fmtdate6,co.p1B42);document.formc.p1B43.value=eedatefmt(fmtdate6,co.p1B43);document.formc.p1B44.value=eedatefmt(fmtdate6,co.p1B44);document.formc.p1A45.value=co.p1A45;document.formc.p1B50.value=eedatefmt(fmtdate6,co.p1B50);document.formc.CFE_after_Taxes.value=eedatefmt(fmtdate6,co.CFE_after_Taxes);document.formc.p1B52.value=eedisplayPercentND(co.p1B52,2);document.formc.p1B53.value=eedisplayPercentND(co.p1B53,2);
};};


var eeisus=1;var eetrue="TRUE";var eefalse="FALSE";var eedec=".";var eeth=",";var eedecreg=new RegExp("\\.","g");var eethreg=new RegExp(",","g");var eecurrencyreg=new RegExp("[$]","g");var eepercentreg=new RegExp("%","g"); var fmtdaynamesshort=new Array("Sun","Mon","Tue","Wed","Thu","Fri","Sat"); var fmtdaynameslong=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"); var fmtmonthnamesshort=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"); var fmtmonthnameslong=new Array("January","February","March","April","May","June","July","August","September","October","November","December"); var fmtstrings=new Array(","," ","$"," PGI","  fixed 30 year 70% loan"); var fmtdate6=new Array(34,25,0); var fmtdate7=new Array(27,2,33); var fmtdate8=new Array(34,25,2); var fmtdate9=new Array(27,0,35); var fmtdate10=new Array(27,0,36);

var arr1xB21B23=new Array(3);for(var ii=0;ii<3;ii++){arr1xB21B23[ii]=new Array(1);for(var jj=0;jj<1;jj++){arr1xB21B23[ii][jj]=0}};var arr1xB24B25=new Array(2);for(var ii=0;ii<2;ii++){arr1xB24B25[ii]=new Array(1);for(var jj=0;jj<1;jj++){arr1xB24B25[ii][jj]=0}};var arr1xB26B27=new Array(2);for(var ii=0;ii<2;ii++){arr1xB26B27[ii]=new Array(1);for(var jj=0;jj<1;jj++){arr1xB26B27[ii][jj]=0}};var arr1xB28B29=new Array(2);for(var ii=0;ii<2;ii++){arr1xB28B29[ii]=new Array(1);for(var jj=0;jj<1;jj++){arr1xB28B29[ii][jj]=0}};var arr1xB40B43=new Array(4);for(var ii=0;ii<4;ii++){arr1xB40B43[ii]=new Array(1);for(var jj=0;jj<1;jj++){arr1xB40B43[ii][jj]=0}};var eecm5=new Array(new Array(arr1xB21B23,0,0,2,0));var eecm4=new Array(new Array(arr1xB24B25,0,0,1,0));var eecm3=new Array(new Array(arr1xB26B27,0,0,1,0));var eecm2=new Array(new Array(arr1xB28B29,0,0,1,0));var eecm1=new Array(new Array(arr1xB40B43,0,0,3,0));function calc(data){var c1B4=data.Purchase_Price;var c1C5=data.acquisition_pct;var c1B6=data.Monthly_Rent;var c1B7=data.Upgrade_Costs;var c1B9=data.Debt_to_Value;var c1B10=data.Interest_Rate;var c1B11=data.Term;var c1C22=data.p1C22;arr1xB21B23[2][0]=data.p1B23;var c1C25=data.opex_pct_pgi;var c1C27=data.p1C27;var c1C43=data.p1C43;var c1B47=data.p1B47;var c1B48=data.p1B48;var c1B5=(((c1B4)*(((1)+(c1C5)))));var c1B12=(((c1B4)*(c1B9)));
 var c1B13=(((((c1B5)-(c1B12)))+(c1B7)));var c1B14=(pmt((c1B10),(c1B11),(c1B12),(0),(0)));var c1B18=(((ppmt((c1B10),(1),(c1B11),(c1B12),(0),(0)))*(-1)));arr1xB21B23[0][0]=(((c1B6)*(12)));arr1xB21B23[1][0]=(((((arr1xB21B23[0][0])*(-1)))*(c1C22)));arr1xB24B25[0][0]=(sumgeneral(3,0,0,eecm5));arr1xB24B25[1][0]=(((((arr1xB21B23[0][0])*(-1)))*(c1C25)));arr1xB26B27[1][0]=(((((arr1xB24B25[0][0])*(-1)))*(c1C27)));arr1xB40B43[3][0]=(((((((((c1B4)*(((1)-(c1C43)))))+(((c1B5)-(c1B4)))))*(-1)))/(27.5)));var c1B19=(((c1B14)/(((c1B12)*(-1)))));arr1xB26B27[0][0]=(sumgeneral(2,0,0,eecm4));arr1xB28B29[0][0]=(sumgeneral(2,0,0,eecm3));arr1xB28B29[1][0]=(c1B14);var c1B34=(((arr1xB28B29[0][0])/(c1B5)));var c1B38=(((c1B4)/(arr1xB28B29[0][0])));arr1xB40B43[1][0]=(((arr1xB26B27[1][0])*(-1)));arr1xB40B43[2][0]=(c1B18);var c1B2=(((arr1xB26B27[0][0])/(c1B4)));var c1B15=(((((arr1xB26B27[0][0])*(-1)))/(c1B14)));var c1B16=(((((arr1xB28B29[0][0])*(-1)))/(c1B14)));var c1B30=(sumgeneral(2,0,0,eecm2));var c1B31=(((c1B30)+(c1B18)));var c1A35=(((((c1B34)<(c1B19)))?("NEGATIVE LEVERAGE"):(((((c1B34)>(((c1B19)+(0.005)))))?("Add debt to increase ROE"):("")))));var c1B36=(((c1B31)/(((c1B13)+(c1B18)))));var c1B1=(((c1B30)/(c1B13)));var c1A17=(((((c1B15)<(1.25)))?("DSR TOO LOW"):("")));var c1A32=(((((c1B30)<=(100)))?("NEGATIVE CASH FLOW"):("")));
 var c1A37=(((((c1B36)<=(0)))?("NEGATIVE ROE"):("")));arr1xB40B43[0][0]=(c1B30);var c1B44=(sumgeneral(4,0,0,eecm1));var c1B50=(((((c1B44)>(0)))?(((((c1B44)*(-1)))*(((c1B47)+(c1B48))))):(0)));var c1B51=(((c1B30)+(c1B50)));var c1B52=(((c1B51)/(c1B13)));var c1B53=(((((c1B51)+(c1B18)))/(((c1B13)+(c1B18)))));var c1A45=(((((c1B44)<=(0)))?("Negative Taxable Income"):("")));data.p1B1=c1B1;data.p1B2=c1B2;data.Total_Acquisition_Cost=c1B5;data.Loan_Amount=c1B12;data.Equity=c1B13;data.Debt_Service=c1B14;data.Debt_Service_Ratio_NOI=c1B15;data.p1B16=c1B16;data.p1A17=c1A17;data.principal=c1B18;data.FC=c1B19;data.PGI=arr1xB21B23[0][0];data.p1B22=arr1xB21B23[1][0];data.EGI=arr1xB24B25[0][0];data.opex=arr1xB24B25[1][0];data.NOI=arr1xB26B27[0][0];data.reserves=arr1xB26B27[1][0];data.CFO=arr1xB28B29[0][0];data.p1B29=arr1xB28B29[1][0];data.CFE=c1B30;data.CFE_plus_Principal=c1B31;data.p1A32=c1A32;data.ROA=c1B34;data.p1A35=c1A35;data.ROE=c1B36;data.p1A37=c1A37;data.p1B38=c1B38;data.p1B40=arr1xB40B43[0][0];data.p1B41=arr1xB40B43[1][0];data.p1B42=arr1xB40B43[2][0];data.p1B43=arr1xB40B43[3][0];data.p1B44=c1B44;data.p1A45=c1A45;data.p1B50=c1B50;data.CFE_after_Taxes=c1B51;data.p1B52=c1B52;data.p1B53=c1B53;};

 function myIsNaN(x){return(isNaN(x)||(typeof x=='number'&&!isFinite(x)));};function mod(n,d){return n-d*Math.floor(n/d);};function round(n,nd){if(isFinite(n)&&isFinite(nd)){var sign_n=(n<0)?-1:1;var abs_n=Math.abs(n);var factor=Math.pow(10,nd);return sign_n*Math.round(abs_n*factor)/factor;}else{return NaN;}};function sum2(arr,rt,rb){var sum=0;for(var ii=rt;ii<=rb;ii++){sum+=arr[ii]};return sum};function sum3(arr,rt,ct,rb,cb){var sum=0;for(var ii=rt;ii<=rb;ii++){for(var jj=ct;jj<=cb;jj++){sum+=arr[ii][jj]}};return sum};function sumgeneral(cnt,vsum,vcnt,x){var sum=vsum;for(var ii=0;ii<x.length;ii++){sum+=sum3(x[ii][0],x[ii][1],x[ii][2],x[ii][3],x[ii][4]);};return sum;};function eeparsePercent(str){var parts=String(str).split('%');var tmp=String(parts[0]).replace(eedecreg,".");var res=parseFloat(tmp)/100;if(isNaN(res)){return 0;}else{return res;}};var near0RegExp=new RegExp("[.](.*0000000|.*9999999)");function eedisplayFloat(x){if(myIsNaN(x)){return Number.NaN;}else{var str=String(x);if(near0RegExp.test(str)){x=round(x,8);str=String(x);}return str.replace(/\./g,eedec);}};function eedisplayScientific(x,nd){if(myIsNaN(x)){return Number.NaN;}else{var str=String(x.toExponential(nd));return str.replace(/\./g,eedec);}};function eedisplayFloatND(x,nd){if(myIsNaN(x)){return Number.NaN;}else{var res=round(x,nd);if(nd>0){var str=String(res);if(str.indexOf('e')!=-1)return str;if(str.indexOf('E')!=-1)return str;var parts=str.split('.');if(parts.length<2){var decimals=('00000000000000').substring(0,nd);return(parts[0]).toString()+eedec+decimals;}else{var decimals=((parts[1]).toString()+'00000000000000').substring(0,nd);return(parts[0]).toString()+eedec+decimals;}}else{return res;}}};
 function eedisplayPercent(x){if(myIsNaN(x)){return Number.NaN;}else{return eedisplayFloat(x*100)+'%';}};function eedisplayPercentND(x,nd){if(myIsNaN(x)){return Number.NaN;}else{return eedisplayFloatND(x*100,nd)+'%';}}function eeparseFloatTh(str){str=String(str).replace(eethreg,"");str=String(str).replace(eedecreg,".");var res=parseFloat(str);if(isNaN(res)){return 0;}else{return res;}};function eedisplayFloatNDTh(x,nd){if(myIsNaN(x)){return Number.NaN;}else{var res=round(x,nd);if(nd>0){var str=String(res);if(str.indexOf('e')!=-1)return str;if(str.indexOf('E')!=-1)return str;var parts=str.split('.');var res2=eeinsertThousand(parts[0].toString());if(parts.length<2){var decimals=('00000000000000').substring(0,nd);return(res2+eedec+decimals);}else{var decimals=((parts[1]).toString()+'00000000000000').substring(0,nd);return(res2+eedec+decimals);}}else{return(eeinsertThousand(res.toString()));}}};function eedisplayPercentNDTh(x,nd){if(myIsNaN(x)){return Number.NaN;}else{return eedisplayFloatNDTh(x*100,nd)+'%';}}function eeinsertThousand(whole){if(whole==""||whole.indexOf("e")>=0){return whole;}else{var minus_sign="";if(whole.charAt(0)=="-"){minus_sign="-";whole=whole.substring(1);};var res="";var str_length=whole.length-1;for(var ii=0;ii<=str_length;ii++){if(ii>0&&ii%3==0){res=eeth+res;};res=whole.charAt(str_length-ii)+res;};return minus_sign+res;}};function eedatefmt(fmt,x){if(!isFinite(x))return Number.NaN;var padding=0;var tmp=0;var res="";var len=fmt.length;for(var ii=0;ii<len;ii++){if(fmt[ii]>31){res+=fmtstrings[fmt[ii]-32];}else{switch(fmt[ii]){case 2:res+=eemonth(x);break;case 3:tmp=eemonth(x);if(tmp<10){res+="0";};res+=tmp;break;case 4:res+=fmtmonthnamesshort[eemonth(x)-1];break;case 5:res+=fmtmonthnameslong[eemonth(x)-1];break;case 6:res+=eeday(x);break;case 7:tmp=eeday(x);if(tmp<10){res+="0";};res+=tmp;break;case 8:res+=fmtdaynamesshort[weekday(x,1)-1];break;case 9:res+=fmtdaynameslong[weekday(x,1)-1];break;case 10:tmp=year(x)%100;if(tmp<10){res+="0";};res+=tmp;break;case 11:res+=year(x);break;case 12:res+=hour(x);break;case 13:tmp=hour(x);if(tmp<10){res+="0";};res+=tmp;break;case 14:tmp=hour(x)%12;if(tmp==0){res+="12";}else{res+=tmp%12;};break;case 15:tmp=hour(x)%12;if(tmp==0){res+="12";}else{if(tmp<10){res+="0";};res+=tmp;};break;case 16:res+=minute(x);break;case 17:tmp=minute(x);if(tmp<10){res+="0";};res+=tmp;break;case 18:res+=second(x);break;case 19:tmp=second(x);if(tmp<10){res+="0";};res+=tmp;break;case 21:case 22:if(hour(x)<12){res+="AM";}else{res+="PM";};break;case 23:res+=eedisplayFloat(x);break;case 24:tmp=fmt[++ii];res+=eedisplayFloatND(x,tmp);break;case 25:tmp=fmt[++ii];res+=eedisplayFloatNDTh(x,tmp);break;case 26:res+=eedisplayPercent(x);break;case 27:tmp=fmt[++ii];res+=eedisplayPercentND(x,tmp);break;case 28:tmp=fmt[++ii];res+=eedisplayPercentNDTh(x,tmp);break;case 29:tmp=fmt[++ii];res+=eedisplayScientific(x,tmp);break;case 30:padding=fmt[++ii];tmp=hour(x)+Math.floor(x)*24;tmp=tmp.toString();if(tmp.length<padding){res+=('00000000000000').substring(0,padding-tmp.length);}res+=tmp;break;};};};return res;};
 function leap_gregorian(year){return((year%4)==0)&&(!(((year%100)==0)&&((year%400)!=0)));}var GREGORIAN_EPOCH=1721425;function gregorian_to_jd(year,month,day){return(GREGORIAN_EPOCH-0)+(365*(year-1))+Math.floor((year-1)/4)+(-Math.floor((year-1)/100))+Math.floor((year-1)/400)+Math.floor((((367*month)-362)/12)+((month<=2)?0:(leap_gregorian(year)?-1:-2))+day);}function jd_to_gregorian(jd){var wjd,depoch,quadricent,dqc,cent,dcent,quad,dquad,yindex,year,yearday,leapadj;wjd=Math.floor(jd);depoch=wjd-GREGORIAN_EPOCH-1;quadricent=Math.floor(depoch/146097);dqc=mod(depoch,146097);cent=Math.floor(dqc/36524);dcent=mod(dqc,36524);quad=Math.floor(dcent/1461);dquad=mod(dcent,1461);yindex=Math.floor(dquad/365);year=(quadricent*400)+(cent*100)+(quad*4)+yindex;if(!((cent==4)||(yindex==4))){year++;}yearday=wjd-gregorian_to_jd(year,1,1);leapadj=((wjd<gregorian_to_jd(year,3,1))?0:(leap_gregorian(year)?1:2));var month=Math.floor((((yearday+leapadj)*12)+373)/367);var day=(wjd-gregorian_to_jd(year,month,1))+1;return new Array(year,month,day);}function eeday(serial_number){if(!isFinite(serial_number))return Number.NaN;if(serial_number<1){return 0;}if(serial_number>60)serial_number--;var res=jd_to_gregorian(serial_number+2415020);return res[2];};function hour(serial_number){if(!isFinite(serial_number))return Number.NaN;var res=Math.floor((serial_number-Math.floor(serial_number))*86400+0.5);return Math.floor(res/3600);}function minute(serial_number){if(!isFinite(serial_number))return Number.NaN;var res=Math.floor((serial_number-Math.floor(serial_number))*86400+0.5);return Math.floor(res/60)%60;};
 function eemonth(serial_number){if(!isFinite(serial_number))return Number.NaN;if(serial_number<1){return 1;}if(serial_number>60)serial_number--;var res=jd_to_gregorian(serial_number+2415020);return res[1];};function second(serial_number){if(!isFinite(serial_number))return Number.NaN;var res=Math.floor((serial_number-Math.floor(serial_number))*86400+0.5);return res%60;};function weekday(serial_number,return_type){if(!isFinite(return_type)||!isFinite(serial_number))return Number.NaN;if(return_type<1||return_type>3)return Number.NaN;var res=Math.floor(serial_number+6)%7;switch(Math.floor(return_type)){case 1:return res+1;case 2:return(res+6)%7+1;case 3:return(res+6)%7;};return "hej";};function year(serial_number){if(!isFinite(serial_number))return Number.NaN;if(serial_number<1){return 1900;}if(serial_number>60)serial_number--;var res=jd_to_gregorian(serial_number+2415020);return res[0];};function pmt(rate,nper,pv,fv,type){if(rate==0){return-pv/nper;}else{var pvif=Math.pow(1+rate,nper);var fvifa=(Math.pow(1+rate,nper)-1)/rate;var type1=(type!=0)?1:0;return((-pv*pvif-fv)/((1+rate*type1)*fvifa));}};function calculate_principal(starting_principal,payment,rate,period,type){var pwr=Math.pow(1.0+rate,period);if(type==0){return starting_principal*pwr+payment*((pwr-1)/rate);}else{return starting_principal*pwr+payment*((pwr-1)/rate)*(1+rate);}};function ppmt(rate,per,nper,pv,fv,type){if(!isFinite(type)||!isFinite(fv)||!isFinite(pv)||!isFinite(nper)||!isFinite(nper)||!isFinite(rate))return Number.NaN;type=Math.floor(type);if(nper<=0)return Number.NaN;if(type!=0&&type!=1)return Number.NaN;if(per<1||per>nper)return Number.NaN;if(rate==0)return-pv/per;var pmt2=pmt(rate,nper,pv,fv,type);if(per==1){if(type==0){return pmt2+pv*rate;}else{return pmt2;}}else{if(type==0){return(pmt2+calculate_principal(pv,pmt2,rate,per-1,type)*rate);}else{return(pmt2+(calculate_principal(pv,pmt2,rate,per-1-type,type)+pmt2)*rate);}}};

</script>
 
<!-- SpreadsheetConverter Header end -->
</head><body onload="initial_update();try{document.formc.Purchase_Price.focus();document.formc.Purchase_Price.select();}catch(err){};"   >

<!-- SpreadsheetConverter Body start -->

<form id="formc" name="formc" method="post" action=""> <div style="display:none"> 


	
	


</div>
<a href="http://www.georgefisheradvisors.com">
<img width="230" height="40" style="border: solid 2px #8C8169" src="http://www.georgefisheradvisors.com/graphics/iphone_header.png" alt="George Fisher Advisors LLC">
</a>

 

<div id="panel1" style='display:block'>
<table width="232.00" style='border-collapse:collapse' border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
<col width="124.00" />
<col width="68.00" />
<col width="40.00" />
<tr style='height:13pt'> 
<td class='ee100'>
ROE cash flow
</td>
<td class='ee103'>
<input value="-" name="p1B1" id="p1B1" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee105'>
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee100'>
Cap Rate
</td>
<td class='ee103'>
<input value="-" name="p1B2" id="p1B2" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee105'>
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee100'>
&nbsp;
</td>
<td class='ee100'>
&nbsp;
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee100'>
Purchase Price
</td>
<td class='ee103'>
<input value="200,000" name="Purchase_Price" id="Purchase_Price" type="text" onblur="this.value=eedisplayFloatNDTh(eeparseFloatTh(this.value),0);recalc_onclick('Purchase_Price')" tabindex="1"
style=' width:100% '
class='ee105'>
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee100'>
Total Acq Cost
</td>
<td class='ee103'>
<input value="0" name="Total_Acquisition_Cost" id="Total_Acquisition_Cost" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee105'>
</td>
<td class='ee106'>
<input value="3%" name="acquisition_pct" id="acquisition_pct" type="text" onblur="this.value=eedisplayPercentND(eeparsePercent(this.value),0);recalc_onclick('acquisition_pct')" tabindex="2"
style=' width:100% '
class='ee102'>
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee100'>
Monthly Rent
</td>
<td class='ee103'>
<input value="3,000" name="Monthly_Rent" id="Monthly_Rent" type="text" onblur="this.value=eedisplayFloatNDTh(eeparseFloatTh(this.value),0);recalc_onclick('Monthly_Rent')" tabindex="3"
style=' width:100% '
class='ee105'>
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee100'>
Upgrade Costs
</td>
<td class='ee103'>
<input value="" name="Upgrade_Costs" id="Upgrade_Costs" type="text" onblur="this.value=eedisplayFloatNDTh(eeparseFloatTh(this.value),0);recalc_onclick('Upgrade_Costs')" tabindex="4"
style=' width:100% '
class='ee105'>
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee100'>
&nbsp;
</td>
<td class='ee100'>
&nbsp;
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee107'>
Debt to Value
</td>
<td class='ee108'>
<input value="70%" name="Debt_to_Value" id="Debt_to_Value" type="text" onblur="this.value=eedisplayPercentND(eeparsePercent(this.value),0);recalc_onclick('Debt_to_Value')" tabindex="5"
style=' width:100% '
class='ee105'>
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee100'>
Interest Rate
</td>
<td class='ee109'>
<input value="7.32%" name="Interest_Rate" id="Interest_Rate" type="text" onblur="this.value=eedisplayPercentND(eeparsePercent(this.value),2);recalc_onclick('Interest_Rate')" tabindex="6"
style=' width:100% '
class='ee105'>
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee100'>
Term
</td>
<td class='ee109'>
<input value="25" name="Term" id="Term" type="text" onblur="this.value=eedisplayFloatNDTh(eeparseFloatTh(this.value),0);recalc_onclick('Term')" tabindex="7"
style=' width:100% '
class='ee105'>
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee100'>
Loan Amount
</td>
<td class='ee109'>
<input value="-" name="Loan_Amount" id="Loan_Amount" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee105'>
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee110'>
Equity
</td>
<td class='ee113'>
<input value="-" name="Equity" id="Equity" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee115'>
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee100'>
Debt Service
</td>
<td class='ee109'>
<font color='#FF0000'></font>
<input value="-" name="Debt_Service" id="Debt_Service" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee105'>
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee100'>
DSR NOI
</td>
<td class='ee109'>
<input value="0" name="Debt_Service_Ratio_NOI" id="Debt_Service_Ratio_NOI" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee105'>
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee100'>
DSR CFO
</td>
<td class='ee109'>
<input value="0" name="p1B16" id="p1B16" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee105'>
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee116' colspan="2">
<input value="" name="p1A17" id="p1A17" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee118'>
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee122'>
1st yr principal
</td>
<td class='ee109'>
<input value="-" name="principal" id="principal" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee105'>
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee123'>
FC
</td>
<td class='ee124'>
<input value="0" name="FC" id="FC" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee105'>
</td>
<td class='ee125'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee100'>
&nbsp;
</td>
<td class='ee100'>
&nbsp;
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee107'>
PGI
</td>
<td class='ee126'>
<input value="-" name="PGI" id="PGI" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee105'>
</td>
<td class='ee127'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee122'>
less vacancy
</td>
<td class='ee128'>
<font color='#FF0000'></font>
<input value="-" name="p1B22" id="p1B22" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee129'>
</td>
<td class='ee130'>
<input value="10%" name="p1C22" id="p1C22" type="text" onblur="this.value=eedisplayPercentND(eeparsePercent(this.value),0);recalc_onclick('p1C22')" tabindex="8"
style=' width:100% '
class='ee102'>
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee123'>
plus other income
</td>
<td class='ee131'>
<input value="0" name="p1B23" id="p1B23" type="text" onblur="this.value=eedisplayFloatNDTh(eeparseFloatTh(this.value),0);recalc_onclick('p1B23')" tabindex="9"
style=' width:100% '
class='ee105'>
</td>
<td class='ee132'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee100'>
EGI
</td>
<td class='ee103'>
<input value="-" name="EGI" id="EGI" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee105'>
</td>
<td class='ee132'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee123'>
less opex
</td>
<td class='ee133'>
<font color='#FF0000'></font>
<input value="-" name="opex" id="opex" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee129'>
</td>
<td class='ee130'>
<input value="35%" name="opex_pct_pgi" id="opex_pct_pgi" type="text" onblur="this.value=eedisplayPercentND(eeparsePercent(this.value),0);recalc_onclick('opex_pct_pgi')" tabindex="10"
style=' width:100% '
class='ee102'>
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee100'>
NOI
</td>
<td class='ee103'>
<input value="-" name="NOI" id="NOI" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee105'>
</td>
<td class='ee132'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee123'>
less reserves
</td>
<td class='ee133'>
<input value="-" name="reserves" id="reserves" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee129'>
</td>
<td class='ee130'>
<input value="0%" name="p1C27" id="p1C27" type="text" onblur="this.value=eedisplayPercentND(eeparsePercent(this.value),0);recalc_onclick('p1C27')" tabindex="11"
style=' width:100% '
class='ee102'>
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee100'>
CFO
</td>
<td class='ee103'>
<input value="-" name="CFO" id="CFO" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee105'>
</td>
<td class='ee132'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee123'>
less debt service
</td>
<td class='ee131'>
<font color='#FF0000'></font>
<input value="-" name="p1B29" id="p1B29" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee105'>
</td>
<td class='ee132'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee100'>
CFE
</td>
<td class='ee103'>
<input value="-" name="CFE" id="CFE" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee105'>
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee134'>
CFE + Principal
</td>
<td class='ee131'>
<input value="-" name="CFE_plus_Principal" id="CFE_plus_Principal" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee105'>
</td>
<td class='ee135'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee136' colspan="2">
<input value="" name="p1A32" id="p1A32" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee118'>
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee100'>
&nbsp;
</td>
<td class='ee100'>
&nbsp;
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee100'>
ROA
</td>
<td class='ee103'>
<input value="0" name="ROA" id="ROA" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee105'>
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee137' colspan="2">
<input value="" name="p1A35" id="p1A35" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee118'>
</td>
<td class='ee138'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee100'>
ROE (incl Prin)
</td>
<td class='ee103'>
<input value="0" name="ROE" id="ROE" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee105'>
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee137' colspan="2">
<input value="" name="p1A37" id="p1A37" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee118'>
</td>
<td class='ee138'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee100'>
P/E
</td>
<td class='ee103'>
<input value="0" name="p1B38" id="p1B38" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee105'>
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee100'>
&nbsp;
</td>
<td class='ee100'>
&nbsp;
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee107'>
CFE
</td>
<td class='ee108'>
<input value="-" name="p1B40" id="p1B40" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee105'>
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee100'>
+ reserve
</td>
<td class='ee109'>
<input value="-" name="p1B41" id="p1B41" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee105'>
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee100'>
+ principal
</td>
<td class='ee109'>
<input value="-" name="p1B42" id="p1B42" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee105'>
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee134'>
-
depreciation
</td>
<td class='ee124'>
<font color='#FF0000'></font>
<input value="-" name="p1B43" id="p1B43" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee105'>
</td>
<td class='ee106'>
<input value="10%" name="p1C43" id="p1C43" type="text" onblur="this.value=eedisplayPercentND(eeparsePercent(this.value),0);recalc_onclick('p1C43')" tabindex="12"
style=' width:100% '
class='ee102'>
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee100'>
Taxable Income
</td>
<td class='ee109'>
<input value="-" name="p1B44" id="p1B44" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee105'>
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee116' colspan="2">
<input value="" name="p1A45" id="p1A45" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee118'>
</td>
<td class='ee138'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee100'>
&nbsp;
</td>
<td class='ee132'>
&nbsp;
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee100'>
Federal Rate
</td>
<td class='ee109'>
<input value="33.00%" name="p1B47" id="p1B47" type="text" onblur="this.value=eedisplayPercentND(eeparsePercent(this.value),2);recalc_onclick('p1B47')" tabindex="13"
style=' width:100% '
class='ee105'>
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee100'>
State &amp; Local
</td>
<td class='ee109'>
<input value="5.03%" name="p1B48" id="p1B48" type="text" onblur="this.value=eedisplayPercentND(eeparsePercent(this.value),2);recalc_onclick('p1B48')" tabindex="14"
style=' width:100% '
class='ee105'>
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee100'>
&nbsp;
</td>
<td class='ee132'>
&nbsp;
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee134'>
Income Taxes
</td>
<td class='ee124'>
<font color='#FF0000'></font>
<input value="-" name="p1B50" id="p1B50" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee105'>
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee100'>
CFE after Taxes
</td>
<td class='ee109'>
<input value="-" name="CFE_after_Taxes" id="CFE_after_Taxes" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee105'>
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee100'>
ROE after Tax
</td>
<td class='ee109'>
<input value="0" name="p1B52" id="p1B52" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee105'>
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
<tr style='height:13pt'> 
<td class='ee134'>
ROE after Tax (prin)
</td>
<td class='ee124'>
<input value="0" name="p1B53" id="p1B53" type="text" tabindex="-1" readonly="readonly"
style='overflow:hidden; border:0px solid #000000; width:100% '
class='ee105'>
</td>
<td class='ee100'>
&nbsp;
</td>
</tr>
</table>
<p></p>
</div>
  


<script language="javascript" type="text/javascript">
function postcode(){};function eequerystring(){var querystring=document.location.search;if(querystring.length>0){variables=(querystring.substring(1)).split("&");var variable;var key;var value;for(var ii=0;ii<variables.length;ii++){variable=variables[ii].split("=");key=unescape(variable[0]);value=unescape(variable[1]);if(document.formc[key]!=null){document.formc[key].value=value;}}}}function initial_update(){postcode('');eequerystring();recalc_onclick('');}
</script>
</form>


<!-- SpreadsheetConverter Body end -->


<noscript>The browser does not support JavaScript. The calculations created using  <a href='http://www.spreadsheetconverter.com/poweredby.htm' target='_blank'>SpreadsheetConverter</a>  will not work. Please access the web page using another browser.<p></p></noscript>
<!-- Start of StatCounter Code -->
<script type="text/javascript">
sc_project=1770955; 
sc_invisible=1; 
sc_partition=16; 
sc_security="fb8cf3f2"; 
</script>

<script type="text/javascript"
src="http://www.statcounter.com/counter/counter.js"></script>
<!-- End of StatCounter Code -->


</body>
</html>
