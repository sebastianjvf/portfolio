<?php 

	// Set the title
	$project_title = '- Tick Tock';

	// Set the description
	$project_description = '
	<span class="date">August 2017 - Oktober 2017</span>
	<h1>Tick Tock</h1>
	<p>
		Set in the domain of industrial design, Tick tock is a tangible time-keeping device. Build using Arduino, a 3D printer and a laser cutter, the device was designed to help users focus on the task at hand. The time can be set by turning the dial, flipping the device over stops the time from running out.
	</p>
	';
	
	// Set the links
	$previous_project = '../../project/mixed-cuts/';
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
			The project was executed in a group of four. My tasks included drafting the design concept, sketching/wireframing and the physical realisation of the project, together with a design partner. At times, I also assembled physical Arduino components and did light programming tasks. As the goal of the class was to learn about physical prototyping, no user testing was carried out. Instead, guidelines and best practices for industrial design and physical interaction were adopted.
		</p>
		
		<h2>Methods and tools</h2>
		<ul class="topics">
			<li>Industrial design</li>
			<li>Wireframing</li>
			<li>Sketching</li>
			<li>Physical prototyping</li>
			<li>Laser cutting</li>
			<li>Arduino</li>
			<li>3D printing</li>
			<li>Sketchup</li>
			<li>MakerBot</li>
		</ul>
	</div>
</section>

<section id="project-two" class="content">
	<div class="inner">
		<h1>Ideation</h1>
		<h2>Task</h2>
		<p>
			Tick tock was developed for a class called 'Physical Interaction Design and Realisation". The project's aim was to develop an understanding for tangible objects and how their fabrication and interaction influence one another. The project work was split into two parts: fabrication and circuiting/programming. Two group members were responsible for each of the tasks.
		</p>
		
		<h2>Brainstorming and problem analysis</h2>
		<p>
			The idea was to enhance the nature of an existing physical device using technology and materials. Having noticed a nearby group rehearsing a presentation and setting a timer on a laptop we noticed several problems.
		</p>
		<ol>
			<li>Stopping the timer required focused attention to look for the pause button</li>
			<li>People wanted to quickly check an approximate time rather than the exact count</li>
			<li>People were constantly watching the timer</li>
		</ol>
		
		<h2>Sketching</h2>
		<p>
			The group wanted to resolve all three problems. The timer was redesigned and augmented with several interactions and a new information structure. From the first sketches on, tick tock was drawn as a round device, inspired by an egg clock. Holes in the shape of numbers in the dial would light up from LEDs below. Sketches were drawn to keep track of ideas and to add requirements during the design process.
		</p>
		
		<div class="img-caption right">
			<img src="../../img/project/tick-tock-1.png" alt="Image of a mock up sketched on paper.">
			<span>According to a first sketch, a simple Arduino mockup was built using a breadboard.</span>
		</div>
		
		<h2>Interaction design</h2>
		<p>	
			First, we added a flip interaction to the device, stopping the count. When it was flipped back to show the dial, the device would start counting again. Appropriate feedback would be given by letting the LEDs pulse once before the timer restarted. As a second step, numbers were removed from the dial. The holes would indicate what fraction was left of the time, even from a wider distance. Finally, inspired by Swedish nature, we wanted the case to be built of natural materials making the device appear less stressful to the user. We used wood for the case and, to add signifiers to existing affordances, fine layers of cork to mark touch spots where interaction could take place.
		</p>
		
		<div class="img-caption">
			<img src="../../img/project/tick-tock-2.gif" alt="Animated gif of a user turning the dial of the device.">
			<span>Turning the dial will set the timer and light up the numbers.</span>
		</div>
	</div>
</section>

<section id="project-three" class="content">
	<div class="inner">
		<h1>Fabrication</h1>
		<h2>Build plan</h2>
		<p>
			Prior to fabrication, a build plan was drawn. This not only helped us save time but prevented material waste. The case was build of two parts, two round cases of which one was smaller and fitted into its bigger counterpart. They were laser cut. As we were not aware of how much space we would need, the cases were designed to be assembled using several wooden rings. This way, the size of the device could easily be adapted by cutting and glueing additional rings.
		</p>
	
		<p>
			The rotary encoder used featured a pin pointing upwards. Turning this pin would result in a signal. We designed a 3D printed block with a hole. This block was glued to one case, while the rotary encoder was glued to the other. This not only ensured that the device could be turned infinitively, but also that it could be opened easily after assembly.
		</p>
		
		<div class="img-caption right">
			<img src="../../img/project/tick-tock-3.png" alt="A sketch of a build plan showing all of the device's components.">
			<span>A build plan was sketched prior to fabrication showing how components fit together.</span>
		</div>
		
		<h2>Laser cutting and 3D printing</h2>
		<p>
			We used 3mm birch wood to cut all parts of both cases: The dial, rings for both the small and big case, a lid for the small case (to which the rotary encoder would be glued) and a bottom plate. The holes for the numbers had to be adjusted twice, as, even though the laser cutter was quite precise, the numbers were to small. The bottom part was engraved with a small logo. The block was 3D printed using a rigid black nylon.
		</p>
		
		<h2>Arduino implementation</h2>
		<p>
			The concept of circuiting with Arduino was new to us. Thus, we assembled all components using removable jumper wires and a breadboard first. Then, after fine-tuning, we soldered components onto round boards. We used 12 RGB LEDs, a rotary encoder and a 5V battery to power the device. Coding was done in the native Arduino IDE.
		</p>
</section>

<section id="project-four" class="content">
	<div class="inner">
		<h1>Challenges</h1>
		<p>
			The project presented several challenges. The group was unfamiliar with industrial design techniques such as laser cutting, circuiting and soldering. While the device was designed to be hand-sized, it turned out to be about 30% bigger, as components took more space than expected. Fabrication of the individual parts were done in a trial-and-error manner, having to adjust parameters slightly. For instance, the distance of the laser and the speed were adjusted several times in order for the laser cutter to cut properly through the wood.
		</p>
		
		<div class="img-caption">
			<img src="../../img/project/tick-tock-final.png" alt="The final device with a few numbers lighted up.">
			<span>The final device, showing lighted numbers while the user is turning the dial.</span>
		</div>
</section>

<?php 

	// Include footer
	include('../project-footer.php');
	
?>