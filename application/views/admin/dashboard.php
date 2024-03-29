    <?php $this->load->view('admin/header'); ?>

    <!-- Content Header (Page header) -->
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <a><i class="fa fa-home"></i></a>
                <li class="breadcrumb-item"><a href="<?php echo base_url() . 'admin/home/index'; ?>" class=" ml-2">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body text-center" style="height:450px">
                  <h3 style="padding-top:200px">Welcome to Codeigniter Web Application Console</h3>
                </div>
              </div>
            </div>

          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php $this->load->view('admin/footer'); ?>