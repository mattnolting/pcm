<?php include('header.php'); ?>
<!--<h1>Support Cases List</h1>-->
<div id="support-case-filters" class="support-case-filters">
	<header class="page-header">
		<div class="row">
			<div class="col-sm-6 col-md-10">
				<h1 class="page-title">Support Cases List</h1>
			</div>
			<div class="col-sm-6 col-md-2">
				<div class="chat">
					<a href="#" class="link">Chat with Support</a>
				</div>
			</div>
		</div>
	</header>
	<div class="row row-align-bottom">
		<div class="col-sm-8">
			<div class="row filters">
				<div class="col-sm-6 col-md-3">
					<input type="text" placeholder="Type to Filter" />
				</div>
				<div class="col-sm-12 col-md-3">
					<select name="" id="">
						<option value="All Groups">All Groups</option>
						<option value="">Group 1</option>
						<option value="">Group 2</option>
						<option value="">Group with really long name. Testing length fallbacks.</option>
					</select>
				</div>
				<div class="col-sm-12 col-md-3">
					<select name="" id="">
						<option value="All Groups">Open</option>
						<option value="">Group 1</option>
						<option value="">Group 2</option>
						<option value="">Group with really long name. Testing length fallbacks.</option>
					</select>
				</div>
				<div class="col-sm-12 col-md-3">
					<select name="" id="">
						<option value="All Groups">Sort by last updated:</option>
						<option value="">Group 1</option>
						<option value="">Group 2</option>
						<option value="">Group with really long name. Testing length fallbacks.</option>
					</select>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="actions">
				<a href="new-case.php" class="btn btn-blue">Create a New Support Case</a>
				<a href="#" class="btn btn-blue">Export</a>
			</div>
		</div>
	</div>
</div>
<div id="case-list" class="table-list case-list">

	<!-- Item 1 -->
	<!-- ======== -->
	<div class="list-item">
		<div class="row">
			<div class="col-sm-5 col-md-3 item-group">
				<div class="block-icon">
					<div class="severity">
						<!--  -->
						<!-- this will be replaced by new icon -->
						<!--  -->
						<i class="fa fa-beer icon severity-level1"></i>
					</div>
					<div class="case-id"><b>12345678</b></div>
					<div class="status light">Open <span class="sep">|</span><span>Waiting on Redhat</span></div>
				</div>
			</div>
			<div class="col-sm-7 col-md-5 item-group">
				<div class=""><b>Red Hat Custom Portal <span class="sep">|</span>Current Version</b></div>
				<div class="description light">
					RHEL Developer site text overflows, or is partially hidden <a href="#" class="fa fa-comments"><span class="count">2</span></a>
				</div>
			</div>
			<div class="col-sm-12 col-md-4">
				<div class="item-group change-log">
					<div class="filed-on">Filed: <b>12/11/14</b> @ <b>11:12am</b> <i>by </i><a href="#">Allie Jacobs</a></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Item 2 -->
	<!-- ======== -->
	<div class="list-item">
		<div class="row">
			<div class="col-sm-5 col-md-3 item-group">
				<div class="block-icon">
					<div class="severity">
						<!--  -->
						<!-- this will be replaced by new icon -->
						<!--  -->
						<i class="fa fa-beer icon severity-level2"></i>
					</div>
					<div class="case-id"><b>12345678</b></div>
					<div class="status light">Open <span class="sep">|</span><span>Waiting on Redhat</span></div>
				</div>
			</div>
			<div class="col-sm-7 col-md-5 item-group">
				<div class=""><b>Red Hat Custom Portal <span class="sep">|</span>Current Version</b></div>
				<div class="description light">
					RHEL Developer site text overflows, or is partially hidden <a href="#" class="fa fa-comments"><span class="count">2</span></a>
				</div>
			</div>
			<!--			<div class="col-sm-12 col-md-3 item-group item-group-small">-->
			<div class="col-sm-12 col-md-4">
				<div class="item-group change-log">
					<div class="update-on"> Updated: <b>12/12/14</b> @ <b>12:05pm</b> <i>by </i><a href="#">Leslie Hinson</a></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Item 3 -->
	<!-- ======== -->
	<div class="list-item">
		<div class="row">
			<div class="col-sm-5 col-md-3 item-group">
				<div class="block-icon">
					<div class="severity">
						<!--  -->
						<!-- this will be replaced by new icon -->
						<!--  -->
						<i class="fa fa-beer icon severity-level3"></i>
					</div>
					<div class="case-id"><b>12345678</b></div>
					<div class="status light">Open <span class="sep">|</span><span>Waiting on Redhat</span></div>
				</div>
			</div>
			<div class="col-sm-7 col-md-5 item-group">
				<div class=""><b>Red Hat Custom Portal <span class="sep">|</span>Current Version</b></div>
				<div class="description light">
					RHEL Developer site text overflows, or is partially hidden <a href="#" class="fa fa-comments"><span class="count">2</span></a>
				</div>
			</div>
			<!--			<div class="col-sm-12 col-md-3 item-group item-group-small">-->
			<div class="col-sm-12 col-md-4">
				<div class="item-group change-log">
					<div class="update-on"> Updated: <b>12/12/14</b> @ <b>12:05pm</b> <i>by </i><a href="#">Leslie Hinson</a></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Item 4 -->
	<!-- ======== -->
	<div class="list-item">
		<div class="row">
			<div class="col-sm-5 col-md-3 item-group">
				<div class="block-icon">
					<div class="severity">
						<!--  -->
						<!-- this will be replaced by new icon -->
						<!--  -->
						<i class="fa fa-beer icon severity-level4"></i>
					</div>
					<div class="case-id"><b>12345678</b></div>
					<div class="status light">Open <span class="sep">|</span><span>Waiting on Redhat</span></div>
				</div>
			</div>
			<div class="col-sm-7 col-md-5 item-group">
				<div class=""><b>Red Hat Custom Portal <span class="sep">|</span>Current Version</b></div>
				<div class="description light">
					RHEL Developer site text overflows, or is partially hidden <a href="#" class="fa fa-comments"><span class="count">2</span></a>
				</div>
			</div>
			<!--			<div class="col-sm-12 col-md-3 item-group item-group-small">-->
			<div class="col-sm-12 col-md-4">
				<div class="item-group change-log">
					<div class="update-on"> Updated: <b>12/12/14</b> @ <b>12:05pm</b> <i>by </i><a href="#">Leslie Hinson</a></div>
				</div>
			</div>
		</div>
	</div>

</div>

<?php include('footer.php'); ?>