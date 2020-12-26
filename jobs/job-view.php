<?php include "../config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market Street Diamonds Management Application</title>
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
            <div class="job-summary">
                <div>
                    <h1>Job Bag Number: 051220-01</h1>
                    <p>Job Initial Quote: $124.00 (without tax)</p>
                    <p>Due Date: <span id="due-date">15/12/2020</span> <span class="edit"><a href="#" target="_blank" rel="noopener noreferrer">&nbsp;<i class="fas fa-pencil-alt"></i> Edit</a></span></p>
                    <p id="due-alert"></p>
                </div>
                <div class="job-summary-cleint">
                    <h2>Client Name: Jacob Doe</h2>
                    <p>Contact Preferrence</p>
                    <p>Call : (123) 456 7890</p>
                    <p>Text : (202) 456 7890</p>
                    <p>Email : jacob_doe@gamil.com</p>
                </div>
                <div> 
                    <p>Crated by {User} on {Date}</p>
                    <p>Last updated on {Date} by {User}</p>
                </div> 
            </div>
            <div class="action">
                <div class="action-left">
                    <button>&#10010; Invoice</button>
                    <button>&#10010; Sale Receipt</button>
                </div>
                <div class="action-right">
                    <button>&#x1f942; Job Completed</button>
                    <button>&#x1f4a5; Discard Job</button>
                    <button>&#x1f5a8; Print Job Card</button>
                </div>
               
            </div>
        </div>
        <div class="job-v-container">
           <div class="job-v-form">
               <form action="">
                <fieldset>
                    <legend class="leg-main">Job Details</legend>
                        <div class="job-v-form-data">
                            <p class="p-heading">Job Category:</p>
                            <p class="p-desc">Custom</p>
                        </div>
                      
                        <div class="job-v-form-data">
                            <p class="p-heading">Job Instructions:</p>
                            <div class="desc">
                                <span class="form-edit"><i class="fas fa-pencil-alt"></i> Edit</a></span>
                                <p class="p-desc">CAD 3 band E.R. w/PC center in 18 WG sz 10 & CAD for mens band </p>
                            </div>
                        </div>
                        <div class="job-v-form-data">
                            <p class="p-heading">Due Date:</p>
                            <p class="p-desc">05/12/2020 <span class="form-edit"><i class="fas fa-pencil-alt"></i> Edit</a></span></p>
                                
                        </div>
                        <div class="job-v-form-data">
                            <p class="p-heading">Job Bag Location:</p>
                            <p class="p-desc">At the Watch Department <span class="form-edit"><i class="fas fa-pencil-alt"></i> Edit</a></span></p>                 
                        </div>
                        <hr>
                        <div class="job-v-form-data">
                            <p class="p-heading">Assigned to:</p>
                            <div class="desc">
                                <p class="p-desc">Stefano at CAD Department<span class="form-edit"><i class="fas fa-pencil-alt"></i> Edit</a></span> </p>
                                <p class="p-heading">Special Notes:</p>
                               
                                    <span class="form-edit"><i class="fas fa-pencil-alt"></i> Edit</a></span>
                                    <p class="p-desc">SKU 2204, Pt , Solitair Mount</p>
                                    <p class="p-heading">Due Completion Date:</p>
                                    <p class="p-desc">05/12/2020 <span class="form-edit"><i class="fas fa-pencil-alt"></i> Edit</a></span><p>
                                    <button class="btn"> &#x2705; Completed</button>             
                                    <button class="btn"> &#x1F4AC; Message Stefano</button>             
                            </div>    
                                         
                        </div>
                        <div class="job-v-form-data">
                            <p class="p-heading">Previous Assignments:</p>
                            <div class="desc">
                                <p class="p-desc">Jene at Watch Department</p>
                                <p class="p-heading">Special Notes:</p>
                                <p class="p-desc">SKU 2204, Pt , Solitair Mount</p>
                                <p class="p-heading">Due Completion Date:</p>
                                <p class="p-desc">05/12/2020 <p>
                                <p class="p-heading">Date Completed:</p>
                                <p class="p-desc">05/12/2020 <p>
                                            
                            </div>                
                        </div>
                        <hr>
                        <div class="job-v-form-data">
                            <p class="p-heading">Items Recieved from the Client:</p>
                            <div class="desc">
                                <div class="item-details mt-s">
                                    <h4>Cleint Item 01</h4>
                                    <p>Rolex Mariner Watch- Not keeping time</p>
                                    <div class="job-v-img">
                                        <img src="<?php echo $site_link?>img/attachment.jpg" alt="">
                                        <img src="<?php echo $site_link?>img/attachment.jpg" alt="">
                                        <img src="<?php echo $site_link?>img/attachment.jpg" alt="">
                                        <img src="<?php echo $site_link?>img/attachment.jpg" alt=""> 
                                        <span>&#10010; Add More</span>
                                    </div>
                                </div><!-- END OF CLIENT"S ITEM -->
                                <div class="item-details mt-s">
                                    <h4>Cleint Item 02</h4>
                                    <p>Cartier Ladies watch need overhauling</p>
                                    <div class="job-v-img">
                                        <img src="<?php echo $site_link?>img/attachment.jpg" alt="">
                                        <img src="<?php echo $site_link?>img/attachment.jpg" alt="">
                                        <img src="<?php echo $site_link?>img/attachment.jpg" alt="">
                                        <img src="<?php echo $site_link?>img/attachment.jpg" alt=""> 
                                        <span>&#10010; Add More</span>
                                    </div>
                                </div><!-- END OF CLIENT"S ITEM -->
                            </div>
                        </div>
                        <hr>
                        <div class="job-v-form-data">
                            <p class="p-heading">Items Ordered from Suppliers:</p>
                            <div class="desc">
                                <p class="p-heading">Supplier Name:</p>
                                <p class="p-desc">Stuller <span class="form-edit"><i class="fas fa-pencil-alt"></i> Edit</a></span> </p>  
                                <p class="p-heading">Item Details / Notes:</p>
                               
                                    <span class="form-edit"><i class="fas fa-pencil-alt"></i> Edit</a></span>
                                    <p class="p-desc">SKU 2204, Pt , Solitair Mount</p>
                                    <p class="p-heading">Due Recieve Date:</p>
                                    <p class="p-desc">05/12/2020 <span class="form-edit"><i class="fas fa-pencil-alt"></i> Edit</a></span><p>
                                    <button class="btn">&#x2705; Recieved</button>             
                            </div>                 
                            <div class="desc">
                                <p class="p-heading">Supplier Name:</p>
                                <p class="p-desc">Stuller <span class="form-edit"><i class="fas fa-pencil-alt"></i> Edit</a></span> </p>  
                                <p class="p-heading">Item Details / Notes:</p>
                               
                                    <span class="form-edit"><i class="fas fa-pencil-alt"></i> Edit</a></span>
                                    <p class="p-desc">SKU 2204, Pt , Solitair Mount</p>
                                    <p class="p-heading">Due Recie Date:</p>
                                    <p class="p-desc">05/12/2020 <span class="form-edit"><i class="fas fa-pencil-alt"></i> Edit</a></span><p>
                                    <button class="btn">&#x26D4; Not Recieved</button>             
                            </div>
                            <span>&#10010; Add More</span>                 
                        </div>
                        <hr>
                        <div class="job-v-form-data">
                        
                            <p class="p-heading">Items Added From Stock:</p>
                            <div class="desc">
                                <button class="form-edit btn"><span >&#x1F5D1; Remove</span></button> 
                                <p class="p-heading">SKU:</p>
                                <p class="p-desc">ER000100 > </p>
                                <p class="p-heading">Product Title:</p>
                                 <p class="p-desc">Soliraire Engagemnt Ring,Pt</p> 
                                 <div class="job-v-img">
                                        <img src="<?php echo $site_link?>img/attachment.jpg" alt="">
                                </div>     
                            </div>                 
                            <div class="desc">
                                <button class="form-edit btn"><span >&#x1F5D1; Remove</span></button> 
                                <p class="p-heading">SKU:</p>
                                <p class="p-desc">LWB0001220 </p>
                                <p class="p-heading">Product Title:</p>
                                    <p class="p-desc">Stud Earrings, Pt</p>   
                                    <div class="job-v-img">
                                        <img src="<?php echo $site_link?>img/attachment.jpg" alt="">
                                </div>      
                            </div>
                            <span>&#10010; Add More</span>                 
                        </div>
                    </fieldset>

                </form>
           </div>

           <div class="job-v-cmnt">
           <h2>Comments</h2>
           <button class="btn mt-s">&#x1f5d1; Clear Comments</button>
                <form action="" class='comnt-form'>
                    <fieldset class="add-comnt">
                    <label for="">Add your comment</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                    <button class="btn send-btn">Send</button>
                    </fieldset>
                </form>
                <div class="comnt">
                    Stefano , the client want a wax made.
                    <p class="small mt-s">by Eva | 10 Dec 2020</p>
                </div>
               
           </div>

        </div>

    </div> <!--Main Container End -->
  
    <script src="../js/script.js"></script>

</body>
</html>