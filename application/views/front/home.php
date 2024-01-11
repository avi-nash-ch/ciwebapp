<?php $this->load->view('front/header'); ?>

<div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo base_url('public/images/slide1.jpg'); ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo base_url('public/images/slide2.jpg'); ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo base_url('public/images/slide3.jpg'); ?>" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="container pt-4 pb-4">
    <h3 class="pb-3">About Us</h3>

    <p class="text-muted" style="text-align: justify;">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec lobortis justo. Praesent auctor quam sit
        amet diam cursus, eu accumsan quam laoreet. Nulla facilisi. Morbi nec eros vitae arcu mattis laoreet. Sed
        vitae hendrerit augue.
        In vel dolor a ex laoreet commodo. Sed finibus velit at libero fringilla laoreet.Maecenas lacinia efficitur
        tortor, a scelerisque dui ullamcorper ut.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </p>

    <p class="text-muted" style="text-align: justify;">
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
        laborum. Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo
        pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh
        euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut
        ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas
        fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec,
        commodo eget, consequat quis, neque.
    </p>
</div>
<div class="bg-light pb-4">
    <div class="container">
        <h3 class="pb-3 pt-4">OUR SERVICES</h3>

        <div class="row">
            <div class="col-md-3">
                <div class="card h-100">
                    <img src="<?php echo base_url('public/images/box1.jpg'); ?>" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Website Development</h5>
                        <p class="card-text" style="text-align: justify;">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100">
                    <img src="<?php echo base_url('public/images/box2.jpg'); ?>" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Digital Marketing</h5>
                        <p class="card-text" style="text-align: justify;">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100">
                    <img src="<?php echo base_url('public/images/box3.jpg'); ?>" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Mobile App Development</h5>
                        <p class="card-text" style="text-align: justify;">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100">
                    <img src="<?php echo base_url('public/images/box4.jpg'); ?>" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">IT Consulting Services</h5>
                        <p class="card-text" style="text-align: justify;">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if (!empty($articles)) { ?>
    <div class="pb-4 pt-4">
        <div class="container">
            <h3 class="pb-3 pt-4">LATEST BLOGS</h3>

            <div class="row">

                <?php foreach ($articles as $article) { ?>

                    <div class="col-md-3">
                        <div class="card h-100">
                            <a href="<?php echo base_url('blog/detail/' . $article['id']) ?>">
                                <?php if (file_exists('./public/uploads/articles/' . $article['image'])) { ?>
                                    <img src="<?php echo base_url('/public/uploads/articles/' . $article['image']) ?>" class="card-img-top" alt="">
                                <?php } ?>
                            </a>

                            <div class="card-body">
                                <p class="card-text" style="text-align: justify;"><?php echo $article['title']; ?></p>
                                <a class="btn btn-primary btn-sm" href="<?php echo base_url('blog/detail/' . $article['id']) ?>">Read more</a>
                            </div>
                        </div>
                    </div>

                <?php } ?>
                <!-- <div class="col-md-3">
                    <div class="card h-100">
                        <img src="<?php echo base_url('public/images/box2.jpg'); ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100">
                        <img src="<?php echo base_url('public/images/box3.jpg'); ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100">
                        <img src="<?php echo base_url('public/images/box4.jpg'); ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

<?php } ?>

<?php $this->load->view('front/footer'); ?>