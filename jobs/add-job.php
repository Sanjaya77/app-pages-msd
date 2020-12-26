<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Market Street Diamonds Management Application</title>
      <link rel="stylesheet" href="../css/app-forms.css">
      <link rel="stylesheet" href="../css/style.css">
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&amp;display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous"/>
   </head>
   <body class="app-form">
      <header class="app-form-hdr">
         <h2>&#10010; Add a Job Bag</h2>
         <a href="#" class="logout">&#x1f441; View Job</a>
         <a href="#" class="logout">Log out</a>
         <a href="#" class="form-btn-lg">Close</a>
      </header>
      <main class="app-form-container">
         <div class="balance-due">
            <h3 title="All Information Goes Here">Enter Job Bag Details</h3>
         </div>
         <form action="" class="app-form-form">
            <fieldset>
               <legend class="leg-main">Client Details</legend>
               <div class="app-form-group ">
                  <div class="cleint-card">
                        <button class="close-sm">&#x274C;</button>
                        <p><span class="client-card-span">&#x1F469;</span>Jenna Doe</p>
                        <p>123 Street NW, Apt 1304, Bethesda, MD 20138</p>
                        <p>1-234-456-3456</p>
                  </div>
                  <div>
                     <label for="">Get Client Info<sup>*</sup></label><br>
                     <select name="" id="" >
                        <option value="">--Search Client--</option>
                        <option value="">Names in Alphabatical Order</option>
                     </select>
                     <button class="btn-sm">Select</button>
                     
                     <div>
                        <label for="">Client Land Phone Number</label><br>
                        <input type="text" name="" id="" placeholder="Existing one should display but should be able to update here">
                        <label for="">Client Land Mobile Number</label><br>
                        <input type="text" name="" id="" placeholder="Existing one should display but should be able to update here">
                        <label for="">Client Email</label><br>
                        <input type="email" name="" id="" placeholder="Existing one should display but should be able to update here">
                     </div>
                  
                     <h3>Preferred Contact Method after job completion</h3>
                     <div>
                        <input type="checkbox" name="" id="add-cl-item" unchecked>
                        <label for="">Call</label>
                        <br>
                        <input type="checkbox" name="" id="add-cl-item" unchecked>
                        <label for="">Text</label>
                        <br>
                        <input type="checkbox" name="" id="add-cl-item" unchecked>
                        <label for="">Email</label>
                        <br>
                     </div>
                  </div>
               </div>
            </fieldset>
            <fieldset>
               <legend class="leg-main">Job Basic Information</legend>
               <div class="app-form-group">
                  <div>
                     <label for="">Job Category<sup>*</sup></label><br>
                     <select name="" id="">
                        <option value="">Custom</option>
                        <option value="">Repair</option>
                        <option value="">Appraisal</option>
                        <option value="">Watch</option>
                        <option value=""> &#10010; Add</option>
                     </select>
                  </div>
                  <div>
                     <label for="">Job Bag Number</label><br>
                     <input type="text" name="" id="">
                  </div>
                  <div>
                     <label for="">Due Date</label><br>
                     <input class="date" type="date" name="invoice-due-date" required pattern="\d{4}-\d{2}-\d{2}">
                     <span class="validity"></span>
                  </div>
                  <div>
                     <label for="">Job Description</label><br>
                     <textarea name="" id="" cols="auto" rows="10" placeholder="Ex:size mens band to 13.5; repair ladies band & replace missing dia"></textarea>
                  </div>
                  <div>
                     <label for="">Initial Quote (Without Taxes)</label><br>
                     <input type="text" name="" id="">
                  </div>
                  <div>
                     <input type="checkbox" name="" id="add-cl-item" unchecked>
                     <label for="">Add Items Received from the Client</label>
                  </div>
                  <div>
                     <input type="checkbox" name="" id="add-sup-product">
                     <label for="">Item Need to be orderded from Suppliers</label>
                  </div>
                  <div>
                     <input type="checkbox" name="" id="ad-ex-product">
                     <label for="">Add and Exisiting Product to the Job</label>
                  </div>
               </div>
            </fieldset>
            <!-- === ADD ITEMS === -->
            <fieldset class="special" id='cl-item-info'>
               <legend class="leg-main">Add Items  Recieved from Clients</legend>
               <button class="close-sm" id="close-item"><i class="fas fa-times-circle"></i></button>
               <div class="app-form-group">
                  <p class="p-label">Add details of the all the items received from the client for this job, including the pictures.</p>
                  <div class="div-wrap-sm">
                    <!-- <div class="div-wrap"> -->
                        <div>
                            <label for="">Items Description</label><br>
                            <textarea name="" id="" cols="auto" rows="10" placeholder="Ex:size mens band to 13.5; repair ladies band & replace missing dia"></textarea>
                        </div>
                        <div class="attachments">
                            <h3>Images</h3>
                            <label for="file"><strong>Choose a file</strong><span class="attachment_dragndrop"> or drag it here</span>.</label>
                            <div class="drag-drop">
                              <input class="attachement_file" type="file" name="files[]" id="file" data-multiple-caption="{count} files selected" multiple />
                            </div>
                            <div class="upload-btns">
                              <button class="form-btn-sm" type="submit">Upload</button>
                              <button class="form-btn-sm" type="submit"><i class="fas fa-camera"></i></button>  
                            </div>
                            <div class="attachment_uploading">Uploading…</div>
                            <div class="attachment_success">Done!</div>
                            <div class="attachment_error">Error! <span></span>.</div>
                        </div>
                        <button class="btn-sm ml">&#10010; Add Item</button> 
                  </div><!-- END DIV-WRAP -->
               </div>
            </fieldset>
              <!-- === END ADD ITEMS === -->
            <!-- SUPPLIER PROGRSS -->
            <fieldset class="special" id='sup-item-info'>
               <legend class="leg-main">Items From Suppliers</legend>
               <button class="close-sm" id="close-sup"><i class="fas fa-times-circle"></i></button>
               <div class="app-form-group">
                  <p class="p-label">Please the details of the items to be orderd from the suppliers for this job.</p>
                  <div class="div-wrap-sm">
                     <div>
                        <label for="">Supplier<sup>*</sup></label><br>
                        <select name="" id="">
                           <option value="">Linda</option>
                           <option value="">Eli</option>
                           <option value="">Josh</option>
                           <option value="">Miwa</option>
                           <option value=""> &#10010; Add</option>
                        </select>
                     </div>
                     <div>
                        <label for="">Item Details and Notes</label><br>
                        <textarea name="" id="" cols="auto" rows="10"></textarea>
                     </div>
                     <div>
                        <label for="">Due Recieve Date</label><br>
                        <input class="date" type="date" name="invoice-due-date" required pattern="\d{4}-\d{2}-\d{2}">
                        <span class="validity"></span>
                     </div>
                     <button class="btn-sm ml">&#10010; Add Item</button>
                  </div>
               </div>
            </fieldset>
             <!-- === ADD EXISITNG PRODUCT === -->
             <fieldset class="special" id='ex-item-info'>
               <legend class="leg-main">Add an Exisiting Product to the Job</legend>
               <button class="close-sm" id="close-ex"><i class="fas fa-times-circle"></i></button>
               <div class="app-form-group">
                  <p class="p-label">Add details of the all the items received from the client for this job, including the pictures.</p>
                  <div class="div-wrap-sm">
                      <div>
                        <label for="">Search by SKU</label><br>
                        <input type="text" name="" id="ex-product-id">
                     </div>
                     <div class="product-card">
                        <button class="close-sm"><i class="fas fa-times-circle"></i></button>
                        <p>Solitaire Engagement Ring</p>
                        <p>SKU:ER0001001</p>
                        <p>14k</p>
                     </div>
                  </div><!-- END DIV-WRAP-->
               </div>
            </fieldset>
                        <!-- === JOB STATUS === -->
            <fieldset>
               <legend class="leg-main">Job Status</legend>
               <p class="p-label">Please update where the job bag is currently located </p>
               <div class="app-form-group">
                  <div>
                     <label for="">Job Bag Location/ Status<sup>*</sup></label><br>
                     <select name="" id="" class="mb">
                        <option value="">At the shop floor – unassigned </option>
                        <option value="">At the CAD Department</option>
                        <option value="">At the Jewelry Department</option>
                        <option value="">At the Watch Department</option>
                        <option value="">Returned to Shop Floor - completed</option>
                        <option value=""> &#10010; Add</option>
                     </select>
                  </div>
                  <div>
                     <label for="">Job Completion Route<sup>*</sup></label><br>
                     <select name="" id="" class="mb">
                        <option value="">In-house &#8594; Client </option>
                        <option value="">Supplier &#8594; Client</option>
                        <option value="">Supplier &#8594; In-House  &#8594; Client</option>
                        
                        <option value=""> &#10010; Add</option>
                     </select>
                  </div>
               </div>
            </fieldset>
            <!-- VLINDER PROGRSS -->
            <fieldset class="f-width">
               <legend class="leg-main">In-house Production / Repair</legend>
               <div class="app-form-group">
                    <div>
                        <input type="checkbox" name="" id="existing-product">
                        <label for="">This Job Does Not Involve In-house Production</label>
                     </div>
                     
                     <div class="div-wrap-sm">
                        <p class="p-label">You may start assigning the job either to CAD or Jewelry Departments. You can change this later as the job progress. </p>
                        <div>
                           <input type="checkbox" name="" id="existing-product">
                           <label for="">Assign to CAD Department</label>
                        </div>
                        <div>
                           <label for="">Designer<sup>*</sup></label><br>
                           <select name="" id="">
                              <option value="">Setfano</option>
                              <option value="">John</option>
                              <option value=""> &#10010; Add</option>
                           </select>
                        </div>
                        <div>
                           <label for="">CAD/WAX Due Completion Date</label><br>
                           <input class="date" type="date" name="invoice-due-date" required pattern="\d{4}-\d{2}-\d{2}">
                           <span class="validity"></span>
                        </div>
                        <div>
                           <label for="">Special Notes to the Designer</label><br>
                           <textarea name="" id="" cols="auto" rows="10"></textarea>
                        </div>
                     </div>
                     <div class="div-wrap-sm">
                        <div>
                           <input type="checkbox" name="" id="existing-product">
                           <label for="">Assign to Jewelry Department</label>
                        </div>
                        <div>
                           <label for="">Jeweler<sup>*</sup></label><br>
                           <select name="" id="">
                              <option value="">Alvaro</option>
                              <option value=""> &#10010; Add</option>
                           </select>
                        </div>
                        <div>
                           <label for="">Due Completion Date</label><br>
                           <input class="date" type="date" name="invoice-due-date" required pattern="\d{4}-\d{2}-\d{2}">
                           <span class="validity"></span>
                        </div>
                        <div>
                           <label for="">Special Notes to the Jeweler</label><br>
                           <textarea name="" id="" cols="auto" rows="10"></textarea>
                        </div>
                     </div>
                     <div class="div-wrap-sm">
                        <div>
                           <input type="checkbox" name="" id="existing-product">
                           <label for="">Assign to Watch Department</label>
                        </div>
                        <div>
                           <label for="">Watch Maker<sup>*</sup></label><br>
                           <select name="" id="">
                              <option value="">Jene</option>
                              <option value=""> &#10010; Add</option>
                           </select>
                        </div>
                        <div>
                           <label for="">Due Completion Date</label><br>
                           <input class="date" type="date" name="invoice-due-date" required pattern="\d{4}-\d{2}-\d{2}">
                           <span class="validity"></span>
                        </div>
                        <div>
                           <label for="">Special Notes to the Watch Maker</label><br>
                           <textarea name="" id="" cols="auto" rows="10"></textarea>
                        </div>
                     </div>
               </div>
            </fieldset>


         </form>
         
      </main>
      <footer class="app-form-fter">
         <a href="#" class="form-btn-lg">Cancel</a>
         <a href="#" class="form-btn-lg">Save</a>
         <a href="#" class="form-btn-lg">Save &amp; Close</a>
      </footer>
      <script src="../js/form-script.js"></script>
   </body>
</html>
