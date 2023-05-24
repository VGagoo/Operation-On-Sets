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
  to {right:620px;top:230px;}
}
@keyframes anime1 {
  from {top: 235px;left: 00px;}
  to {left:560px;top:230px;}
}
@keyframes anime3 {
  from {top: 390px;left: 610px;width: 0px;height: 0px;}
  to {width: 500px;height: 340px;}
}
 

div.c1{
				height: 200px;
				width: 100px;
				left: 465px;
				top: 270px;
				position: absolute;
				z-index: 99;
				font-size:20px ;
				display: flex;
				flex-flow: wrap;
				 justify-content: space-around;
	    align-items: center;        
	    align-content: center; 
				flex-direction:column;
				

			}


			div.c2{
				height: 200px;
				width: 100px;
				left: 655px;
				top: 270px;
				position: absolute;
				z-index: 99;
				font-size:20px ;
				display: flex;
				flex-flow: wrap;
				 justify-content: space-around;
	    align-items: center;        
	    align-content: center; 
				flex-direction:column;
				

			}
			div.i
			{
				height: 160px;
				width: 60px;
				left: 580px;
				top: 295px;
				position: absolute;
				z-index: 99;
				font-size:20px ;
				display: flex;
				flex-flow: wrap;
				
	    justify-content: space-around;
	    align-items: center;  
	    align-content: center; 
				flex-direction:column;
				
				overflow: hidden;
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
	<div class="container" style="justify-content:space-around;">
		<div class="flexitem" >
			A = <input type="text" id="box1" name="set1" placeholder="Separate elements by space">
		</div>
		<div class="flexitem">
			B = <input type="text" id="box2" name="set2" placeholder="Separate elements by space">
			<br>
		</div>
		<div class="flexitem" >
			A - B = <input type="text" id="box3" name="set2" readonly>
		</div>
	</div>
	<b style="position: absolute;top:210px;left:510px">A</b>
		<b style="position: absolute;top:210px;left:700px">B</b>
				<b style="position: absolute;top:230px;left:490px;z-index: 99;">A-B</b>

<div class="rectangle" style="left:360px;top: 200px;"></div>	
<div class="circle1"></div>
<div class="circle2" style=""></div>
<div class="c1 answer" id="c1"></div>
<div class="c2" id="c2"></div>
<div class="i" id="i"></div>
	<input type="button" onclick="find()" class="button" name="compute" style="height: 45px;margin:15px" value="Compute Result">
	<p>In the venn diagram only A<br>
 without B and Intersection part is A - B</p>
	</div>
</body>
<script type="text/javascript">
	function find()
	{
		var a_inter_b=[];
		var the_a=[];
		var the_b=[];
		var flag=false;
		var text1="";
		var text2="";
		var text3="";

		
	A=document.getElementById('box1').value;
	var setA=A.split(",");//converting into array from string
	B=document.getElementById('box2').value;
	var setB=B.split(",");//converting into array from string


	//to get a intersection b from a and b
	for(i=0;i<setA.length;i++)
	{
		for(j=0;j<setB.length;j++)
		{
			if (setA[i]==setB[j]) 
			{
				a_inter_b.push(setA[i]);		
			}		
		}
	}


	//to obtain the set a without a intersection b
	for(i of setA)
	{
		flag=false
		for(j of a_inter_b)
		{
			if (i==j)
			{
				flag=true;
			}
		}
		if (flag==false)
		 {
		 	the_a.push(i);
		 }
	}


	//to obtain the set b without a intersection b
	for(i of setB)
	{
		flag=false
		for(j of a_inter_b)
		{
			if (i==j)
			{
				flag=true;
			}
		}
		if (flag==false)
		{
		 	the_b.push(i);
		}
	}


	//difference operation result
	
	document.getElementById("box3").value=the_a;


	for(i=0;i<the_b.length;i++)
	{
	text2+="<p>"+the_b[i]+"</p>";
	}
	document.getElementById('c2').innerHTML=text2;

	for(i=0;i<the_a.length;i++)
	{
	text1+="<p>"+the_a[i]+"</p>";
	}
	document.getElementById('c1').innerHTML=text1;

	for(i=0;i<a_inter_b.length;i++)
	{
	text3+="<p>"+a_inter_b[i]+"</p>";
	}
	document.getElementById('i').innerHTML=text3;
	console.log(text1);
	console.log(text2);
	console.log(text3);
	}

	</script>
</html>