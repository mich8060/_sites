<div class="editing-container">
    <div class="photo">
        <label for="photo-upload" class="capture"><div class="overlay"><img src="img/layout/add_photo_white@3x.png" alt="" /></div></label>
        <input type="file" id="photo-upload" />
    </div>
    <div class="info">
        <label for="name" class="row"><span class="icons">&#128100;</span><input type="text" value="" placeholder="Full Name" id="name" /></label>
        <label for="location" class="row"><span class="icons">&#59172;</span><input type="text" value="" placeholder="Location" id="location" class="get_location_input" /><img src="img/layout/use_location@3x.png" class="get-location" /></label>
        <label for="gender" class="row"><span class="icons">
            <img src="img/layout/gender@3x.png" alt="" /></span>
            <select id="gender">
                <option value="0">Gender</option>
                <option value="1">Male</option>
                <option value="2">Female</option>
            </select>
        </label>
        <div class="row"><span class="icons">&#9734;</span><a href="mybrands" title="My Brands" class="direct-edit">My Brands</a></div>
        <div class="row"><span class="icons">&#127748;</span><a href="cover" title="Cover Photo" class="direct-edit">Cover Photo</a></div>
        <div class="row"><span class="icons">&hearts;</span><a href="passions" title="My Passions" class="direct-edit">Passions</a></div>
        <div class="title">Your Bio</div>
        <label for="about" class="row" style="padding:0;"><textarea id="about" placeholder="Tell us more about you"></textarea></label>
    </div>
    <div class="clear"></div>
</div>