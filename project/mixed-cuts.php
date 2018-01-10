<?php 

	// Set the title
	$project_title = '- Mixed Cuts';

	// Set the description
	$project_description = '
	<span class="date">Dec 2016 - Mar 2017</span>
	<h1>Mixed Cuts</h1>
	
	<p>
	Mixed Cuts is a collaborative video development tool combining the advantages of tangible interaction and mixed reality to aid exploration of video sequencing and editing in groups. The system utilises software tracking of image targets attached to physical tokens. The modular, physical interface is arranged on a table, tracked by a camera and augmented with a projector. Users accomplish editing tasks by interacting with the tokens, the physical manipulations are mapped to digital commands by the system.
	</p>
	';
	
	// Set the links
	$previous_project = '../../project/trip-lens/';
	$next_project = '../../project/once-upon-a-shadow/';
	
	// include header
	include('../project-header.php');
	
	// Content
?>

<section id="project-one" class="content">
	<div class="inner">
		<h1>Role</h1>
		<h2>Tasks</h2>
		<p>
			Mixed Cuts was a project designed and implemented in a group of three. Going through a design cycle with two iterations, the project was executed over the course of three months. My tasks included conducting observations and interviews, paper prototyping and the implementation using Unity, Vuforia and C++.
		</p>
		<h2>Methods and tools</h2>
		<ul class="topics">
			<li>Cognitive Walkthroughs</li>
			<li>Natural User Interface</li>
			<li>Interviews</li>
			<li>User flows</li>
			<li>Groupware</li>
			<li>Coll</li>
			<li>Wizard-of-Oz prototyping</li>
			<li>Unity</li>
			<li>Vuforia</li>
			<li>Laser cutting</li>
			<li>C#</li>
		</ul>
	</div>
</section>

<section id="project-two" class="content">
	<div class="inner">
		<h1>Ideation</h1>
		<h2>Task</h2>
		<p>
			Mixed Cuts is the result of a project implemented in a class called 'Augmented Reality and Tangible interaction'. The task was to transform a common media software user interface into a tangible user interface using a user-centred design approach.
		</p>
		
		<h2>Problem analysis and brainstorming</h2>
		<p>
			As a first step, we used Cognitive Walkthroughs to analyse problems with existing software. Each group member used a different media editing tool, which they had not used before, to execute a task. We used a picture, music and video editing tool. They would record a screen video and note down problems we faced according to the Norman's and Nielsen's 10 Usability Heuristics. Then, using a Grounded Theory Analysis, the following problems were identified:
		</p>
		
		<ol>
			<li>Common UIs used metaphors for tools, inspired by their traditional physical methods, to interact with objects on the screen; 3D commands were translated to 2D commands</li>
			<li>Undoing single commands in the execution history quickly became confusing</li>
			<li>Functionalities for collaborative editing were largely unavailable</li>
		</ol>
		
		<p>
			Inspired by our course content, we wanted to take a virtual object and turn it into a physical object. Manipulation of the object's placement or orientation would be mapped to digital commands. The group aimed at facilitating the task at hand by translating a graphical user interface into a natural user interface where commands a direct and intuitive.</p>
		
		<p>
			The video editor was chosen as a result of personal introspective. Having used collaborative video prototyping as a tool for other design projects, we decided that we would best understand the requirements a user has towards such a system.
		</p>
		
		<h2>Interaction design</h2>
		<p>
			Functionalities by the tokens were sketched out to include common video controls such as play/pause, play speed, volume, crop and black-and-white filter. A reference point is used to calculate the position and Euclidean distance of a token in the interface. Thus, users can adjust their workspace by arranging the tokens as desired on the surface. The system is composed of 6 tokens which are mapped to the following digital commands:
		</p>
		
		<ol>
			<li>Clip slider (<span>Expand or close to lengthen or shorten clip</span>)</li>
			<li>Play/pause button (<span>Depending on which side is showing, flip to play or pause</span>)</li>
			<li>Volume slider (<span>Bring tokens closer together to increase volume</span>)</li>
			<li>Cropping points (<span>Arrange tokens on the top edge of the clip to crop</span>)</li>
			<li>Filter (<span>Transparent piece of plastic, put on the video projection to add a black-and-white filter</span>)</li>
			<li>Reference point (<span>Used for the calculation of Euclidean distances</span>)</li>
		</ol>
		
		<img src="../../img/project/mixed-cuts-1.svg" alt="Diagram showing each token.">
	</div>
</section>

<section id="project-three" class="content">
	<div class="inner">
		<h1>Iterative prototyping</h1>
		<h2>Wizard-of-Oz prototyping and interviews</h2>
		<p>
			According to the sketches a Wizard-of-Oz prototype was made. The prototype featured a limited set of functionalities; only play/pause and volume were part of the prototype. The play/pause button and volume slider were made of paper, while the video was shown on a laptop screen. When a user interacted with the paper tokens, the group would execute the interactions on the laptop to imitate a working prototype.
		</p>
		
		<p>
			People were surprisingly enthusiastic about the prototype. Both interactions proved to be easily understandable. Participants were not used to being able to move around user interface elements; a left-handed user enjoyed being able to adapt the user interface to her needs. We saw this as a proof of going into the right direction and decided to implement a medium-fidelity prototype.
		</p>
		
		<h2>Implementation in Unity</h2>
		<p>
			Unity and Vuforia were used as development environment and AR plugin, respectively, to implement the logic of the prototype. Unity received input via a 1080p webcam and created output by projecting GUI elements next to tokens. More specifically, markers were trained with the Vuforia library which were recognised by the webcam. Unity received the position of the markers, projecting elements to the appropriate locations.
		</p>
		
		<h2>Fabrication of the tokens</h2>
		<p>
			The tokens were produced using a laser cutter and wood glue. While the clip slider, play/pause button, volume slider and cropping points were made of wood, the filter is made of a transparent plastic. This was inspired by the concept of natural user interaction: placing the square plastic over the video projection resulted in the video turning greyscale. 
		</p>
</section>

<section id="project-four" class="content">
	<div class="inner">
		<h1>Lessons learnt</h1>
		<p>
			Mapping real-world to virtual positions turned out to be a challenging task. The set-up was quite sensitive to change; the webcam position had to be at an exact height of 30cm so that the position of each token could be calculated correctly. The group constructed a device to which the webcam was attached.
		</p>
		
		<p>
			Secondly, the implementation proved to be quite complicated and took up most of our time. Even though we did not execute a second formal round of interviews due to time restrictions, we conducted another Cognitive Walkthrough with one of our teachers. As a result, we slightly changed the behaviour of the volume slider: since it could be moved around freely, some participants seemed to turn it upside down, resulting in wrong feedback and responses from the system. We calculated the Euclidean distance between the two points, moving them closer together would turn up the volume, no matter how the slider was positioned.
		</p>
		
		<div class="img-caption right">
			<img src="../../img/project/mixed-cuts-final.png" alt="Image showing the physical tokens, a laptop and a camera on a table.">
			<span>System interface containing each of the interactive elements as exhibited.</span>
		</div>
</section>

<?php 

	// Include footer
	include('../project-footer.php');
	
?>