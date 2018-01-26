<?php 

	// Set the title
	$project_title = '- Cirkel App';

	// Set the description
	$project_description = '
	<span class="date">Nov 2017</span>
	<h1>Cirkel App</h1>
	
	<p>
		Cirkel, Dutch for \'circle\', is a mobile application which enables users to scan their environment to discover new music locally using the Spotify API. After connecting their Spotify account, users can see people around them. By clicking on a coloured bubble, representing a user\'s musical taste, a user can see that user\'s favourite song and can add it to a playlist. 
	</p>
	
	<a href="https://github.com/sebastianjvf/cirkel-app" class="more">View on GitHub</a>
	';
	
	// Set the li
	$previous_project = '../../project/once-upon-a-shadow/';
	$next_project = '../../project/val-app/';
	
	// include header
	include('../project-header.php');
	
	// Content
?>

<section id="project-one" class="content">
	<div class="inner">
		<h1>Role</h1>
		<h2>Tasks</h2>
		<p>
			The project was developed during <a href="https://hackjunction.com" target="_blank">Junction 2017</a>, Europe's biggest Hackathon. Developed in a group of four, my tasks included sketching, creating the user interface design concept, Vector work and front-end development in HTML5, CSS3 and JavaScript6.
		</p>
		
		<h2>Methods and tools</h2>
		<ul class="topics">
			<li>Introspection</li>
			<li>Sketching</li>
			<li>Design concept</li>
			<li>Cognitive walkthroughs</li>
			<li>High-fidelity prototyping</li>
			<li>HTML</li>
			<li>CSS</li>
			<li>JavaScript</li>
		</ul>
	</div>
</section>

<section id="project-two" class="content">
	<div class="inner">
		<h1>Ideation</h1>
		<h2>Task</h2>
		<p>
			Participants in the Hackathon were able to choose between a number of tracks, supported by company employees. Our task was to develop a project with 'the most creative usage of the Spotify API platform'.
		</p>
		
		<h2>Introspection and brainstorming</h2>
		<p>
			We set down for a short discussion to come up with ideas. As time was very limited, we had 48 hours to finish the project, no interviews were conducted. Instead, as three groups members were active Spotify users, we opted for the introspection as a technique to inform our design with relevant insights.
		</p>
		
		<p>
			Having brainstormed individually, we collected problems and thoughts on the Spotify platform: What was the Spotify platform trying to offer, but failed to do? What did we wish the Spotify platform had? We made a list of all the things we could think of:
		</p>
		
		<ol>
			<li>Spotify wants to connect people, but fails to foster true collaborative music discovery</li>
			<li>Spotify wants people to discover new music constantly as a way of raising interest and keeping them on the platform</li>
			<li>Spotify wants people to spend as much time on the platform as possible</li>
		</ol>
		
		<p>
			One of the ideas which came up during this discussion was to visualise a user's taste of music and how it is influenced by the music of others. We quickly adopted the idea of colour as a representation, creating one for each user according to three criteria: Speed, (musical) key and amplitude. This would give the user  an indication of how one's musical taste compares to another user's taste.
		</p>
		
		<p>
			Finally, we included movement: a user could see in near real time where other users around oneself where located and how their musical tastes compared. A playlist of titles 'crossed' in a day would automatically be created to Spotify.
		</p>
		
		<h2>Sketching</h2>
		<p>
			While the other members started setting up the technical ecosystem, I started sketching out ideas for the user interface. As users came from the Spotify platform, I wanted to keep the colours and the look of icons close to Spotify's own UI. This consistency in the design language would help the user stay in the loop and reduce the cognitive load - little learning would be needed coming from the Spotify platform.
		</p>
		
		<div class="img-caption left-bottom">
			<img src="../../img/project/cirkel-app-1.png" alt="A sketch showing a big bubble in the middle and smaller bubbles around. A finger touches a small bubble reavealing a slide-up menu.">
			<span>A first sketch showing the user as a bubble and small bubbles around him/her.</span>
		</div>
		
		<p>
			I also changed the idea of colours a little: Rather than a playlist being added automatically, users could click on bubbles of other users and, on demand, they could add the last-heard title of that user to the playlist.
		</p>
	</div>
</section>

<section id="project-three" class="content">
	<div class="inner">
		<div class="desktop-only">
			<h1>Development</h1>
			<p>
				The user interfaces was implemented in vanilla HTML5, CSS3 and JavaScript6. The icons were created in Affinity Designer and colours where chosen to fit in with Spotify's colour scheme. The environment was tested on an iPhone 8 and a Google Nexus 5X. A small animation to analysing the environment was added to show visualise the system status to the user.
			</p>
			
			<h1>Try the application</h1>
				An interactive, non-functional prototype of the user interface can be tested below. Note that interaction is designed for a touch screen, so no hover effects will be visible.
				<div class="phone">
					<iframe src="https://sebastianjvf.github.io/cirkel-app/"></iframe>
				</div>
		</div>
	</div>
</section>

<section id="project-four" class="content">
	<div class="inner">
		<h1>Evaluation</h1>
		<h2>Cognitive walkthroughs</h2>
		<p>
			As a way of evaluating the usability of and user experience with the application, I conducted a short cognitive walkthrough according to Norman's and Nielsen's 10 usability heuristics.
		</p>
		
		<ol>
			<li><span class="bold">Visibility of system status</span>: The system status is updated in real time.</li>
			<li><span class="bold">Match between system and the real world</span>: This could be improved; the bubbles are not mapped directly to the users' actual positions</li>
			<li><span class="bold">User control and freedom</span>: A button was missing to close the individual title of a user and open up the menu again.</li>
			<li><span class="bold">Consistency and standards</span>: According to the Spotify advocates present at the event, the design nicely resembled the design of Spotify.</li>
			<li><span class="bold">Error prevention</span>: In this version, no error prevention from a usability point of view was implemented. Something to think about for the next version.</li>
			<li><span class="bold">Recognition rather than recall</span>: Users could add song titles as directly to a playlist as they wished - no need to remember them.</li>
			<li><span class="bold">Flexibility and efficiency of use</span>: Users can add titles either in a list of all songs around them or by individual user, giving them flexibility.</li>
			<li><span class="bold">Aesthetic and minimalist design</span>: The design was reduced only to the minimal functionality that was needed.</li>
			<li><span class="bold">Help users recognise, diagnose, and recover from errors</span>: In this version, no error prevention from a usability point of view was implemented. Something to think about for the next version.</li>
			<li><span class="bold">Help and documentation</span>: After analysing this heuristic, I set up a small explanation screen that would explain in a few words what the app was doing.</li>
		</ol>
	</div>
</section>

<?php 

	// Include footer
	include('../project-footer.php');
	
?>