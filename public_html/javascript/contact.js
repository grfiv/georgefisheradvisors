
function contact()
{
	var name=document.getElementById('f-name')
	if(name.value=='')
	{
		alert('Please enter your name')
	}
	else
	{
		var email=document.getElementById('f-email')
		if(emailCheck(email.value)=='false')
		{
			alert('Please enter a valid email address')
		}
		else
		{
			var message=document.getElementById('f-message')
			if(message.value=='')
			{
				alert('Please enter your message')
			}
			else
			{
				var tel=document.getElementById('f-tel')
				var city=document.getElementById('f-city')
				
				var contactStr = '&name='+encodeURI(name.value)
				contactStr += '&tel='+encodeURI(tel.value)	
				contactStr += '&city='+encodeURI(city.value)
				contactStr += '&email='+encodeURI(email.value)
				contactStr += '&message='+encodeURI(message.value)
				contactStr += '&authorization=formtrue'							
				ajaxPost('form.php',contactStr)
							
				name.value=''
				tel.value=''
				city.value=''
				email.value=''
				message.value=''
							
				var height=document.getElementById('form').offsetHeight
				document.getElementById('form').style.display='none'
				throbber_div = document.getElementById('throbber').style
				throbber_div.display='block'
				throbber_div.height=height + 'px'
			}
		}
	}
}

function emailCheck(email)
{
	var success='true'
	var emailLength=email.length
	var emailCheck=email.toLowerCase()
	emailLength--
	while(emailLength>0)
	{
		emailCheck.charAt(emailLength)==' '?emailCheck=emailCheck.substring(0,emailLength):''
		emailLength--
	}
	var validationStr="0123456789abcdefghijklmnopqrstuvwxyz-_@."
	var validationStrLength=validationStr.length
	var emailLength=emailCheck.length
	var validCharacterCheck=0
	for(var i=0;i<emailLength;i++)
	{
		for(var j=0;j<validationStrLength;j++)
		{
			emailCheck.charAt(i)==validationStr.charAt(j)?validCharacterCheck++:''
		}
	}
	validCharacterCheck!=emailLength?success='false':success='true'
	emailCheck=email.indexOf('@')
	atCheck=email.lastIndexOf('@')
	if(emailCheck==-1||emailCheck!=atCheck)
	{
		success='false'
	}
	else
	{
		emailCheckStr=email.split("@")
		emailCheckStr[1].length<5?success='false':''
		emailCheckStr[0].length<2?success='false':''
	}
	return success
}

function XHR(method)
{
	http_request=false;
	if(window.XMLHttpRequest)
	{
		http_request=new XMLHttpRequest()
		if(method=='post')
		{
			if(http_request.overrideMimeType)
			{
				http_request.overrideMimeType('text/html')
			}
		}
	}
	else if(window.ActiveXObject)
	{
		try
		{
			http_request=new ActiveXObject('Msxml2.XMLHTTP')
		}
		catch(e)
		{
			try
			{
				http_request=new ActiveXObject('Microsoft.XMLHTTP')
			}
			catch(e){}
		}
	}
	else return false
}

function ajaxPost(url,str)
{
	XHR('post')
	http_request.onreadystatechange=function()
	{
		if(http_request.readyState==4&&http_request.status==200)
		{
			document.getElementById('throbber').className='success'
			document.getElementById('success').style.display='block'
		}
	}
	http_request.open('POST',url,true)
	http_request.setRequestHeader('Content-type','application/x-www-form-urlencoded')
	http_request.setRequestHeader('Content-length',str.length)
	http_request.setRequestHeader('Connection','close')
	http_request.send(str)
}

