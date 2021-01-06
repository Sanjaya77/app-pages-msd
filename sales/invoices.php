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
           
        </div>
        <div class="main-table-container">
            <div class="invoice-overview">
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
                <div class="td"> <a href="#"><i class="fas fa-check-circle">&nbsp;</i>Deposited</a></div>
                <div class="td"> <i class="fas fa-pencil-alt"></i>&nbsp; Print</div>
                 <!-- DATA ROW END -->
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
                <div class="td"> <i class="fas fa-eye-slash">&nbsp;</i>Voided</div>
                <div class="td"> <i class="fas fa-pencil-alt"></i>&nbsp; Print</div>
                 <!-- DATA ROW END -->
                <!-- DATA ROW STRAT -->
                <div class="td">
                    <input type="checkbox" id="tic" name="tic">
                </div>
                <div class="td">4/11/2020</div>
                <div class="td">11829</div>
                <div class="td">Peter Davis</div>
                <div class="td">&#36;4560.00</div>
                <div class="td">&#36;1560.00</div>
                <div class="td">4/12/2020</div>
                <div class="td alert"> <a href="#"><i class="fas fa-exclamation-triangle">&nbsp;</i>Overdue on 6/20/2020</a><span class="small-print">Partially paid &#36;3000.00</span></div>
                <div class="td"> <i class="fas fa-pencil-alt"></i>&nbsp; Print</div>
                 <!-- DATA ROW END -->
            
            </div>
        
        </div>
      
    </div>
    <script src="../js/script.js"></script>
</body>
</html>