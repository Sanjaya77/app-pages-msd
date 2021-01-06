<?php include "../config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Clients</title>
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
            <button>Add Invoice</button>
            <button>Add Job</button>
            <button>Add Client</button>
           
        </div>
        <div class="main-table-container">
            <div class="client-overview">
                <div class="th">
                    <input type="checkbox" id="tic" name="tic">
                </div>
                <p class="th">Client</p>
                <p class="th">Email</p>
                <p class="th">Phone</p>
                <p class="th">Address</p>
                <p class="th">Pending Jobs</p>
                <p class="th">Pending Invoices</p>
                <p class="th">Overdue Balance</p>
                <p class="th">Added Date</p>
                <p class="th">Last Update</p>
                <p class="th">Action</p>
                <!-- DATA ROW STRAT -->
                <div class="td">
                    <input type="checkbox" id="tic" name="tic">
                </div>
                <div class="td">Jhon Doe</div>
                <div class="td">jhon_doe@example.com <a href="" class="send-email"><i class="far fa-envelope"></i></a></div>
                <div class="td">+1 (202) 123 4567</div>
                <div class="td">11 Street, #line-2, City, State, Country</div>
                <div class="td alert"><i class="fas fa-exclamation-circle">&nbsp;</i> 1 pending job</div>
                <div class="td alert"><i class="fas fa-exclamation-circle">&nbsp;</i> 1 pending invoices</div>
                <div class="td">&#36;1560.00</div>
                <div class="td">4/12/2020</div>
                <div class="td">4/11/2020</div>
                <div class="td"> <i class="fas fa-pencil-alt"></i>&nbsp; Edit</div>
                 <!-- DATA ROW END -->
                <!-- DATA ROW STRAT -->
                <div class="td">
                    <input type="checkbox" id="tic" name="tic">
                </div>
                <div class="td">Jhon Doe</div>
                <div class="td">jhon_doe@example.com <a href="" class="send-email"><i class="far fa-envelope"></i></a></div>
                <div class="td">+1 (202) 123 4567</div>
                <div class="td">11 Street, #line-2, City, State, Country</div>
                <div class="td alert"><i class="fas fa-exclamation-circle">&nbsp;</i> 1 pending job</div>
                <div class="td alert"><i class="fas fa-exclamation-circle">&nbsp;</i> 1 pending invoices</div>
                <div class="td">&#36;1560.00</div>
                <div class="td">4/12/2020</div>
                <div class="td">4/11/2020</div>
                <div class="td"> <i class="fas fa-pencil-alt"></i>&nbsp; Edit</div>
                 <!-- DATA ROW END -->
                <!-- DATA ROW STRAT -->
                <div class="td">
                    <input type="checkbox" id="tic" name="tic">
                </div>
                <div class="td">Jhon Doe</div>
                <div class="td">jhon_doe@example.com <a href="" class="send-email"><i class="far fa-envelope"></i></a></div>
                <div class="td">+1 (202) 123 4567</div>
                <div class="td">11 Street, #line-2, City, State, Country</div>
                <div class="td alert"><i class="fas fa-exclamation-circle">&nbsp;</i> 1 pending job</div>
                <div class="td alert"><i class="fas fa-exclamation-circle">&nbsp;</i> 1 pending invoices</div>
                <div class="td">&#36;1560.00</div>
                <div class="td">4/12/2020</div>
                <div class="td">4/11/2020</div>
                <div class="td"> <i class="fas fa-pencil-alt"></i>&nbsp; Edit</div>
                 <!-- DATA ROW END -->
                
            
            </div>
        
        </div>
      
    </div>
    <script src="../js/script.js"></script>
</body>
</html>