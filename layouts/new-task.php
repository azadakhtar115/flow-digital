  <!-- New Task -->
  <div class="right-bar">
  <div class="offcanvas offcanvas-end newtask-offcanvas" tabindex="-1" id="newtaskcanvas" >
            <div data-simplebar style="min-height: 100vh;">
               <div class="offcanvas-body p-4">
                  <div class="d-flex align-items-center mt-2">
                     <div class="flex-grow-1">
                        <div class="d-flex gap-2">
                           <button type="button" class="btn btn-link pin-btn avatar-xs text-decoration-none shadow-none font-size-18 p-0" data-bs-dismiss="offcanvas" aria-label="Close">
                           <span class="avatar-title">
                           <i class="mdi mdi-pin-outline"></i>
                           </span>
                           </button>
                           <button type="button" class="btn btn-link pin-btn avatar-xs text-decoration-none shadow-none font-size-18 p-0 d-block d-xxl-none">
                           <span class="avatar-title">
                           <i class="mdi mdi-close"></i>
                           </span>
                           </button>
                        </div>
                     </div>
                     <div class="flex-shrink-0">
                        <div class="d-flex gap-2">
                           <div>
                              <button type="button" class="btn btn-link text-dark text-decoration-none shadow-none " data-bs-dismiss="offcanvas" aria-label="Close">Discard</button>
                           </div>
                           <div>
                              <button type="button" class="btn btn-link text-decoration-none shadow-none">Save</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="mt-4">
                     <input type="text" class="form-control form-control-lg offcanvas-input ps-1" placeholder="Enter task name">
                  </div>
                  <div class="mt-3">
                     <div class="mb-3 row">
                        <label for="hourlyeate-input" class="col-lg-3 col-form-label">Hourly Rate</label>
                        <div class="col-lg-9">
                           <input type="text" class="form-control offcanvas-input" id="hourlyeate-input" placeholder="Enter rate">
                        </div>
                     </div>
                     <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label">Assigned to</label>
                        <div class="col-lg-9">
                           <div class="avatar-group flex-nowrap">
                              <div class="avatar-group-item">
                                 <a href="javascript: void(0);" class="d-block">
                                 <img src="assets/images/users/avatar-1.jpg" alt="" class="rounded-circle avatar-xs">
                                 </a>
                              </div>
                              <div class="avatar-group-item">
                                 <a href="javascript: void(0);" class="d-block">
                                 <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xs">
                                 </a>
                              </div>
                              <div class="avatar-group-item">
                                 <a href="javascript: void(0);" class="d-block">
                                 <img src="assets/images/users/avatar-3.jpg" alt="" class="rounded-circle avatar-xs">
                                 </a>
                              </div>
                              <div class="avatar-group-item">
                                 <a href="javascript: void(0);" class="d-block">
                                 <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xs">
                                 </a>
                              </div>
                              <div class="avatar-group-item">
                                 <a href="javascript: void(0);" class="d-block">
                                    <div class="avatar-xs">
                                       <span class="avatar-title rounded-circle bg-light text-body">
                                       +
                                       </span>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label">Project Duration</label>
                        <div class="col-lg-9">
                           <div class="input-group" id="datepicker">
                              <label for="dateinput" class="input-group-text rounded-3 p-1 px-2 font-size-16 text-muted"><i class="bx bx-calendar-event"></i></label>
                              <input type="text" class="form-control offcanvas-input ms-0" id="dateinput"
                                 data-date-format="dd M" data-date-container='#datepicker' data-provide="datepicker"
                                 data-date-autoclose="true">
                           </div>
                           <!-- input-group -->
                        </div>
                     </div>
                     <!-- end row -->
                     <div class="mb-3 row">
                        <label for="hourlyeate-input" class="col-lg-3 col-form-label">Priority</label>
                        <div class="col-lg-9">
                           <select class="form-select offcanvas-input w-auto shadow-none">
                              <option selected>Select Priority</option>
                              <option value="High">High</option>
                              <option value="Medium">Medium</option>
                              <option value="Low">Low</option>
                           </select>
                        </div>
                     </div>
                     <!-- end row -->
                     <div class="mb-3 row">
                        <label for="hourlyeate-input" class="col-lg-3 col-form-label">Repeat every</label>
                        <div class="col-lg-9">
                           <select class="form-select offcanvas-input w-auto shadow-none">
                              <option value="week" selected>1 Week</option>
                              <option value="day">1 Day</option>
                              <option value="none">None</option>
                           </select>
                        </div>
                     </div>
                     <!-- end row -->
                     <div class="mb-3 row">
                        <label for="related-input" class="col-lg-3 col-form-label">Related to</label>
                        <div class="col-lg-9">
                           <input type="text" class="form-control offcanvas-input" id="related-input" placeholder="Project Name">
                        </div>
                     </div>
                     <!-- end row -->
                     <div class="mb-3 row">
                        <label for="tag-input" class="col-lg-3 col-form-label">Tags</label>
                        <div class="col-lg-9">
                           <div class="offcanvas-input">
                              <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ...">
                                 <option selected>HTML</option>
                                 <option selected>CSS</option>
                                 <option selected>Javascript</option>
                                 <option>Php</option>
                                 <option>Python</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <!-- end row -->
                     <div class="mb-3 row">
                        <label for="description-input" class="col-lg-3 col-form-label">Description</label>
                        <div class="col-lg-9">
                           <textarea class="form-control offcanvas-input" id="description-input" rows="5">
                           Task long description. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                           </textarea>
                        </div>
                     </div>
                     <!-- end row -->
                     <div class="mb-3 row">
                        <label for="visibilty-select" class="col-lg-3 col-form-label">Visibility</label>
                        <div class="col-lg-9">
                           <select class="form-select offcanvas-input w-auto shadow-none" id="visibilty-select">
                              <option>Private</option>
                              <option selected>Public, Customer</option>
                           </select>
                        </div>
                     </div>
                     <!-- end row -->
                     <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label">Attachments</label>
                        <div class="col-lg-9">
                           <div class="offcanvas-input">
                              <form action="#" class="dropzone">
                                 <div class="fallback">
                                    <input name="file" type="file" multiple="multiple">
                                 </div>
                                 <div class="dz-message needsclick my-2">
                                    <div class="avatar-sm mx-auto mb-3">
                                       <div class="avatar-title rounded-circle bg-light text-body">
                                          <i class="bx bx-paperclip"></i>
                                       </div>
                                    </div>
                                    <h5>Drop files here or click to upload.</h5>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end row -->
               </div>
            </div>
         </div>
</div>
         <!-- end new task -->