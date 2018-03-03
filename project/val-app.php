<?php 

	// Set the title
	$project_title = '- Val App';

	// Set the description
	$project_description = '
	<span class="date">Oct 2017 - Dezember 2017</span>
	<h1>Val App</h1>
	<p>
		Val, meaning \'choice\' in Swedish, is a mobile application designed to improve the decision-making process in meetings. Users can easily set up a peer-to-peer network to vote anonymously. A host guides connected users through the meeting and creates questions. After voting, the results are shown on connected devices.
	</p>
	';
	
	// Set the links
	$previous_project = '../../project/cirkel-app/';
	$next_project = '../../project/tick-tock/';
	
	// include header
	include('project-header.php');
	
	// Content
?>

<section id="project-one" class="content">
	<div class="inner">
		<h1>Role</h1>
		<h2>Tasks</h2>
		<p>
			The project was carried out in a group of four using iterative steps of user testing and prototyping. My main tasks included user research, sketching/wireframing and evaluation together with a fellow design student. I also created the interactive prototype (using Sketch and Invision) and helped implement parts of the user interface and the database using native Android Java.
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
			We noticed that apps used during the observations fell into two broad categories: social networking and music. Apps used for social networking proved to deliver the most interesting insights. Instead of communicating, people adapted them to plan their projects and day. We saw tabs in a browser being used as reminders, group discussions about planning projects and social gathering and messengers as a way of taking notes. Unexpectedly, no one seemed to use navigation apps.
		</p>
		
		<h2>Interviews</h2>
		<p>
			Interviews where conducted using the Critical Incident Technique. We asked users to tell us about the last time they used a mobile application to resolve a daily task which involved file sharing and got several responses.
		</p>
		<ol>
			<li>Facebook Messenger was used to quickly share files with groups of people</li>
			<li>Citymapper was used to measure the shortest distance between three locations</li>
			<li>Facebook Messenger was used to take notes during lectures at university by sending messages to oneself</li>
			<li>Google's role a dice was used to take a decision in a group</li>
		</ol>
		
		<h2>Design brief</h2>
		<p>
			During a final brainstorming session where information was collected and coded using a Grounded Theory Analysis, the group decided to create an application to support decision-making in groups. A host leads users through a group meeting and creates questions accordingly.
		</p>
	</div>
</section>

<section id="project-three" class="content">
	<div class="inner">
		<h1>Iterative prototyping</h1>
		<h2>User flows</h2>
		<p>
		First, a user flow was created to specify the steps a user takes to accomplish their role as either host or participant. While a host creates a meeting and corresponding questions, participants join this meeting and choose responses when a question comes up. Finally, the result is shown on all devices.
		
		  <img src="../../img/project/val-app-1.svg" alt="A flow diagram describing the actions of host and participants." class="scaled">
		</p>
		
		<h2>Wireframing and paper prototyping</h2>
		<p>
			Wireframes were sketched out according to the user flow for both roles, host and participant. They were then transformed into an abstract paper prototype to ensure that what we modelled is what that the user would want.
		</p>
		
		<h2>User testing</h2>
		<p>
			A number of users was then asked to test the paper prototype. They were given a task that they had to accomplish. We used a between-subjects design where the user played either the role of a host or a participant, while one to two team members played the remaining roles. The other two members of the group took notes and changed the paper interface according to the user's interactions. The group asked the participant to say out loud what she or he was thinking. 
		</p>
		
		<p>
			In our initial design, the host would be provided with a 5-digit code upon creation of a meeting. The code could then be shared with participants who would join the meeting by entering the code into the application. Also, to facilitate voting, each answer for a question was represented with a shape.
		</p>
		
		<div class="img-caption right">
			<img src="../../img/project/val-app-2.png" alt="A sketch of two screens showing shapes which were mapped to answers.">
			<span>Initially, shapes were mapped to answers.</span>
		</div>
		
		<p>
			Participants did not enjoy either of these two. Using a code turned out to be confusing and time-consuming. It required verbal communication between the party members to 'connect'. Secondly, participants had memorised certain shapes for certain answers, such as 'yes' and 'no'. These were then switched around in the following question. This resulted in confusion as participants voted for an option for which they wanted to give the inverse answer.
		</p>
		
		<blockquote>
			Wait, I just voted 'no'?
			<span>A participant after mistaking an answer related to a shape for another</span>
		</blockquote>
		
		<h2>Medium-fidelity prototyping</h2>
		<p>
			According to our findings, a visually more advanced prototype was created using Sketch and Invision. The prototype used the feedback gathered during the user tests and tried to resolve the problems of the first prototype.
		</p>
		<p>
			Rather then using a code and connecting over the internet, the app was redesigned to use a peer-to-peer network. While a meeting was being created on the host devices, participant devices simply had to open the application to see a lobby with close-by meetings. Secondly, we used simple text and colours to provide appropriate mappings in the user interface for the responses.
		</p>
		
		<div class="img-caption">
			<img src="../../img/project/val-app-final.png" alt="A screenshot of a phone showing the start screen of the app.">
			<span>A medium-fidelity prototype was created and tested using Sketch and Invision.</span>
		</div>
		
		<p>
			During the second round of interviews, participants did not run into the same problems; they had been resolved. However, coordinating devices and questions proved to be difficult. Participants, in contrary to the host, had to choose on the appropriate question before voting. Participants lost time trying to find the question to click on.
		</p>
		
		<h2>Implementation</h2>
		<p>
			The application was implemented in Android Studio using native Android Java, using the Google Nearby and Android Room libraries. To resolve the problem of desynchronised devices, the participant part of mobile app was redesigned to mirror the hosts screen. This way, users did not loose time having to find the right question.
		</p>
		
		<p>
			Challenges included implementing the mirroring of the host application and using Android's Room library, which was new at the time. Additionally, the Google Nearby library would fail to properly synchronise devices at times.
		</p>
</section>

<section id="project-four" class="content">
	<div class="inner">
		<h1>Evaluation</h1>
		<h2>Walkthroughs</h2>
		<p>
			As a final step, walkthroughs were conducted to evaluate the current state of the application. In the same manner as the first two interviews, users were given a role and a task. A tablet was used as the host and two smartphones as participant devices.
		</p>
		
		<p>
			To simplify our coding task, we slightly changed the interface to add answers to questions on several screens. After a question had been created, the user would be presented with a input field for an answer. After clicking 'next', the user would be presented with another input field unless he clicked 'finish'.
		</p>
		
		<p>
			The interface had become to linear and 'clicky'. Users lost track of what answers had already been added. It became apparent that one of Norman's and Nielsen's 10 usability principles was violated: Visibility of System Status. We went back to our original approach, showing the question and all answers on one screen, with the possibility of adding a question with a '+' button.
		</p>
		
		<h1>Conclusion</h1>
		<p>
			The project was interesting from several viewpoints. Firstly, the project was executed from start to finish: Ideation, prototyping, implementation and a final evaluation were conducted. Secondly, designing mobile apps is a common task for modern designers and is an important skill to master. New technologies were used to implement the application. Finally, work was split well amongst group members and communication proved to be excellent.
		</p>
</section>

<?php 

	// Include footer
	include('../project-footer.php');
	
?>