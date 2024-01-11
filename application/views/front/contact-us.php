<?php
$this->load->view('front/header');
?>

<div class="container-fluid" style="background-image: url(../public/images/ball-bright-close-up-clouds-207489.jpg);">

    <div class="row">

        <div class="col-md-12">
            <h1 class="text-center text-white pt-5"> Contact Us</h1>
        </div>

        <div class="container mt-5 pb-5" style="width: 1000px; padding: 10px;">
            <div class="row">
                <div class="col-md-7">
                    <div class="card mb-5 h-100">
                        <div class="card-header bg-secondary text-white">
                            <strong>Have question or comments?</strong>
                        </div>
                        <div class="card-body">
                            <!-- <?php
                            if(!empty($this->session->flashdata('msg'))){
                                ?>
                                <div class="alert alert-success">
                                    <?php echo $this->session->flashdata('msg');?>
                                </div>
                                <?php
                            } 
                            ?> -->
                            <form action="<?php echo base_url('page/contact');?>" method="post" name="contact-form" id="contact-form">
                                <div class="form-group pb-3">
                                    <label class="pb-2">Name</label>
                                    <input value="<?php echo set_value('name'); ?>" type="text" name="name" id="name" class="form-control <?php echo (form_error('name') != "") ? 'is-invalid' : '' ;?> " placeholder="Enter name">
                                    <?php echo form_error('name'); ?>
                                </div>

                                <div class="form-group pb-3">
                                    <label class="pb-2">Email address</label>
                                    <input value="<?php echo set_value('email'); ?>" type="text" name="email" id="email" class="form-control <?php echo (form_error('email') != "") ? 'is-invalid' : '' ;?>" placeholder="Enter email">
                                    <?php echo form_error('email'); ?>
                                </div>

                                <div class="form-group pb-3">
                                    <label class="pb-2">Message</label><br>
                                    <textarea name="message" id="message" rows="5" class="form-control" placeholder="Enter your message here"><?php echo set_value('message'); ?></textarea>
                                </div>

                                <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                                
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card mb-5 h-100">
                        <div class="card-header bg-secondary text-white">
                           <strong>Reach Us</strong>
                        </div>

                        <div class="card-body">
                            <p class="mb-0"><strong>Customer service:</strong></p>
                            <p class="mb-0">Phone: +91 129 209 XX</p>
                            <p class="mb-0">E-mail: support@mysite.com </p>

                            <p class="pt-2">&nbsp;</p>
                                    
                             
                            <p class="mb-0"><strong>Headquater:</strong></p>
                            <p class="mb-0">Company Inc,</p>
                            <p class="mb-0">Las vegas street 201</p>
                            <p class="mb-0">55001 Lucknow, India</p>
                            <p class="mb-0">Phone: +91 126 202 XX </p>
                            <p class="mb-0">example@mysite.com </p>
                  

                            <p class="pt-2">&nbsp;</p>

                            <p class="mb-0"><strong>India:</strong></p>
                            <p class="mb-0">Company Inc LTD, </p>
                            <p class="mb-0">125 Park Street Avenue </p>
                            <p class="mb-0">Up, India</p>
                            <p class="mb-0">Phone: +91 XXX 202 XX</p>
                            <p class="mb-0">in@mysite.com </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

</div>


<?php
$this->load->view('front/footer');
?>