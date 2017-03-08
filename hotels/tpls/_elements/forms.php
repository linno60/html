<link rel="stylesheet" href="/js/jquery/plugins/wSelect-master/wSelect.css">
<input class="input-default paginate" type="text" value="0">
<input class="input-default" type="text">
<input class="input-default form-underline" type="search" name="find_reservations" placeholder="Enter Search Terms">
<input class="radio-btn" id="allow_ovb_1" type="radio" name="allowOverbooking" checked>
<label for="allow_ovb_1">Yes</label>
<input class="radio-btn" id="allow_ovb_2" type="radio" name="allowOverbooking">
<label for="allow_ovb_2">No</label>
<input class="check-btn" id="label_1145" type="checkbox" name="show_all_countries" checked>
<label for="label_1145">Show all countries</label>
<input class="check-btn" id="label_1146" type="checkbox" name="show_all_countries">
<label for="label_1146">Show all countries</label>
<textarea class="textarea-default"></textarea>
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
    <option>English</option>
    <option>Português</option>
    <option>Español</option>
    <option>Русский</option>
    <option>Italiano</option>
    <option>Deutsch</option>
</select>
<select class="select-default">
    <option>Euro (EUR)</option>
    <option selected>US Dollar (USD)</option>
    <option>British Pound (GBP)</option>
</select>
<script src="/js/jquery/jquery-2.1.4.min.js"></script> 
<script src="/js/jquery/plugins/wSelect-master/wSelect.js"></script>
<script>
    $('.select-languages').wSelect();
</script>  
