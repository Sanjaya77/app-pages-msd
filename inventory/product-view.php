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
            <div class="client-summary">
                <h1>Solirtair Enagament Ring, Platinum <span class="edit"><a href="#" target="_blank" rel="noopener noreferrer">&nbsp;<i class="fas fa-pencil-alt"></i> Edit</a></span></h1>
                <div> 
                    <p>SKU: ER010156</p>
                    <p>Price: &#36;5100.00</p>
                    <p>In Stock: 2 </p>
                </div> 
            </div>
          
            <button>&#10010; Invoice</button>
            <button>&#10010; Sale Receipt</button>
            <button>&#10010; Refund</button>
            <button>&#10010; Quote</button>
            <button>&#10010; Job Bag</button>
        </div>
        <div class="main-table-container">

            <div id="client-info" class="client-view">
                <div class="client-view-data field-s">
                    <h2>Inventory Details</h2>
                     <div class="client-view-data-box">
                        <p class="client-view-p" >Product Category:</p>
                        <p class="client-view-d" >Engagement Ring</p>
                     </div>
                     <div class="client-view-data-box">
                        <p class="client-view-p" >Product Sub-category</p>
                        <p class="client-view-d" >Solitaire</p>
                     </div>

                     <div class="client-view-data-box">
                        <p class="client-view-p" >Description:</p>
                        <p class="client-view-d" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, ducimus ad. Quos in blanditiis sit deleniti repellendus. Porro, ipsum maxime.</p>
                     </div>
                
                     <div class="client-view-data-box">
                        <p class="client-view-p" >Watch Make:</p>
                        <p class="client-view-d" >Rolex</p>
                     </div>
                     <div class="client-view-data-box">
                        <p class="client-view-p" >Watch Model:</p>
                        <p class="client-view-d" >Submariner</p>
                     </div>
                     <div class="client-view-data-box">
                        <p class="client-view-p" >Watch Serial No:</p>
                        <p class="client-view-d" >2350684039045</p>
                     </div>
                     <div class="client-view-data-box">
                        <p class="client-view-p" >Watch Reference:</p>
                        <p class="client-view-d" >2350684039045</p>
                     </div>
                     <div class="client-view-data-box">
                        <p class="client-view-p" >Price:</p>
                        <p class="client-view-d" >&#36;5100.00</p>
                     </div>
                    <div class="client-view-img">
                        <img src="<?php echo $site_link?>img/attachment.jpg" alt="">
                        <img src="<?php echo $site_link?>img/attachment.jpg" alt="">
                        <img src="<?php echo $site_link?>img/attachment.jpg" alt="">
                        <img src="<?php echo $site_link?>img/attachment.jpg" alt="">
                    </div>
                     <div class="client-view-data field-s sub">
                        <h3>Supplier Details</h3>
                        <div class="client-view-data-box">
                            <p class="client-view-p" >Supplier:</p>
                            <p class="client-view-d" >Stuller</p>
                        </div>
                        <div class="client-view-data-box">
                            <p class="client-view-p" >Supplier Style #:</p>
                            <p class="client-view-d" >PR 00902</p>
                        </div>
                    </div>
                     <div class="client-view-data field-s sub">
                        <h3>Price Tag Details</h3>
                        <div class="client-view-data-box">
                            <p class="client-view-p" >Price:</p>
                            <p class="client-view-d" > &#36;5100.00</p>
                        </div>
                        <div class="client-view-data-box">
                        <p class="client-view-p" >SKU:</p>
                        <p class="client-view-d" >ER010156</p>
                        </div>
                        <div class="client-view-data-box">
                            <p class="client-view-p" >Metal:</p>
                            <p class="client-view-d" >Platinum</p>
                        </div>
                        <div class="client-view-data-box">
                            <p class="client-view-p" >Details:</p>
                            <p class="client-view-d" >14RD / 0.34cttw | Pt</p>
                        </div>
                        <div class="client-view-data-box">
                            <button><i class="fas fa-print"></i> Print</button> 
                        </div>
                    </div>
                    <div class="client-view-data-box">
                        <p class="client-view-p" >Product First Added on:</p>
                        <p class="client-view-d" >20/03/2014</p>
                     </div>
                    <div class="client-view-data-box">
                        <p class="client-view-p" >Product Last Updated by {User} on:</p>
                        <p class="client-view-d" >20/03/2015</p>
                     </div>
                </div>

               
            </div> <!-- Client View -->

        
        </div>
    </div> <!--Main Container End -->
  
   
    <script src="../js/script.js"></script>
</body>
</html>