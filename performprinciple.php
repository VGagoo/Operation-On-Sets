<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Operation on sets</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">

		
div.circle2 {
 width: 280px;
height: 280px;
	border-radius: 50%;
opacity: 0.7;
	position: absolute;
	z-index: 1;
	background-color: #fff;
  animation-name: anime2;
  animation-duration: 1s;
  animation-fill-mode: forwards;
  animation-timing-function: ease-out;
}

div.circle1 {
 width: 280px;
height: 280px;
	border-radius: 50%;
opacity: 0.7;
	position: absolute;
	z-index: 1;
	background-color: #fff;
  animation-name: anime1;
  animation-duration: 1s;
  animation-fill-mode: forwards;
  animation-timing-function: ease-out;
}
div.rectangle{
	width: 400px;
     height: 250px;
opacity: 0.7;
	position: absolute;
	z-index: 1;
	background-color: #000;
  animation-name: anime3;
  animation-duration: 1s;
  animation-fill-mode: forwards;
  animation-timing-function: ease-out;
}
@keyframes anime2 {
  from {top: 235px;right:00px;}
  to {right:620px;top:300px;}
}
@keyframes anime1 {
  from {top: 235px;left: 00px;}
  to {left:560px;top:300px;}
}
@keyframes anime3 {
  from {top: 390px;left: 610px;width: 0px;height: 0px;}
  to {width: 500px;height: 340px;top: 270px}
}
 

div.c1{
	height: 30px;
	width: 40px;
	left: 490px;
	top: 420px;
	position: absolute;
	z-index: 99;
	font-size:20px ;
	display: flex;
	flex-flow: wrap;
	justify-content: space-between;
	align-items: flex-start;
		flex-direction:column;
		

}

div.c2{
	height: 30px;
	width: 40px;
	left: 690px;
	top: 420px;
	position: absolute;
		z-index: 99;
		font-size:20px ;
	display: flex;
	flex-flow: wrap;
	justify-content: space-between;
	align-items: flex-start;
		flex-direction:column;
	

}
div.i
{
	height: 30px;
	width: 40px;
	left: 590px;
	top: 420px;
	position: absolute;
		z-index: 99;
font-size:20px ;
	display: flex;
	flex-flow: wrap;
	justify-content: space-between;
	align-items: flex-start;
		flex-direction:column;
		
}
p{
	margin:0px;
	padding: 0px;



}
	</style>
</head>
<body>
	<div class="headerbar">
		<a class="headerbar" href="index.html">Introduction</a>|
		<a class="headerbar" href="union.html">Union</a>|
		<a class="headerbar" href="intersection.html">Intersection</a>|
		<a class="headerbar" href="Difference.html">Difference</a>|
		<a class="headerbar" href="complement.html">Complement</a>|
		<a class="headerbar" href="principle.html">Principle of Inclusion and Exclusion</a>
	</div>	
	<div class="mainarea">
		<h1 class="subhead">Enter the values for any 3 box and enter 'n' for the value to be computed </div>
	<div class="container" style="justify-content:space-around;">
		<div class="flexitem" >
			|A U B|<input type="text" name="set1" id="a_u_b" style="width: 100px">
		</div>
		<div class="flexitem">
			|A|<input type="text" name="set2" id="a" style="width: 100px">
			<br>
		</div>
		<div class="flexitem" >
			 |B|<input type="text" name="set2" id="b" style="width: 100px">
		</div>
		<div class="flexitem" >
			 |A ꓵ B|<input type="text" name="set2" id="a_i_b" style="width: 100px">
		</div>
	</div>
	<b style="position: absolute;top:280px;left:510px">A</b>
		<b style="position: absolute;top:280px;left:700px">B</b>
<div class="rectangle" style="left:360px;top: 200px;"></div>	
<div class="circle1"></div>
<div class="circle2" style=""></div>
<div class="c1" id="c1">

</div>
<div class="c2" id="c2">
	</div>
<div class="i" id="i">
	</div>
	<input type="button" class="button" name="compute" onclick="find()" style="height: 45px;margin:15px" value="Compute Result"><br>
	<input type="button" class="button" name="clear" onclick="clearscr()" style="height: 45px;margin:15px" value="Re-Compute">
	</div>
</body>
<script type="text/javascript">
	function clearscr()
	{
		document.getElementById("a").readOnly=false;
		document.getElementById("b").readOnly=false;
		document.getElementById("a_i_b").readOnly=false;
		document.getElementById("a_u_b").readOnly=false;
		document.getElementById("a_i_b").value="";
		document.getElementById("a_u_b").value="";
		document.getElementById("a").value="";
		document.getElementById("b").value="";
		document.getElementById("a").style.background="white";
		document.getElementById("b").style.background="white";
		document.getElementById("a_i_b").style.background="white";
		document.getElementById("a_u_b").style.background="white";
	}
	function find() 
	{

			a_i_b=document.getElementById("a_i_b").value;
			a_u_b=document.getElementById("a_u_b").value;
			a=document.getElementById("a").value;
			b=document.getElementById("b").value;
			

			if (a=='n') 
			{
			if(!a_i_b.match(/\d/))
			{
				alert("Invalid Input for set A Intersection B")
				clearscr();
				return;
			}
			if(!a_u_b.match(/\d/))
			{
				alert("Invalid Input for set A Union B");
			clearscr();
			return;
		}
			if(!b.match(/\d/))
				{
					alert("Invalid Input for set B");
					clearscr();
					return;	
				}
			}				
			else if (b=='n') 
			{
			if(!a_i_b.match(/\d/))
			{
				alert("Invalid Input for set A Intersection B")
				clearscr();
				return;
			}
			if(!a_u_b.match(/\d/))
			{
				alert("Invalid Input for set A Union B");
			clearscr();
			return;
		}
			if(!a.match(/\d/))
				{
					alert("Invalid Input for set A");
					clearscr();
					return;	
				}
			}	

			else if (a_u_b=='n') 
			{
			if(!a_i_b.match(/\d/))
			{
				alert("Invalid Input for set A Intersection B")
				clearscr();
				return;
			}
			if(!a.match(/\d/))
			{
				alert("Invalid Input for set A");
			clearscr();
			return;
		}
			if(!b.match(/\d/))
				{
					alert("Invalid Input for set B");
					clearscr();
					return;	
				}
			}	

			else if (a_i_b=='n') 
			{
			if(!a.match(/\d/))
			{
				alert("Invalid Input for set A")
				clearscr();
				return;
			}
			if(!a_u_b.match(/\d/))
			{
				alert("Invalid Input for set A Union B");
			clearscr();
			return;
		}
			}
			else
				alert("There must be one box with 'n'")




			if(a=='n')
			{
				a_u_b=parseInt(a_u_b)
				b=parseInt(b)
				a_i_b=parseInt(a_i_b)
				res=a_u_b-b+a_i_b;
				document.getElementById("a").value=res;
				document.getElementById("a").style.background="Green";
				document.getElementById("a").readOnly=true;
				document.getElementById("b").readOnly=true;
				document.getElementById("a_i_b").readOnly=true;	
				document.getElementById("a_u_b").readOnly=true;
				document.getElementById('i').innerHTML="<p>"+a_i_b+"</p>"
				document.getElementById('c1').innerHTML="<p>"+res+"</p>"
				document.getElementById('c2').innerHTML="<p>"+b+"</p>"
			}
			else
				if(b=='n')
			{
				a_u_b=parseInt(a_u_b)
				a=parseInt(a)
				a_i_b=parseInt(a_i_b)
				res=a_u_b-a+a_i_b;
				document.getElementById("b").value=res;
				document.getElementById("b").style.background="Green";
				document.getElementById("a").readOnly=true;
				document.getElementById("b").readOnly=true;
				document.getElementById("a_i_b").readOnly=true;
				document.getElementById("a_u_b").readOnly=true;
				document.getElementById('i').innerHTML="<p>"+a_i_b+"</p>"
				document.getElementById('c1').innerHTML="<p>"+a+"</p>"
				document.getElementById('c2').innerHTML="<p>"+res+"</p>"
			}
			else
				if(a_i_b=='n')
			{
				a_u_b=parseInt(a_u_b)
				a=parseInt(a)
				b=parseInt(b)
				res=a+b-a_u_b;
				document.getElementById("a_i_b").value=res;
				document.getElementById("a_i_b").style.background="Green";
				document.getElementById("a").readOnly=true;
				document.getElementById("b").readOnly=true;
				document.getElementById("a_i_b").readOnly=true;
				document.getElementById("a_u_b").readOnly=true;
				document.getElementById('i').innerHTML="<p>"+res+"</p>"
				document.getElementById('c1').innerHTML="<p>"+a+"</p>"
				document.getElementById('c2').innerHTML="<p>"+b+"</p>"
			}
			else
				if (a_u_b=='n')
				{
				a_i_b=parseInt(a_i_b)
				a=parseInt(a)
				b=parseInt(b)
				res=a+b-a_i_b;
				document.getElementById("a_u_b").value=res;
				document.getElementById("a_u_b").style.background="Green";
				document.getElementById("a").readOnly=true;
				document.getElementById("b").readOnly=true;
				document.getElementById("a_i_b").readOnly=true;
				document.getElementById("a_u_b").readOnly=true;
				document.getElementById('i').innerHTML="<p>"+a_i_b+"</p>"
				document.getElementById('c1').innerHTML="<p>"+a+"</p>"
				document.getElementById('c2').innerHTML="<p>"+b+"</p>"
			}
	}
</script>
</html>