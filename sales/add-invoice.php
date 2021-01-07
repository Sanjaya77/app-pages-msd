<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Add Invoice</title>
      <link rel="stylesheet" href="../css/app-forms.css">
      <link rel="stylesheet" href="../css/style.css">
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&amp;display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous"/>
   </head>
   <body class="app-form">
      <header class="app-form-hdr">
         <h2>&#10010; Invoice</h2>
         <a href="#" class="logout">&#x1f441; View Invoice</a>
         <a href="#" class="logout">Log out</a>
         <a href="#" class="form-btn-lg">Close</a>
      </header>
      <main class="app-form-container">
         <div class="balance-due">
            <h3>Balance Due:</h3>
            <p>&#36; 0.00</p>
         </div>
         <form action="" class="app-form-form">
            <fieldset class="d-2">
               <legend class="leg-main">Client Details</legend>
               <div class="app-form-group ">
                  <div class="cleint-card">
                        <button class="close-sm">&#x274C;</button>
                        <p><span class="client-card-span">&#x1F469;</span>Jenna Doe</p>
                        <p>123 Street NW, Apt 1304, Bethesda, MD 20138</p>
                        <p>1-234-456-3456</p>
                  </div>
                  
                  <div>
                      <label for="">Get Client Info<sup>*</sup></label><br>
                      <select name="" id="" disabled >
                          <option value="">--Search Client--</option>
                          <option value="">Names in Alphabatical Order</option>
                          <option value="">&#100010; Add</option>
                      </select>
                      <button type="submit" disabled class="btn-sm">Select</button>
                  </div>
                  <div>
                    <label for="">Client's Email <sup>*</sup></label><br>
                        <input type="text" name="" id="" placeholder="Existing one should display but should be able to update here">
                   </div>
                   <div>
                     <button id="billing-a">Add /Edit Billing Address </button>
                     <button id="shipping-a">Add /Edit Shipping Address </button>
                   </div>
                   <div id="add-bill-a" class="add-inv-bill-a ">
                   <label for="">Billing Address</label><br>
                     <div>
                        <label for="">Street</label><br>
                        <input type="text" name="" id="">
                     </div>
                     <div>
                        <label for="">City</label><br>
                        <input type="text" name="" id="">
                        
                     </div>
                     <div>
                        <label for="">Zip</label><br>
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
                   <div id="add-ship-a" class="add-inv-bill-a ">
                   <label for="">Shipping Address</label><br>
                     <div>
                        <label for="">Street</label><br>
                        <input type="text" name="" id="">
                     </div>
                     <div>
                        <label for="">City</label><br>
                        <input type="text" name="" id="">
                        
                     </div>
                     <div>
                        <label for="">Zip</label><br>
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
               </div>
            </fieldset>
            <fieldset class="d-2">
               <legend class="leg-main">Terms</legend>
               <div class="app-form-group">
                  <div>
                     <label for="">Terms<sup>*</sup></label><br>
                     <select name="" id="">
                        <option value="">Net 10 </option>
                        <option value="">Net 30</option>
                        <option value="">Net 60</option>
                        <option value="">Due on receipt</option>
                        <option value=""> &#10010; Add</option>
                     </select>
                  </div>
                  <div>
                     <label for="">Invoice Date<sup>*</sup></label><br>
                     <input class="date" type="date" name="invoice-due-date" required pattern="\d{4}-\d{2}-\d{2}">
                     <span class="validity"></span>
                  </div>
                  <div>
                     <label for="">Due Date <sup>*</sup></label><br>
                     <input class="date" type="date" name="invoice-due-date" required pattern="\d{4}-\d{2}-\d{2}">
                     <span class="validity"></span>
                  </div>
                  
                  <div>
                     <label for="">Team Member <sup>*</sup></label><br>
                     <input type="text" name="" id="">
                  </div>
                  <div>
                     <label for="">Tags</label><br>
                     <input type="text" name="" id="">
                     <p>Tags will allow you to differentiate your income based on the tags attached to them. </p>
                  </div>

               </div>
            </fieldset>
            <fieldset class="table">
               <div class="invoice-grid">
                        <p>#</p>
                        <p>Product/ Service</p>
                        <p>Description</p>
                        <p>Qty</p>
                        <p>Rate</p>
                        <p>Ammount</p>
                        <p>Tax</p>
                        <p>Delete</p>
               </div>
               <div class="invoice-grid">
                      <p>1</p>
                      <div>
                        
                        <input type="text" name="" id="">
                     </div>
                      <div>
                        
                        <input type="text" name="" id="">
                     </div>
                      <div>
                        
                        <input type="text" name="" id="">
                     </div>
                      <div>
                        
                        <input type="text" name="" id="">
                     </div>
                      <div>
                        
                        <input type="text" name="" id="">
                     </div>
                      <div>
                        
                        <input type="checkbox" name="" id="add-cl-item" unchecked>
                        
                     </div>
                     <div>
                        
                        <button class="btn-sm-r"><span>🗑</span></button>
                       </div>
                     

               </div>
               <div class="invoice-grid">
                      <p>2</p>
                      <div>
                        
                        <input type="text" name="" id="">
                     </div>
                      <div>
                        
                        <input type="text" name="" id="">
                     </div>
                      <div>
                        
                        <input type="text" name="" id="">
                     </div>
                      <div>
                        
                        <input type="text" name="" id="">
                     </div>
                      <div>
                        
                        <input type="text" name="" id="">
                     </div>
                     <div>
                        
                        <input type="checkbox" name="" id="add-cl-item" unchecked>
                        
                     </div>
                      <div>
                        
                      <button class="btn-sm-r"><span>🗑</span></button>
                     </div>

               </div>
               <div class="table-footer">
                  <div class="table-footer-actions">
                     <button>Add lines </button>
                     <button>Clear all lines </button>
                     <button>Add subtotal </button>
                  </div>
                  <div class="table-footer-totals">
                     <div>
                        <p>Subtotal</p>
                        <p>&#36; 0.00</p>
                     </div>
                     <div>
                       
                        <div class="tax-totals-1">
                        <p>Taxable Subtotal : &#36; 0.00</p>
                           <select name="taxrates" id="tax" class="table-footer-input-1">
                           <option value="0">WDC 6%</option>
                           <option value="5%">None 0%</option>
                           <option value="" class="add-green">&#10010; Add</option>
                     </select>
                        </div>
                        <div class="tax-totals-2">
                           <input type="text" name="" id="">
                        
                        </div>
                     </div>
                     <div>
                        <p>Total </p>
                        <p>&#36; 0.00</p>
                     </div>
                     <div>

                        <p>Balance due</p>
                        <p>&#36; 0.00</p>
                     
                     </div>
                  </div>

               </div>
               <div  class="invoice-messages">
                     <div>
                     <label for="">Message on invoice</label>
                        <textarea name="" id="" cols="30" rows="10">
                           Our policy for special orders, purchases for individuals, and custom made jewelry will have no return or exchange.  All jewelry purchased for gift will come with a ten (10) day exchange or return policy providing receipt is accompanied with merchandise and merchandise has not been worn.  All deposits towards any new merchandise will have a 100% return up to ten (10) business days.  If merchandise remains on hold post the ten business days clients may receive a credit towards any goods or services for the life of our business entity.
                           *All purchases of lab grown diamonds are subject to trade-in value based only on current market value.

                        </textarea>
                  </div>
                  <div>
                     <label for="">Optional Messages</label>
                        <textarea name="" id="" cols="30" rows="10">
                           
                        </textarea>
                  </div>
               </div>
            <div>
            </fieldset>
           
         </form>
         <span class=""></span>
      </main>
      <footer class="app-form-fter">
         <a href="#" class="form-btn-lg">Cancel</a>
         <a href="#" class="form-btn-lg">Save</a>
         <a href="#" class="form-btn-lg">Save &amp; Close</a>
      </footer>
      <script>
            const addBilAddress = document.getElementById("billing-a");
            const bilAddress = document.getElementById("add-bill-a");
            addBilAddress.addEventListener("click", ()=>{
            bilAddress.classList.toggle("show")
            });

            const addShipAddress = document.getElementById("shipping-a");
            const shipAddress = document.getElementById("add-ship-a");
            addShipAddress.addEventListener("click", ()=>{
            shipAddress.classList.toggle("show")
            });
      </script>
   </body>
</html>
