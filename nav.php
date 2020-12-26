    <nav>
            <div class="logo-sq">
                <img src="<?php echo $site_link;?>img/MSD-SQ.svg" alt="logo">
            </div>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <!-- <li><a class="drop-btn" href="#">Inventory</a></li> -->
                <li id="drop-btn-1"><a  class="drop-btn">Inventory<span class="triangle">&#9662;</span></a></li>
                    <ul class="dropdown">
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Add Products</a></li>
                    </ul>
                <li><a href="#">Services</a></li>
                <li id="drop-btn-2"><a class="drop-btn">Sales<span class="triangle">&#9662;</span></a></li>
                    <ul class="dropdown">
                        <li><a href="#">Clients</a></li>
                        <li><a href="#">Invoices</a></li>
                    </ul>
                <li><a href="#">Job Bags</a></li>
                <li id="drop-btn-2"><a class="drop-btn">Sales<span class="triangle">&#9662;</span></a></li>
                    <ul class="dropdown">
                        <li><a href="#">Add Job Bag</a></li>
                        <li><a href="#">View Jobs</a></li>   
                    </ul>
           
                <li><a href="#">Reports</a></li>
                <li><a href="#">CRM</a></li>
                <li><a href="#">Admin</a></li>
            </ul>
    </nav>
    
    <header>
        <button id="toggle" class="toggle btn">
            <i class="fa fa-bars fa-2x"></i>
        </button>
            <h1>MSD Management Dashboard</h1>
            <button class="cta-btn btn" id="open">Log Out</button>
    </header>