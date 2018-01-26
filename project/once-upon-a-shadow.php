<?php 

	// Set the title
	$project_title = '- Once Upon A Shadow';

	// Set the description
	$project_description = '
	<span class="date">Oct 2017 - Jan 2018</span>
	<h1>Once Upon A Shadow</h1>
	
	<p>
		Once Upon A Shadow is a collaborative environment inspired by shadow theatre. It uses several modalities, such as vision, sound and haptics, as input and output. A scene is shown via a projector. While a host triggers events related to the scene using a tablet, participants control characters in the scene using smartphones. Tilting and shaking move the character and trigger actions, respectively, while haptics and sounds are used as individual feedback related to the respective character.
	</p>
	';
	
	// Set the li
	$previous_project = '../../experience/stanley-robotics/';
	$next_project = '../../project/cirkel-app/';
	
	// include header
	include('../project-header.php');
	
	// Content
?>

<section id="project-one" class="content">
	<div class="inner">
		<h1>Role</h1>
		<h2>Tasks</h2>
		<p>
			The team consisted of four people and the project went through two iterations in the design cycle. The focus of my role lay on sketching, interaction design and prototyping together with one of my colleagues. I was also responsible for animating characters in Unity using the animation state engine.
		</p>
		<h2>Methods and tools</h2>
		<ul class="topics">
			<li>Cognitive Walkthroughs</li>
			<li>Interviews</li>
			<li>User flows</li>
			<li>Groupware</li>
			<li>Multimodality</li>
			<li>3D sound</li>
			<li>Paper prototyping</li>
			<li>Wizard-of-Oz prototyping</li>
			<li>Unity</li>
			<li>C#</li>
		</ul>
	</div>
</section>

<section id="project-two" class="content">
	<div class="inner">
		<h1>Ideation</h1>
		<h2>Task</h2>
		<p>
			Once Upon A Shadow is a group project which came to life in a class called 'Multimodal Interaction and Interfaces'. The goal was to explore the space of multimodal input and output, how they can foster interaction and develop an interactive system using these concepts.
		</p>
		
		<h2>Brainstorming</h2>
		<p>
			Our idea from the beginning was to develop a collaborative environment. As the goal was to present the project at a fair, the team wanted to develop something engaging that would require multiple people interact with the system. We planned to accomplish this by including gaming elements.
		</p>
		
		<p>
		Before a second brainstorming session the team split to create ideas and then bring them together. One of the propositions was related to improvisation theatre. The idea was  to transform it into a computer-supported, multimodal experience by giving individual feedback and engage people by letting them interact with a shared scene. However, classic theatre would have required a lot more testing and thus users. As a result, we decided to reduce theatre to its more abstract equivalent: shadow theatre.
		</p>
	</div>
</section>

<section id="project-three" class="content">
	<div class="inner">
		<h1>Iterative prototyping</h1>
		<h2>Sketching</h2>
		<p>
			As a first step, we sketched out several ideas we had in mind. We also drew a first wireframe of the system as we imagined it. This helped us decide on which interactions and assumptions we wanted to test during our user study.
		</p>
		
		<div class="img-caption left">
			<img src="../../img/project/once-upon-a-shadow-3.png" alt="A sketch showing different parts of the set up, such as the projector and a phone. Arrows indicate interactions.">
			<span>A first sketch of ideas, including several devices and interactions for moving the characters</span>
		</div>
		
		<h2>Paper prototyping and observational study</h2>
		<p>
			To test some of our assumptions, notably how users would trigger actions and move characters, we created a paper prototype. We designed a short story with 3 characters: A princess, a knight and a dragon. A team member would function as a narrator, while participants were instructed to play along.
		</p>
		
		<p>
			Contrary to our believes, users did not try to move characters closer or further away into the distance by putting the paper prototypes closer or further away from the light. They did, however, tilt the characters and moved them up and down to mimic walking or flying. Another part of the story involved the prince catching fire, causing the respective participant to shake the character. Participants would also underline their actions by making noises.
		</p>
		
		<div class="img-caption right">
			<img src="../../img/project/once-upon-a-shadow-4.png" alt="A sketch showing" alt="Paper cut-outs in the form a prince, princess and a dragon, glued to sticks.">
			<span>Three paper prototypes were created to test the system usability</span>
		</div>
		
		<h2>Interaction design</h2>
		<p>
			Based on our observational study, we designed the interactions of our first prototype. While the screen of the host device displays buttons to trigger events as the story progresses, participants with a character device feature multimodal input and output. Interactions and feedback on these devices are designed to give users a sense of space by using individual sound and haptic feedback (vibration). A sound played on one device will in turn give players an idea of what is happening with other characters elsewhere, not only their own. Haptic feedback is given when a character is affected by an action. Input interactions include tapping which triggers a character dependent action and tilting which makes a character move.
		</p>
		
		<div class="img-caption left">
			<img src="../../img/project/once-upon-a-shadow-2.svg">
		</div>
		
		<h2>User interface</h2>
		<p>
			While users during our tests were usually focused on the projected image, we expected the situation to be different when they use phones. As people are used to looking at their phones rather than simply using them as a remote, they tend to look at their phones occasionally - especially so if things go wrong. We therefore kept the user interface clean, allowing for quick glances rather than focus attention. The user interface mirrored the character associated with a phone. When a character was moving, or something happened to him, e.g. he was on fire, so was the character on the phone. Arrow icons indicated in which direction a character was able to move, a small icon indicated that an action was triggered (e.g. the phone was shaken).
		</p>
		
		<h2>Implementation in Unity</h2>
		<p>
			A semi-functional prototype was then implemented in Unity. Work was split between three of the group members. Animations were implemented using the Unity animation state machines and connecting devices was done using Unity's network manager. Actions where synchronised across devices using the command feature: a function labelled as a command will be simultaneously executed on all devices with just one network call. Haptic and sound input/output were handled using Unity's Android library; animations were developed using Unity's own animation state engine. C# was used as a programming language.
		</p>
		
		<div class="img-caption right">
			<img src="../../img/project/once-upon-a-shadow-1.png">
			<span>The user interface is minimalistic and does not demand focused attention.</span>
		</div>
		
		<h2>Interviews</h2>
		<p>
			Following the implementation, we gathered several users for a final interview session. We invited people to play the parts of narrator, players and spectators; after each session people would change roles. Then, we conducted interviews to 
		</p>
		
		<p>
			Besides a few implementational bugs and issues, our system received criticism for the user interface. Participants seemed confused about certain icons and the state was not always clear for them. Changes, as suggested by the users, were then integrated into the system. We made icons for movement and action only appear when said character would move. This not only made it clearer to the user what each icon meant, but reduced the cognitive load on the user when looking at the phone screen.
		</p>
	</div>
</section>

<section id="project-four" class="content">
	<div class="inner">
		<h1>Lessons learnt</h1>
		<p>
			The most challenging aspect was to coordinate sensorial channels. Network connectivity had a big influence on when output was given on any part of the system. However, timing was essential, only a small amount of lag would make the system seem unstable and confuse the user. Another important aspect was volume. The team worked a lot on scaling volume of each sound to an appropriate level so that every sound could be heard equally well.
		</p>
		<p>
			On a good note, people during our interviews and observations seemed to enjoy the system and quickly learned how to interact with the system and interpreted feedback as we expected them to. The multimodal aspect augmented the experience and proved to be of value.
		</p>
	</div>
</section>

<?php 

	// Include footer
	include('../project-footer.php');
	
?>