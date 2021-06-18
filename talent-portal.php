<?php include 'layouts/head-main.php'; ?>
<head>
   <title>Flow Digital || Admin Panel</title>
   <?php include 'layouts/head.php'; ?>
   <?php include 'layouts/head-style.php'; ?>
</head>
<?php include 'layouts/body.php'; ?>
<!-- Begin page -->
<div id="layout-wrapper">
   <?php include 'layouts/vertical-menu.php'; ?>
   <!-- ============================================================== -->
   <!-- Start right Content here -->
   <!-- ============================================================== -->
   <div class="main-content">
      <div class="page-content">
         <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
               <div class="col-12">
                  <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                     <!-- <h4 class="mb-sm-0 font-size-18">Dashboard</h4> -->
                     <!-- <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        </div> -->
                  </div>
               </div>
            </div>
            <!-- end page title -->
            <div class="row">
               <div class="col-12">
                  <div class="welcome">
                     <h2>Welcome back adam</h2>
                     <p>You've <span><a href="#">5 invoices</a></span> pending for payment</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-12">
                  <div class="row">
                     <div class="col-md-3">
                        <div class="card mini-stats-wid">
                           <div class="card-body">
                              <div class="media">
                                 <div class="media-body">
                                    <div class="box d-flex justify-content-between">
                                       <div>
                                          <p class="fw-light mb-1">Tasks In Progress</p>
                                       </div>
                                       <div><i class="mdi mdi-chevron-right box_arrow"></i></div>
                                    </div>
                                    <h4 class="mb-0 text-primary">10</h4>
                                    <span class="fw-light text-primary">1 due today</span>
                                 </div>
                                 <!-- <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                    <span class="avatar-title">
                                        <i class="bx bx-copy-alt font-size-24"></i>
                                    </span>
                                    </div> -->
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="card mini-stats-wid">
                           <div class="card-body">
                              <div class="media">
                                 <div class="media-body h-100">
                                    <div class="box d-flex justify-content-between">
                                       <div>
                                          <p class="fw-light mb-1">Tasks Pending Feedback</p>
                                       </div>
                                       <div><i class="mdi mdi-chevron-right box_arrow"></i></div>
                                    </div>
                                    <h4 class="mb-0 text-primary">1</h4>
                                    <span class="fw-light text-primary">1 due today</span>
                                 </div>
                                 <!-- <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                    <span class="avatar-title">
                                        <i class="bx bx-copy-alt font-size-24"></i>
                                    </span>
                                    </div> -->
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="card mini-stats-wid">
                           <div class="card-body">
                              <div class="media">
                                 <div class="media-body ">
                                    <div class="box d-flex justify-content-between">
                                       <div>
                                          <p class="fw-light mb-1">TaskProjectss In Progress</p>
                                       </div>
                                       <div><i class="mdi mdi-chevron-right box_arrow"></i></div>
                                    </div>
                                    <h4 class="mb-0 text-primary">3</h4>
                                    <span class="fw-light text-primary">2 due today</span>
                                 </div>
                                 <!-- <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                    <span class="avatar-title">
                                        <i class="bx bx-copy-alt font-size-24"></i>
                                    </span>
                                    </div> -->
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="card mini-stats-wid">
                           <div class="card-body">
                              <div class="media">
                                 <div class="media-body">
                                    <div class="box d-flex justify-content-between">
                                       <div>
                                          <p class="fw-light mb-1">Pending Invoice Payments</p>
                                       </div>
                                       <div><i class="mdi mdi-chevron-right box_arrow"></i></div>
                                    </div>
                                    <h4 class="mb-0 text-primary">RM 18,500</h4>
                                    <span class="fw-light text-primary">+18% this month</span>
                                 </div>
                                 <!-- <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                    <span class="avatar-title">
                                        <i class="bx bx-copy-alt font-size-24"></i>
                                    </span>
                                    </div> -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end row -->
               </div>
            </div>
            <div class="card-header bg-transparent">
               <ul class="nav nav-tabs nav-tabs-custom align-items-center card-header-tabs mx-n3" role="tablist">
                  <li class="nav-item p-2 px-3 text-muted d-none d-sm-inline-block">View :</li>
                  <li class="nav-item">
                     <a class="nav-link active" data-bs-toggle="tab" href="#list" role="tab">
                     <span class="d-inline-block align-middle"><i class="bx bx-list-ul font-size-18 me-2"></i></span>
                     <span class="d-none d-sm-inline-block">List</span> 
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" data-bs-toggle="tab" href="#board" role="tab">
                     <span class="d-inline-block align-middle"><i class="bx bx-grid-alt font-size-18 me-2"></i></span>
                     <span class="d-none d-sm-inline-block">Board</span> 
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" data-bs-toggle="tab" href="#timeline" role="tab">
                     <span class="d-inline-block align-middle"><i class="bx bx-bar-chart-alt-2 font-size-18 me-2"></i></span>
                     <span class="d-none d-sm-inline-block">Timeline</span>   
                     </a>
                  </li>
                  <li class="nav-item ms-auto">
                     <ul class="nav filter-nav">
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><span class="d-inline-block align-middle"><i class="bx bx-filter font-size-18 me-2"></i></span> <span class="d-sm-inline-block">Filter</span></a>
                           <ul class="dropdown-menu dropdown-menu-end" style="">
                              <li>
                                 <a class="dropdown-item" href="#">
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="" id="filteroptionCheck01">
                                       <label class="form-check-label" for="filteroptionCheck01">
                                       Task in progress
                                       </label>
                                    </div>
                                 </a>
                              </li>
                              <li>
                                 <a class="dropdown-item" href="#">
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="" id="filteroptionCheck02">
                                       <label class="form-check-label" for="filteroptionCheck02">
                                       Task Awaiting Feedback
                                       </label>
                                    </div>
                                 </a>
                              </li>
                              <li>
                                 <a class="dropdown-item" href="#">
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="" id="filteroptionCheck03">
                                       <label class="form-check-label" for="filteroptionCheck03">
                                       Project in Progress
                                       </label>
                                    </div>
                                 </a>
                              </li>
                              <li>
                                 <a class="dropdown-item" href="#">
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="" id="filteroptionCheck04">
                                       <label class="form-check-label" for="filteroptionCheck04">
                                       Invoices Pending for Payments
                                       </label>
                                    </div>
                                 </a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item nav-item dropdown check-dropdown">
                     <a href="#" class="nav-link"><span class="d-inline-block align-middle"><i class="bx bx-sort-alt-2 font-size-18 me-2"></i></span> <span class="d-sm-inline-block">Sort</span></a>
                  </li>
               </ul>
            </div>
            <!-- end card header -->
            <div class="card-body">
               <div class="tab-content">
                  <div class="tab-pane active" id="list" role="tabpanel">
                     <div>
                        <!-- end nav section -->
                        <div class="tab-content pt-2">
                           <div class="tab-pane active" id="listview-comfortable" role="tabpanel">
                              <div>
                                 <div class="accordion" id="listview-comfortableaccordion">
                                    <div class="accordion-item">
                                       <h2 class="accordion-header" id="list-comfortableaccordionheadingOne">
                                          <button class="accordion-button collapsed bg-white border-0 mb-3 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#list-comfortableaccordioncollapseOne" aria-expanded="false" aria-controls="list-comfortableaccordioncollapseOne">
                                          In Progress <span class="fw-semibold me-3">(5)</span>
                                          </button>
                                       </h2>
                                       <div id="list-comfortableaccordioncollapseOne" class="bg-white border-0 accordion-collapse collapse" aria-labelledby="list-comfortableaccordionheadingOne" data-bs-parent="#listview-comfortableaccordion" style="">
                                          <div class="accordion-body">
                                             <div class="table-responsive">
                                                <table class="table table-nowrap table-hover align-middle mb-0">
                                                   <thead>
                                                      <tr>
                                                         <th id="tech-companies-1-col-0">Task</th>
                                                         <th data-priority="1" id="tech-companies-1-col-1">Project</th>
                                                         <th data-priority="3" id="tech-companies-1-col-2">Priority</th>
                                                         <th data-priority="1" id="tech-companies-1-col-3">Status</th>
                                                         <th data-priority="3" id="tech-companies-1-col-4">Due Date</th>
                                                      </tr>
                                                   </thead>
                                                   <tbody>
                                                      <tr>
                                                         <td>
                                                            <div class="table-task">
                                                               <span class="text-truncate font-size-13 mb-0 fw-light">Task name</span>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <span class="text-truncate font-size-13 mb-0 fw-light">Project name</span>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <!-- <h5 class="text-truncate font-size-13 mb-0"><a href="#" class="text-dark">Priority</a></h5> -->
                                                               <div class="d-flex gap-2">
                                                                  <span class="badge rounded-pill bg-danger font-size-11 text-white">High</span>
                                                               </div>
                                                            </div>
                                                         </td>
                                                         <td class="text-muted fw-light">Not started</td>
                                                         <td  class="text-muted fw-light">20 Apr - 4 May</td>
                                                      </tr>
                                                      <tr>
                                                         <td>
                                                            <div class="table-task">
                                                               <h5 class="text-truncate font-size-13 mb-0 fw-light">Task name</h5>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <h5 class="text-truncate font-size-13 mb-0 fw-light">Project name</h5>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <!-- <h5 class="text-truncate font-size-13 mb-0"><a href="#" class="text-dark">Priority</a></h5> -->
                                                               <div class="d-flex gap-2">
                                                                  <span class="badge rounded-pill bg-success font-size-11 text-white fw-light">Low</span>
                                                               </div>
                                                            </div>
                                                         </td>
                                                         <td class="text-muted fw-light">In Progress</td>
                                                         <td  class="text-muted fw-light">20 Apr - 4 May</td>
                                                      </tr>
                                                      <tr>
                                                         <td>
                                                            <div class="table-task">
                                                               <h5 class="text-truncate font-size-13 mb-0 fw-light">Task name</h5>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <h5 class="text-truncate font-size-13 mb-0 fw-light">Project name</h5>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <!-- <h5 class="text-truncate font-size-13 mb-0"><a href="#" class="text-dark">Priority</a></h5> -->
                                                               <div class="d-flex gap-2">
                                                                  <span class="badge rounded-pill bg-warning font-size-11 text-white">Low</span>
                                                               </div>
                                                            </div>
                                                         </td>
                                                         <td class="text-muted fw-light">On Hold</td>
                                                         <td  class="text-muted fw-light">20 Apr - 4 May</td>
                                                      </tr>
                                                      <tr>
                                                         <td>
                                                            <div class="table-task">
                                                               <h5 class="text-truncate font-size-13 mb-0 fw-light">Task name</h5>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <h5 class="text-truncate font-size-13 mb-0 fw-light">Project name</h5>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <!-- <h5 class="text-truncate font-size-13 mb-0"><a href="#" class="text-dark">Priority</a></h5> -->
                                                               <div class="d-flex gap-2">
                                                                  <span class="badge rounded-pill bg-danger font-size-11 text-white">High</span>
                                                               </div>
                                                            </div>
                                                         </td>
                                                         <td class="text-muted fw-light">Completed</td>
                                                         <td  class="text-muted fw-light">20 Apr - 4 May</td>
                                                      </tr>
                                                      <tr>
                                                         <td>
                                                            <div class="table-task">
                                                               <h5 class="text-truncate font-size-13 mb-0 fw-light">Task name</h5>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <h5 class="text-truncate font-size-13 mb-0 fw-light">Project name</h5>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <!-- <h5 class="text-truncate font-size-13 mb-0"><a href="#" class="text-dark">Priority</a></h5> -->
                                                               <div class="d-flex gap-2">
                                                                  <span class="badge rounded-pill bg-warning font-size-11 text-white">Low</span>
                                                               </div>
                                                            </div>
                                                         </td>
                                                         <td class="text-muted fw-light">Awaiting Feedback</td>
                                                         <td  class="text-muted fw-light">20 Apr - 4 May</td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </div>
                                             <!-- end table responsive -->
                                          </div>
                                       </div>
                                    </div>
                                    <!-- end accordion-item -->
                                    <div class="accordion-item">
                                       <h2 class="accordion-header" id="list-comfortableaccordionheadingTwo">
                                          <button class="accordion-button collapsed bg-white border-0 mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#list-comfortableaccordioncollapseTwo" aria-expanded="false" aria-controls="list-comfortableaccordioncollapseTwo">
                                          Development Section <span class="fw-semibold me-3">(5)</span>
                                          </button>
                                       </h2>
                                       <div id="list-comfortableaccordioncollapseTwo" class=" bg-white border-0 accordion-collapse collapse" aria-labelledby="list-comfortableaccordionheadingTwo" data-bs-parent="#listview-comfortableaccordion">
                                          <div class="accordion-body">
                                             <div class="table-responsive">
                                                <table class="table table-nowrap table-hover align-middle mb-0">
                                                   <thead>
                                                      <tr>
                                                         <th id="tech-companies-1-col-0">Task</th>
                                                         <th data-priority="1" id="tech-companies-1-col-1">Project</th>
                                                         <th data-priority="3" id="tech-companies-1-col-2">Priority</th>
                                                         <th data-priority="1" id="tech-companies-1-col-3">Status</th>
                                                         <th data-priority="3" id="tech-companies-1-col-4">Due Date</th>
                                                      </tr>
                                                   </thead>
                                                   <tbody>
                                                      <tr>
                                                         <td>
                                                            <div class="table-task">
                                                               <span class="text-truncate font-size-13 mb-0 fw-light">Task name</span>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <span class="text-truncate font-size-13 mb-0 fw-light">Project name</span>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <!-- <h5 class="text-truncate font-size-13 mb-0"><a href="#" class="text-dark">Priority</a></h5> -->
                                                               <div class="d-flex gap-2">
                                                                  <span class="badge rounded-pill bg-danger font-size-11 text-white">High</span>
                                                               </div>
                                                            </div>
                                                         </td>
                                                         <td class="text-muted fw-light">Not started</td>
                                                         <td  class="text-muted fw-light">20 Apr - 4 May</td>
                                                      </tr>
                                                      <tr>
                                                         <td>
                                                            <div class="table-task">
                                                               <h5 class="text-truncate font-size-13 mb-0 fw-light">Task name</h5>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <h5 class="text-truncate font-size-13 mb-0 fw-light">Project name</h5>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <!-- <h5 class="text-truncate font-size-13 mb-0"><a href="#" class="text-dark">Priority</a></h5> -->
                                                               <div class="d-flex gap-2">
                                                                  <span class="badge rounded-pill bg-success font-size-11 text-white fw-light">Low</span>
                                                               </div>
                                                            </div>
                                                         </td>
                                                         <td class="text-muted fw-light">In Progress</td>
                                                         <td  class="text-muted fw-light">20 Apr - 4 May</td>
                                                      </tr>
                                                      <tr>
                                                         <td>
                                                            <div class="table-task">
                                                               <h5 class="text-truncate font-size-13 mb-0 fw-light">Task name</h5>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <h5 class="text-truncate font-size-13 mb-0 fw-light">Project name</h5>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <!-- <h5 class="text-truncate font-size-13 mb-0"><a href="#" class="text-dark">Priority</a></h5> -->
                                                               <div class="d-flex gap-2">
                                                                  <span class="badge rounded-pill bg-warning font-size-11 text-white">Low</span>
                                                               </div>
                                                            </div>
                                                         </td>
                                                         <td class="text-muted fw-light">On Hold</td>
                                                         <td  class="text-muted fw-light">20 Apr - 4 May</td>
                                                      </tr>
                                                      <tr>
                                                         <td>
                                                            <div class="table-task">
                                                               <h5 class="text-truncate font-size-13 mb-0 fw-light">Task name</h5>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <h5 class="text-truncate font-size-13 mb-0 fw-light">Project name</h5>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <!-- <h5 class="text-truncate font-size-13 mb-0"><a href="#" class="text-dark">Priority</a></h5> -->
                                                               <div class="d-flex gap-2">
                                                                  <span class="badge rounded-pill bg-danger font-size-11 text-white">High</span>
                                                               </div>
                                                            </div>
                                                         </td>
                                                         <td class="text-muted fw-light">Completed</td>
                                                         <td  class="text-muted fw-light">20 Apr - 4 May</td>
                                                      </tr>
                                                      <tr>
                                                         <td>
                                                            <div class="table-task">
                                                               <h5 class="text-truncate font-size-13 mb-0 fw-light">Task name</h5>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <h5 class="text-truncate font-size-13 mb-0 fw-light">Project name</h5>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <!-- <h5 class="text-truncate font-size-13 mb-0"><a href="#" class="text-dark">Priority</a></h5> -->
                                                               <div class="d-flex gap-2">
                                                                  <span class="badge rounded-pill bg-warning font-size-11 text-white">Low</span>
                                                               </div>
                                                            </div>
                                                         </td>
                                                         <td class="text-muted fw-light">Awaiting Feedback</td>
                                                         <td  class="text-muted fw-light">20 Apr - 4 May</td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </div>
                                             <!-- end table responsive -->
                                          </div>
                                       </div>
                                    </div>
                                    <!-- end accordion-item -->
                                    <div class="accordion-item">
                                       <h2 class="accordion-header" id="list-comfortableaccordionheadingThree">
                                          <button class="fw-bold accordion-button collapsed bg-white border-0 mb-3 " type="button" data-bs-toggle="collapse" data-bs-target="#list-comfortableaccordioncollapseThree" aria-expanded="false" aria-controls="list-comfortableaccordioncollapseThree">
                                          Development Section <span class="fw-semibold me-3">(5)</span>
                                          </button>
                                       </h2>
                                       <div id="list-comfortableaccordioncollapseThree" class="bg-white border-0 accordion-collapse collapse" aria-labelledby="list-comfortableaccordionheadingThree" data-bs-parent="#listview-comfortableaccordion">
                                          <div class="accordion-body">
                                             <div class="table-responsive">
                                                <table class="table table-nowrap table-hover align-middle mb-0">
                                                   <thead>
                                                      <tr>
                                                         <th id="tech-companies-1-col-0">Task</th>
                                                         <th data-priority="1" id="tech-companies-1-col-1">Project</th>
                                                         <th data-priority="3" id="tech-companies-1-col-2">Priority</th>
                                                         <th data-priority="1" id="tech-companies-1-col-3">Status</th>
                                                         <th data-priority="3" id="tech-companies-1-col-4">Due Date</th>
                                                      </tr>
                                                   </thead>
                                                   <tbody>
                                                      <tr>
                                                         <td>
                                                            <div class="table-task">
                                                               <span class="text-truncate font-size-13 mb-0 fw-light">Task name</span>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <span class="text-truncate font-size-13 mb-0 fw-light">Project name</span>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <!-- <h5 class="text-truncate font-size-13 mb-0"><a href="#" class="text-dark">Priority</a></h5> -->
                                                               <div class="d-flex gap-2">
                                                                  <span class="badge rounded-pill bg-danger font-size-11 text-white">High</span>
                                                               </div>
                                                            </div>
                                                         </td>
                                                         <td class="text-muted fw-light">Not started</td>
                                                         <td  class="text-muted fw-light">20 Apr - 4 May</td>
                                                      </tr>
                                                      <tr>
                                                         <td>
                                                            <div class="table-task">
                                                               <h5 class="text-truncate font-size-13 mb-0 fw-light">Task name</h5>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <h5 class="text-truncate font-size-13 mb-0 fw-light">Project name</h5>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <!-- <h5 class="text-truncate font-size-13 mb-0"><a href="#" class="text-dark">Priority</a></h5> -->
                                                               <div class="d-flex gap-2">
                                                                  <span class="badge rounded-pill bg-success font-size-11 text-white fw-light">Low</span>
                                                               </div>
                                                            </div>
                                                         </td>
                                                         <td class="text-muted fw-light">In Progress</td>
                                                         <td  class="text-muted fw-light">20 Apr - 4 May</td>
                                                      </tr>
                                                      <tr>
                                                         <td>
                                                            <div class="table-task">
                                                               <h5 class="text-truncate font-size-13 mb-0 fw-light">Task name</h5>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <h5 class="text-truncate font-size-13 mb-0 fw-light">Project name</h5>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <!-- <h5 class="text-truncate font-size-13 mb-0"><a href="#" class="text-dark">Priority</a></h5> -->
                                                               <div class="d-flex gap-2">
                                                                  <span class="badge rounded-pill bg-warning font-size-11 text-white">Low</span>
                                                               </div>
                                                            </div>
                                                         </td>
                                                         <td class="text-muted fw-light">On Hold</td>
                                                         <td  class="text-muted fw-light">20 Apr - 4 May</td>
                                                      </tr>
                                                      <tr>
                                                         <td>
                                                            <div class="table-task">
                                                               <h5 class="text-truncate font-size-13 mb-0 fw-light">Task name</h5>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <h5 class="text-truncate font-size-13 mb-0 fw-light">Project name</h5>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <!-- <h5 class="text-truncate font-size-13 mb-0"><a href="#" class="text-dark">Priority</a></h5> -->
                                                               <div class="d-flex gap-2">
                                                                  <span class="badge rounded-pill bg-danger font-size-11 text-white">High</span>
                                                               </div>
                                                            </div>
                                                         </td>
                                                         <td class="text-muted fw-light">Completed</td>
                                                         <td  class="text-muted fw-light">20 Apr - 4 May</td>
                                                      </tr>
                                                      <tr>
                                                         <td>
                                                            <div class="table-task">
                                                               <h5 class="text-truncate font-size-13 mb-0 fw-light">Task name</h5>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <h5 class="text-truncate font-size-13 mb-0 fw-light">Project name</h5>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <!-- <h5 class="text-truncate font-size-13 mb-0"><a href="#" class="text-dark">Priority</a></h5> -->
                                                               <div class="d-flex gap-2">
                                                                  <span class="badge rounded-pill bg-warning font-size-11 text-white">Low</span>
                                                               </div>
                                                            </div>
                                                         </td>
                                                         <td class="text-muted fw-light">Awaiting Feedback</td>
                                                         <td  class="text-muted fw-light">20 Apr - 4 May</td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </div>
                                             <!-- end table responsive -->
                                          </div>
                                       </div>
                                    </div>
                                    <!-- end accordion-item -->
                                    <div class="accordion-item">
                                       <h2 class="accordion-header" id="list-comfortableaccordionheadingFour">
                                          <button class="accordion-button collapsed bg-white border-0 mb-3 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#list-comfortableaccordioncollapseFour" aria-expanded="false" aria-controls="list-comfortableaccordioncollapseFour">
                                          Deployment <span class="fw-semibold me-3">(2)</span>
                                          </button>
                                       </h2>
                                       <div id="list-comfortableaccordioncollapseFour" class="bg-white border-0 accordion-collapse collapse" aria-labelledby="list-comfortableaccordionheadingFour" data-bs-parent="#listview-comfortableaccordion">
                                          <div class="accordion-body">
                                             <div class="table-responsive">
                                                <table class="table table-nowrap table-hover align-middle mb-0">
                                                   <thead>
                                                      <tr>
                                                         <th id="tech-companies-1-col-0">Task</th>
                                                         <th data-priority="1" id="tech-companies-1-col-1">Project</th>
                                                         <th data-priority="3" id="tech-companies-1-col-2">Priority</th>
                                                         <th data-priority="1" id="tech-companies-1-col-3">Status</th>
                                                         <th data-priority="3" id="tech-companies-1-col-4">Due Date</th>
                                                      </tr>
                                                   </thead>
                                                   <tbody>
                                                      <tr>
                                                         <td>
                                                            <div class="table-task">
                                                               <span class="text-truncate font-size-13 mb-0 fw-light">Task name</span>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <span class="text-truncate font-size-13 mb-0 fw-light">Project name</span>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <!-- <h5 class="text-truncate font-size-13 mb-0"><a href="#" class="text-dark">Priority</a></h5> -->
                                                               <div class="d-flex gap-2">
                                                                  <span class="badge rounded-pill bg-danger font-size-11 text-white">High</span>
                                                               </div>
                                                            </div>
                                                         </td>
                                                         <td class="text-muted fw-light">Not started</td>
                                                         <td  class="text-muted fw-light">20 Apr - 4 May</td>
                                                      </tr>
                                                      <tr>
                                                         <td>
                                                            <div class="table-task">
                                                               <h5 class="text-truncate font-size-13 mb-0 fw-light">Task name</h5>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <h5 class="text-truncate font-size-13 mb-0 fw-light">Project name</h5>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <!-- <h5 class="text-truncate font-size-13 mb-0"><a href="#" class="text-dark">Priority</a></h5> -->
                                                               <div class="d-flex gap-2">
                                                                  <span class="badge rounded-pill bg-success font-size-11 text-white fw-light">Low</span>
                                                               </div>
                                                            </div>
                                                         </td>
                                                         <td class="text-muted fw-light">In Progress</td>
                                                         <td  class="text-muted fw-light">20 Apr - 4 May</td>
                                                      </tr>
                                                      <tr>
                                                         <td>
                                                            <div class="table-task">
                                                               <h5 class="text-truncate font-size-13 mb-0 fw-light">Task name</h5>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <h5 class="text-truncate font-size-13 mb-0 fw-light">Project name</h5>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <!-- <h5 class="text-truncate font-size-13 mb-0"><a href="#" class="text-dark">Priority</a></h5> -->
                                                               <div class="d-flex gap-2">
                                                                  <span class="badge rounded-pill bg-warning font-size-11 text-white">Low</span>
                                                               </div>
                                                            </div>
                                                         </td>
                                                         <td class="text-muted fw-light">On Hold</td>
                                                         <td  class="text-muted fw-light">20 Apr - 4 May</td>
                                                      </tr>
                                                      <tr>
                                                         <td>
                                                            <div class="table-task">
                                                               <h5 class="text-truncate font-size-13 mb-0 fw-light">Task name</h5>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <h5 class="text-truncate font-size-13 mb-0 fw-light">Project name</h5>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <!-- <h5 class="text-truncate font-size-13 mb-0"><a href="#" class="text-dark">Priority</a></h5> -->
                                                               <div class="d-flex gap-2">
                                                                  <span class="badge rounded-pill bg-danger font-size-11 text-white">High</span>
                                                               </div>
                                                            </div>
                                                         </td>
                                                         <td class="text-muted fw-light">Completed</td>
                                                         <td  class="text-muted fw-light">20 Apr - 4 May</td>
                                                      </tr>
                                                      <tr>
                                                         <td>
                                                            <div class="table-task">
                                                               <h5 class="text-truncate font-size-13 mb-0 fw-light">Task name</h5>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <h5 class="text-truncate font-size-13 mb-0 fw-light">Project name</h5>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="table-task">
                                                               <!-- <h5 class="text-truncate font-size-13 mb-0"><a href="#" class="text-dark">Priority</a></h5> -->
                                                               <div class="d-flex gap-2">
                                                                  <span class="badge rounded-pill bg-warning font-size-11 text-white">Low</span>
                                                               </div>
                                                            </div>
                                                         </td>
                                                         <td class="text-muted fw-light">Awaiting Feedback</td>
                                                         <td  class="text-muted fw-light">20 Apr - 4 May</td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </div>
                                             <!-- end table responsive -->
                                          </div>
                                       </div>
                                    </div>
                                    <!-- end accordion-item -->
                                 </div>
                                 <!-- end accordion -->
                              </div>
                           </div>
                           <!-- end tab pane -->
                           <div class="tab-pane" id="listview-compact" role="tabpanel">
                              <div>
                                 <h5 class="border-bottom pb-3 mb-0">Showing <span class="text-primary">8</span> Tasks </h5>
                              </div>
                           </div>
                           <!-- end tab pane -->
                        </div>
                        <!-- end tab content -->
                     </div>
                  </div>
                  <!-- end list tab pane -->
                  <div class="tab-pane" id="board" role="tabpanel">
                     <div>
                        <div class="">
                           <div>
                              <div class="title">
                                 <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                       <p class="has-arrow waves-effect fw-bold text-dark font-size-12" aria-expanded="false"> <i class="mdi mdi-chevron-down font-size-12"></i> In Progress</p>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                       <p class="has-arrow waves-effect fw-bold text-dark font-size-12" aria-expanded="false"> <i class="mdi mdi-chevron-down font-size-12"></i>  Development Section</p>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                       <p><button type="button" class="btn btn-new waves-effect waves-light">
                                        <i class="bx bx-plus font-size-16 align-middle me-2"></i> New Section 
                                    </button></p>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-xl-4 col-lg-4  col-md-4  col-sm-6">
                                    <div class="card">
                                       <div class="card-body">
                                          <div class="media">
                                             <div class="media-body overflow-hidden">
                                                <p> <i class="mdi mdi-check-circle-outline"></i> <span class="text-truncate text-dark">Add text field to chat / checkout page</span></p>
                                                <span class="badge rounded-pill bg-danger mb-2">High</span>
                                                <div class="">
                                                   <p class="text-muted mb-2 fw-light">It will be as simple as Occidental</p>
                                                </div>
                                                <div class="time d-flex justify-content-between">
                                                   <div class="fw-light"><i class="bx bx-calendar me-1"></i> 15 Oct, 19</div>
                                                   <div>
                                                      <div class="avatar-group">
                                                         <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xs">
                                                            </a>
                                                         </div>
                                                         <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xs">
                                                            </a>
                                                         </div>
                                                         <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                               <div class="avatar-xs">
                                                                  <span class="avatar-title rounded-circle bg-success text-white font-size-16">
                                                                  A
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                         <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xs">
                                                            </a>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xl-4 col-lg-4  col-md-4  col-sm-6">
                                    <div class="card">
                                       <div class="card-body">
                                          <div class="media">
                                             <div class="media-body overflow-hidden">
                                                <p> <i class="mdi mdi-check-circle-outline"></i> <span class="text-truncate text-dark">Migrate../images folder to ../ assets folder [Internal] Develop webpage on new</span></p>
                                                <span class="badge badge rounded-pill bg-warning mb-2">Medium</span>
                                                <div class="">
                                                   <p class="text-muted mb-2 fw-light">Creative Agency Sdn Bhd</p>
                                                </div>
                                                <div class="time d-flex justify-content-between">
                                                   <div class="fw-light"><i class="bx bx-calendar me-1"></i> 15 Oct, 19</div>
                                                   <div>
                                                      <div class="avatar-group">
                                                         <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xs">
                                                            </a>
                                                         </div>
                                                         <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xs">
                                                            </a>
                                                         </div>
                                                         <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                               <div class="avatar-xs">
                                                                  <span class="avatar-title rounded-circle bg-success text-white font-size-16">
                                                                  A
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                         <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xs">
                                                            </a>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-xl-4 col-lg-4  col-md-4  col-sm-6">
                                    <div class="card">
                                       <div class="card-body">
                                          <div class="media">
                                             <div class="media-body overflow-hidden">
                                                <p> <i class="mdi mdi-check-circle-outline"></i> <span class="text-truncate text-dark">Add text field to chat / checkout page</span></p>
                                                <span class="badge rounded-pill bg-success mb-2">Low</span>
                                                <div class="">
                                                   <p class="text-muted mb-2 fw-light">It will be as simple as Occidental</p>
                                                </div>
                                                <div class="time d-flex justify-content-between">
                                                   <div class="fw-light"><i class="bx bx-calendar me-1"></i> 15 Oct, 19</div>
                                                   <div>
                                                      <div class="avatar-group">
                                                         <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xs">
                                                            </a>
                                                         </div>
                                                         <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xs">
                                                            </a>
                                                         </div>
                                                         <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                               <div class="avatar-xs">
                                                                  <span class="avatar-title rounded-circle bg-success text-white font-size-16">
                                                                  A
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                         <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xs">
                                                            </a>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xl-4 col-lg-4  col-md-4  col-sm-6">
                                    <div class="card">
                                       <div class="card-body">
                                          <div class="media">
                                             <div class="media-body overflow-hidden">
                                                <p> <i class="mdi mdi-check-circle-outline"></i> <span class="text-truncate text-dark">Add text field to chat / checkout page</span></p>
                                                <span class="badge rounded-pill bg-danger mb-2">High</span>
                                                <div class="">
                                                   <p class="text-muted mb-2 fw-light">It will be as simple as Occidental</p>
                                                </div>
                                                <div class="time d-flex justify-content-between">
                                                   <div class="fw-light"><i class="bx bx-calendar me-1"></i> 15 Oct, 19</div>
                                                   <div>
                                                      <div class="avatar-group">
                                                         <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xs">
                                                            </a>
                                                         </div>
                                                         <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xs">
                                                            </a>
                                                         </div>
                                                         <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                               <div class="avatar-xs">
                                                                  <span class="avatar-title rounded-circle bg-success text-white font-size-16">
                                                                  A
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                         <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xs">
                                                            </a>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-xl-4 col-lg-4  col-md-4  col-sm-6">
                                    <div class="card">
                                       <div class="card-body">
                                          <div class="media">
                                             <div class="media-body overflow-hidden">
                                                <p> <i class="mdi mdi-check-circle-outline"></i> <span class="text-truncate text-dark">Migrate../images folder to ../ assets folder [Internal] Develop webpage on new</span></p>
                                                <span class="badge rounded-pill bg-warning mb-2">Medium</span>
                                                <div class="">
                                                   <p class="text-muted mb-2 fw-light">Creative Agency webapges  Sdn Bhd</p>
                                                </div>
                                                <div class="time d-flex justify-content-between">
                                                   <div class="fw-light"><i class="bx bx-calendar me-1"></i> 15 Oct, 19</div>
                                                   <div>
                                                      <div class="avatar-group">
                                                         <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xs">
                                                            </a>
                                                         </div>
                                                         <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xs">
                                                            </a>
                                                         </div>
                                                         <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                               <div class="avatar-xs">
                                                                  <span class="avatar-title rounded-circle bg-success text-white font-size-16">
                                                                  A
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                         <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xs">
                                                            </a>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                
                              </div>
                           </div>
                        </div>
                        <!-- end nav section -->
                     </div>
                  </div>
                  <!-- end board tab pane -->
                  <div class="tab-pane" id="timeline" role="tabpanel">
                     <div>
                        <ul class="nav nav-tabs filter-nav align-items-center mb-3" role="tablist">
                           <li class="nav-item">
                              <a class="nav-link ps-xl-0" data-bs-toggle="tab" href="#timelineview-comfortable" role="tab">
                              <span class="d-inline-block align-middle"><i class="bx bx-list-ul font-size-18 me-2"></i></span>
                              <span class="d-none d-sm-inline-block">Comfortable View</span> 
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link active" data-bs-toggle="tab" href="#timelineview-compact" role="tab">
                              <span class="d-inline-block align-middle"><i class="bx bx-list-plus font-size-18 me-2"></i></span>
                              <span class="d-none d-sm-inline-block">Compact View</span> 
                              </a>
                           </li>
                        </ul>
                        <div class="tab-content pt-2">
                           <div class="tab-pane" id="timelineview-comfortable" role="tabpanel"></div>
                           <!-- end tab pane -->
                           <div class="tab-pane active" id="timelineview-compact" role="tabpanel"></div>
                           <!-- end tab pane -->
                        </div>
                     </div>
                  </div>
                  <!-- end timeline tab pane -->
               </div>
               <!-- end tab content -->
            </div>
            <!-- end card body -->
         </div>
         <div class="card">
         </div>
         <!-- container-fluid -->
      </div>
      <!-- End Page-content -->
      <?php include 'layouts/footer.php'; ?>
   </div>
   <!-- end main content-->
</div>
<!-- END layout-wrapper -->
<!-- Right Sidebar -->
<?php include 'layouts/right-sidebar.php'; ?>
<!-- /Right-bar -->
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>
<!-- apexcharts -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>
<script src="assets/js/pages/dashboard.init.js"></script>
<!-- App js -->
<script src="assets/js/app.js"></script>
</body>
</html>