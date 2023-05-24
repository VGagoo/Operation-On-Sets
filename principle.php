<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Operation on sets</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		a.bu{
			text-decoration: none;
			color: white;
		}
	</style>
</head>
<body>
	<h1 class="mainhead">Operations on Sets</h1>
	<div class="headerbar">
		<a class="headerbar" href="index.html">Introduction</a>|
		<a class="headerbar" href="union.html">Union</a>|
		<a class="headerbar" href="intersection.html">Intersection</a>|
		<a class="headerbar" href="Difference.html">Difference</a>|
		<a class="headerbar" href="complement.html">Complement</a>|
		<a class="headerbar" href="principle.html"  style="background: #fff;text-decoration: underline;">Principle of Inclusion and Exclusion</a>
	</div>
	<div class="mainarea">
		<h1 class="subhead">Principle of Inclusion and Exclusion</h1>
		<div class="container">
			<div class="flexitem">
				<p>Consider the following</p>
				<pre>A={a,b}
B={c,d}
A ∩ B = Φ
A U B = {a,b,c,d}
| A U B | = 4
				</pre>
				<p>Here we get |A|+|B|=2+2</p>
				<p>Consider the following:</p>
				<pre>A={a,b}
B={b,c}
A ∩ B = {b}
| A ∩ B | = 1
A U B = {a,b,c}
| A U B | = 3
				</pre>
				<p>Here we get |A U B| = 3 but |A|+|B|=2+2=4.</p>
				<p>This is because we do not have a disjoint set and hence we cant
					use the Addition Principle.
					The modification made to this Addition 
					<b class="highlight">Principle is the Inclusion
					and Exclusion Principle</b>.</p>
					<p>If A and B are Finite sets, then
						<b class="highlight">|A U B| = |A| + |B|- |A ꓵ B|</b>
					</p>
				</div>
			</div>
			<center>
				<div class="button" style="width:400px">
					<a class="bu" href="performprinciple.html">Principle of Inclusion and Exclusion</a></center>
				</div>
			</div>
		</body>
		</html>