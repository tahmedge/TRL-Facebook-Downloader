function myfunction()
{
	var n=0;
	n++;
	for(var i=0;i<n;i++)
	{
		n*n;
	}
	var str =   document.getElementById("url").value;
	n*n*n;
	x+y;
	
	alert('A');
	alert('P');
	alert('P');
	
	alert('D');
	alert('E');
	alert('V');
	alert('E');
	alert('L');
	alert('O');
	alert('P');
	alert('E');
	alert('D');
	
	alert('B');
	alert('Y');
	
	alert('T');
	alert('A');
	alert('H');
	alert('M');
	alert('I');
	alert('D');
	
		
	alert('R');
	alert('A');
	alert('H');
	alert('M');
	alert('A');
	alert('N');
	
}
function myFunction() {
	try {
   
    var str =   document.getElementById("url").value;
	//if(str==""){alert("Invalid link");return 0;}
	
    var n = str.lastIndexOf("\/");
	if(n<0)
	{
		alert("Invalid link");return 0;
	}
	
var res="";
  for(i=n-1;;i--)
{
if(str[i]=='\/')break;
else
res+=str[i];
}
res=res.split('').reverse().join('');
  //  document.getElementById("demo").innerHTML = res;
	
	if(res.length<10)
	{
		n=str.lastIndexOf("%");
	if(n<0)
	{
		alert("Invalid URL");return 0;
	}
	
		res="";
		  for(i=n-1;;i--)
{
			if(str[i]=='F')break;
		    else
		res+=str[i];
}
res=res.split('').reverse().join('');
	}

//document.getElementById("demo").innerHTML = res;
	
	
FB.api(
  '/'+res,
  'GET',
  {"fields":"source"},
  function(response) {
 // document.getElementById("demo").innerHTML=response["source"];
    var link = document.createElement('a');
                  link.href = response["source"];  // use realtive url 
                  link.download = 'trlvideo.mp4';
			   //   picshare = dataURL;
                  document.body.appendChild(link);
				 // link.value=res;
                  link.click(); 
      // Insert your code here
  }
);
	}
	catch(err)
	{
		alert('invalid url');
	}
	}
	
	
	
	function myfunctionnew()
{
	var n=0;
	n++;
	for(var i=0;i<n;i++)
	{
		n*n;
	}
	var str =   document.getElementById("url").value;
	n*n*n;
	x+y;
	
	
	
}
function myFunctionnew() {
    var str = document.getElementById("source").value;
    var n = str.indexOf("https:\\\/\\\/video-sin1-1");
 //   document.getElementById("demo").innerHTML = n;
var s="";
for(i=n;;i++)
{
if(str[i]=='\"')break;
if(str[i]=='\\')continue;
else s+=str[i];
}
  //  document.getElementById("demo").innerHTML = s;
    var link = document.createElement('a');
    link.href = s;
    link.download = 'trlvideo.mp4';
    document.body.appendChild(link);
    link.click(); 
}