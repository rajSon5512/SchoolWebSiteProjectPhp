

function CheckBlack(x,msg)
{
	name=x.value;
	len=name.length;
	
	if(len==0)
	{
		alert(msg);
		x.focus();
		return false;
	}

return true;
}

function Checkzip(y,msg)
{
	zip=y.value;
	len=zip.length;
	
	
	if(len!=6)
	{
		
		alert(msg);
		y.focus();
		return false;	
	
	}
	else
	{
		return true;
	}
	
}

function CheckMobile(y,msg)
{
	zip=y.value;
	len=zip.length;
	
	
	if(len!=10)
	{
		
		alert(msg);
		y.focus();
		return false;		
	}
	else
	{
		return true;
	}
	
}

function CheckDep(x)
{

	val=x.value;
	
	if(val==-1)
	{
		alert("please Select Corrent Department.");
	}
		
	
}
