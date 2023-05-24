
<style type="text/css">
	h1.mainhead{
	font-family: Monaco;
	height: 100px;
	margin: 0px;
	font-size: 60px;
	display:flex;
	align-items: flex-start;
	justify-content: flex-start;
	color: #fff;
	background-image: url("math.jpg");
	background-repeat: repeat-x;
	background-color: #f5f5f5;
	animation-name:heading_effect ;
	animation-duration:3s;
	animation-fill-mode: forwards;
	z-index: 100;
}
div.a1
{
	position: absolute;
	height: 100px;
	width: 0px;
	background: #ecfbf4;
	animation-name: box_move1;
	animation-duration: 4s;
	animation-timing-function: ease-in-out;
}
div.a2
{
	position: absolute;
	height: 100px;
	width: 0px;
	background: #ecfbf4;
	animation-name: box_move2;
	animation-duration: 3s;
	animation-timing-function: ease-in-out;
	background: #000;
}
@keyframes box_move1
{
		
		0%{
			width: 600px;
			left: 690px;
			background: #ecfbf4;
		}
		100%{
			left: 1400px;
			background: #ecfbf4;
		}
}
@keyframes box_move2
{
		
		0%{
			width: 600px;
			left: 80px;
			background: #ecfbf4;
		}
		100%{
			left: 00px;
			background: #ecfbf4;
		}
}
@keyframes heading_effect
{
	0%{
		letter-spacing: 20px;
		
	}
	
	100%{
		letter-spacing: 0px ;
		
	}
}
</style>
<link rel="stylesheet" type="text/css" href="style.css">
<div class="a1"></div>
<div class="a2"></div>

<h1 class="mainhead">Operations on Sets</h1>
	<div class="headerbar">
		<a class="headerbar" href="index.html">Introduction</a>|
		<a class="headerbar" href="union.html">Union</a>|
		<a class="headerbar" href="intersection.html">Intersection</a>|
		<a class="headerbar" href="Difference.html">Difference</a>|
		<a class="headerbar" href="complement.html">Complement</a>|
		<a class="headerbar" href="principle.html">Principle of Inclusion and Exclusion</a>
	</div>