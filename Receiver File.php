<html>	
    <head>
        <title>Receiver File</title>
    </head>
    <body>
            <!--Stanford Class Project - Beginning PHP Programming (by Eli Lev) - CS41-->
			<!--Spring 2017-->
			<!--student: Peter Schuld-->
			<!--date: May, 26th 2017-->
			
			<?php
                $br = "<BR/>"; //html line break - variable created so its easier to type
                
				$username = "";	//  Initializing form variables
                $play_nicely = "";
                $room_clean = "";
                $tell_truth = "";
			    $what_snack = "";
			   
                extract($_REQUEST, EXTR_IF_EXISTS);
							
				if ($username== "") // Assume non human input if no name is entered
				{	
				print "<font color=\"red\"><h1>Your name was empty! Therefore, Santa Claus calls you Rupert the reindeer !!!</h1> </font>";
				$username = "Rupert the reindeer";
				
				}
				else {print "The Official Naughty or Nice Ranking for $username : $br";}
					
					
				date_default_timezone_set('UTC');	// set the default timezone to Greenwich Mean Time (same as North Pole) 
					
					$grade = 0;		//	Calculate the number of naughty answers to determine the numerical grade 
					if ($play_nicely=="never"){$grade++;} else {$grade=$grade;}	
					if ($room_clean=="never"){$grade++;}  else {$grade=$grade;}
					if ($tell_truth=="never"){$grade++;}  else {$grade=$grade;}
					if ($what_snack=="socks"){$grade++;}  else {$grade=$grade;}
										
										
					if ($grade==0)	// Passed with letter grade: A+ and with no naughty answers
					{
					print("Nice (A+) $br");
					print("Dated this ");
					echo date('l jS \of F Y');
					print("$br At the North Pole");
					print("$br $br $br");
					print("Ho! Ho! Ho! $br");
					print("Congratulations $username!!  You really are so good that you should be the angel on top of the tree! $br");
					print("Everyone at the North Pole, including me, is very proud of you $username!  Keep up the wonderful work! $br");
					print("Merry Christmas! $br");
					}
					
					if ($grade==1)	// Passed with letter grade: B+ and with one naughty answer
					{
					print("Nice (B+) $br");
					print("Dated this ");
					echo date('l jS \of F Y');
					print("$br At the North Pole");
					print("$br $br $br");
					print("Merry Christmas $username! $br");
					print("Way to go $username!  Your halo may be a little bit crooked but you're definitely on Santa's Nice $br");
					print("List!  Mrs. Claus and the elves sure do look forward to hearing how you're doing! $br");
					print("Keep up the great work, $username! $br");
					print("Merry Christmas! $br");
					}
					
					if ($grade==2)	// Just passed with letter grade; C+ and with two naughty answers
					{
					print("Nice (C+) $br");
					print("Dated this ");
					echo date('l jS \of F Y');
					print("$br At the North Pole");
					print("$br $br $br");
					print("Ho! Ho! Ho! $username! $br");
					print("Congratulations $username for being on Santa's Nice List! $br");
					print("Some of the elves were telling me though that they thought you could do even better if you $br");
					print("worked a little harder on being good.  That way you could really 'earn your wings'!  (*wink*)! $br");
					print("Merry Christmas! $br");
					}
					
					if ($grade==3)	//	Just failed with three naughty answers
					{
					print("Almost on the Nice List $br");
					print("Dated this ");
					echo date('l jS \of F Y');
					print("$br At the North Pole");
					print("$br $br $br");
					print("Ho! Ho! Ho!  You've been a little naughty so far this year haven't you!  Of course, the elves ");
					print("are sure you really haven't been *that* bad! (*wink*) $br");
					print("The elves are hoping you'll work really hard at being good before Christmas so you'll be on  $br");
					print("Santa's Nice List by then.  Try hard $username!  The elves are cheering for you! $br");
					}
					
					if ($grade==4)	//	Totally failed with four naughty answers
					{
					print("My Goodness, $username! $br");
					print("You're a real little stinker aren't you!  The elves have been talking for a while about whether $br");
					print("they can find a lump of coal big enough for you! $br");
					print("I have to be honest with you $username, at the rate you're going, it's not looking good for you this  $br");
					print("year... or next year... or the year after that... (*wink*).  Mind you, Mrs. Claus and I have a  $br");
					print("funny feeling you rather enjoy being a scamp!  (*wink*)  $br");
					}
					
				print("$br $br $br");
				print "<font color=\"red\"><h1>Santa Claus</h1> </font>";	// Signiture of Santa Claus 
				print("$br $br $br");
					
					// postscipt for kids who give socks to Santa Claus
					if ($what_snack=="socks"){print("P.S.  You aren't really going to leave me smelly socks for a snack are you? $br");}
					
				print("$br $br $br");
				print("Important Notice:  A certified copy of this 'Naughty or Nice' ranking has been placed in a special high-security  $br");
				print("vault in the offices of Santa's accounting firm of 'Elf, Elf & Galoshes' and cannot be removed until Christmas $br");
				print("Eve.  Merry Christmas!  $br");
				print("$br $br $br");	
					
				print("$username, this is how you answered the questions in the $br");
				print("~ Incredible Elf-o-matic Naughty or Nice Determinator ~ $br");
				print("$br $br");
				
				print("Do you play nicely with others? $br");
				if ($play_nicely=="always"){print("I share and play nicely almost all the time $br");} 
				if ($play_nicely=="sometimes"){print("Well, sometimes I play nicely with others, even if they don't play nice $br");}
				if ($play_nicely=="never"){print("I want to be a wrestler when I grow up so I practice on everyone I can find $br");}
				print("$br $br");
				
				print("Do you keep your room clean? $br");
				if ($room_clean=="always"){print("My room is usually so clean it sparkles like tinsel on a Christmas tree! $br");} 
				if ($room_clean=="sometimes"){print("I can see the floor of my room ( well, sometimes anyway) $br");}
				if ($room_clean=="never"){print("Small children and pets have gone missing in my room for weeks $br");}
				print("$br $br");
				
				print("Do you tell the truth, even if you're asked if you were naughty? $br");
				if ($tell_truth=="always"){print("I always try to tell the truth, even if I did something naughty $br");} 
				if ($tell_truth=="sometimes"){print("I tell the truth after a little bit, even though I really don’t want to $br");}
				if ($tell_truth=="never"){print("I always fib and blame stuff on someone else when I’ve been bad $br");}
				print("$br $br");	
					
				print("What snack are you leaving for Santa this year? $br");
				if ($what_snack=="treats"){print("I always try to tell the truth, even if I did something naughty $br");} 
				if ($what_snack=="healthyfood"){print("I tell the truth after a little bit, even though I really don’t want to $br");}
				if ($what_snack=="socks"){print("I always fib and blame stuff on someone else when I’ve been bad $br");}
				print("$br $br");	
					
					
					
					
            ?>
    </body>
</html>
