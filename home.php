  <section id="banner">
   
  <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/Deped.jpg" alt="" />
                <div class="flex-caption">         
           
                </div>
              </li>
              <li>
                <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/Repeat.jpg" alt="" />
                <div class="flex-caption">
           
                </div>
              </li>
            </ul>
        </div>
  <!-- end slider -->
 
  </section> 
  <section id="call-to-action-2">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-sm-9">
          <h3>Welcome to SDO Valenzuela Recruitment, Selection Management System (RSMS) web application service</h3>
          <p>The recruitment, selection management system (RSMS) system is a core component of the overall strategic Human Resource Management system of the Department of Education, 
            ensuring that the organization and its manpower are able to respond to challenges and opportunities of the 21st century with focus on the delivery of quality, accessible, 
            relevant, and liberating basic education. </p>
        </div>
       <!--  <div class="col-md-2 col-sm-3">
          <a href="#" class="btn btn-primary">Read More</a>
        </div> -->
      </div>
    </div>
  </section>
  
  <section id="content">
  
  
  <div class="container">
        <div class="row">
      <div class="col-md-12">
        <div class="aligncenter"><h2 class="aligncenter">COMPANY | SCHOOL NAME</h2><!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt.. --></div>
        <br/>
      </div>
    </div>

    <?php 
      $sql = "SELECT * FROM `tblcompany`";
      $mydb->setQuery($sql);
      $comp = $mydb->loadResultList();


      foreach ($comp as $company ) {
        # code...
    
    ?>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-building-o"></i>
                <div class="info-blocks-in">
                    <h3><?php echo $company->COMPANYNAME;?></h3>
                    <!-- <p><?php echo $company->COMPANYMISSION;?></p> -->
                    <p>Address :<?php echo $company->COMPANYADDRESS;?></p>
                    <p>Contact No: <?php echo $company->COMPANYCONTACTNO;?></p>
                </div>
            </div>

    <?php } ?> 
  </div><br>
  </section>
  
  <!--<section class="section-padding gray-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title text-center">
            <h2 >Latest Jobs</h2>  
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 ">
          <?php 
            $sql = "SELECT * FROM `tblcategory`";
            $mydb->setQuery($sql);
            $cur = $mydb->loadResultList();

            foreach ($cur as $result) {
              echo '<div class="col-md-3" style="font-size:15px;padding:5px">* <a href="'.web_root.'index.php?q=category&search='.$result->CATEGORY.'">'.$result->CATEGORY.'</a></div>';
            }

          ?>
        </div>
      </div>
 
    </div>
  </section>   --> 
  <section id="content-3-10" class="content-block data-section nopad content-3-10">
  <div class="image-container col-sm-6 col-xs-12 pull-left">
    <div class="background-image-holder">

    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-6 col-xs-12 content">
        <div class="editContent">
          <h4>VISION</h4>
        </div>
        <div class="editContent"  style="height:235px;">
          <p>

          &nbsp;&nbsp;We dream of Filipinos
who passionately love their country
and whose values and competencies
enable them to realize their full potential
and contribute meaningfully to building the nation.

As a learner-centered public institution,
the Department of Education
continuously improves itself
to better serve its stakeholders.<br/><br/>
<h4>MISSION</h4>
          &nbsp;&nbsp;To protect and promote the right of every Filipino to quality, equitable, culture-based, and complete basic education where:

Students learn in a child-friendly, gender-sensitive, safe, and motivating environment.
Teachers facilitate learning and constantly nurture every learner.
Administrators and staff, as stewards of the institution, ensure an enabling and supportive environment for effective learning to happen.
Family, community, and other stakeholders are actively engaged and share responsibility for developing life-long learners. </p>
        </div> 
      </div>
    </div><!-- /.row-->
  </div><!-- /.container -->
</section>
  
  <div class="about home-about">
        <div class="container">
            
            <div class="row">
              <div class="col-md-4">
                <!-- Heading and para -->
                <div class="block-heading-two">
                  <h3><span></span></h3>
                </div>
                <h3><span>Our Mandate</span></h3>
                <p>The Department of Education was established through the Education Decree of 1863 as the Superior Commission of Primary Instruction under a Chairman. The Education agency underwent many reorganization efforts in the 20th century in order to better define its purpose vis a vis the changing administrations and charters. The present day Department of Education was eventually mandated through Republic Act 9155, otherwise known as the Governance of Basic Education act of 2001 which establishes the mandate of this agency. <br><br></p>
              </div>
              <div class="col-md-4">
                <div class="block-heading-two">
                  <h3><span>Latest News</span></h3>
                </div>    
                <!-- Accordion starts -->
                <div class="panel-group" id="accordion-alt3">
                 <!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
                  <div class="panel"> 
                  <!-- Panel heading -->
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3">
                      <i class="fa fa-angle-right"></i> Virtual Interview Room
                      </a>
                    </h4>
                   </div>
                   <div id="collapseOne-alt3" class="panel-collapse collapse">
                    <!-- Panel body -->
                    <div class="panel-body">
                    Virtual Interview of Applicants.<br>
                    <a class="btn btn-primary" href="https://meet.google.com/?pli=1"target="_blank" rely="noopener noreferrer" role="button">Click here to Join</a>
                    </div>
                   </div>
                  </div>
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3">
                      <i class="fa fa-angle-right"></i> Downloadable Forms
                      </a>
                    </h4>
                   </div>
                   <div id="collapseTwo-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
                    <a class="btn btn-primary btn-lg btn-block" href="https://drive.google.com/drive/folders/1_kaDirGTfS-Rfozb335pNvIEhJZYm_Au"target="_blank" rely="noopener noreferrer" role="button">Forms and Template</a>
                    </div>
                   </div>
                  </div>
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3">
                      <i class="fa fa-angle-right"></i> Hiring Guidlines
                      </a>
                    </h4>
                   </div>
                   <div id="collapseThree-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
                    <li><a href="https://drive.google.com/file/d/1OhpZLWajTDpgZuAVjeIexx_ZzWzeUZ6T/view?usp=sharing" target="_blank" rely="noopener noreferrer">MEC Order No.10,series of 1979</a><p>Implementing Rules and Regulations for the System of career progression for public school teacher</p></li>
                    <li><a href="https://drive.google.com/file/d/13Pag2eEszbW6lyePLM8bT1UJQTSFkbZW/view?usp=sharing" target="_blank" rely="noopener noreferrer">DO 66,series of 2007</a><p>Revised Guidelines on the Appointment and Promotion of Other Teaching, Related Teaching and Non-Teaching Positions</p></li>
                    <li><a href="https://drive.google.com/file/d/1uFn6VQ4vbXtjkmiE8yErbDRhl_qGigvG/view?usp=sharing" target="_blank" rely="noopener noreferrer">DO 42,series of 2007</a><p>Revised Guidelines on Selection, Promotion, and Designation of School Heads</p></li>
                    <li><a href="https://drive.google.com/file/d/1wFKecounFw6VUmOXXmolVBOkdXlGAuok/view?usp=sharing" target="_blank" rely="noopener noreferrer">DO 07,series of 2015</a><p>Hiring Guidelines for New Teacher Applicants (Elementary and Secondary)</p></li>
                    <li><a href="https://drive.google.com/file/d/1Ew_c_wKs8i9zmcp6Ig1w4i9OfZQ1FUhX/view?usp=sharing" target="_blank" rely="noopener noreferrer">DO 022,series of 2015</a><p>Recalibration Guidelines for New Teacher Applicants (Elementary and Secondary)</p></li>
                    <li><a href="https://sites.google.com/deped.gov.ph/recruitment-sdoval/dashboard" target="_blank" rely="noopener noreferrer">DO 03,series of 2016</a><p>Hiring Guidelines for New Teacher Applicants (Senior High School)</p></li>
                    </div>
                   </div>
                  </div>
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3">
                      <i class="fa fa-angle-right"></i>Frequently Asked Questions
                      
                      </a>
                    </h4>
                   </div>
                   <div id="collapseFour-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
                    Question 1 <br>What are Qualification Standards?<br><br> 
                    Answer: <br> The Qualification Standards (QS) are the minimum qualifications in terms of Education, Training, Experience, Eligibility, as required by the CSC.<br><br>
                    Question 2 <br>What are the QS/minimum qualifications for Teacher I position in Elementary and JHS?<br><br>
                    Answer: <br>• Elementary Bachelor of Science in Elementary Education or any Bachelor’s degree plus 18 professional units in Education <br>
                    • JHS Bachelor of Science in Secondary Education (with appropriate major) or any Bachelor’s degree plus 18 professional units in Education 
                    <br>Training: None required
                    <br>Experience: None required 
                    <br>Eligibility: PBET or LET 
                    <br>Reference: CSC 1995 Qualification Standards Manual

              
                    </div>
                   </div>
                  </div>
                </div>
                <!-- Accordion ends -->
                
              </div>
              
              <div class="col-md-4">
                <div class="block-heading-two">
                  <h3><span>Job Seeker Testimonials</span></h3>
                </div>  
                     <div class="testimonials">
                    <div class="active item">
                      <blockquote><p>Your application system is fantastic, job hunting can be very frustrating and you are by far the most friendly and professional recruitment business I have worked with.”</p></blockquote>
                      <div class="carousel-info">
                      <img alt="" src="plugins/home-plugins/img/dep.jpg" class="pull-left">
                      <div class="pull-left">
                        <span class="testimonials-name">Division of School-Valenzuela</span>
                        <span class="testimonials-post">RecruitmentSelectionManagementSystem</span>
                      </div>
                      </div>
                    </div>
                  </div>
              </div>
              
            </div>
            
                        
             
            <br>
           
            </div>
            
          </div>