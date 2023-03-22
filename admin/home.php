
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard/Home
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <?php
              $connectiondb = mysqli_connect("localhost","root","","erisdb");

              $query = "SELECT JOBID FROM tbljob ORDER BY JOBID";
              $query_run = mysqli_query($connectiondb, $query);

              $row = mysqli_num_rows($query_run);
              echo '<h3> '.$row.' </h3>'

              ?>

              <p>No. of Open Vacant Position</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
            <?php
              $connectiondb = mysqli_connect("localhost","root","","erisdb");

              $query = "SELECT APPLICANTID FROM tblapplicants ORDER BY APPLICANTID";
              $query_run = mysqli_query($connectiondb, $query);

              $row = mysqli_num_rows($query_run);
              echo '<h3> '.$row.' </h3>'

              ?>
              <p>No. of Applicants</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
            <?php
              $connectiondb = mysqli_connect("localhost","root","","erisdb");

              $query = "SELECT COMPANYID FROM tblcompany ORDER BY COMPANYID";
              $query_run = mysqli_query($connectiondb, $query);

              $row = mysqli_num_rows($query_run);
              echo '<h3> '.$row.' </h3>'

              ?>
              <p>No. of School Open / Company</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
            <?php
              $connectiondb = mysqli_connect("localhost","root","","erisdb");

              $query = "SELECT CATEGORYID FROM tblcategory ORDER BY CATEGORYID";
              $query_run = mysqli_query($connectiondb, $query);

              $row = mysqli_num_rows($query_run);
              echo '<h3> '.$row.' </h3>'

              ?> 
              <p>No. of Category</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->