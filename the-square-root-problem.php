<?php

$title = "The Square Root SAT Problem | MrUnkert.com";
$description = "Learn how to solve the 'square root' SAT problem";

?>

<?php include "includes/header.php"; ?>

<main>
	<div class="container mt-5 mb-5">
		<div class="row">
			<div class="col-12">
				<h1>The SAT 'Square Root' Problem</h1>
				<section id="table-of-contents">
					<h2>Table of Contents</h2>
					<ul>
						<li><a href="#example-1">Example 1</a></li>
						<li><a href="#example-2">Example 2</a></li>
						<li><a href="#example-3">Example 3</a></li>
						<li><a href="#conclusion">Conclusion</a></li>
					</ul>
				</section>
				<p>One of the 10 essential problems you'll need to solve on the SAT is the 'Square Root' problem. This involves an equation with one side having a square root and the other side having a binomial (typically). Let's look at some problems:</p>
				<section id="example-1">
					<h2>Example 1 - SAT 'Square Root' Problem</h2>
					<p>Consider the following equation:</p>
					<ul>
						<li>&radic;<span class="overline">3x - 2</span> + 4 = -3x + 8</li>
						<p>Which of the following is the solution set to the equation?</p>
						<ul>
							<li>a) {0, 1}</li>
							<li>b) {1, 2}</li>
							<li>c) {2}</li>
							<li>d) {1}</li>
						</ul>
					</ul>
					<h3>Solution and Strategy</h3>
					<p>In this problem we want to try a number that is in a majority of the potential solution sets. Notice that 1 is in three of the four solution sets. If 1 does not work, the solution set without 1 will be the correct answer.</p>
					<p>Let's try 1:</p>
					<ul>
						<li>&radic;<span class="overline">3(1) - 2</span> + 4 = -3(1) + 8</li>
						<li>&radic;<span class="overline">3 - 2</span> + 4 = -3 + 8</li>
						<li>&radic;<span class="overline">1</span> + 4 = 5</li>
						<li>1 + 4 = 5 <span class="green">&check;</span></li>
					</ul>
					<p>In this case 1 works, which does mean we can eliminate c.</p>
					<ul>
						<li>a) {0, 1}</li>
						<li>b) {1, 2}</li>
						<li><span class="strikethrough red">c) {2}</span></li>
						<li>d) {1}</li>
					</ul>
					<p>We need to now test 0 or 2, let's test 0.</p>
					<ul>
						<li>&radic;<span class="overline">3(0) - 2</span> + 4 = -3(0) + 8</li>
						<li>&radic;<span class="overline">-2</span> + 4 = 0 + 8</li>
					</ul>
					<p>We can stop right here because the square root of -2 is an imaginary number.</p>
					<p>We can also eliminate a, which contains 0.</p>
					<ul>
						<li><span class="strikethrough red">a) {0, 1}</span></li>
						<li>b) {1, 2}</li>
						<li><span class="strikethrough red">c) {2}</span></li>
						<li>d) {1}</li>
					</ul>
					<p>We now need to test 2:</p>
					<ul>
						<li>&radic;<span class="overline">3(2) - 2</span> + 4 = -3(2) + 8</li>
						<li>&radic;<span class="overline">6 - 2</span> + 4 = -6 + 8</li>
						<li>&radic;<span class="overline">4</span> + 4 = -6 + 8</li>
						<li>2 + 4 &ne; 2</li>
					</ul>
					<p>We can see here that 2 is a no go, hence d is our correct solution:</p>
					<ul>
						<li><span class="strikethrough red">a) {0, 1}</span></li>
						<li><span class="strikethrough red">b) {1, 2}</span></li>
						<li><span class="strikethrough red">c) {2}</span></li>
						<li><span class="green">d) {1} &check;</span></li>
					</ul>
				</section>
				<hr>
				<section id="example-2">
					<h2>Example 2 - The SAT 'Square Root' Problem</h2>
					<p>Consider the following equation:</p>
					<ul>
						<li>&radic;<span class="overline">6x + 1</span> - 3 = 2x - 4</li>
					</ul>
					<p>Which of the following is the solution set to the equation below:</p>
					<ul>
						<li>a) {0, <sup>5</sup>/<sub>2</sub>}</li>
						<li>b) {<sup>5</sup>/<sub>2</sub>}</li>
						<li>c) {0, 1}</li>
						<li>d) {0, 1, <sup>5</sup>/<sub>2</sub>}</li>
					</ul>
					<p>Since 0 is in three of our four potential solution sets, let's give it a try.</p>
					<ul>
						<li>&radic;<span class="overline">6(0) + 1</span> - 3 = 2(0) - 4</li>
						<li>&radic;<span class="overline">0 + 1</span> - 3 = 0 - 4</li>
						<li>&radic;<span class="overline">1</span> - 3 = -4</li>
						<li>1 - 3 = -4</li>
						<li><span class="red">-2 &ne; -4</span></li>
					</ul>
					<p>Since 0 does not work, the only possible solution is b. We could check this but the SAT is <em>time sensitive</em> so select b and move on to the next problem. Only check it if you have extra time at the end.</p>
					<ul>
						<li><span class="strikethrough red">a) {0, <sup>5</sup>/<sub>2</sub>}</span></li>
						<li><span class="green">b) {<sup>5</sup>/<sub>2</sub>} &check;</span></li>
						<li><span class="strikethrough red">c) {0, 1}</span></li>
						<li><span class="strikethrough red">d) {0, 1, <sup>5</sup>/<sub>2</sub>}</span></li>
					</ul>
				</section>
				<section id="example-3">
					<h2>Example 3</h2>
					<p>Consider the following equation:</p>
					<ul>
						<li>&radic;<span class="overline">8x - 4</span> = 8 - 6x</li>
					</ul>
					<p>Which of the following is the solution set to the equation above?</p>
					<ul>
						<li>a) {0}</li>
						<li>b) {1}</li>
						<li>c) {0, 1}</li>
						<li>d) {2}</li>
					</ul>
					<h3>Solution and Strategy</h3>
					<p>We can test 0 or 1 since they both show up in <i>two potential solution</i> sets.</p>
					<p>Let's test 0:</p>
					<ul>
						<li>&radic;<span class="overline">8(0) - 4</span> = 8 - 6(0)</li>
						<li>&radic;<span class="overline">0 - 4</span> = 8 - 0</li>
						<li>&radic;<span class="overline">-4</span> = 8</li>
					</ul>
					<p>We can stop right here as the square root of -4 will be <em>imaginary</em>.</p>
					<ul>
						<li><span class="strikethrough red">a) {0}</span></li>
						<li>b) {1}</li>
						<li><span class="strikethrough red">c) {0, 1}</span></li>
						<li>d) {2}</li>
					</ul>
					<p>Now let's test 1:</p>
					<ul>
						<li>&radic;<span class="overline">8(1) - 4</span> = 8 - 6(1)</li>
						<li>&radic;<span class="overline">8 - 4</span> = 8 - 6</li>
						<li>&radic;<span class="overline">4</span> = 2</li>
						<li><span class="green">2 = 2 &check;</span></li>
					</ul>
					<p>This works, meaning b is the solution and d is not!</p>
					<ul>
						<li><span class="strikethrough red">a) {0}</span></li>
						<li><span class="green">b) {1} &check;</span></li>
						<li><span class="strikethrough red">c) {0, 1}</span></li>
						<li><span class="strikethrough red">d) {2}</span></li>
					</ul>
				</section>
				<section id="conclusion">
					<h2>Conclusion</h2>
					<p>Practice these three problems and problems like it so that you can NAIL this problem LIKE A BOSS.</p>
				</section>
			</div>
		</div>
	</div>
</main>

<?php include "includes/footer.php"; ?>