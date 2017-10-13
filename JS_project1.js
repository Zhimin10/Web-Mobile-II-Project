/*
Zhimin Lin
2/24/2017
Individual Project Part 1
*/

function validate()
{
	if (document.getElementsByTagName('input')[0].value == '')
	{
		document.getElementById('name').style.borderColor='red';
		document.getElementById('comment_hint').style.opacity='1';
		return false;
	}
	if (document.getElementsByTagName('textarea')[0].value == '')
	{
		document.getElementById('comment').style.borderColor='red';
		return false;
	}
	else
	{
		return true;
	}
}

var index = 0;

changePic();

function changePic()
{
	var i;
	var img = document.getElementsByClassName("rochester_img"); 
	
	if(img.length == 0)
	{
		setTimeout(changePic, 10);
		return;
	}
	
	for(i = 0; i < img.length; i++)
	{
		img[i].style.display = "none";
	}
	
	index++;
	
	if(index > img.length)
	{
		index = 1;
	}
	img[index-1].style.display = "block"; 
	
	setTimeout(changePic, 2000);
	
}







