<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market Street Diamonds Management Application</title>
    <link rel="stylesheet" href="../css/app-forms.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&amp;display=swap" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
      integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ="
      crossorigin="anonymous"
    />
</head>
<body class="app-form">
  <header class="app-form-hdr">
    <h2>&#10010; Add a Product</h2>
    <a href="#" class="logout">Log out</a>
    <a href="#" class="form-btn-lg">Close</a>
  </header>
  <main class="app-form-container">
      <div class="balance-due">
        <h3 title="All Information Goes Here">Product Information</h3>
      </div>
      <form action="" class="app-form-form">
        <fieldset>
            <legend>Inventory Details</legend>
            <div class="app-form-group ">
                <div>
                    <label for="">Product Category<sup>*</sup></label><br>
                    <select name="" id="">
                        <option value="">{Earrings}</option>
                        <option value="">Engagement Ring</option>
                        <option value=""> &#10010; Add</option>
                    </select>
                </div>
                <div>
                    <label for="">{Earring} Sub-category</label><br>
                    <select name="" id="">
                        <option value="">Stud</option>
                        <option value="">Drop</option>
                        <option value="">Hoop</option>
                        <option value=""> &#10010; Add</option>
                    </select>
                </div>  

                <div>
                    <label for="">SKU<sup>*</sup></label><br>
                    <input type="text" name="" id="" placeholder="EAR">
                    <small class="flippy">1. Based on product category the first three letters of the SKU will be auto added to the field-see example</small>
                </div>
                <div>
                    <label for="">Product Title<sup>*</sup></label><br>
                    <input type="text" name="" id="">
                </div>
                <div>
                    <label for="">Description<sup>*</sup></label><br>
                    <textarea name="" id="" cols="auto" rows="10" placeholder="Ex: 14kYG,1.01ct RD F/V1, 11RD, 1.35cttw."></textarea>
                </div>
                <div>
                    <label for="">Number items in stock<sup>*</sup></label><br>
                    <input type="number" name="" id="">
                </div>
            </div> 
            <h4 class="mt">Supplier Information<sup>*</sup></h4>
            <div class="app-form-group">
                    <div>
                    <label for="">Supplier</label><br>
                        <select name="" id="">
                            <option value="">Vlinder</option>
                            <option value="">Prima</option>
                            <option value="">Ankora</option>
                            <option value="">Stuller</option>
                            <option value=""> &#10010; Add</option>
                        </select>  
                    </div>
                    <div>
                    <label for="">Supplier SKU <sup>*</sup></label><br>
                    <input type="text" name="" id="">
                    </div>  
                    <div>
                    <label for="">Supplier Style # </label><br>
                    <input type="text" name="" id="">
                    </div>  

            </div>
        
        </fieldset>
        <fieldset>
            <legend>Watch Information</legend>
            <div class="app-form-group">
            <small class="flippy">2. This field area only comes up if the product category is slected to be watch</small>
                <div>
                    <label for="">Watch Make</label><br>
                    <input type="text" name="" id="">
                </div>
                <div>
                    <label for="">Watch Model</label><br>
                    <input type="text" name="" id="">
                </div>
                <div>
                    <label for="">Watch Serial</label><br>
                    <input type="text" name="" id="">
                </div>
                <div>  
                    <label for="">Watch Reference</label><br>
                    <input type="text" name="" id="">
                </div>

            </div>
           
        </fieldset>
        <fieldset>
            <legend>Images</legend>
            <div class="app-form-group">
                <div class="attachments">
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
                <div>
                    <label for="">Notes</label><br>
                    <textarea name="" id="" cols="auto" rows="10"></textarea>
                </div>
            </div>
        </fieldset>
        <fieldset>
            <legend>Price Information</legend>
            <div class="app-form-group">
                <div>
                    <label for="">Cost</label><br>
                    <input type="text" name="" id="">
                </div>
                <div>
                    <label for="">Labor</label><br>
                    <input type="text" name="" id="">
                </div>
                <div>
                    <label for="">Mark up</label><br>
                    <input type="text" name="" id="">
                </div>
                <div>  
                    <label for="">Discount</label><br>
                    <input type="text" name="" id="">
                </div>
                <div>  
                    <label for="">Price</label><br>
                    <input type="text" name="" id="">
                </div>

            </div>
           
        </fieldset>
        <fieldset>
            <legend>Tag Information</legend>
            <div class="app-form-group">
            <small class="flippy">3. We use jewelry label printer called DYMO, we should be able to print it here in the form itself, if possible</small>
                <div>
                    <label for="">SKU</label><br>
                    <input type="text" name="" id="">
                </div>
                <div>
                    <label for="">Price</label><br>
                    <input type="text" name="" id="">
                </div>
                <div>
                    <label for="">Metal</label><br>
                    <input type="text" name="" id="">
                </div>
                <div>  
                    <label for="">Details</label><br>
                    <input type="text" name="" id="">
                </div>

            </div>
            <div class="barcode">Barocde Should be here</div>
            <div class="qr-code">QR code should be here</div>
           
        </fieldset>
        
      </form>
      <small class="flippy">4. Please save entered date, the last update date and the teammember who entered the product</small>
  </main>
 <footer class="app-form-fter">
 <a href="#" class="form-btn-lg">Cancel</a>
 <a href="#" class="form-btn-lg">Save</a>
 <a href="#" class="form-btn-lg">Save &amp; Close</a>
 
 </footer>
</body>
</html>