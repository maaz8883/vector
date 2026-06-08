
		<section class="py-5">
			<div class="container-xl">
				<div class="row text-center justify-content-center">
					<div class="col-lg-8 col-md-10">
						<h2 class="f-40 clr-2 fw-700">Our Published Works</h2>
						<!-- <p>Discover our collection of published books, crafted by our expert ghostwriters across diverse genres. Experience the exceptional quality and creativity that make our book writing and ghostwriting services stand out.</p> -->
					</div>
				</div>
			</div>
				<div class=" position-relative">
					<img class="lozad cup" alt="Ghostwriting services by <?php echo $bname?>" data-src="assets/img/cup.webp">
					<img class="lozad pot" alt="Book Writing services by <?php echo $bname?>" data-src="assets/img/pot.webp">
					<div class="container">
						
						<div class="portfolio-slider">
							<?php $dirname = "assets/img/portfolio/"; $images = glob($dirname . "*.webp");  ?>
							<?php foreach ($images as $image)  :?>
								<?php $title = pathinfo($image); ?>
								<div class="item p-3">
									<div class="gallery">
										<img data-lazy="<?= $image ?>" alt="<?= $title['filename']?> by <?= $bname?>"/>
									</div>
								</div>
							<?php endforeach ?>
						</div>
					</div>
					<div class="bg-g-2 pt-100">
						

						<div class="container-xl py-5	">
							<div class="row text-center text-md-start clr-l">
								<div class="col-xl-5">
									<h2 class="f-30 fw-700">Achieve Bestselling Author Status in the USA with Expert Support from Publishing Valley</h2>
								</div>
								<div class="col-xl-7">
									<p  class="f-18">The world is ready to hear your story. At <b>Publishing Valley</b>, our team of <b>professional ghostwriters</b> specializes in turning your ideas, experiences, and vision into a powerful, polished book. Whether it’s memoir, fiction, self-help, or business, we help you <b>captivate your audience and make a lasting impact.</b></p>
									<div class="row ">
									
									<div class="col-lg-4 col-md-6 col-9">
										<button class="w-100  mb-3"data-bs-toggle="modal" data-bs-target="#quote">
											Get Started
										</button>
									</div>
									<div class="col-lg-4 col-md-6 col-3 ">
										<a href="tel:<?php echo $no?>"  aria-label="Call Us Now " class=" icona text-start d-flex align-items-center  justify-content-start">
												<span class="icon-phone me-2 icon"></span>
												<span class="d-none d-md-block"><span class="clr-l fw-700">Call Us Now</span><br>
												<span class="fw-700"><?php echo $no?></span></span>
											</a>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
