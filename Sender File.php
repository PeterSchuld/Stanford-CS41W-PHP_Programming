<html>
	<html lang="en">
    <head>
        <title>Sender File</title>
    </head>
			<!--Stanford Class Project - Beginning PHP Programming (by Eli Lev) - CS41-->
			<!--Spring 2017-->
			<!--student: Peter Schuld-->
			<!--date: May, 26th 2017-->
    <body>
        <h1>Santa Claus'</h1>
        <h3>Naughty or Nice List</h3>
		<h3>2017</h3>
		<h5>Check whether you're on Santa's Good List or Bad List!</h5>
        <h5>Just answer a few quick questions below.</h5>
	    <h5>Your ranking will go straight to</h5>
	    <h5>Santa's Naughty or Nice List so no fibbing!</h5>
		<h5>(After all, you never know when an elf might be watching!)</h5>
		<br/>
		<h5>And remember, he's making a list... checking it twice!  Gonna find out who's naughty and nice!  He </h5>
		<h5>sees you when you're sleeping.  He knows when you're awake.  He knows if you've been bad or  </h5>
		<h5>good.  So be good for goodness sake! </h5>
		<br/>
		<h5>Are You Naughty?(or nice!) </h5>
		<h5>The Incredible Elf-o-matic Naughty or Nice Determinator </h5>
		
        <form name="input" action="Receiver File.php" method="post">
        First name :  <input type="text" name="username">
        <br/>
        <br/>       
        <br/>
        Do you play nicely with others?
        <select name="play_nicely">
              <option value ="always">I share and play nicely almost all the time</option>
              <option value ="sometimes">Well, sometimes I play nicely with others, even if they don't play nice</option>
              <option value ="never">I want to be a wrestler when I grow up so I practice on everyone I can find</option>
          
        </select>
        </br>
        </br>
        Do you keep your room clean?
        <select name="room_clean">
			  <option value ="always">My room is usually so clean it sparkles like tinsel on a Christmas tree!</option>
              <option value ="sometimes">I can see the floor of my room ( well, sometimes anyway)</option>
              <option value ="never">Small children and pets have gone missing in my room for weeks</option>
		
        </select>
        </br>
        </br>
		Do you tell the truth, even if you're asked if you were naughty?
        <select name="tell_truth">
			  <option value ="always">I always try to tell the truth, even if I did something naughty</option>
              <option value ="sometimes">I tell the truth after a little bit, even though I really don’t want to</option>
              <option value ="never">I always fib and blame stuff on someone else when I’ve been bad</option>

        </select>
        </br>
        </br>
		What snack are you leaving for Santa this year?
        <select name="what_snack">
			  <option value ="treats">milk and cookies, mince pie or other yummy treats and drinks </option>
              <option value ="healthyfood">health food like tofu, rice cakes and granola bars</option>
              <option value ="socks">smelly socks</option>

        </select>
        </br>
        </br>
		</br>
        </br>
		
        <input type="submit" value=">Naughty or Nice? Click here to find out!<">
        </form>
    </body>
</html>