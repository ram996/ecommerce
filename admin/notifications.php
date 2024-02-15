<?php include './templates/header-top.php' ?>
<?php include './templates/header-bottom.php' ?>

<div class="app-wrapper">

	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container-xl">
			<div class="position-relative mb-3">
				<div class="row g-3 justify-content-between">
					<div class="col-auto">
						<h1 class="app-page-title mb-0">Notifications</h1>
					</div>
					<div class="col-auto">
						<div class="page-utilities">
							<select class="form-select form-select-sm w-auto">
								<option selected value="option-1">All</option>
								<option value="option-2">News</option>
								<option value="option-3">Product</option>
								<option value="option-4">Project</option>
								<option value="option-4">Billing</option>
							</select>
						</div>
					</div>

					<div class="app-card app-card-notification shadow-sm mb-4">
						<div class="app-card-header px-4 py-3">
							<div class="row g-3 align-items-center">
								<div class="col-12 col-lg-auto text-center text-lg-start">
									<img class="profile-image" src="assets/images/profiles/profile-1.png" alt="">
								</div>
								<div class="col-12 col-lg-auto text-center text-lg-start">
									<div class="notification-type mb-2"><span class="badge bg-info">Project</span></div>
									<h4 class="notification-title mb-1">Notification Heading Lorem Ipsum</h4>
									<ul class="notification-meta list-inline mb-0">
										<li class="list-inline-item">2 hrs ago</li>
										<li class="list-inline-item">|</li>
										<li class="list-inline-item">Amy Doe</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="app-card-body p-4">
							<div class="notification-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed ultrices dolor, ac maximus ligula. Donec ex orci, mollis ac purus vel, tempor pulvinar justo. Praesent nibh massa, posuere non mollis vel, molestie non mauris. Aenean consequat facilisis orci, sed sagittis mauris interdum at.</div>
						</div>
						<div class="app-card-footer px-4 py-3">
							<a class="action-link" href="#">View all
								<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right ms-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
								</svg>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center mt-4">
				<a class="btn app-btn-secondary" href="#">Load more notifications</a>
			</div>
		</div>
	</div>


	<?php include './templates/footer-top.php' ?>
	<?php include './templates/footer-bottom.php' ?>