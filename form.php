    
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">    
    
<h2 id="form">The Form</h2>
    
    <form id="myForm" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">

        <div class="form-group">
            <label><b>Name</b></label><br />
            <input type="text" name="name" class="form-control" value="" required>
            <span class="invalid-feedback"></span>
        </div>

        <div class="form-group">
            <label><b>Site URL</b></label><br />
            <input type="url" name="site" class="form-control" value="" placeholder="https://example.com">
            <span class="invalid-feedback"></span>
        </div>

        <div class="form-group">
            <label><b>Email</b></label><br />
            <input type="email" name="email" class="form-control" value="" placeholder="name@example.com">
            <span class="invalid-feedback"></span>
        </div>


    <div class="form-group">
      <label><b>Country</b></label><br />
      <select name="country" class="form-control">
        <option value="">-- Select Country --</option>
        <option value="AFG">Afghanistan (AFG)</option>
        <option value="ALB">Albania (ALB)</option>
        <option value="DZA">Algeria (DZA)</option>
        <option value="AND">Andorra (AND)</option>
        <option value="AGO">Angola (AGO)</option>
        <option value="ARG">Argentina (ARG)</option>
        <option value="ARM">Armenia (ARM)</option>
        <option value="AUS">Australia (AUS)</option>
        <option value="AUT">Austria (AUT)</option>
        <option value="AZE">Azerbaijan (AZE)</option>
        <option value="BHR">Bahrain (BHR)</option>
        <option value="BGD">Bangladesh (BGD)</option>
        <option value="BLR">Belarus (BLR)</option>
        <option value="BEL">Belgium (BEL)</option>
        <option value="BOL">Bolivia (BOL)</option>
        <option value="BIH">Bosnia and Herzegovina (BIH)</option>
        <option value="BRA">Brazil (BRA)</option>
        <option value="BGR">Bulgaria (BGR)</option>
        <option value="KHM">Cambodia (KHM)</option>
        <option value="CAN">Canada (CAN)</option>
        <option value="CHL">Chile (CHL)</option>
        <option value="CHN">China (CHN)</option>
        <option value="COL">Colombia (COL)</option>
        <option value="CRI">Costa Rica (CRI)</option>
        <option value="HRV">Croatia (HRV)</option>
        <option value="CUB">Cuba (CUB)</option>
        <option value="CYP">Cyprus (CYP)</option>
        <option value="CZE">Czechia (CZE)</option>
        <option value="DNK">Denmark (DNK)</option>
        <option value="DOM">Dominican Republic (DOM)</option>
        <option value="ECU">Ecuador (ECU)</option>
        <option value="EGY">Egypt (EGY)</option>
        <option value="SLV">El Salvador (SLV)</option>
        <option value="EST">Estonia (EST)</option>
        <option value="ETH">Ethiopia (ETH)</option>
        <option value="FIN">Finland (FIN)</option>
        <option value="FRA">France (FRA)</option>
        <option value="GEO">Georgia (GEO)</option>
        <option value="DEU">Germany (DEU)</option>
        <option value="GRC">Greece (GRC)</option>
        <option value="GTM">Guatemala (GTM)</option>
        <option value="HND">Honduras (HND)</option>
        <option value="HUN">Hungary (HUN)</option>
        <option value="ISL">Iceland (ISL)</option>
        <option value="IND">India (IND)</option>
        <option value="IDN">Indonesia (IDN)</option>
        <option value="IRN">Iran (IRN)</option>
        <option value="IRQ">Iraq (IRQ)</option>
        <option value="IRL">Ireland (IRL)</option>
        <option value="ISR">Israel (ISR)</option>
        <option value="ITA">Italy (ITA)</option>
        <option value="JPN">Japan (JPN)</option>
        <option value="JOR">Jordan (JOR)</option>
        <option value="KAZ">Kazakhstan (KAZ)</option>
        <option value="KEN">Kenya (KEN)</option>
        <option value="KOR">South Korea (KOR)</option>
        <option value="PRK">North Korea (PRK)</option>
        <option value="KWT">Kuwait (KWT)</option>
        <option value="LVA">Latvia (LVA)</option>
        <option value="LBN">Lebanon (LBN)</option>
        <option value="LBY">Libya (LBY)</option>
        <option value="LTU">Lithuania (LTU)</option>
        <option value="LUX">Luxembourg (LUX)</option>
        <option value="MDG">Madagascar (MDG)</option>
        <option value="MYS">Malaysia (MYS)</option>
        <option value="MLT">Malta (MLT)</option>
        <option value="MEX">Mexico (MEX)</option>
        <option value="MDA">Moldova (MDA)</option>
        <option value="MNG">Mongolia (MNG)</option>
        <option value="MNE">Montenegro (MNE)</option>
        <option value="MAR">Morocco (MAR)</option>
        <option value="MMR">Myanmar (MMR)</option>
        <option value="NPL">Nepal (NPL)</option>
        <option value="NLD">Netherlands (NLD)</option>
        <option value="NZL">New Zealand (NZL)</option>
        <option value="NIC">Nicaragua (NIC)</option>
        <option value="NGA">Nigeria (NGA)</option>
        <option value="MKD">North Macedonia (MKD)</option>
        <option value="NOR">Norway (NOR)</option>
        <option value="PAK">Pakistan (PAK)</option>
        <option value="PSE">Palestine (PSE)</option>
        <option value="PAN">Panama (PAN)</option>
        <option value="PRY">Paraguay (PRY)</option>
        <option value="PER">Peru (PER)</option>
        <option value="PHL">Philippines (PHL)</option>
        <option value="POL">Poland (POL)</option>
        <option value="PRT">Portugal (PRT)</option>
        <option value="QAT">Qatar (QAT)</option>
        <option value="ROU">Romania (ROU)</option>
        <option value="RUS">Russia (RUS)</option>
        <option value="SAU">Saudi Arabia (SAU)</option>
        <option value="SRB">Serbia (SRB)</option>
        <option value="SGP">Singapore (SGP)</option>
        <option value="SVK">Slovakia (SVK)</option>
        <option value="SVN">Slovenia (SVN)</option>
        <option value="ZAF">South Africa (ZAF)</option>
        <option value="ESP">Spain (ESP)</option>
        <option value="LKA">Sri Lanka (LKA)</option>
        <option value="SDN">Sudan (SDN)</option>
        <option value="SWE">Sweden (SWE)</option>
        <option value="CHE">Switzerland (CHE)</option>
        <option value="SYR">Syria (SYR)</option>
        <option value="TWN">Taiwan (TWN)</option>
        <option value="TJK">Tajikistan (TJK)</option>
        <option value="THA">Thailand (THA)</option>
        <option value="TUR">Turkey (TUR)</option>
        <option value="UKR">Ukraine (UKR)</option>
        <option value="ARE">United Arab Emirates (ARE)</option>
        <option value="GBR">United Kingdom (GBR)</option>
        <option value="USA">United States (USA)</option>
        <option value="URY">Uruguay (URY)</option>
        <option value="UZB">Uzbekistan (UZB)</option>
        <option value="VEN">Venezuela (VEN)</option>
        <option value="VNM">Vietnam (VNM)</option>
        <option value="ESH">Western Sahara (ESH)</option>
        <option value="YEM">Yemen (YEM)</option>
        <option value="XKX">Kosovo (XKX)</option>
      </select>
      <span class="invalid-feedback"></span>
    </div>

    <center>

    <div class="form-group">
      <center>
        <input type="submit" class="btn" value="Submit" 
              style="width:120px !important;margin-top:20px;"
              id="submitBtn"
              onclick="lockForm(this)">
      </center>
    </div>

    <div class="form-message">
        <?php if (isset($_GET['submitted']) && $_GET['submitted'] == 1): ?>
            <p>Your form was submitted successfully!</p>
        <?php elseif (!empty($formresults)): ?>
            <p><?= htmlspecialchars($formresults) ?></p>
        <?php endif; ?>
    </div>

        
    </center>

      </form>
                 <div class="message">
                     <center>
                    <?php echo $formresults; ?>
                    </center>
                </div>

                
