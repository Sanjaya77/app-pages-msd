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
                <label for="general">Search Inventory</label><br>
                <input type="text">
                <small class="flippy-hdr">1. User should be able to search from description words, Title words and  SKU </small>
            </form>
            <form action="" class="search-form">
                <label for="general">Filter by Category</label><br>
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
                <small class="flippy-hdr">2. This is the dropdown of Main Categories avialable</small>
            </form>
            <form action="" class="search-form">
                <label for="general">Filter by Sub-category</label><br>
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
                <small class="flippy-hdr">3. Sub-categories are tied to to the Main category, if the main category is selected only the sub-categories of that category shows up. However, selecting a main category is not required </small>
            </form>
            
        </div>
        <div class="main-table-container">
            <div class="product-overview">
                <div class="th">
                    <input type="checkbox" id="tic" name="tic">
                </div>
                <p class="th">Image</p>
                <p class="th">SKU</p>
                <p class="th">Title</p>
                <p class="th">Descriptions</p>
                <p class="th">Price</p>
                <p class="th">Stock</p>
                <p class="th">Last Update</p>
                <p class="th">Action</p>
                <!-- DATA ROW STRAT -->
                <div class="td">
                    <input type="checkbox" id="tic" name="tic">
                </div>
                <div class="td"> <img  class="thumbnail" src="<?php echo $site_link?>img/attachment.jpg" alt=""></div>
                <div class="td">ENR000100</div>
                <div class="td">Solitair Engagement Ring, Platinum </div>
                <div class="td">14kYG,1.01ct RD F/V1, 11RD, 1.35cttw.</div>
                <div class="td">&#36;1560.00</div>
                <div class="td">1</div>
                <div class="td">4/11/2020</div>
                <div class="td"> <i class="fas fa-pencil-alt"></i>&nbsp; Edit</div>
                 <!-- DATA ROW END -->
                <!-- DATA ROW STRAT -->
                <div class="td">
                    <input type="checkbox" id="tic" name="tic">
                </div>
                <div class="td"> <img class="thumbnail" src="<?php echo $site_link?>img/attachment.jpg" alt=""></div>
                <div class="td">ENR000100</div>
                <div class="td">Solitair Engagement Ring, Platinum </div>
                <div class="td">14kYG,1.01ct RD F/V1, 11RD, 1.35cttw.</div>
                <div class="td">&#36;1560.00</div>
                <div class="td">2</div>
                <div class="td">4/11/2020</div>
                <div class="td"> <i class="fas fa-pencil-alt"></i>&nbsp; Edit</div>
                 <!-- DATA ROW END -->
                <!-- DATA ROW STRAT -->
                <div class="td">
                    <input type="checkbox" id="tic" name="tic">
                </div>
                <div class="td"> <img class="thumbnail" src="<?php echo $site_link?>img/attachment.jpg" alt=""></div>
                <div class="td">ENR000100</div>
                <div class="td">Solitair Engagement Ring, Platinum </div>
                <div class="td">14kYG,1.01ct RD F/V1, 11RD, 1.35cttw.</div>
                <div class="td">&#36;1560.00</div>
                <div class="td"><i class="fas fa-exclamation-triangle">&nbsp;</i></div>
                <div class="td">4/11/2020</div>
                <div class="td"> <i class="fas fa-pencil-alt"></i>&nbsp; Edit</div>
                 <!-- DATA ROW END -->
            </div>
        </div>
       

    </div>
    <small class="flippy-hdr ml">4. When the user selects a product checkbox, the product is tied to all the action buttons -> Add Invoice, Add Job, etc.</small>
    <script src="../js/script.js"></script>
</body>
</html>