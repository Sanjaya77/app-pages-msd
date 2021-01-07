<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Receive Payment</title>
      <link rel="stylesheet" href="../css/app-forms.css">
      <link rel="stylesheet" href="../css/style.css">
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&amp;display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous"/>
   </head>
   <body class="app-form">
      <header class="app-form-hdr">
         <h2>&#10010; Receive Payment</h2>
         <a href="#" class="logout">Log out</a>
         <a href="#" class="form-btn-lg">Close</a>
      </header>
      <main class="app-form-container">
         <div class="balance-due">
            <h3>Ammount Received:</h3>
            <p>&#36; 0.00</p>
         </div>
         <form action="" class="app-form-form">
            <fieldset class="d-1">
               <legend class="leg-main">Payment Info</legend>
               <div class="app-form-group ">
                  <div class="cleint-card" >
                        <button class="close-sm">&#x274C;</button>
                        <p><span class="client-card-span">&#x1F469;</span>Jenna Doe</p>
                        <p>123 Street NW, Apt 1304, Bethesda, MD 20138</p>
                        <p>1-234-456-3456</p>
                  </div>
                  
                  <div class="d-1-input">
                      <label for="">Get Client Info</label><br>
                      <select name="" id="" disabled >
                          <option value="">--Search Client--</option>
                          <option value="">Names in Alphabatical Order</option>
                          <option value="">&#100010; Add</option>
                      </select>
                      <button type="submit" disabled class="btn-sm">Select</button>
                  </div>
                  <div class="col-2">
                    <div><input type="text" name="" id="" placeholder="Enter Invoice Number"></div>
                    <div><button>Find by invoice number</button></div>
                  </div>
                  <div class="d-1-input-s">
                     <label for="">Payment  date</label><br>
                     <input class="date" type="date" name="invoice-due-date" required pattern="\d{4}-\d{2}-\d{2}">
                     <span class="validity"></span>
                  </div>
                  <div class="col-2 s-btwn">
                      <div class="col-3">
                          <div>
                            <label for="">Payment method</label><br>
                            <select name="" id="">
                                <option value="">--Select Payment Method--</option>
                                <option value="">Visa</option>
                                <option value="">Master</option>
                                <option value="">Paypal</option>
                                <option value="">&#10010; Add</option>
                            </select>
                          </div>
                          <div>
                            <label for="">Reference no.</label><br>
                            <input type="text" name="" id="">
                          </div>
                          <div>
                          <label for="">Deposit to</label><br>
                            <select name="" id="">
                                <option value="">--Search Client--</option>
                                <option value="">Names in Alphabatical Order</option>
                                <option value="">&#100010; Add</option>
                            </select>
                          </div>
                      </div>
                      <div>
                        <label for="">Amount received</label><br>
                        <input type="text" name="" id="">
                      </div>
                  </div>
               </div>
            </fieldset>
            <fieldset class="table">
                <h3>Outstanding Transactions</h3>
               <div class="payment-grid upr">
                        <p><input type="checkbox" id="tic" name="tic"></p>
                        <p>Description</p>
                        <p>Due date</p>
                        <p>Original Amount</p>
                        <p>Open Balance</p>
                        <p>Payment</p>
               </div>
               <div class="payment-grid">
                      <p><input type="checkbox" id="tic" name="tic"></p>
                      <div>
                        <a href="">Invoice #11594</a><span>(01/20/2021)</span>
                     </div>
                      <div>
                        02/15/2021
                     </div>
                      <div>
                        &#36; 1250.00
                     </div>
                      <div>
                        &#36; 1250.00
                     </div>
                      <div>
                        <input type="text" name="" id="">
                     </div>
               </div>
               <div class="payment-grid">
                      <p><input type="checkbox" id="tic" name="tic"></p>
                      <div>
                        <a href="">Invoice #11598</a><span>(10/20/2021)</span>
                     </div>
                      <div>
                        02/25/2021
                     </div>
                      <div>
                        &#36; 150.00
                     </div>
                      <div>
                        &#36; 150.00
                     </div>
                      <div>
                        <input type="text" name="" id="">
                     </div>
               </div>
               <div class="table-footer">
                  <div class="table-footer-actions">
                     <button>Clear Payment </button>
                  </div>
                  <div class="table-footer-totals">
                     <div>
                        <p>Amount to apply</p>
                        <p>&#36; 0.00</p>
                     </div>
                     <div>
                        <button>Clear Payment </button>
                     </div>
                     <div>
                        <p>Balance due</p>
                        <p>&#36; 0.00</p>
                     
                     </div>
                  </div>
               </div>
               <div  class="invoice-messages">
                  <div>
                     <label for="">Memo</label>
                     <textarea name="" id="" cols="30" rows="5">
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
      <script src="../js/form-script.js"></script>
   </body>
</html>
