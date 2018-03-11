<?php
echo '<div id="coupon-midbanner" class="tab-pane">';
    $navigations_sql = "SELECT * FROM `navigations` WHERE `nav_id` = $current_page_id";
    $navigations_res = mysql_query ($navigations_sql) or die (mysql_error());

    if(mysql_num_rows($navigations_res) > 0) {
    	echo '<section class="panel">';
    	echo '<div class="panel-body">
    			<div class="form-horizontal form-bordered form-navigation">';

        $i = 0;

    	while ($nav_row = mysql_fetch_assoc($navigations_res)) {

            if ($i < 1) {
        		echo '
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="inputDefault">Title</label>
                        <div class="col-md-10" style="padding-bottom:15px;">
                            <input type="text" class="form-control" name="nav_url['.$nav_row["id"].']" value="'.$nav_row["nav_url"].'">
                        </div>
                        <input type="hidden" name="nav_id[]" value="'.$nav_row["id"].'">
                ';
            }
            elseif ($i < 2) {
        		echo '
                        <label class="col-md-2 control-label" for="inputDefault">Url</label>
                        <div class="col-md-10" style="padding-bottom:15px;">
                            <input type="text" class="form-control" name="nav_url['.$nav_row["id"].']" value="'.$nav_row["nav_url"].'">
                            <input type="hidden" name="nav_id[]" value="'.$nav_row["id"].'">
                        </div>
            		</div>
                ';
            }
            elseif ($i < 3) {
        		echo '
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="inputDefault">Coupon Type</label>
                        <div class="col-md-10" style="padding-bottom:15px;">
                            <input type="text" class="form-control" name="nav_url['.$nav_row["id"].']" value="'.$nav_row["nav_url"].'">
                            <input type="hidden" name="nav_id[]" value="'.$nav_row["id"].'">
                        </div>
                ';
            }
            elseif ($i < 4) {
        		echo '
                        <label class="col-md-2 control-label" for="inputDefault">Coupon Price</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="nav_url['.$nav_row["id"].']" value="'.$nav_row["nav_url"].'">
                            <input type="hidden" name="nav_id[]" value="'.$nav_row["id"].'">
                        </div>
            		</div>
                ';
            }
            elseif ($i < 5) {
        		echo '
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="inputDefault">Coupon Type</label>
                        <div class="col-md-10" style="padding-bottom:15px;">
                            <input type="text" class="form-control" name="nav_url['.$nav_row["id"].']" value="'.$nav_row["nav_url"].'">
                            <input type="hidden" name="nav_id[]" value="'.$nav_row["id"].'">
                        </div>
                ';
            }
            elseif ($i < 6) {
        		echo '
                        <label class="col-md-2 control-label" for="inputDefault">Coupon Price</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="nav_url['.$nav_row["id"].']" value="'.$nav_row["nav_url"].'">
                            <input type="hidden" name="nav_id[]" value="'.$nav_row["id"].'">
                        </div>
            		</div>
                ';
            }
            elseif ($i < 7) {
        		echo '
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="inputDefault">Coupon Type</label>
                        <div class="col-md-10" style="padding-bottom:15px;">
                            <input type="text" class="form-control" name="nav_url['.$nav_row["id"].']" value="'.$nav_row["nav_url"].'">
                            <input type="hidden" name="nav_id[]" value="'.$nav_row["id"].'">
                        </div>
                ';
            }
            elseif ($i < 8) {
        		echo '
                        <label class="col-md-2 control-label" for="inputDefault">Coupon Price</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="nav_url['.$nav_row["id"].']" value="'.$nav_row["nav_url"].'">
                            <input type="hidden" name="nav_id[]" value="'.$nav_row["id"].'">
                        </div>
            		</div>
                ';
            }
            elseif ($i < 9) {
        		echo '
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="inputDefault">Box Color</label>
                        <div class="col-md-10" style="padding-bottom:15px;">
                            <input type="text" class="form-control" name="nav_url['.$nav_row["id"].']" value="'.$nav_row["nav_url"].'">
                            <input type="hidden" name="nav_id[]" value="'.$nav_row["id"].'">
                        </div>
                    </div>
                ';
            }
            $i++;

    	}

    	echo '</div>';
    	echo '</div>';
    	echo '</section>';
	}
	else echo '';
echo '</div>';
 ?>
