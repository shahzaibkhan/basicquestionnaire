<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Questionnaire</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  
<style>
button, .button {
    margin-bottom: 1rem;
    background: #e44b78;
    color: white!important;
    font-size: 15px;
    border: 1px solid #e44b78;
    min-width: 154px;
    margin-right: 5px;
	    height: 40px;
    line-height: 39px;
}
button:hover, .button:hover,button:active, .button:active {
    color: #ccc!important;
}
.disabled { background: #ccc; border: 1px solid #ccc; color: white!important;}

.q4 h3 { margin-bottom: 10px; }
.q5 h3 { margin-bottom: 10px; }
.q4 .guide { text-align: center;
    font-size: 18px;
    margin-bottom: 25px; }
.q5 .guide { text-align: center;
    font-size: 18px;
    margin-bottom: 25px; }
.button {
display: inline-block;
width:400px;
}
</style>
<script>
var answers=new Array();
function answer(var1,ans)
{
	var questions = 16;
	if(var1 <= 15) {
		answers[var1]=ans;
	}
	if(var1 == 15) {
		$('#answers').val(answers.join(","));
		$("#frmsubmit").submit();
	} else {
		var newq = parseInt(var1) + 1;
		$(".q"+var1).hide();
		$(".q"+newq).fadeIn(1000);
	}
}						
</script>
</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <div class="row">
      <div class="full column" style="margin-top: 25%">
	  
		<div class="question q1" style="display:block">
		<center><h3><strong>In a group I am<strong></h3></center>
		<div>
			<center>
			<a href="javascript:void(0);" onClick="answer('1','A');" class="button">The Leader</a>
			<a href="javascript:void(0);" onClick="answer('1','B');"  class="button">The optimist</a>
			<a href="javascript:void(0);" onClick="answer('1','C');"  class="button">Team Focused</a>
			<a href="javascript:void(0);" onClick="answer('1','D');"  class="button">The Researcher</a>
			</center>
		</div>
		</div>
		
		<div class="question q2" style="display:none">
		<center><h3><strong>In conversations I am<strong></h3></center>
		<div>
			<center>
			<a href="javascript:void(0);" onClick="answer('2','A');" class="button">Direct</a>
			<a href="javascript:void(0);" onClick="answer('2','B');"  class="button">Talkative</a>
			<a href="javascript:void(0);" onClick="answer('2','C');"  class="button">A Great Listener</a>
			<a href="javascript:void(0);" onClick="answer('2','D');"  class="button">More Reserved</a>
			</center>
		</div>
		</div>
		
		<div class="question q3" style="display:none">
		<center><h3><strong>When considering options<strong></h3></center>
		<div>
			<center>
			<a href="javascript:void(0);" onClick="answer('3','A');" class="button">I focus on my GOAL</a>
			<a href="javascript:void(0);" onClick="answer('3','B');"  class="button">I trust my feelings</a>
			<a href="javascript:void(0);" onClick="answer('3','C');"  class="button">I need time to decide</a>
			<a href="javascript:void(0);" onClick="answer('3','D');"  class="button">I need all the details</a>
			</center>
		</div>
		</div>
		
		<div class="question q4" style="display:none">
		<center><h3><strong>I would'nt like to be seen as<strong></h3></center>
		<div>
			<center>
			<a href="javascript:void(0);" onClick="answer('4','A');" class="button">A Failure or a follower</a>
			<a href="javascript:void(0);" onClick="answer('4','B');"  class="button">Unliked and unpopular</a>
			<a href="javascript:void(0);" onClick="answer('4','C');"  class="button">Untrustworthy or unsupportive</a>
			<a href="javascript:void(0);" onClick="answer('4','D');"  class="button">Making mistakes</a>
			</center>
		</div>
		</div>

		<div class="question q5" style="display:none">
		<center><h3><strong>At work I focus on<strong></h3></center>
		<div>
			<center>
			<a href="javascript:void(0);" onClick="answer('5','A');" class="button">The results required</a>
			<a href="javascript:void(0);" onClick="answer('5','B');"  class="button">Things i am passionate about</a>
			<a href="javascript:void(0);" onClick="answer('5','C');"  class="button">Contribution and Harmony</a>
			<a href="javascript:void(0);" onClick="answer('5','D');"  class="button">The structure, details and facts</a>
			</center>
		</div>
		</div>

		<div class="question q6" style="display:none">
		<center><h3><strong>I prefer to avoid<strong></h3></center>
		<div>
			<center>
			<a href="javascript:void(0);" onClick="answer('6','A');" class="button">Long drawn out stories</a>
			<a href="javascript:void(0);" onClick="answer('6','B');"  class="button">Detailed report and plans</a>
			<a href="javascript:void(0);" onClick="answer('6','C');"  class="button">Conflict and change</a>
			<a href="javascript:void(0);" onClick="answer('6','D');"  class="button">Spontaneity and disorganisation</a>
			</center>
		</div>
		</div>


		<div class="question q7" style="display:none">
		<center><h3><strong>At work I can come across as<strong></h3></center>
		<div>
			<center>
			<a href="javascript:void(0);" onClick="answer('7','A');" class="button">Demanding and Bossy</a>
			<a href="javascript:void(0);" onClick="answer('7','B');"  class="button">Excitable and talkative</a>
			<a href="javascript:void(0);" onClick="answer('7','C');"  class="button">Reliable and steadfast</a>
			<a href="javascript:void(0);" onClick="answer('7','D');"  class="button">Analytical and detail focused</a>
			</center>
		</div>
		</div>

		<div class="question q8" style="display:none">
		<center><h3><strong>I think people think I am<strong></h3></center>
		<div>
			<center>
				<a href="javascript:void(0);" onClick="answer('8','A');" class="button">A Leader and an action taker</a>
				<a href="javascript:void(0);" onClick="answer('8','B');"  class="button">Inspiring and Spontaneous</a>
				<a href="javascript:void(0);" onClick="answer('8','C');"  class="button">Loyal and sympathetic</a>
				<a href="javascript:void(0);" onClick="answer('8','D');"  class="button">Consistent and Methodical</a>
			</center>
		</div>
		</div>

		<div class="question q9" style="display:none">
		<center><h3><strong>When playing a game I want to<strong></h3></center>
		<div>
			<center>
				<a href="javascript:void(0);" onClick="answer('9','A');" class="button">Win, win, win</a>
				<a href="javascript:void(0);" onClick="answer('9','B');"  class="button">Have fun and get creative</a>
				<a href="javascript:void(0);" onClick="answer('9','C');"  class="button">Create harmony and have a good time</a>
				<a href="javascript:void(0);" onClick="answer('9','D');"  class="button">Follow the rules properly</a>
			</center>
		</div>
		</div>

		<div class="question q10" style="display:none">
		<center><h3><strong>In a general company meeting I am more<strong></h3></center>
		<div>
			<center>
				<a href="javascript:void(0);" onClick="answer('10','A');" class="button">Confident and Focused</a>
				<a href="javascript:void(0);" onClick="answer('10','B');"  class="button">Bored and easily distracted</a>
				<a href="javascript:void(0);" onClick="answer('10','C');"  class="button">Collaborative and Supportive</a>
				<a href="javascript:void(0);" onClick="answer('10','D');"  class="button">Analysing and Challenging</a>
			</center>
		</div>
		</div>
		
		<div class="question q11" style="display:none">
		<center><h3><strong>When a friend asks for my opinion<strong></h3></center>
		<div>
			<center>
				<a href="javascript:void(0);" onClick="answer('11','A');" class="button">I am honest even if it offends</a>
				<a href="javascript:void(0);" onClick="answer('11','B');"  class="button">I am positive and encouraging</a>
				<a href="javascript:void(0);" onClick="answer('11','C');"  class="button">I may tell white lies to keep the peace</a>
				<a href="javascript:void(0);" onClick="answer('11','D');"  class="button">I give accurate facts in feedback</a>
			</center>
		</div>
		</div>
		
		<div class="question q12" style="display:none">
		<center><h3><strong>When working on a project I<strong></h3></center>
		<div>
			<center>
				<a href="javascript:void(0);" onClick="answer('12','A');" class="button">Am focused on the end result</a>
				<a href="javascript:void(0);" onClick="answer('12','B');"  class="button">Work intuitively</a>
				<a href="javascript:void(0);" onClick="answer('12','C');"  class="button">Stay within the guide lines</a>
				<a href="javascript:void(0);" onClick="answer('12','D');"  class="button">Gather as much info as possible first</a>
			</center>
		</div>
		</div>
		<div class="question q13" style="display:none">
		<center><h3><strong>People seek me out for<strong></h3></center>
		<div>
			<center>
				<a href="javascript:void(0);" onClick="answer('13','A');" class="button">Leadership</a>
				<a href="javascript:void(0);" onClick="answer('13','B');"  class="button">Inspiration</a>
				<a href="javascript:void(0);" onClick="answer('13','C');"  class="button">Support</a>
				<a href="javascript:void(0);" onClick="answer('13','D');"  class="button">Logic</a>
			</center>
		</div>
		</div>
		<div class="question q14" style="display:none">
		<center><h3><strong>I'd really like to<strong></h3></center>
		<div>
			<center>
				<a href="javascript:void(0);" onClick="answer('14','A');" class="button">Reach my goals and mentor others</a>
				<a href="javascript:void(0);" onClick="answer('14','B');"  class="button">Follow my bliss and inspire other</a>
				<a href="javascript:void(0);" onClick="answer('14','C');"  class="button">Make a difference in the World</a>
				<a href="javascript:void(0);" onClick="answer('14','D');"  class="button">Become an expert in my field</a>
			</center>
		</div>
		</div>
		<div class="question q15" style="display:none">
		<center><h3><strong>I dislike<strong></h3></center>
		<div>
			<center>
				<a href="javascript:void(0);" onClick="answer('15','A');" class="button">Weakness and over sensitivity</a>
				<a href="javascript:void(0);" onClick="answer('15','B');"  class="button">Intricate details and data</a>
				<a href="javascript:void(0);" onClick="answer('15','C');"  class="button">Aggressiveness and sudden change</a>
				<a href="javascript:void(0);" onClick="answer('15','D');"  class="button">Mistakes and poor decisions</a>
			</center>
		</div>
		</div>
		<div class="question q16" style="display:none">
		<center><h3><strong>Enter your Details Below<strong></h3></center>
		<div>
			<center>
				<input type="text" name="Name" id="VName" placeholder="Full Name" style="display: block; width: 300px;"/>
				<input type="text" name="Email" id="VEmail" placeholder="Email Address" style="display: block; width: 300px;"/>
				<a href="javascript:void(0);" onClick="answer('16','');"  class="button" style="display: block; width: 300px;">Submit</a>
			</center>
		</div>
		</div>
		
      </div>
    </div>
  </div>

<form id="frmsubmit" method="POST" action="submit.php">
	<input type="hidden" id="answers" name="answers"/>
	<input type="hidden" id="name" value="Name" name="name"/>
	<input type="hidden" id="email"value="Email" name="email"/>
	<input type="submit" style="width:0px;height:0px;visibility:hidden;"/>
</form>
</body>
</html>
