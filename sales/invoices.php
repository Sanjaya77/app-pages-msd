<?php include "../config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Invoices</title>
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
            <p>Total Unpaid : &#36;31000.45 <span class="small-print">&#40; Last 365 days &#41;</span></p>
            <p>Paid : &#36;31000.45 <span class="small-print">&#40; Last 30 days &#41;</span></p>
            <button>Create Invoice</button>
            <div>
                <button class="filter-tab tab-1">11 Overdue</button>
                <button class="filter-tab tab-2">23 Open</button>
                <button class="filter-tab tab-3">68 Paid in last 30 Days</button>
            </div>
           
        </div>
        <div class="main-table-container">
            <div class="invoice-overview-grid">
                <div class="th">
                    <input type="checkbox" id="tic" name="tic">
                </div>
                <p class="th">Date</p>
                <p class="th">No</p>
                <p class="th">Customer</p>
                <p class="th">Ammount</p>
                <p class="th">Balance</p>
                <p class="th">Due Date</p>
                <p class="th">Status</p>
                <p class="th">Action</p>
                <!-- DATA ROW STRAT -->
                <div class="td">
                    <input type="checkbox" id="tic" name="tic">
                </div>
                <div class="td">4/11/2020</div>
                <div class="td">11829</div>
                <div class="td">Jhon Doe</div>
                <div class="td">&#36;4560.00</div>
                <div class="td">&#36;1560.00</div>
                <div class="td">4/12/2020</div>
                <div class="td"> 
                    <a href="#">
                        <span class="emo">&#x2705;</span>
                        Paid
                    </a>
                    
                </div>
                <div class="td">  
                     <a><span class="emo-lg">&#x1F5A8;</span>Print</a>
                     <a href="#"><span class="emo-lg">&#x1F441;</span>View</a>
                </div>
                 <!-- DATA ROW END -->
                <!-- DATA ROW STRAT -->
                <div class="td">
                    <input type="checkbox" id="tic" name="tic">
                </div>
                <div class="td">4/11/2020</div>
                <div class="td">11829</div>
                <div class="td">Jhon Doe</div>
                <div class="td">&#36;5000.00</div>
                <div class="td">&#36;3000.00</div>
                <div class="td">5/12/2020</div>
                <div class="td"> 
                     <a href="#"><span class="emo-lg">&#x26A0;</span>Overdue </a>
                     <span class="due"> Overdue on 5/12/2020</span>
                     <span class="small-print">Partially paid &#36;2000.00</span>
                  </div>
                <div class="td">  
                     <a><span class="emo-lg">&#x1F5A8;</span>Print</a>
                     <a href="#"><span class="emo-lg">&#x1F441;</span>View</a>
                </div>
                 <!-- DATA ROW END -->
                <!-- DATA ROW STRAT -->
                <div class="td">
                    <input type="checkbox" id="tic" name="tic">
                </div>
                <div class="td">4/11/2020</div>
                <div class="td">11829</div>
                <div class="td">Peter Davis</div>
                <div class="td">&#36;4560.00</div>
                <div class="td">&#36;3560.00</div>
                <div class="td">4/12/2020</div>
                <div class="td alert"> 
                     <a href="#"><span class="emo-lg">&#x1F4D6;</span>Open</a>
                     <span class="due">Due on 4/12/2020</span>
                     <span class="small-print">Partially paid &#36;1000.00</span></div>
                <div class="td">  
                     <a><span class="emo-lg">&#x1F5A8;</span>Print</a>
                     <a href="#"><span class="emo-lg">&#x1F441;</span>View</a>
                </div>
                 <!-- DATA ROW END -->
            
            </div>
        
        </div>
      
    </div>
    <script src="../js/script.js"></script>
</body>
</html>