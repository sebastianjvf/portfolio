<?php 

	// Set the title
	$project_title = '- Trip Lens';

	// Set the description
	$project_description = '
	<span class="date">Feb 2017</span>
	<h1>Trip Lens</h1>
	
	<p>
		Trip Lens is a design concept designed to facilitate travel planning in groups. Users can set up profiles by adding information such as adding their passport type, time restrictions and maximum distance to destination. Users can then create trips, which show a map and a lens. Attaching users from the trip, represented as bubbles, to the lens will show countries to which the attached users can and want to travel together.
	</p>
	';
	
	// Set the links
	$previous_project = '../../project/tick-tock/';
	$next_project = '../../project/mixed-cuts/';
	
	// include header
	include('../project-header.php');
	
	// Content
?>

<section id="project-one" class="content">
	<div class="inner">
		<h1>Role</h1>
		<h2>Tasks</h2>
		<p>
			Trip lens was implemented in a group of four design students. Tasks for each group member remained largely the same throughout the project, especially so during the ideation phase; group members executed interviews separately to ensure a large pool of insights and ideas. My tasks in later phases of the design cycle included creating the user flow and the paper prototype.
		</p>
		<h2>Methods and tools</h2>
		<ul class="topics">
			<li>Interviews</li>
			<li>Personas</li>
			<li>Scenarios</li>
			<li>User flows</li>
			<li>Paper prototyping</li>
			<li>Video prototyping</li>
		</ul>
	</div>
</section>

<section id="project-two" class="content">
	<div class="inner">
		<h1>Ideation</h1>
		<h2>Task</h2>
		<p>
			The task was to develop a design concept which solves a user problem in the domain of travel and/or public transport. The goal of the class was to go through the user-centred design cycle rapidly and deliver a final video prototype at the end of a week. As part of the ideation phase, group members went to observe users and conduct interviews. My interviews were conducted in a group travelling abroad.
		</p>
		
		<div class="img-caption right-top">
			<img src="../../img/project/trip-lens-final.png" alt="A user interface made of paper showing a map and a movable lens.">
			<span>The final design of the map interface as shown in the video prototype.</span>
		</div>
		
		<h2>Interviews and analysis</h2>
		<p>
			The interviews conducted were quite informal; rather than guiding the conversation, I mostly observed how users were currently solving their problem and what tools they were using. Thereafter, I asked questions about what they thought caused problems during the planning phase.
		</p>
		
		<p>
			From my observations and interviews I could see that every participant in the travel group proposed their own tools and ways for dealing with problems. Participants seemed to disagree what tools to use, mentioning what made them the perfect fit; the problem was that other members were unfamiliar with the tools someone else usually used.
		</p>
		
		<p>
			Some participants were not sure about which countries they could go to, some did not like to go to certain countries which had been mentioned. A table on a paper was created for each country marking if the person would like to go there and would be able to go, according to the passport. As a last step, a common time frame had to be fun. After a small discussion, a Doodle was used with 90 days.
		</p>
		
		<p>
			Two other members turned out to have interviewed people planning trips abroad as well; we had thus collected useful insight for this case and decided to focus on group travelling for our design concept.
		</p>
		
		<h2>Personas</h2>
		<p>
			As a first step, we analysed the participants from the group travels we had interviewed. As a result, we set up three personas, bundling intentions and problems according to the insights we had gathered:
		</p>
		
		<ol>
			<li><span class="strong">Ben</span>, the traveller without time</li>
			<li><span class="strong">Nicole</span>, the traveller with a restrictive passport</li>
			<li><span class="strong">Damien</span>, the picky traveller</li>
		</ol>
		
		<h2>Scenario</h2>
		<p>
			A scenario was written down in which we modelled a common group situation. The main parts of the scenario played out the three problems we had identified, time, place and passport restrictions, and showed how users currently dealt with them.
		</p>
		
		<h2>Design brief</h2>
		<p>
			After a brainstorming sessions, we sketched our idea: the design concept of trip lens is centred around a lens to which users can attach their personal information. Moving the lens over a map will show if users can and want to go to a certain country. Countries will be coloured differently indicating that a country is available and users can add common interests to a wish list.
		</p>
	</div>
</section>

<section id="project-three" class="content">
	<div class="inner">
		<h1>Iterative prototyping</h1>
		<h2>User flows</h2>
		<p>
			From our scenario, we created a user flow for the design. The flow shows a single time line, which starts by the user adding  personal information. The flow then branches out when the user either joins or creates a trip. Finally, the user can explore the countries by moving the lens over the map.
		</p>
		<img src="../../img/project/trip-lens-1.svg" alt="A flow diagram describing the actions of users creating and joining a map." class="scaled">
		
		<h2>Wireframing and Sketching</h2>
		<p>
			We created wireframes for the three parts of the user interface: Setting up a user profile, creating a trip and adding users and exploring the map and handling the lens. We then sketched them out further, adding needed detail for the paper prototype, such as the map and a concrete design for the lens.
		</p>
		
		<h2>Paper prototyping</h2>
		<p>
			The paper prototype was created using transparent foil to simulate changing elements and highlighting parts of the map. We also realised that the metaphor of a lens could be expanded; as the lens itself constitutes an object, reifying a filter for the attached user information, we added a delete button to indicate that several lenses with different information could be created. Letting a user superpose lenses pushes the explorational nature of the concept even further.
		</p>
		
		<h2>User testing</h2>
		<p>
			We tested the design concept with six users in groups of three. Users were given the task of creating a map and finding a common country and time frame to travel to. They were also asked to think aloud. The group assigned passports to each participant and we kept track of user input by noting it down. The map showed a limited region, Europe, to give proper feedback.
		</p>
		
		<div class="img-caption">
			<img src="../../img/project/trip-lens-2.svg" alt="A lense were bubbles representing user profiles can be attached.">
			<span>A user profile was designed to be attached to and detached from the lens.</span>
		</div>
		
		<p>
			Feedback during the user testing was valuable. When creating a map, we added a lens with all users attached by default. Participants in the study quickly grasped the functionality of the lens, but were unable to figure out that profiles could be detached to explore. Secondly, users wished that, in certain situations, their information should be changeable; they would like to be able to adjust some information, such as the time restriction.
		</p>
		
		<p>
			As a result of the feedback gathered, we changed the interface of the video prototype. First, upon creation of a map, profiles had to manually be attached to the lens. Adding this signifier would ensure that support users in understanding the concept of interchangeability. Secondly, we redesigned the system to be composed of smartphones, showing the user profiles and a laptop, showing the map. Updating the information on the phone would then immediately update the information shown on the map.
		</p>
		
		<h2>Video prototyping</h2>
		<p>
			Our scenario was finally rewritten into a story board, describing how our design changed the way the users approached their problem and how it supported common situations. We created the interface as a paper prototype for the phones. Finally, a video was created showing how the design works in detail.
		</p>
</section>

<section id="project-four" class="content">
	<div class="inner">
		<h1>Conclusion</h1>
		<p>
			In a company time for a project is dictated by more than user needs. They are just as driven by economic growth and the project taught the group how to go through the user-centred design cycle in a rapid manner. We quickly responded to user feedback and incorporated it into our video prototype just hours after the user testing. On a side note, interesting techniques for paper and video prototyping were discovered, such as using layers of transparent foil and filming techniques.
		</p>
</section>

<?php 

	// Include footer
	include('../project-footer.php');
	
?>