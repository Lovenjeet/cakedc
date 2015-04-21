<!-- Content -->
  <div id="content">
    <div id="container">
      <!-- Left Content -->
      <form class="form" action="<?php //current_url() ?>" method="post" id="frm">
        <input type="hidden" name="trigd" id="trigd" value="<?php //set_value('trigd',$trigd) ?>" />
        <input type="hidden" name="cttd" id="cttd" value="<?php //set_value('cttd',$cttd) ?>" />
        <!-- tab1 start -->
        <div id="tab1" class="tab">
          <h1>1. Create your account</h1>
          <!-- form -->
          <fieldset>
          <div class="grid-12-12">
            <label class="form-lbl">Username<em class="form-req">*</em></label>
            <input type="text" class="form-txt" value="Fill up the field" />
            <!--<span class="form-msg-error">Error Message</span>-->
          </div>
          <div class="grid-12-12">
            <label class="form-lbl">Password<em class="form-req">*</em></label>
            <input type="text" class="form-txt" value="Fill up the field" />
          </div>
          <div class="grid-12-12">
            <label class="form-lbl">E-mail adress<em class="form-req">*</em></label>
            <input type="text" class="form-txt" value="Fill up the field" />
          </div>
          </fieldset>
          <!--/ end form -->
          <table class="previous-next"  border="0" cellpadding="0">
            <tr>
              <td class="form-element">&nbsp;</td>
              <td class="form-element">&nbsp;</td>
              <td class="form-element"><input type="submit" name="Submit" class="search-button" value="Next Step" /></td>
            </tr>
          </table>
        </div>
        <!-- tab1 end -->
        <!-- tab2 start -->
        <div id="tab2" class="tab">
          <h1>2. Select your template</h1>
          <!-- form -->
          <fieldset>
          <div class="grid-12-12">
            <label class="form-lbl">Username<em class="form-req">*</em></label>
            <input type="text" class="form-txt" value="Fill up the field" />
            <!--<span class="form-msg-error">Error Message</span>-->
          </div>
          <div class="grid-12-12">
            <label class="form-lbl">Password<em class="form-req">*</em></label>
            <input type="text" class="form-txt" value="Fill up the field" />
          </div>
          <div class="grid-12-12">
            <label class="form-lbl">E-mail adress<em class="form-req">*</em></label>
            <input type="text" class="form-txt" value="Fill up the field" />
          </div>
          </fieldset>
          <!--/ end form -->
          <table class="previous-next"  border="0" cellpadding="0">
            <tr>
              <td class="form-element">&nbsp;</td>
              <td class="form-element">&nbsp;</td>
              <td class="form-element"><input type="submit" name="Submit" class="search-button" value="Next Step" /></td>
            </tr>
          </table>
        </div>
        <!-- tab2 end -->
        <!-- tab3 start -->
        <div id="tab3" class="tab">
          <h1>3. Enter your content</h1>
          <!-- form -->
          <fieldset>
          <div id="navigation"> <a class="button" href="#ct1" id="ctt1"><span class="pen icon"></span>Company Details</a> <a class="button" href="#ct2" id="ctt2"><span class="plus icon"></span>Add Page</a> <a class="button" href="#ct3" id="ctt3"><span class="book icon"></span>Pages</a> <a class="button" href="#ct4" id="ctt4"><span class="pin icon"></span>Map</a> <a class="button" href="#ct5" id="ctt5"><span class="cog icon"></span>Settings</a> </div>
          <br />
          <div id="ct1">
            <div class="grid-12-12">
              <label class="form-lbl">Company Name</label>
              <input name="company_name" id="company_name" type="text" maxlength="64" class="form-txt" value="<?php //set_value('company_name',$sd['company_name']) ?>" />
              <!--<span class="form-msg-error">Error Message</span>-->
            </div>
            <div class="grid-12-12">
              <label class="form-lbl">Fixed Line<em class="form-req">*</em></label>
              <input name="phone" id="phone" type="text" maxlength="64" class="form-txt" value="<?php //set_value('phone',$sd['phone']) ?>" />
            </div>
            <div class="grid-12-12">
              <label class="form-lbl">Mobile<em class="form-req">*</em></label>
              <input name="mobile" id="mobile" type="text" maxlength="64" class="form-txt" value="<?php //set_value('mobile',$sd['mobile']) ?>" />
            </div>
            <div class="grid-12-12">
              <label class="form-lbl">Email<em class="form-req">*</em></label>
              <input name="email" id="email" type="text" maxlength="64" class="form-txt" value="<?php //set_value('email',$sd['email']) ?>" />
            </div>
            <div class="grid-12-12">
              <label class="form-lbl">Address<em class="form-req">*</em></label>
              <input name="address" id="address" type="text" maxlength="64" class="form-txt" value="<?php //set_value('address',$sd['address']) ?>" />
            </div>
            <div class="grid-12-12">
              <label class="form-lbl">Zip code<em class="form-req">*</em></label>
              <input name="zip" id="zip" type="text" maxlength="64" class="form-txt" value="<?php //set_value('zip',$sd['zip']) ?>" />
            </div>
            <div class="grid-12-12">
              <label class="form-lbl">City<em class="form-req">*</em></label>
              <input name="city" id="city" type="text" maxlength="64" class="form-txt" value="<?php //set_value('city',$sd['city']) ?>" />
            </div>
            <div class="grid-12-12">
              <label class="form-lbl">City<em class="form-req">*</em></label>
              <input name="country" id="country" type="text" maxlength="64" class="form-txt" value="<?php //set_value('country',$sd['country']) ?>" />
            </div>
          </div>
          <div id="ct2">
            <div class="grid-12-12">
              <label class="form-lbl">Page Title<em class="form-req">*</em></label>
              <input name="page_ttl" id="page_ttl" type="text" maxlength="64" class="form-txt" value="<?php //set_value('page_ttl') ?>" />
              <?php //form_error('page_ttl') ?>
            </div>
            <div class="grid-12-12">
              <label class="form-lbl">Page Content</label>
              <textarea class="mce" name="page_ct"><?php //set_value('page_ct') ?>
</textarea>
            </div>
            <div class="grid-12-12">
              <label class="form-lbl">
              <input type="checkbox" name="page_top" value="1" <?php //set_checkbox('page_top','1',TRUE) ?> />
              Include in top menu </label>
            </div>
            <div class="grid-12-12">
              <label class="form-lbl">
              <input type="checkbox" name="page_footer" value="1" <?php //set_checkbox('page_footer','1',TRUE) ?> />
              Include in footer menu </label>
            </div>
            <div class="grid-12-12">
              <input type="hidden" name="page_insert" id="page_insert" value="0" />
              <a class="button" onclick="$('#page_insert').val('1'); $('#frm').submit();">Save Page</a> </div>
          </div>
          <div id="ct3">
		  	<input type="hidden" name="move_index" id="move_index" value="0" />
		  	<input type="hidden" name="to_move_up" id="to_move_up" value="0" />			
			<input type="hidden" name="to_move_down" id="to_move_down" value="0" />
			<input type="hidden" name="to_delete" id="to_delete" value="0" />			
            <?php //foreach($sd['contents'] as $k=>$v): ?>
            <div class="grid-12-12">
              <label class="form-lbl acot">
              <?php //$v['title'] ?>
              <em class="form-req">*</em></label>
              <div class="acoc">
			  	<div style="margin-left: 10px;">
					<?php //if($k): ?>										
					<a class="button moveup" id="moveup<?php //$k ?>">Move Up</a>
					<?php //endif; ?>
					<?php //if($k+1!=count($sd['contents'])): ?>					
					<a class="button movedown" id="movedown<?php //$k ?>">Move Down</a>					
					<?php //endif; ?>
					<?php //if($v['slug']!='index' && $v['slug']!='contact'): ?>
					<a class="button delete" id="delete<?php //$k ?>">Delete</a>
					<?php //endif; ?>					
				</div>
                <input name="<?php //$v['slug'] ?>_title" type="text" maxlength="64" class="form-txt" value="<?php //set_value($v['slug'].'_title',$v['title']) ?>" />
                <br />
                <textarea class="mce" name="<?php //$v['slug'] ?>_content"><?php //set_value($v['slug'].'_content',$v['content']) ?>
</textarea>
				<br />
				<label class="form-lbl">
					<input type="checkbox" name="<?php //$v['slug'] ?>_include_in_top" value="1" <?php //set_checkbox( $v['slug'].'_include_in_top','1',$v['top']) ?> id="include_top<?php //$k ?>" class="include_top" />
					Shown in Top Menu
				</label>
				<label class="form-lbl">
					<input type="checkbox" name="<?php //$v['slug'] ?>_include_in_footer" value="1" <?php //set_checkbox( $v['slug'].'_include_in_footer','1',$v['footer']) ?> id="include_footer<?php //$k ?>" class="include_footer" />
					Shown in Footer Menu
				</label>
              </div>
            </div>
            <?php //endforeach; ?>
          </div>
          <div id="ct4">
            <div class="grid-12-12">
              <label class="form-lbl">Address<em class="form-req">*</em></label>
              <input name="map_location" type="text" maxlength="64" class="form-txt" value="<?php //set_value('map_location',$sd['map_location']) ?>" />
            </div>
            <div class="grid-12-12">
              <label class="form-lbl">Map API Key<em class="form-req">*</em></label>
              <input name="map_key" type="text" maxlength="255" class="form-txt" value="<?php //set_value('map_key',$sd['map_key']) ?>" />
              <p style="font-size: 12px; margin-left: 10px;">You will find your key at <a href="http://code.google.com/apis/maps/signup.html">Google Maps</a></p>
            </div>
          </div>
          <div id="ct5">
            <div class="grid-12-12">
              <label class="form-lbl">Logo : <span id="logo_current">
              <?php //$sd['logo'] ?>
              </span></label>
              <input id="file_upload" name="file_upload" type="file" />
            </div>
            <div class="grid-12-12">
              <label class="form-lbl">Footer</label>
              <textarea class="mce" id="footer_text" name="footer_text"><?php //set_value('footer_text',$sd['footer_text']) ?>
</textarea>
            </div>
          </div>
          </fieldset>
          <table class="previous-next"  border="0" cellpadding="0">
            <tr>
              <td class="form-element">&nbsp;</td>
              <td class="form-element">&nbsp;</td>
              <td class="form-element"><input type="submit" name="Submit" class="search-button" value="Next Step" /></td>
            </tr>
          </table>
        </div>
        <!-- tab3 end -->
        <!-- tab4 start -->
        <div id="tab4">
		  <h1>4. Get mobile site</h1>
          <div class="grid-12-12">
           	<a href="<?php //site_url('sites/download') ?>" class="button">Download as archive</a>
          </div>
        </div>
        <!-- tab4 end -->
      </form>
      <!-- Right Content -->
      <div id="right">
        <div id="mobiletemplate">
          <iframe width="317" height="473" src="<?php //site_url('sites') ?>" id="mobileframe" frameborder="0"></iframe>
        </div>
      </div>
    </div>
    <!--/end container -->
  </div>
  <!--/end content inner -->