<?php 

	// Set the title
	$project_title = '- Val App';

	// Set the description
	$project_description = '<span class="date">Oktober 2017 - January 2018</span><h1>Val App</h1>
	<p>
		Val, meaning \'choice\' in Swedish, is a mobile application designed to improve the decision-making process in meetings. Users can easily set up a peer-to-peer network to vote anonymously. A host guides connected users through the meeting and creates questions. After voting, the results are shown on connected devices.
	</p>
	';
	
	// Set the links
	$previous_project = '/projects/tick-tock/';
	$next_project = '/projects/trip-lense/';
	
	// include header
	include('project-header.php');
	
	// Content
?>

<section id="project-one" class="content">
	<div class="inner">
		<h1>Role</h1>
		<h2>Tasks</h2>
		<p>
			The project was carried out in a group of four using iterative steps of user testing and prototyping. My main tasks included user research, sketching/wireframing and evaluation together with a fellow design student. I also created the interactive prototype (using Sketch and Invision) and helped implement parts of the user interface and the database using the native Android Java environment.
		</p>
		<h2>Methods and tools</h2>
		<ul class="topics">
			<li>Observations</li>
			<li>Interviews</li>
			<li>Scenarios</li>
			<li>User flows</li>
			<li>Paper prototyping</li>
			<li>Sketch</li>
			<li>Invision</li>
			<li>Android Studio</li>
			<li>Java</li>
		</ul>
	</div>
</section>

<section id="project-two" class="content">
	<div class="inner">
		<h1>Ideation</h1>
		<h2>Task</h2>
		<p>
			The project was part of a class called 'Developing Mobile Applications'. The task was to design a mobile application which solves a common user problem using a mobile app. Ideation began by observing users around us, independently from one another. Then, each group member conducted one interview. The goal was to analyse what problems people had in their daily lives and how they solved them using technology and then gather insights during a brainstorming session.
		</p>
		
		<h2>Observations</h2>
		<p>
			We noticed that apps used during the observations fell into two broad categories: social networking and music. Apps used for social networking proved to deliver to most interesting insights. Instead of communicating, people adapted them to plan their projects and day. We saw tabs in a browser being used as reminders, group discussions about planning projects and social gatherings, messengers as note applications. Unexpectedly, no one seemed to use navigation apps.
		</p>
		
		<h2>Interviews</h2>
		<p>
			Interviews where conducted using the Critical Incident Technique. We asked users to tell us about the last time they used a mobile application to resolve a daily task which involved file sharing and got several responses.
			<ol>
				<li>Facebook Messenger was used to quickly share files with groups of people</li>
				<li>Citymapper was used to measure the shortest distance between three locations</li>
				<li>Facebook Messenger was used to take notes during lectures at university by sending messages to oneself</li>
				<li>Google's role a dice was used to take a decision in a group</li>
			</ol>
		</p>
		
		<h2>Design brief</h2>
		<p>
			During a final brainstorming session where informations was collected and coded using a Grounded Theory Analysis, the group decided to create an application to support decision-making in groups. A host leads users through a group meeting and creates questions accordingly.
		</p>
	</div>
</section>

<section id="project-three" class="content">
	<div class="inner">
		<h1>Iterative prototyping</h1>
		<h2>User flows</h2>
		<p>
		First, a user flow was created to specify the steps a user takes to accomplish their role as either host or participant. While a host creates a meeting and corresponding questions, participants join this meeting and choose responses when a question comes up. Finally, the result is shown on all devices.
		
		  <img src="../../img/content/val-app-1.svg" class="scaled">
		</p>
		
		<h2>Wireframing</h2>
		<p>
		</p>
		
		<h2>Paper prototyping</h2>
		<p>
		</p>
		
		<h2>Interviews</h2>
		<p>
		</p>
		
		<h2>Medium-fidelity prototyping</h2>
		<p>
		</p>
		
		<div class="img-caption">
			<img src="img/test.jpg">
			<span>This is the caption. </span>
		</div>
</section>

<section id="project-four" class="content">
	<div class="inner">
		<h1>Evaluation</h1>
		<h2>Walkthroughs &amp; interviews</h2>
		<p>
		</p>
</section>

<?php 

	// Include footer
	include('../project-footer.php');
	
?>