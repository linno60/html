<input class="input-default paginate" type="text" value="0">
<input class="input-default" type="text">
<input class="input-default form-underline" type="search" name="find_reservations" placeholder="Enter Search Terms">
<input class="input-search" type="search" name="search" placeholder="Search Reservations">
<input class="radio-btn" id="radio1" type="radio" name="allowOverbooking" checked>
<label for="radio1">Yes</label>
<input class="radio-btn" id="radio2" type="radio" name="allowOverbooking">
<label for="radio2">No</label>
<input class="check-btn" id="check1" type="checkbox" name="show_all_countries" checked>
<label for="check1">Show all countries</label>
<input class="check-btn" id="check2" type="checkbox" name="show_all_countries">
<label for="check2">Show all countries</label>
<textarea class="textarea-default"></textarea>
<textarea class="textarea-default form-underline"></textarea>
<select class="select-default form-underline">
    <option>Hotel</option>
    <option>Resort</option>
    <option>Bed & Breakfast</option>
    <option>Ranch</option>
    <option>Flat Hotel</option>
    <option>Hostel</option>
    <option>Motel</option>
    <option>Boutique</option>
    <option>Guest House</option>
    <option>Vacation Rental</option>
    <option>Chain</option>
    <option>Outdoor Lodge</option>
    <option>RV Park</option>
    <option>Campground</option>
</select>
<select class="select-languages">
    <option value="usa" data-icon="/images/icons/usa.png">English</option>
    <option value="por" data-icon="/images/icons/brazil.png">Português</option>
    <option value="spa" data-icon="/images/icons/spain.png">Español</option>
    <option value="rus" data-icon="/images/icons/russia.png">Русский</option>
    <option value="ita" data-icon="/images/icons/italia.png">Italiano</option>
    <option value="ger" data-icon="/images/icons/germany.png">Deutsch</option>
</select>
<select class="select-default">
    <option>Euro (EUR)</option>
    <option selected>US Dollar (USD)</option>
    <option>British Pound (GBP)</option>
</select>
<input class="switch" type="checkbox" name="switch" id="switch1">
<label for="switch1">
    <span>
        <span class="on">on</span>
        <span class="off">off</span>
    </span>
</label>
<script src="/js/jquery/jquery-2.1.4.min.js"></script> 
<script src="/js/jquery/plugins/wSelect-master/wSelect.js"></script>
<script>
    $('.select-languages').wSelect();
</script>  
<link rel="stylesheet" href="/js/jquery/plugins/wSelect-master/wSelect.css">
