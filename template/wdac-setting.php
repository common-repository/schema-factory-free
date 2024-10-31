<?php $wdac_option = (array)json_decode(get_option('wdac_options')); ?>



<h1>Schema Factory Free</h1>
<div class="go-pro" id="go-pro">
    <div class="pro-btn" id="pro-btn">
        <span class="dashicons dashicons-no-alt"></span>
    </div>
    <div class="pro-h2">
        <h1>Upgrade to Professional Edition</h1>
    </div>
    <div class="pro-inner">



        <div class="pro-left">
            <ul class="pro-list">
                <li>Show Review Ratings<br><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span>
                    <span
                        class="dashicons dashicons-star-filled"></span>
                </li>
                <li>Customizable business hours</li>
                <li>Business price range </li>
                <li>...and much more!</li>
            </ul>
        </div>
        <div class="pro-right">
            <p>The professional version includes advanced features for established businesses looking to get ahead of competitors in search results. </p>
            <div class="pro-buttons">
                <a target="_blank" href="https://schemaplugin.com/compare/">
                    <p class="button action features">See All Features</p>
                </a>
                <a target="_blank" href="https://schemaplugin.com/buy-pro/">
                    <p class="button button-primary">Upgrade to Pro</p>
                </a>
            </div>
        </div>


    </div>

</div>


<div class="wrap">
    <form method="post" enctype="multipart/form-data" id="wdac-form" name="wdac-form">

        <table class="form-table">
            <tbody>
                <tr>
                    <td colspan="2">
                        <h3>Business Information</h3>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="blogname">Business Name</label></th>
                    <td><input name="wdac_business_name" autocomplete='organization' type="text" id="wdac_business_name" class="regular-text" value="<?php if(isset($wdac_option['wdac_business_name'])) echo stripslashes(htmlspecialchars($wdac_option['wdac_business_name'])); ?>"></td>
                </tr>


                <tr>
                    <th scope="row"><label for="blogdescription">Business Description</label></th>
                    <td>
                        <textarea rows="10" cols="50" disabled>A description of your business.</textarea>
                        <p class="description" id="tagline-description"></p>
                    </td>
                </tr>

                <tr>
                    <th scope="row"><label for="siteurl">Business Phone Number</label></th>
                    <td><input name="wdac_business_phone_number" autocomplete='tel' type="tel" id="wdac_business_phone_number" class="regular-text code" value="<?php if(isset($wdac_option['wdac_business_phone_number'])) echo $wdac_option['wdac_business_phone_number'];?>">
                    </td>
                </tr>

                <tr>
                    <th scope="row"><label for="siteurl">Business Price Range</label></th>
                    <td><input type="text" value="$$$$" disabled>
                        <p class="description" id="tagline-description">Enter dollar signs based on a 1 to 5 scale with one dollar sign being the least expensive and five being the most luxurious. <br>Example: $$$<br><br>Alternatively, you can enter the price range of the products you sell.<br>Example:
                            $10-$25 </p>
                    </td>
                </tr>



                <tr>
                    <th scope="row"><label for="siteurl">Business Hours</label></th>


                    <td>
                        <div>
                            <form id="hours-form">
                                <input type="radio" disabled>
                                <label for="dont-show">Don't show hours.</label>
                                <br>
                                <input type="radio" disabled>
                                <label for="weekday-same">My weekday hours are the same.</label>
                                <br>
                                <input type="radio" disabled>
                                <label for="weekday-different">My weekday hours are different.</label>
                                <br>
                                <input type="radio" disabled>
                                <label for="open-247">I'm open 24 hours, 7 days per week.</label>


                            </form>



                        </div>


                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <h3>Business Location</h3>
                    </td>
                </tr>

                <tr>
                    <th scope="row"><label for="siteurl">Street Address</label></th>
                    <td><input name="wdac_street_address" type="text" autocomplete='address-line1' id="wdac_street_address" class="regular-text code" value="<?php if(isset($wdac_option['wdac_street_address'])) echo stripslashes(htmlspecialchars($wdac_option['wdac_street_address'])) ;?>">
                        <p class="description" id="tagline-description">If your street address has multiple lines separate them with commas. <br>Example: 123 Main Street, Suite 405, Floor 45</p>

                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="siteurl">City / Locality</label></th>
                    <td><input name="wdac_city" type="text" autocomplete='address-level2' id="wdac_city" class="regular-text code" value="<?php if(isset($wdac_option['wdac_city'])) echo stripslashes(htmlspecialchars($wdac_option['wdac_city'])); ?>"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="siteurl">State / Region</label></th>
                    <td><input name="wdac_state" type="text" autocomplete='address-level1' id="wdac_state" class="regular-text code" value="<?php if(isset($wdac_option['wdac_state'])) echo stripslashes(htmlspecialchars($wdac_option['wdac_state'])); ?>"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="siteurl">Zip / Postal Code</label></th>
                    <td><input name="wdac_zip" id="wdac_zip" autocomplete='postal-code' class="regular-text code" value="<?php if(isset($wdac_option['wdac_zip'])) echo stripslashes(htmlspecialchars($wdac_option['wdac_zip'])); ?>"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="siteurl">Lattitude</label></th>
                    <td><input type="text" disabled></td>
                </tr>
                <tr>
                    <th scope="row"><label for="siteurl">Longitude</label></th>
                    <td><input type="text" disabled></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <h3>Extra Information</h3>
                    </td>
                </tr>


                <tr>
                    <th scope="row"><label for="siteurl">Number of Reviews</label></th>
                    <td><input type="text" disabled>

                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="siteurl">Average Review Rating</label></th>
                    <td><input type="text" disabled>
                        <p class="description" id="tagline-description">The average review score of your business on a scale from 1 to 5.<br>Example: 4.9 </p>
                    </td>
                </tr>
                <tr>

                    <th scope="row"><label for="siteurl">Social URLs</label></th>
                    <td><textarea rows="10" cols="50" disabled></textarea>
                        <p class="description" id="tagline-description">Enter your social media pages, one per line. <br>Example:<br> http://www.twitter.com/mybusiness<br>http://www.facebook.com/mybusiness<br>http://www.plus.google.com/mybusiness</p>

                    </td>
                </tr>

                <tr>
                    <th scope="row"><label for="siteurl">Public Access</label></th>
                    <td><select class="regular-text code" disabled>

    </select>
                        <p class="description" id="tagline-description">Indicate whether your establishment allows public visitors. This option is usually used for attractions like museums and parks. </p>


                    </td>
                </tr>

                <tr>
                    <th scope="row"><label for="siteurl">Smoking Allowed</label></th>
                    <td><select class="regular-text code" disabled>
    </select>
                        <p class="description" id="tagline-description">Indicate whether you allow smoking in your business.</p>
                    </td>
                </tr>

                <tr>
                    <th scope="row"><label for="siteurl">Logo</label></th>
                    <td> <input type="file" class="regular-text code" disabled>
                        <p class="description" id="tagline-description"> Minimum size: 160 pixels x 90 pixels<br>Maximum Size: 1920 pixels x 1080 pixels</p>
                    </td>
                </tr>

                <tr>
                    <th scope="row"><label for="siteurl">Image</label></th>
                    <td><img src="<?php echo $wdac_option['wdac_image']; ?>" style="max-height: 150px;"><br> <input name="wdac_image" type="file" id="wdac_image" class="regular-text code" value="">
                        <input type="hidden" id="wdac_exist_image" name="wdac_exist_image" value="<?php if(isset($wdac_option['wdac_image'])) echo $wdac_option['wdac_image'];?>" />
                        <p class="description" id="tagline-description">The image can be your logo or a photo of your business or employees.<br> Minimum size: 160 pixels x 90 pixels<br>Maximum Size: 1920 pixels x 1080 pixels</p>
                    </td>
                </tr>


                <tr>
                    <th scope="row"><label for="siteurl">Payments Accepted</label></th>
                    <td><input type="text" disabled>
                        <p class="description" id="tagline-description">Enter your accepted forms of payment separated by commas<br>Example: Credit cards, Cash, Checks</p>
                    </td>
                </tr>

                <tr>
                    <th scope="row"><label for="siteurl">Founder</label></th>
                    <td><input type="text" disabled>
                        <p class="description" id="tagline-description">Enter the business founders first and last name.</p>
                    </td>
                </tr>

                <tr>
                    <th scope="row"><label for="siteurl">Date Business Founded</label></th>
                    <td><input type="text" disabled></td>
                </tr>

            </tbody>
        </table>
        <p class="submit"><input type="submit" name="btnsubmit" id="btnsubmit" class="button button-primary" value="Save Changes"></p>
    </form>
</div>