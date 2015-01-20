<?php include('header.php'); ?>
<div id="case-single" class="case-single">
	<div class="row">
		<main class="col-md-6" role="main">
			<header class="page-header">
				<div class="row">
					<div class="col-sm-6 col-md-8">
						<h1 class="page-title">Create a New Support Case</h1>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="chat">
							<a href="#" class="link">Chat with Support&nbsp;<i class="fa fa-comments"></i></a>
						</div>
					</div>
				</div>
			</header>
			<section class="case-description">
				<section class="config-options">
					<div class="row">
						<div class="col-sm-4 col-md-4">
							<div class="label">Product</div>
						</div>
						<div class="col-sm-4 col-md-8">
							<select name="" id="" place>
								<option value="" disabled selected>Priority Select</option>
								<option value="">Low Priority</option>
								<option value="" selected>Medium Priority</option>
								<option value="">High Priority</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4 col-md-4">
							<div class="label">Product Version</div>
						</div>
						<div class="col-sm-4 col-md-8">
							<select name="" id="" place>
								<option value="" disabled selected>Priority Select</option>
								<option value="">Low Priority</option>
								<option value="" selected>Medium Priority</option>
								<option value="">High Priority</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4 col-md-4">
							<div class="label">Related Case ID</div>
						</div>
						<div class="col-sm-4 col-md-8">
							<select name="" id="" place>
								<option value="" disabled selected>Priority Select</option>
								<option value="">Low Priority</option>
								<option value="" selected>Medium Priority</option>
								<option value="">High Priority</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4 col-md-4">
							<div class="label">Case Name</div>
						</div>
						<div class="col-sm-4 col-md-8">
							<input type="text"/>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4 col-md-4">
							<div class="label">Case Description</div>
						</div>
						<div class="col-sm-4 col-md-8">
							<textarea name="" id="" cols="30" rows="10"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4 col-md-4">
							<div class="label">Severity</div>
						</div>
						<div class="col-sm-4 col-md-8">
							<select name="" id="" place>
								<option value="" disabled selected>Priority Select</option>
								<option value="">Low Priority</option>
								<option value="" selected>Medium Priority</option>
								<option value="">High Priority</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4 col-md-4">
							<div class="label" for="email-notifications">Send Email Notifications to</div>
						</div>
						<div class="col-sm-4 col-md-8">
							<input class="email-notification margin" placeholder="type ahead.." type="text" name="email-notifications" />
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4 col-md-4">
							<div class="label">Case Group</div>
						</div>
						<div class="col-sm-4 col-md-8">
							<select name="" id="" place>
								<option value="" disabled selected>Priority Select</option>
								<option value="">Low Priority</option>
								<option value="" selected>Medium Priority</option>
								<option value="">High Priority</option>
							</select>
						</div>
					</div>
				</section>
				<div class="row actions">
					<div class="col-xs-12">
						<button class="btn btn-accent">Submit</button>
						<button class="btn btn-open">Cancel</button>
					</div>
				</div>
			</section>
		</main>

		<aside class="col-md-6">
			<section class="recommendations">
<!--				<div class="spinner spinner-lg spinner-inline"></div>-->
				<h3 class="title blue">Here Are Some Possible Solutions<i class="fa fa-flash section-icon"></i></h3>
				<article>
					<header>
						<a class="link" href="#">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</a>
					</header>
					<p class="article-content">
						<a href="#">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numqua...</a>
					</p>

					<footer>
						<span class="user-action">Updated&nbsp;<date><b>06/22/14</b></date>&nbsp;at&nbsp;<time><b>4:31pm</b></time></span>
					</footer>
				</article>
				<article>
					<a href="#">
						<header>
							<a class="link" href="#">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</a>
						</header>
						<p class="article-content">
							<a href="#">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numqua...</a>
						</p>

						<footer>
							<span class="user-action">Updated&nbsp;<date><b>06/22/14</b></date>&nbsp;at&nbsp;<time><b>4:31pm</b></time></span>
						</footer>
					</a>
				</article>
				<article>
					<header>
						<a class="link" href="#">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</a>
					</header>
					<p class="article-content">
						<a href="#">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numqua...</a>
					</p>

					<footer>
						<span class="user-action">Updated&nbsp;<date><b>06/22/14</b></date>&nbsp;at&nbsp;<time><b>4:31pm</b></time></span>
					</footer>
				</article>
			</section>
			<section class="case-escalation">
				<div>
					<h3>
						Need to raise a concern to Red Hat Support
						management? <a class="link" href="#">Learn More</a>
					</h3>
				</div>
<!--				<a href="#">Request escalation</a>-->
				<a class="btn btn-light" href="#">Request escalation</a>
			</section>
		</aside>
	</div>
</div>

	<script>
		$(document).ready(function() {
			$('#case-description-toggle').click(function(){
				$(this).toggleClass('active');
				$('#case-description-extra-info').fadeToggle();
			});
		});
	</script>

<?php include('footer.php'); ?>