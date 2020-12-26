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
            <button>&#10010; Invoice</button>
            <button>&#10010; Sale Receipt</button>
            <button>&#10010; Refund</button>
            <button>&#10010; Quote</button>
            <button>&#10010; Job Bag</button>
            
        </div>
        <div class="searches">
            <form action="" class="search-form">
                <label for="general">Search Job Bags</label><br>
                <input type="text">
               
            </form>
            <form action="" class="search-form">
                <label for="general">Filter Month & Year</label><br>
                <select name="main-category" id="">
                    <option value="">--Please choose an option--</option>
                    <option value="">Engagemenr Rings</option>
                    <option value="">Ladies Wedding Bands</option>
                    <option value="">Mens Wedding Bands</option>
                    <option value="">Pendants</option>
                    <option value="">Necklaces</option>
                    <option value="">Bracelets</option>
                    <option value="">Cufflinks</option>
                </select>
               
            </form>
            <form action="" class="search-form">
                <label for="general">Filter by Assignment</label><br>
                <select name="sub-category" id="">
                    <optgroup label="Engagement Rings">
                        <option value="">Solitaire</option>
                        <option value="">Halo</option>
                        <option value="">Accented</option>
                    </optgroup>
                    <optgroup label="Ladies Wedding Bands">
                        <option value="">Classic</option>
                        <option value="">Tungsten</option>
                        <option value="">Diamond</option>
                    </optgroup>
                    <optgroup label="Pendants">
                        <option value="">Diamond</option>
                        <option value="">Gemstone</option>
                        <option value="">Halo</option>
                    </optgroup>
                </select>
             
            </form>
            
        </div>
        <div class="main-table-container">
            <div class="job-overview">
                <div class="th">
                    <input type="checkbox" id="tic" name="tic">
                </div>
                <p class="th">Job Bag #</p>
                <p class="th">Due Date</p>
                <p class="th">Client</p>
                <p class="th">Description</p>
                <p class="th">&#x1F4BC;	Location</p>
                <p class="th">Assign to</p>
                <p class="th">Status</p>
                <p class="th">Created by</p>
                <p class="th">Actions</p>
                <!-- DATA ROW STRAT -->
                <div class="td">
                    <input type="checkbox" id="tic" name="tic">
                </div>
                
                <div class="td">234056</div>
                <div class="td">4/12/2020</div>
                <div class="td">Peter Doe</div>
                <div class="td">14kYG,1.01ct RD F/V1, 11RD, 1.35cttw.</div>
                <div class="td">CAD Dept.</div>
                <div class="td">Stefano</div>
                <div class="td cntr">&#x231A; <br> Due in 10 Days</div>
                <div class="td">Eva</div>
                <div class="td act"> 
                    <div><a href="#"><span class="mr-s">&#x1F6CE;<span>New</a></div>
                    <div><a href="#"><span class="mr-s">&#x1f441;<span> View</a></div>
                    <div><a href="#"><span class="mr-s">&#x1F58A;<span> Edit</a></div>
                </div>
                 <!-- DATA ROW END -->
                <!-- DATA ROW STRAT -->
                <div class="td">
                    <input type="checkbox" id="tic" name="tic">
                </div>
                
                <div class="td">234056</div>
                <div class="td">4/12/2020</div>
                <div class="td">Franki Doe</div>
                <div class="td">polish gnts band, solder ladies band and eng ring then polish.</div>
                <div class="td">CAD Dept.</div>
                <div class="td">Stefano</div>
                <div class="td">&#x26D4; <br> Overdue by 2 Days</div>
                <div class="td">Eva</div>
                <div class="td act"> 
                    <div><a href="#"><span class="mr-s">&#x1F6CE;<span>New</a></div>
                    <div><a href="#"><span class="mr-s">&#x1f441;<span> View</a></div>
                    <div><a href="#"><span class="mr-s">&#x1F58A;<span> Edit</a></div>
                </div>
                 <!-- DATA ROW END -->
                <!-- DATA ROW STRAT -->
                <div class="td">
                    <input type="checkbox" id="tic" name="tic">
                </div>
                
                <div class="td">234056</div>
                <div class="td">4/12/2020</div>
                <div class="td">Linda Doe</div>
                <div class="td">size mens band to 13.5; repair ladies band & replace missing dia
                    laser 14Y ball earring; replace batt in swiss army watch</div>
                <div class="td">CAD Dept.</div>
                <div class="td">Stefano</div>
                <div class="td">&#x1F4A1; <br> Due today</div>
                <div class="td">Eva</div>
                <div class="td act"> 
                    <div><a href="#"><span class="mr-s">&#x1F6CE;<span>New</a></div>
                    <div><a href="#"><span class="mr-s">&#x1f441;<span> View</a></div>
                    <div><a href="#"><span class="mr-s">&#x1F58A;<span> Edit</a></div>
                </div>
                 <!-- DATA ROW END -->
                <!-- DATA ROW STRAT -->
                <div class="td">
                    <input type="checkbox" id="tic" name="tic">
                </div>
                
                <div class="td">234056</div>
                <div class="td">4/12/2020</div>
                <div class="td">James Doe</div>
                <div class="td">Replace a missing diamond in a Ladies WB; fully refurbish (clean & polish) an ER size to 8, re-set/align princess center, tighten all loose stones.</div>
                <div class="td">CAD Dept.</div>
                <div class="td">Stefano</div>
                <div class="td">&#x2705; <br> Completed</div>
                <div class="td">Eva</div>
                <div class="td act"> 
                    <div><a href="#"><span class="mr-s">&#x1F6CE;<span>New</a></div>
                    <div><a href="#"><span class="mr-s">&#x1f441;<span> View</a></div>
                    <div><a href="#"><span class="mr-s">&#x1F58A;<span> Edit</a></div>
                </div>
                 <!-- DATA ROW END -->
               
            </div>
        </div>
       

    </div>
    
    <script src="../js/script.js"></script>
</body>
</html>