<?php

$title = "HTML Basics Part 1";
$description = "In this article you'll learn about basic HTML tags.";

?>

<?php include "includes/header.php"; ?>

<main>
	<article>
		<div class="container">
			<div class="container mt-5">
				<div class="row">
					<div class="col-12">
						<h1>Basic HTML Part 1</h1>
						<section id="table-of-contents">
							<ul>
								<li><a href="#html-boilerplate">HTML Boilerplate</a></li>
								<li><a href="#headings-and-paragraphs">Headings and Paragraphs</a></li>
								<li><a href="#lists">Lists in HTML</a></li>
								<li><a href="#anchor-tags">Linking in HTML</a></li>
								<li><a href="#images">Images in HTML</a></li>
								<li><a href="#conclusion">Conclusion</a></li>
								<li><a href="#resources">Online Resources</a></li>
							</ul>
						</section>
						<p>In this article we'll cover the basics of HTML, let's first talk about HTML boilerplate.</p>
						<section id="html-boilerplate">
							<h2>HTML Boilerplate</h2>
							<p>HTML boilerplate is boilerplate code you'll need for every html page you create. Here is an example of HTML boilerplate:</p>
							<code class="mb-3">
								&lt;!DOCTYPE html&gt;<br>
								&lt;html&gt;<br>
								&lt;head&gt;<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta charset="UTF-8"&gt;<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&lt;title&gt;Your Title Here&lt;/title&gt;<br>
								&lt;/head&gt;<br>
								&lt;body&gt;<br>
									&nbsp;&nbsp;&nbsp;&nbsp;The content of the body goes here<br>
									&lt;/body&gt;<br>
								&lt;/html&gt;<br>
							</code>
							<p>The boilerplate has several important parts. The first part, &lt;!DOCTYPE html&gt; is the doctype declaration. This tells the browser that your document is an HTML5 document, the most modern version of HTML.</p>
							<p>After that we have the opening html tag, with the closing html tag. The head tags for the head of the document and the body of the document are within the html opening and closing tags.</p>
							<p>The head of the document contains important meta tags, like the meta charset tag which encodes the document as UTF-8. This allows special symbols to render in the document. The meta viewport tag allows your webpage to render properly on different sized devices.</p>
							<p>The body of the document is where all the tags go that show up on the viewport - what renders in the browser for the users of the website.</p>
						</section>
						<section id="headings-and-paragraphs">
							<h2>Headings and Paragraphs in HTML</h2>
							<p>There are six levels of headings in HTML. An h1 through h6 are the different level headings in HTML.</p>
							<code class="mb-3">
								&lt;h1&gt;heading level 1&lt;/h&gt;<br>
								&lt;h2&gt;heading level 2&lt;/h&gt;<br>
								&lt;h3&gt;heading level 3&lt;/h&gt;<br>
								&lt;h4&gt;heading level 4&lt;/h&gt;<br>
								&lt;h5&gt;heading level 5&lt;/h&gt;<br>
								&lt;h6&gt;heading level 6&lt;/h&gt;<br>
							</code>
							<p>An h2 is a sub-heading of an h1, and h3 is a sub-heading of an h2 and so on ...</p>
							<p>To mark up paragraphs in html you use the p tag.</p>
							<code class="mb-3">
								&lt;p&gt;This is a paragraph.&lt;/p&gt;<br>
							</code>
						</section>
						<section id="lists">
							<h2>Lists in HTML</h2>
							<p>In HTML, you'll want to know how to make ordered and unordered lists. To make an ordered list use ol tags with nested li tags.</p>
							<code class="mb-3">
								&lt;ol&gt;<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;list item&lt;/li&gt;<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;list item&lt;/li&gt;<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;list item&lt;/li&gt;<br>
								&lt;/ol&gt;<br>
							</code>
							<p>To create an unordered list use the ul tag.</p>
							<code class="mb-3">
								&lt;ul&gt;<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;list item&lt;/li&gt;<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;list item&lt;/li&gt;<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;list item&lt;/li&gt;<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;list item&lt;/li&gt;<br>
								&lt;/ul&gt;<br>
							</code>
							<p>You can also create nested lists:</p>
							<code class="mb-3">
								&lt;ul&gt;<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;list item&lt;/li&gt;<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;list item&lt;/li&gt;<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;list item<br>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;ul&gt;<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;nested list item&lt;/li&gt;<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;nested list item&lt;/li&gt;<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;nested list item&lt;/li&gt;<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;nested list item&lt;/li&gt;<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/ul&gt;<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;list item&lt;/li&gt;<br>
								&lt;/ul&gt;<br>
							</code>
						</section>
						<section id="anchor-tags">
							<h2>Anchor Tags</h2>
							<p>An anchor tag allows you to use HTML to link to different pages on your site and on the web.</p>
							<p>Consider the following code.</p>
							<code class="mb-3">
								&lt;a href="https://google.com"&gt;Link to Google&lt;/a&gt;<br>
							</code>
							<p>This code will provide a link from your webpage to Google. It's an <em>absolute path</em>. If you want to link to a page on your site use a <em>relative path</em>, a link to a file in the one of your websites folders.</p>
							<p>For instance, if we had an about page we needed to link to in the same folder we could use the following code:</p>
							<code class="mb-3">
								&lt;a href="about.html"&gt;Link to about page&lt;/a&gt;<br>
							</code>
							<p>If we do link to a page outside our site, one thing we can do is have the link open in a separate tab using the target attribute and giving it the value _blank.</p>
							<code class="mb-3">
								&lt;a href="https://google.com" target="_blank"&gt;Link to Google in a separate tab&lt;/a&gt;<br>
							</code>
							<p>This usually is a good idea because it keeps your website open in a tab on the visitor's device.</p>
						</section>
						<section id="images">
							<h2>Images in HTML</h2>
							<p>The image tag in HTML is a <em>self-closing tag</em>. That means it doesn't have an opening and closing tag. It's just one tag. The image tag has two attributes that are required, the src attribute and the alt attribute.</p>
							<code class="mb-3">
								&lt;img src="kitty.jpg" alt="a picture of a kitty"&gt;<br>
							</code>
							<p>The src attribute gives the path to the image. In this case the picture of the kitty, kitty.jpg is in the same folder as the file linking in the image. The alt attribute, which stands for "alternative text" gives text about the image for screen readers and website accessibility. It also show up if the link to the image is broken.</p>
						</section>
						<section id="conclusion">
							<h2>Conclusion</h2>
							<p>With these html tags you should be able to start building a basic HTML site. Here is <a href="https://youtu.be/bGZnhErzUBk" target="_blank">a code-along on YouTube where you can build an about page project with me for more practice!</a> Thanks for reading!</p>
						</section>
						<section id="resources">
							<h2>Resources</h2>
							<p>Want some cool online development environments? Here are a couple of good online resources to write code in!</p>
							<ul>
								<li><a href="https://vscode.dev" target="_blank">VSCode.dev</a></li>
								<li><a href="https://codepen.io" target="_blank">Codepen.io</a></li>
							</ul>
						</section>
					</div>
				</div>
			</div>
		</div>
	</article>
</main>

<?php include "includes/footer.php"; ?>