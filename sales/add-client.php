<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Client</title>
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
    <h2>&#10010; Add a Client</h2>
    <a href="#" class="form-btn-lg">Close</a>
  </header>
  <main class="app-form-container">
      <div class="balance-due">
        <h3 title="All Client Information Goes Here">Client's Information</h3>
      </div>
      <form action="" class="app-form-form">
        <fieldset>
            <legend>Contact Details</legend>
            <div class="app-form-group ">
                <div>
                    <label for="">Title</label><br>
                    <input type="text" name="" id="">
                </div>
                <div>
                    <label for="">First Name</label><br>
                    <input type="text" name="" id="">
                </div>
                <div>
                    <label for="">Middle Name</label><br>
                    <input type="text" name="" id="">
                </div>
                <div>
                    <label for="">Last Name</label><br>
                    <input type="text" name="" id="">
                </div>
                <div>  
                    <label for="">Suffix</label><br>
                    <input type="text" name="" id="">
                </div>
                <div>  
                    <label for="">Email</label><br>
                    <input type="email" name="" id="" placeholder="Seperate multiple emails with commas">
                </div>
            </div>
            <div class="app-form-group">
                <div>
                    <label for="">Phone</label><br>
                    <input type="text" name="" id="">
                    
                </div>
                <div>
                    <label for="">Mobile</label><br>
                    <input type="text" name="" id="">
                </div>
                <div>
                    <label for="">Fax</label><br>
                    <input type="text" name="" id="">
                </div>

            </div>
        </fieldset>
        <fieldset>
            <legend>Addess</legend>
            <div class="app-form-group">
                <h4>Billing Address</h4>
                <div>
                    <label for="">Street</label><br>
                    <input type="text" name="" id="">
                </div>
                <div>
                    <label for="">City</label><br>
                    <input type="text" name="" id="">
                    
                </div>
                <div>
                    <label for="">State/Province</label><br>
                    <input type="text" name="" id="">
                </div>
                <div>
                    <label for="">Country</label><br>
                    <input type="text" name="" id="">
                </div>
            </div>
            <div class="app-form-group">
                <h4>Shipping Address</h4>
                <input type="checkbox" name="" id="">
                <label for="">Same as billing address</label>
                <div>
                    <label for="">Street</label><br>
                    <input type="text" name="" id="">
                </div>
                <div>
                    <label for="">City</label><br>
                    <input type="text" name="" id="">
                    
                </div>
                <div>
                    <label for="">State/Province</label><br>
                    <input type="text" name="" id="">
                </div>
                <div>
                    <label for="">Country</label><br>
                    <input type="text" name="" id="">
                </div>
            </div>
        </fieldset>
        <fieldset>
            <legend>Tax Info</legend>
            <div class="app-form-group">
                <div>
                    <label for="">Exemption details</label><br>
                    <input type="text" name="" id="">
                </div>
                <div>
                    <input type="checkbox" name="" id="" checked>
                    <label for="">This customer is taxable</label>
                    <label for="">City</label><br>
                    <input type="text" name="" id="">
                    
                </div>
                <div>
                    <label for="">Default tax code</label><br>
                    <select name="" id="">
                        <option value="">WDC-6.00%</option>
                        <option value="">None</option>
                        <option value=""> &#10010; Add</option>
                    </select>
                </div>
            </div>
        </fieldset>
        <fieldset>
            <legend>Payment &amp; Billing</legend>
            <div class="app-form-group">
                <div>
                    <label for="">Preferred payment method</label><br>
                    <input type="text" name="" id="">
                </div>
                <div>
                    <label for="">Terms</label><br>
                    <input type="text" name="" id="">
                    
                </div>
                <div>
                    <label for="">Opening balance</label><br>
                    <input type="text" name="" id="">
                </div>
                <div>
                    <label for="">as of</label><br>
                    <input type="date" name="invoice-due-date" required pattern="\d{4}-\d{2}-\d{2}">
                    <span class="validity"></span>
                </div>
            </div>
        </fieldset>
        <fieldset>
            <legend>Notes &amp; Attachments</legend>
            <div class="app-form-group">
                <div>
                    <label for="">Notes</label><br>
                    <textarea name="" id="" cols="auto" rows="10"></textarea>
                </div>
                
                <div class="attachments">
                    <input class="attachement_file" type="file" name="files[]" id="file" data-multiple-caption="{count} files selected" multiple />
                     <label for="file"><strong>Choose a file</strong><span class="attachment_dragndrop"> or drag it here</span>.</label>
                    <button class="form-btn-lg" type="submit">Upload</button>
                    </div>
                    <div class="attachment_uploading">Uploading…</div>
                    <div class="attachment_success">Done!</div>
                    <div class="attachment_error">Error! <span></span>.</div>
                </div>
            </div>
        </fieldset>
        <fieldset>
            <legend>Client's Additional Info</legend>
            <div class="app-form-group">
                <h4>Client</h4>
                <div>
                    <label for="">Ring Size</label><br>
                    <input type="text" name="" id="">
                </div>
                <div>
                    <label for="">Birthday</label><br>
                    <input type="date" name="invoice-due-date" required pattern="\d{4}-\d{2}-\d{2}">
                    <span class="validity"></span>
                    
                </div>
                <div>
                    <label for="">Anniversary Date</label><br>
                    <input type="date" name="invoice-due-date" required pattern="\d{4}-\d{2}-\d{2}">
                    <span class="validity"></span>
                </div>
                <div id="c-parent">
                    <input type="radio" id="dad" name="parent-1" value="is_dad"
                    checked>
                    <label for="parent"> is a Dad?</label><br>
                    <input type="radio" id="mom" name="parent-2" value="is_mom">
                    <label for="parent"> is a Mom?</label>
                </div>
                <div>
                    <label for="">Occupation</label><br>
                    <input type="text" name="" id="">
                </div>
                <div>
                    <label for="">Company</label><br>
                    <input type="text" name="" id="">
                </div>
            </div>
            <div class="app-form-group">
                <h4>Spouse</h4>
                <div>
                    <label for="">Name</label><br>
                    <input type="text" name="tic" id="">
                </div>
                <div>
                    <label for="">Ring Size</label><br>
                    <input type="text" name="" id="">
                </div>
                <div>  
                    <label for="">Email</label><br>
                    <input type="email" name="" id="" placeholder="Seperate multiple emails with commas">
                </div>
                <div>
                    <label for="">Birthday</label><br>
                    <input type="date" name="invoice-due-date" required pattern="\d{4}-\d{2}-\d{2}">
                    <span class="validity"></span> 
                </div>
                <div>
                    <label for="">Occupation</label><br>
                    <input type="text" name="" id="">
                </div>
                <div>
                    <label for="">Company</label><br>
                    <input type="text" name="" id="">
                </div>
                <h4>MSD Team Member</h4>
                <div>
                    <label for="">Name</label><br>
                    <input type="text" name="" id="">
                </div>
                <div id="s-parent">
                    <input type="radio" id="mom" name="parent-2" value="is_mom"  checked>
                    <label for="parent"> is a Mom?</label><br>
                    <input type="radio" id="dad" name="parent-1" value="is_dad">
                    <label for="parent"> is a Dad?</label>

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
</body>
</html>