<?php include "../config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Details</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&amp;display=swap" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
      integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ="
      crossorigin="anonymous"
    />
</head>
<body>
<?php include '../nav.php' ?>
    <div class="main-container">
        <div class="main-overview">
            <div class="client-summary">
                <h1>John Doe <span class="edit"><a href="#" target="_blank" rel="noopener noreferrer">&nbsp;<i class="fas fa-pencil-alt"></i> Edit</a></span></h1>
                <div> 
                    <p>Paid : &#36;5100.00 <br><span class="small-print">&#40; Last 30 days &#41;</span></p>
                    <p>Total Unpaid : &#36;500.00 <br> <span class="small-print">&#40; Last 365 days &#41;</span></p>
                </div> 
            </div>
            <div class="select">
               <button class="select-btn">New Transaction &#9661;</button>
               <div class="select-content">
                  <a href=""><span class="select-conten-span">Invoice</span></a>
                  <a href=""><span class="select-conten-span">Payment</span></a>
                  <a href=""><span class="select-conten-span">Estimate</span></a>
                  <a href=""><span class="select-conten-span">Statement</span></a>
               </div>
            </div>

            <!-- 
               New Transaction Opens up dropdown
               Add Invoice
               Payment
               Quote
               Refund

             -->
            
            <button>Add Job</button>
        </div>
        <div class="main-table-container">
            <div class="tab">
               <ul class="tablinks">
                  <li class="tabactive">Transaction List</li>
                  <li>Client's Details</li>
                  <li>Client's Jobs</li>
               </ul>
            </div>


            <div id="client-transactions" class="client-view-transactions tab-content">   <!-- Transactions Start -->
               <div class="client-transactions-grid">
                  <div class="th">
                     <input type="checkbox" id="tic" name="tic">
                  </div>
                  <p class="th">Date</p>
                  <p class="th">Type</p>
                  <p class="th">No</p>
                  <p class="th">Due Date</p>
                  <p class="th">Balance</p>
                  <p class="th">Total</p>
                  <p class="th">Status</p>
                  <p class="th">Action</p>
                  <!-- DATA ROW STRAT -->
                  <div class="td">
                     <input type="checkbox" id="tic" name="tic">
                  </div>
                  <div class="td">4/11/2020</div>
                  <div class="td">Invoice</div>
                  <div class="td">11829</div>
                  <div class="td">4/11/2020</div>
                  <div class="td">&#36;0.00</div>
                  <div class="td">&#36;1300.00</div>
                  <div class="td"> <a href="#"><span class="emo">&#x2705;</span>Paid</a></div>
                  <div class="td"><a><span class="emo-lg">&#x1F5A8;</span>Print</a></div>
                  <!-- DATA ROW END -->
                  <!-- DATA ROW STRAT -->
                  <div class="td">
                     <input type="checkbox" id="tic" name="tic">
                  </div>
                  <div class="td">6/11/2020</div>
                  <div class="td">Payment</div>
                  <div class="td">11859</div>
                  <div class="td">7/11/2020</div>
                  <div class="td">&#36;0.00</div>
                  <div class="td">&#36;1300.00</div>
                  <div class="td">
                     <a><span class="emo-lg">&#x2702;</span>Refunded</a> 
                  </div>
                  <div class="td"> 
                     <a><span class="emo-lg">&#x1F5A8;</span>Print</a>
                  </div>
                  <!-- DATA ROW END -->
                  <!-- DATA ROW STRAT -->
                  <div class="td">
                     <input type="checkbox" id="tic" name="tic">
                  </div>
                  <div class="td">7/15/2020</div>
                  <div class="td">Invoice</div>
                  <div class="td">11829</div>
                  <div class="td">4/11/2020</div>
                  <div class="td">&#36;500.00</div>
                  <div class="td">&#36;2500.00</div>
                  <div class="td"> 
                     <a href="#"><span class="emo-lg">&#x1F4D6;</span> Open </a>
                     <span class="due"> Overdue on 7/31/2020</span>
                     <span class="small-print">Partially paid &#36;2000.00</span>
                  </div>
                  <div class="td"> 
                     <a><span class="emo-lg">&#x1F5A8;</span>Print</a>
                     <a><span class="emo-lg"> &#x1F4DD;</span>Edit</a>
                  </div>
                  <!-- DATA ROW END -->
                  <!-- DATA ROW STRAT -->
                  <div class="td">
                     <input type="checkbox" id="tic" name="tic">
                  </div>
                  <div class="td">7/15/2020</div>
                  <div class="td">Invoice</div>
                  <div class="td">11829</div>
                  <div class="td">4/11/2020</div>
                  <div class="td">&#36;500.00</div>
                  <div class="td">&#36;2500.00</div>
                  <div class="td alert"> 
                     <a href="#"><span class="emo-lg">&#x1F4D6;</span>Open</a>
                     <span class="due">Due on 7/31/2020</span>
                     <span class="small-print">Partially paid &#36;2000.00</span></div>
                  <div class="td">
                     <a><span class="emo-lg">&#x1F5A8;</span>Print</a>
                     <a><span class="emo-lg"> &#x1F4DD;</span>Edit</a>
                  </div>
                  <!-- DATA ROW END -->
                  <div class="td">
                     <input type="checkbox" id="tic" name="tic">
                  </div>
                  <div class="td">7/15/2020</div>
                  <div class="td">Payment</div>
                  <div class="td">11829</div>
                  <div class="td">4/11/2020</div>
                  <div class="td">&#36;0.00</div>
                  <div class="td">-&#36;500.00</div>
                  <div class="td"> <a href="#"><span class="emo">&#x1F4B0;</span>Closed</a></div>
                  <div class="td"> 
                     <a><span class="emo-lg">&#x1F5A8;</span>Print</a>
                     <a class="sm-btn"><span class="emo-lg">&#x2702;</span>Refund</a>
                  </div>
                  <!-- DATA ROW END -->
               
               </div> 
            </div>  <!-- Transactions End -->
            <div id="client-info" class="client-view tab-content">
                <div class="client-view-data field-s">
                    <h2>Client Contact Details</h2>
                     <div class="client-view-data-box">
                        <p class="client-view-p" >Client:</p>
                        <p class="client-view-d" >Mr. Jhon Doe jr.</p>
                     </div>
                     <div class="client-view-data-box">
                        <p class="client-view-p" >Email:</p>
                        <p class="client-view-d" >john_doe@example.com</p>
                     </div>
                     <div class="client-view-data-box">
                        <p class="client-view-p" >Phone:</p>
                        <p class="client-view-d" >+1 (202) 123 4567</p>
                     </div>
                     <div class="client-view-data-box">
                        <p class="client-view-p" >Mobile:</p>
                        <p class="client-view-d" >+1 (202) 123 4567</p>
                     </div>
                     <div class="client-view-data-box">
                        <p class="client-view-p" >Fax:</p>
                        <p class="client-view-d" >+1 (202) 123 4567</p>
                     </div>
                     
                </div>

                <div class="client-view-data field-s">
                    <h2>Payment & Billing</h2>
                    <div class="client-view-data-box">
                        <p class="client-view-p" >Billing Address:</p>
                        <p class="client-view-d" >11 Street, Line 2, City, State, Country</p>
                     </div>
                     <div class="client-view-data-box">
                        <p class="client-view-p" >Shipping Address:</p>
                        <p class="client-view-d" >11 Street, Line 2, City, State, Country</p>
                     </div>
                     <div class="client-view-data-box">
                        <p class="client-view-p" >Tax Excempted</p>
                        <p class="client-view-d" >Yes / No</p>
                     </div>
                     <div class="client-view-data-box">
                         <!-- Only Active when the above is set to Yes -->
                        <p class="client-view-p" >Tax Exception Details</p>
                        <p class="client-view-d" >Lorem Ipsum</p>
                     </div>
                     <div class="client-view-data-box">
                        <p class="client-view-p" >Default tax code</p>
                        <p class="client-view-d" >WDC 6%</p>
                     </div>
                </div>
                <div class="client-view-data field-s">
                    <h2>Client's Addintional Info</h2>
                     <div class="client-view-data-box">
                        <p class="client-view-p" >Ring Size:</p>
                        <p class="client-view-d" >5.75 (text field)</p>
                     </div>
                     <div class="client-view-data-box">
                        <p class="client-view-p" >Birthday:</p>
                        <p class="client-view-d" >02 Feb 1981</p>
                     </div>
                     <div class="client-view-data-box">
                        <p class="client-view-p" >Anniversary Day:</p>
                        <p class="client-view-d" >05 May 2001</p>
                     </div>
                     <div class="client-view-data-box">
                        <p class="client-view-p" >Occupation:</p>
                        <p class="client-view-d" > Executive</p>
                     </div>
                     <div class="client-view-data-box">
                        <p class="client-view-p" >Company:</p>
                        <p class="client-view-d" >State Department</p>
                     </div>
                     <div class="client-view-data-box">
                        <p class="client-view-p" >is Parent? :</p>
                        <p class="client-view-d" >No | He is a Dad | She is a Mom</p>
                     </div>
                </div>
                <div class="client-view-data field-s">
                    <h2>Spouse's Addintional Info</h2>
                     <div class="client-view-data-box">
                        <p class="client-view-p" >Ring Size:</p>
                        <p class="client-view-d" >5.75 (text field)</p>
                     </div>
                     <div class="client-view-data-box">
                        <p class="client-view-p" >Birthday:</p>
                        <p class="client-view-d" >02 Feb 1986</p>
                     </div>
                     <div class="client-view-data-box">
                        <p class="client-view-p" >Email:</p>
                        <p class="client-view-d" >jane_doe@example.com</p>
                     </div>
                     <div class="client-view-data-box">
                        <p class="client-view-p" >Occupation:</p>
                        <p class="client-view-d" > Executive</p>
                     </div>
                     <div class="client-view-data-box">
                        <p class="client-view-p" >Company:</p>
                        <p class="client-view-d" >State Department</p>
                     </div>
                     <div class="client-view-data-box">
                        <p class="client-view-p" >is Parent? :</p>
                        <p class="client-view-d" >No | He is a Dad | She is a Mom</p>
                     </div>
                </div>
                <div class="client-view-data field-s">
                    <h2>Notes &amp; Attachments</h2>
                     <div class="client-view-data-box">
                        <p class="client-view-p" >Notes:</p>
                        <div class="client-view-d" >
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, fugiat.</p>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, fugiat.</p>
                        </div>
                     </div>
                     <div class="client-view-data-box">
                        <p class="client-view-p" >Attchments:</p>
                        <div class="attchments-view">
                           <div class="attachments-view-img">
                              <img src="<?php echo $site_link?>img/attachment.jpg" alt="">
                              <button class="btn-icon"><span>&#x1F5D1;</span></button>
                           </div>
                           <div class="attachments-view-img">
                              <img src="<?php echo $site_link?>img/attachment.jpg" alt="">
                              <button class="btn-icon"><span>&#x1F5D1;</span></button>
                           </div>
                           <div class="attachments-view-img">
                              <img src="<?php echo $site_link?>img/attachment.jpg" alt="">
                              <button class="btn-icon"><span>&#x1F5D1;</span></button>
                           </div>
                           <div class="attachments-view-img">
                              <img src="<?php echo $site_link?>img/attachment.jpg" alt="">
                              <button class="btn-icon"><span>&#x1F5D1;</span></button>
                           </div>
                        </div>
                        <form action="">
                           <div class="attachments">
                              <input class="attachement_file" type="file" name="files[]" id="file" data-multiple-caption="{count} files selected" multiple />
                              <label for="file"><strong>Choose a file</strong><span class="attachment_dragndrop"> or drag it here</span>.</label>
                              <button class="form-btn-lg" type="submit">Upload</button>
                              </div>
                              <div class="attachment_uploading">Uploading…</div>
                              <div class="attachment_success">Done!</div>
                              <div class="attachment_error">Error! <span></span>.</div>
                           </div>
                        </form>
                     </div>
                </div>

                
            </div> <!-- Client View -->
        </div>
    </div> <!--Main Container End -->
  
   
    <script src="../js/script.js"></script>
</body>
</html>