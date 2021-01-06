<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Invoice</title>
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
    <h2>Invoice</h2>
    <a href="#" class="form-btn-lg">Close</a>
  </header>
  <main class="app-form-container">
      <div class="balance-due">
          <p>Balance Due:</p>
          <p>0.00</p>
      </div>
      <form action="" class="app-form-invoice">
        <fieldset>
            <legend>Customer Details</legend>
            <div>
              <!-- 
                1. Customer Can be added here
                2. Exisiting Customers can be searched here
                3. Search Initiates with typing
               -->
              <label for="">Customer</label>
              <input type="text" name="" id="">
            </div>
            <div>
              <!-- 
                  1. More Than one email can be added here
               -->
              <label for="">Customer Email</label>
              <input type="email" name="" id="">
              <input type="checkbox" name="" id="">
              <label for="">Send Later</label>
              </div>
              <div>
                <label for="">Online Payments</label>
                <input type="checkbox" name="" id="">
              </div>
              <div>
                <label for="">Billing Address</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
              </div>
              <div>
                <label for="">Terms</label>
                  <select id="cars" name="terms">
                  <option value="Net30">Net 30</option>
                  <option value="Net60">Net 60</option>
                  <option value="Net90">Net 90</option>
                  <option value="Due on receipt">Due on receipt</option>
                  <option value="Due on receipt">Add</option>
                </select>
              </div>
              <div>
                <label for="">Invoice Date</label>
                <input type="date" name="invoice-date" required pattern="\d{4}-\d{2}-\d{2}">
                <span class="validity"></span>
              </div>
              <div>
                <label for="">Due Date</label>
                <input type="date" name="invoice-due-date" required pattern="\d{4}-\d{2}-\d{2}">
                <span class="validity"></span>
              </div>
              <div>
                <label for="">P.O Number</label>
                <input type="text" name="" id="">
              </div>
              <div>
                <label for="">Sales Rep</label>
                <input type="text" name="" id="">
              </div>

            <!--  -->
        </fieldset>

      </form>
  </main>
 <footer class="app-form-fter">
 <a href="#" class="form-btn-lg">Cancel</a>
 <a href="#" class="form-btn-lg">Save</a>
 <a href="#" class="form-btn-lg">Save &amp;Close</a>
 
 </footer>
</body>
</html>