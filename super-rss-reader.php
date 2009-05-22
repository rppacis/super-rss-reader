<?php
/*
Plugin Name: Super RSS Reader
Plugin URI: http://www.aakashweb.com
Description: A Flash RSS Reader for advanced and stylish publishing of RSS feeds fastly and easily with easy Setup. <a href="options-general.php?page=super-rss-reader/super-rss-reader.php">Click here</a> to go the setup page .
Author: Aakash Chakravarthy
Version: 0.5
Author URI: http://www.aakashweb.com/
*/
/*  Copyright 2009  Aakash Chakravarthy  (email : aakash.19493@gmail.com) (website : www.aakashweb.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function getPluginPath_srr() {
		$path 	= strstr(realpath(dirname(__file__)), 'wp-content');
		$path 	= str_replace('\\', '/', $path);
		return( get_bloginfo('url') . '/' . $path);
} 


function super_rss_reader_admin_page(){
	
 	// No options? No problem! We set them here.

	if ($_POST['super_rss_reader_submit']) {
	
        $options['srrBgcolor'] = $_POST['srr_bgcolor']; 
		$options['srrWidth'] = $_POST['srr_width']; 
		$options['srrHeight'] = $_POST['srr_height']; 
		$options['srrWmode'] = $_POST['srr_wmode']; 
		 
		$options['srrRssUrl'] = $_POST['srr_rssUrl']; 
		
		$options['srrShowTitleAndDescription'] = $_POST['srr_showTitleAndDescription']; 
		$options['srrTitleBgColor'] = $_POST['srr_titleBgColor']; 
		$options['srrDescriptionBgColor'] = $_POST['srr_descriptionBgColor']; 
		$options['srrFooterBgColor'] = $_POST['srr_footerBgColor']; 
		$options['srrTitleColor'] = $_POST['srr_titleColor']; 
		$options['srrDescColor'] = $_POST['srr_descColor']; 
		$options['srrTitleBarAlpha'] = $_POST['srr_titleBarAlpha']; 
		$options['srrTitleAndDescriptionBg'] = $_POST['srr_titleAndDescriptionBg']; 
		$options['srrStrechTitleImage'] = $_POST['srr_strechTitleImage']; 
		$options['srrBorderType'] = $_POST['srr_borderType']; 
		$options['srrShineType'] = $_POST['srr_shineType']; 
		
		$options['srrBackgroundImage'] = $_POST['srr_backgroundImage']; 
		$options['srrStrechBackgroundImage'] = $_POST['srr_strechBackgroundImage']; 
		$options['srrDisplayDate'] = $_POST['srr_displayDate']; 
		$options['srrDisplayDescription'] = $_POST['srr_displayDescription']; 
		$options['srrShowLogo'] = $_POST['srr_showLogo']; 
		
		$options['srrTab1Name'] = $_POST['srr_tab1Name'];
		$options['srrTab2Name'] = $_POST['srr_tab2Name']; 
		$options['srrTab3Name'] = $_POST['srr_tab3Name']; 
		$options['srrTab4Name'] = $_POST['srr_tab4Name']; 
		$options['srrTab5Name'] = $_POST['srr_tab5Name']; 
		
		$options['srrTab1Url'] = $_POST['srr_tab1Url'];
		$options['srrTab2Url'] = $_POST['srr_tab2Url'];  
		$options['srrTab3Url'] = $_POST['srr_tab3Url'];  
		$options['srrTab4Url'] = $_POST['srr_tab4Url'];  
		$options['srrTab5Url'] = $_POST['srr_tab5Url']; 
		
		$options['srrTabScroll'] = $_POST['srr_tabScroll']; 
		
		$options['srrShowUrlBox'] = $_POST['srr_showUrlBox'];  
		$options['srrShowSubscribeMenu'] = $_POST['srr_showSubscribeMenu'];  
		$options['srrScrollbarDraggerColor'] = $_POST['srr_scrollbarDraggerColor']; 
		$options['srrScrollbarBarColor'] = $_POST['srr_scrollbarBarColor']; 
		
		// And we also update the options in the Wordpress Database
		update_option("super_rss_reader", $options);
	}
	
	$options  = get_option('super_rss_reader');

?>

<div style="float:right; margin-top:20px; border-left:#666666; border-left-style:solid; border-left-width:1px; padding:10px; border-bottom-color:#666666; border-bottom-style:solid; border-bottom-width:1px; margin-right:-60px">
			  <h3>Widget Support</h3>
			  <ul>
			    <li><a href="http://forums.aakashweb.com/forum/super-rss-reader" target="_blank">Widget Support Forum</a></li>
		        <li><a href="http://www.aakashweb.com/" target="_blank">Author Website</a></li>
			    <li><a href="http://www.aakashweb.com/wordpress-plugins/super-rss-reader/index.php" target="_blank">Plugin home page</a></li>
			    <li><a href="http://wordpress.org/extend/plugins/html-javascript-adder/" target="_blank">See Updates</a></li>
			    <li><a href="http://forums.aakashweb.com/forum/html-javascript-adder" target="_blank">Report Bugs</a></li>
			    <li><a href="mailto:aakash.19493@gmail.com" target="_blank">Email the Author </a></li>
			  </ul>
			  <h3>Donate</h3>
              <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&amp;business=donations@aakashweb.com&amp;item_name=Donate Super RSS Reader an Flash based  Wordpress Plugin to develop more advanced versions&amp;amount=&amp;currency_code=USD" target="_blank"><img src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG_global.gif" alt="Donate Super RSS Reader to develop more advanced versions and serve you" border="0" align="absmiddle"></a>
<br />
<br />
              <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&amp;business=donations@aakashweb.com&amp;item_name=Donate Super RSS Reader Wordpress Plugin to develop more advanced versions&amp;amount=&amp;currency_code=USD" title="Donate Super RSS Reader Wordpress Plugin to develop more advanced versions" target="_blank">Support this Plugin !</a>
<h3>Aakash Web</h3>
			  <ul>
			    <li><a href="http://www.aakashweb.com/tools/" target="_blank">Free Flash Gadgets</a></li>
		        <li><a href="http://www.aakashweb.com/flash-generators/" target="_blank">Flash Generators</a></li>
			    <li><a href="http://www.aakashweb.com/wordpress-plugins/" target="_blank">Wordpress Plugins</a></li>
			    <li><a href="http://www.aakashweb.com/super-rss-reader/" target="_blank">Flash RSS Reader</a></li>
			    <li><a href="http://www.aakashweb.com/flv-player/" target="_blank">FLV Player</a></li>
			    <li><a href="http://www.aakashweb.com/xml-slideshow/" target="_blank">XML Image Slideshow  </a></li>
			    <li><a href="http://blog.aakashweb.com/" target="_blank">Blog</a></li>
			    <li><a href="http://forums.aakashweb.com/" target="_blank">Support Forum</a></li>
				<li><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=donations@aakashweb.com&item_name=Donate Aakash Web and Support it's Useful Products &amount=&currency_code=USD" target="_blank">Support Aakash Web</a></li>
			  </ul>
</div>

<div class="wrap">
		<form method="POST">
		<div class="icon32" id="icon-options-general"><br/></div>
		<h2><?php _e('Super RSS Reader'); ?></h2>
		<div style="padding:5px">
		  <p>
	      Welcome to Super RSS Reader Setup Page. Just change the settings of the RSS Reader and click &quot;Save Settings&quot;. Your options will be saved. After changing go to the Widget settings page and add the Super RSS Reader to the sidebar. That's all. Don't leave any field blank here except the tabs settings field. For any support <a href="http://forums.aakashweb.com/" target="_blank">click here</a> or use the links in sidebar . </p>
		  <p>Change the rss-css.css stylesheet file present in the super-rss-reader plugins directory to change the font, font size etc. </p>
		</div>
<table width="590" height="121" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="224" height="33"><span style="line-height: 30px;"><strong>Basic Settings </strong></span></td>
              <td width="326" height="40">&nbsp;</td>
            </tr>
            <tr>
              <td height="22"><label for="srr_bgcolor">BG Color</label></td>
              <td height="40"><input name="srr_bgcolor" style="width:200px" class="color {pickerFaceColor:'transparent',pickerFace:3,pickerBorder:0,pickerInsetColor:'#000000'} widefat" id="srr_bgcolor"  value="<?php echo $options['srrBgcolor']; ?>" /></td>
            </tr>
            <tr>
              <td height="22"><label for="srr_width">Width</label></td>
              <td height="40"><input name="srr_width" type="text" style="width:200px;" class="widefat" id="srr_width" value="<?php echo $options['srrWidth']; ?>">
              px<small>
              eg : 500 </small></td>
            </tr>
            <tr>
              <td height="22"><label for="srr_height">Height</label></td>
			  <td height="40"><input name="srr_height" type="text" style="width:200px;" class="widefat" id="srr_height" value="<?php echo $options['srrHeight']; ?>">
			    px
		      <small>eg : 400 </small> </td>
            </tr>
            <tr>
              <td height="22"><label for="srr_wmode">Window Mode</label></td>
              <td height="40"><select class="widefat" name="srr_wmode" id="srr_wmode" style="width:200px;">
                  <option <?php if ($options['srrWmode'] == "transparent"){ echo 'selected="selected"' ;} ?> value="transparent">transparent</option>
                  <option <?php if ($options['srrWmode'] == "opaque"){ echo 'selected="selected"' ;} ?> value="opaque">opaque</option>
              </select>              </td>
            </tr>
          </table>
		  <br><hr noshade="noshade" size="1px" />
		  <table width="590" height="71" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="245" height="33"><span style="line-height: 30px;"><strong>Feed URL Settings </strong></span></td>
              <td width="345" height="40">&nbsp;</td>
            </tr>

            <tr>
              <td><label for="srr_rssUrl">RSS Feed URL* </label></td>
              <td height="40"><input name="srr_rssUrl" type="text" style="width: 300px;" class="widefat" id="srr_rssUrl" value="<?php echo $options['srrRssUrl']; ?>"><br><small>Enter the URL of the RSS Feed here</small>
              </td>
            </tr>
          </table><br><hr noshade="noshade" size="1px" />
          <table width="564" height="402" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="225"><strong>Title and Description Bar Settings </strong></td>
              <td width="299" height="40">&nbsp;</td>
            </tr>
            <tr>
              <td height="28">Show Title and Description Bar </td>
              <td height="40"><select class="widefat" name="srr_showTitleAndDescription" id="srr_showTitleAndDescription" style="width: 200px;"><option <?php if ($options['srrShowTitleAndDescription'] == "yes"){ echo 'selected="selected"' ;} ?> value="yes">yes</option>
                  <option <?php if ($options['srrShowTitleAndDescription'] == "no"){ echo 'selected="selected"' ;} ?> value="no">no</option>
                </select></td>
            </tr>
            <tr>
              <td height="28">Title Bar BG Color</td>
              <td height="40"><input name="srr_titleBgColor" style="width:200px" class="widefat color {pickerFaceColor:'transparent',pickerFace:3,pickerBorder:0,pickerInsetColor:'#000000',hash:false}" id="srr_titleBgColor"  value="<?php echo $options['srrTitleBgColor']; ?>" /></td>
            </tr>
            <tr>
              <td height="28">Description Bar BG Color</td>
              <td height="40"><input name="srr_descriptionBgColor" style="width:200px" class="widefat color {pickerFaceColor:'transparent',pickerFace:3,pickerBorder:0,pickerInsetColor:'#000000',hash:false}" id="srr_descriptionBgColor"  value="<?php echo $options['srrDescriptionBgColor']; ?>" /></td>
            </tr>
            <tr>
              <td height="28">Footer Bar BG Color</td>
              <td height="40"><input name="srr_footerBgColor" style="width:200px" class="widefat color {pickerFaceColor:'transparent',pickerFace:3,pickerBorder:0,pickerInsetColor:'#000000',hash:false}" id="srr_footerBgColor"  value="<?php echo $options['srrFooterBgColor']; ?>" /></td>
            </tr>
            <tr>
              <td height="28">Title Text Color</td>
              <td height="40"><input name="srr_titleColor" style="width:200px" class="widefat color {pickerFaceColor:'transparent',pickerFace:3,pickerBorder:0,pickerInsetColor:'#000000',hash:false}" id="srr_titleColor"  value="<?php echo $options['srrTitleColor']; ?>" /></td>
            </tr>
            <tr>
              <td height="28">Description Text Color</td>
              <td height="40"><input name="srr_descColor" style="width:200px" class="widefat color {pickerFaceColor:'transparent',pickerFace:3,pickerBorder:0,pickerInsetColor:'#000000',hash:false}" id="srr_descColor"  value="<?php echo $options['srrDescColor']; ?>" /></td>
            </tr>
            <tr>
              <td height="44">Title, Description and Footer Bar Transparency </td>
              <td height="40"><input name="srr_titleBarAlpha" type="text" style="width:200px;" class="widefat" id="srr_titleBarAlpha" value="<?php echo $options['srrTitleBarAlpha']; ?>" />
              <small> Default : 100 </small></td>
            </tr>
            <tr>
              <td height="44">Title and Description Bar Background Image </td>
              <td height="40"><input name="srr_titleAndDescriptionBg" type="text" style="width:200px;" class="widefat" id="srr_titleAndDescriptionBg" value="<?php echo $options['srrTitleAndDescriptionBg']; ?>">
              <small> Default : None </small></td>
            </tr>
            <tr>
              <td height="44">Strech Title and Description Bar BG Image </td>
              <td height="40"><select class="widefat" name="srr_strechTitleImage" id="srr_strechTitleImage" style="width:200px;">
                <option <?php if ($options['srrStrechTitleImage'] == "yes"){ echo 'selected="selected"' ;} ?> value="yes">yes</option>
                <option <?php if ($options['srrStrechTitleImage'] == "no"){ echo 'selected="selected"' ;} ?> value="no">no</option>
              </select>
              <small> Default : Yes </small></td>
            </tr>
            <tr>
              <td>Title and Footer Bar Border Type </td>
              <td height="40"><select class="widefat" name="srr_borderType" id="srr_borderType" style="width:200px;">
                <option <?php if ($options['srrBorderType'] == "round"){ echo 'selected="selected"' ;} ?> value="round">round</option>
                <option <?php if ($options['srrBorderType'] == "square"){ echo 'selected="selected"' ;} ?> value="square">square</option>
              </select>
              <small> Default : Round </small></td>
            </tr>
            <tr>
              <td>Title and Description Bar Shine type </td>
              <td height="40"><select class="widefat" name="srr_shineType" id="srr_shineType" style="width:200px;">
                <option <?php if ($options['srrShineType'] == "1"){ echo 'selected="selected"' ;} ?> value="1">1</option>
                <option <?php if ($options['srrShineType'] == "2"){ echo 'selected="selected"' ;} ?> value="2">2</option>
				<option <?php if ($options['srrShineType'] == "3"){ echo 'selected="selected"' ;} ?> value="3">3</option>
                <option <?php if ($options['srrShineType'] == "4"){ echo 'selected="selected"' ;} ?> value="4">4</option>
				<option <?php if ($options['srrShineType'] == "5"){ echo 'selected="selected"' ;} ?> value="5">5</option>
                <option <?php if ($options['srrShineType'] == "6"){ echo 'selected="selected"' ;} ?> value="6">6</option>
				<option <?php if ($options['srrShineType'] == "7"){ echo 'selected="selected"' ;} ?> value="7">7</option>
              </select><br />
                <small> No Shine : 7 | Other Shines <a onclick="window.open('<?php echo getPluginPath_srr().'/shine-types.php?shineType=1';  ?>', 'popupwindow', 'scrollbars=yes,width=420,height=450');return true" style="color:#006699; cursor:pointer; text-decoration:underline">See here</a> </small></td>
            </tr>
          </table>
          <br><hr noshade="noshade" size="1px" />
          <table width="590" height="148" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="226" height="30"><strong>Feed Display Settings </strong></td>
              <td width="324" height="40">&nbsp;</td>
            </tr>
            <tr>
              <td height="22">Feed Displayer Background Image </td>
              <td height="40"><input name="srr_backgroundImage" type="text" style="width: 200px;" class="widefat" id="srr_backgroundImage" value="<?php echo $options['srrBackgroundImage']; ?>"><small> Default : None </small></td>
            </tr>
            <tr>
              <td height="24">Strech Background Image </td>
              <td height="40"><select class="widefat" name="srr_strechBackgroundImage" id="srr_strechBackgroundImage" style="width:200px">
                <option <?php if ($options['srrStrechBackgroundImage'] == "yes"){ echo 'selected="selected"' ;} ?> value="yes">yes</option>
                <option <?php if ($options['srrStrechBackgroundImage'] == "no"){ echo 'selected="selected"' ;} ?> value="no">no</option>
              </select>

              <small> Default : Yes </small></td>
            </tr>
            <tr>
              <td height="24">Display Date </td>
              <td height="40"><select class="widefat" name="srr_displayDate" id="srr_displayDate" style="width:200px">
                <option value="yes" <?php if ($options['srrDisplayDate'] == "yes"){ echo 'selected="selected"' ;} ?>>yes</option>
                <option <?php if ($options['srrDisplayDate'] == "no"){ echo 'selected="selected"' ;} ?> value="no">no</option>
              </select>

              <small> Default : Yes </small></td>
            </tr>
            <tr>
              <td height="24">Display Description </td>
              <td height="40"><select class="widefat" name="srr_displayDescription" id="srr_displayDescription" style="width: 200px;">
                <option <?php if ($options['srrDisplayDescription'] == "yes"){ echo 'selected="selected"' ;} ?> value="yes">yes</option>
                <option <?php if ($options['srrDisplayDescription'] == "no"){ echo 'selected="selected"' ;} ?> value="no">no</option>
              </select>

              <small> Default : Yes </small></td>
            </tr>
            <tr>
              <td>Show Logo in Background </td>
              <td height="40"><select class="widefat" name="srr_showLogo" id="srr_showLogo" style="width: 200px;">
                <option <?php if ($options['srrShowLogo'] == "yes"){ echo 'selected="selected"' ;} ?> value="yes">yes</option>
                <option <?php if ($options['srrShowLogo'] == "no"){ echo 'selected="selected"' ;} ?> value="no">no</option>
              </select>

              <small> Default : Yes </small></td>
            </tr>
          </table><br><hr noshade="noshade" size="1px" />
          <table width="590" height="144" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="245"><strong>Tab Settings </strong></td>
              <td width="345" height="40"><small>Note : Don't enter anything if you don't want tabs </small></td>
            </tr>
            <tr>
              <td height="22">Tab 1 Name </td>
              <td height="40"><input name="srr_tab1Name" type="text" style="width: 200px;" class="widefat" id="srr_tab1Name" value="<?php echo $options['srrTab1Name']; ?>"></td>
            </tr>
            <tr>
              <td height="22">Tab 2 Name </td>
              <td height="40"><input name="srr_tab2Name" type="text" style="width: 200px;" class="widefat" id="srr_tab2Name" value="<?php echo $options['srrTab2Name']; ?>"></td>
            </tr>
            <tr>
              <td height="22">Tab 3 Name </td>
              <td height="40"><input name="srr_tab3Name" type="text" style="width: 200px;" class="widefat" id="srr_tab3Name" value="<?php echo $options['srrTab3Name']; ?>"></td>
            </tr>
            <tr>
              <td height="22">Tab 4 Name </td>
              <td height="40"><input name="srr_tab4Name" type="text" style="width: 200px;" class="widefat" id="srr_tab4Name" value="<?php echo $options['srrTab4Name']; ?>"></td>
            </tr>
            <tr>
              <td height="22">Tab 5 Name </td>
              <td height="40"><input name="srr_tab5Name" type="text" style="width: 200px;" class="widefat" id="srr_tab5Name" value="<?php echo $options['srrTab5Name']; ?>"></td>
            </tr>
          </table><br><hr noshade="noshade" size="1px" />
          <table width="590" height="145" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="247"><strong>Tab Feed URL's </strong></td>
              <td width="343" height="40">&nbsp;</td>
            </tr>
            <tr>
              <td height="22">Tab 1 Feed URL </td>
              <td height="40"><input name="srr_tab1Url" type="text" style="width: 200px;" class="widefat" id="srr_tab1Url" value="<?php echo $options['srrTab1Url']; ?>"></td>
            </tr>
            <tr>
              <td height="22">Tab 2 Feed URL </td>
              <td height="40"><input name="srr_tab2Url" type="text" style="width: 200px;" class="widefat" id="srr_tab2Url" value="<?php echo $options['srrTab2Url']; ?>"></td>
            </tr>
            <tr>
              <td height="22">Tab 3 Feed URL </td>
              <td height="40"><input name="srr_tab3Url" type="text" style="width: 200px;" class="widefat" id="srr_tab3Url" value="<?php echo $options['srrTab3Url']; ?>"></td>
            </tr>
            <tr>
              <td height="22">Tab 4 Feed URL </td>
              <td height="40"><input name="srr_tab4Url" type="text" style="width: 200px;" class="widefat" id="srr_tab4Url" value="<?php echo $options['srrTab4Url']; ?>"></td>
            </tr>
            <tr>
              <td height="22">Tab 5 Feed URL </td>
              <td height="40"><input name="srr_tab5Url" type="text" style="width: 200px;" class="widefat" id="srr_tab5Url" value="<?php echo $options['srrTab5Url']; ?>"></td>
            </tr>
          </table><br>
          <table width="590" height="24" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="245" height="24">Tabs Scroll Type </td>
              <td width="345" height="40"><select class="widefat" name="srr_tabScroll" id="srr_tabScroll" style="width: 200px;">
                <option <?php if ($options['srrTabScroll'] == "mouse"){ echo 'selected="selected"' ;} ?> value="mouse">mouse</option>
                <option <?php if ($options['srrTabScroll'] == "button"){ echo 'selected="selected"' ;} ?> value="button">button</option>
              </select>
              <small> Default : Mouse </small></td>
            </tr>
          </table><br><hr noshade="noshade" size="1px" />
          <table width="677" height="111" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="224"><strong>Misc Settings </strong></td>
              <td width="413" height="40">&nbsp;</td>
            </tr>
            <tr>
              <td height="24">Show URL Box </td>
              <td height="40"><select class="widefat" name="srr_showUrlBox" id="srr_showUrlBox" style="width:200px">
                <option  value="yes" <?php if ($options['srrShowUrlBox'] == "yes"){ echo 'selected="selected"' ;} ?>>yes</option>
                <option value="no" <?php if ($options['srrShowUrlBox'] == "no"){ echo 'selected="selected"' ;} ?> >no</option>
              </select>
              <small> Default : Yes </small></td>
            </tr>
            <tr>
              <td height="24">Show Subscribe Menu </td>
              <td height="40"><select class="widefat" name="srr_showSubscribeMenu" id="srr_showSubscribeMenu" style="width:200px">
                <option value="yes" <?php if ($options['srrShowSubscribeMenu'] == "yes"){ echo 'selected="selected"' ;} ?> >yes</option>
              <option <?php if ($options['srrShowSubscribeMenu'] == "no"){ echo 'selected="selected"' ;} ?> value="no">no</option> </select><small> Default : Yes </small></td>
            </tr>
            <tr>
              <td height="22">Scroll Bar Dragger Color </td>
              <td height="40"><input name="srr_scrollbarDraggerColor" style="width:200px" class="color {pickerFaceColor:'transparent',pickerFace:3,pickerBorder:0,pickerInsetColor:'#000000',hash:false} widefat" id="srr_scrollbarDraggerColor"  value="<?php echo $options['srrScrollbarDraggerColor']; ?>" />
              <small> Default : Black </small></td>
            </tr>
            <tr>
              <td>Scroll Bar Bar Color </td>
              <td height="40"><input name="srr_scrollbarBarColor" style="width:200px" class="color {pickerFaceColor:'transparent',pickerFace:3,pickerBorder:0,pickerInsetColor:'#000000',hash:false} widefat" id="srr_scrollbarBarColor"  value="<?php echo $options['srrScrollbarBarColor']; ?>" />
              <small> Default : White</small></td>
            </tr>
          </table>

		  <p style="line-height: 30px;">
		    <label for="Submit"></label><span class="submit">
		    <input type="submit" name="super_rss_reader_submit" value="Save Settings" id="super_rss_reader_submit"></span>
		    <label for="Submit"></label>
		  </p>
		</form>
		
<h2>Next ...</h2>
<p>Go to the Widgets page and add the Super RSS Reader to the sidebar. <a href="widgets.php">Click here</a> to go the widgets page. After adding the widget, expand the widget and give some title to the RSS Reader.</p>
<h2>Or ...</h2>
Add the following PHP Code anywhere in the theme file .
<p class="code">&lt;?php superRSSReader (); ?&gt; </p>
<p class="code">&nbsp;</p>
</div>
<?php $jscolorUrl= getPluginPath_srr().'/jscolor/jscolor.js' ?>
<script type="text/javascript" src="<?php echo $jscolorUrl ?>"></script>		
<hr size="1"  noshade="NOSHADE"/>

<div><a href="http://www.aakashweb.com/" target="_blank"><img src="<?php echo getPluginPath_srr().'/images/aakashweb-logo.png'; ?>"  alt="Aakash Web "width="97" height="37" border="0" align="right" title="Visit Aakash Web" /></a><a href="http://forums.aakashweb.com/forum/super-rss-reader/">Report Bugs</a> | <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&amp;business=donations@aakashweb.com&amp;item_name=Donate Aakash Web and Support it's Useful Products &amp;amount=&amp;currency_code=USD" target="_blank">Quick Donate</a> | <a href="http://www.aakashweb.com/">www.aakashweb.com</a>  </div> 
<br />
<br />
<?php
}


//Add the options page under the Options tab in the admin panel
function super_rss_reader_addpage() {
    add_submenu_page('options-general.php', 'Super RSS Reader', 'Super RSS Reader', 10, __FILE__, 'super_rss_reader_admin_page');
}
add_action('admin_menu', 'super_rss_reader_addpage');
///////////////////////////////////
function super_rss_reader($args) {
	extract($args);
	// Now we sniff around to see if there are
	// any preset options
	$options = get_option("super_rss_reader");
    
	// Display the widget!
	echo $before_widget;
	echo $before_title;
	echo $options['srrTitle'];
	echo $after_title;
	
	if ($options['bfContent'] !=""){
	echo $options['bfContent'];
	}
    //Our Widget Content 
	
	$srrPhpUrl=getPluginPath_srr().'/loadXML.php';
	$srrCssUrl=getPluginPath_srr().'/rss-css.css';

	if ($options['srrTab1Name']!=""){
	$srrTab1 = '&tab1Name='.$options['srrTab1Name'];
	}
	if ($options['srrTab2Name']!=""){
	$srrTab2 = '&tab2Name='.$options['srrTab2Name'];
	}
	if ($options['srrTab3Name']!=""){
	$srrTab3 = '&tab3Name='.$options['srrTab3Name'];
	}
	if ($options['srrTab4Name']!=""){
	$srrTab4 = '&tab4Name='.$options['srrTab4Name'];
	}
	if ($options['srrTab5Name']!=""){
	$srrTab5 = '&tab5Name='.$options['srrTab5Name'];
	}
	
	$srrFlashVars= 'phpURL='. $srrPhpUrl . '&cssUrl='.$srrCssUrl.'&rssUrl='. $options['srrRssUrl'].'&titleBgColor='. $options['srrTitleBgColor'].'&descriptionBgColor='. $options['srrDescriptionBgColor'] . '&footerBgColor='.$options['srrFooterBgColor'].'&titleColor='.$options['srrTitleColor'].'&descColor='.$options['srrDescColor'].'&showTitleAndDescription='.$options['srrShowTitleAndDescription'].'&titleBarAlpha='.$options['srrTitleBarAlpha']. '&titleAndDescriptionBg='. $options['srrTitleAndDescriptionBg'].'&strechTitleImage='.$options['srrStrechTitleImage'].'&borderType='. $options['srrBorderType'].'&shineType='.$options['srrShineType'].'&backgroundImage='.$options['srrBackgroundImage'].'&strechBackgroundImage='.$options['srrStrechBackgroundImage'].'&displayDate='.$options['srrDisplayDate'].'&displayDescription='.$options['srrDisplayDescription'].'&showLogo='.$options['srrShowLogo'].'&tabScroll='.$options['srrTabScroll'].'&showUrlBox='.$options['srrShowUrlBox'].'&showSubscribeMenu='.$options['srrShowSubscribeMenu'].'&scrollbarDraggerColor='.$options['srrScrollbarDraggerColor'].'&scrollbarBarColor='.$options['srrScrollbarBarColor'] . '&tab1Url=' .$options['srrTab1Url']. '&tab2Url=' .$options['srrTab2Url']. '&tab3Url=' .$options['srrTab3Url']. '&tab4Url=' .$options['srrTab4Url']. '&tab5Url=' .$options['srrTab5Url'].$srrTab1.$srrTab2.$srrTab3.$srrTab4.$srrTab5 ;
	
	echo '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="';
	echo $options['srrWidth'];
	echo '" height="';
	echo $options['srrHeight'];
	echo '" wmode="';
	echo $options['srrWmode'];
	echo '" ><param name="movie" value="';
	echo getPluginPath_srr().'/rssreader.swf"/>';
	echo '<param name="quality" value="High"/><param name="wmode" value="';
	echo $options['srrWmode'].'"/>';
	echo '<param name="bgcolor" value="';
	echo $options['srrBgcolor'];
	echo '"/><param name="flashvars" value="';
	echo $srrFlashVars . '"';
	echo '<embed src="'. getPluginPath_srr().'/rssreader.swf" '.'wmode="'.$options['srrWmode'].'" width="'.$options['srrWidth'].'" height="'.$options['srrHeight'].'" quality="high" allowscriptaccess="always" bgcolor="'. $options['srrBgcolor'] .'" flashvars="'. $srrFlashVars.'" ></embed></object>';

	if ($options['afContent'] !=""){
	echo $options['afContent'];
	}
    echo '<!-- Super RSS Reader Powered by Aakash Web | Aakash Chakravarthy ( www.aakashweb.com ) -->';
    echo $after_widget;
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function super_rss_reader_control() {
	
	// We need to grab any preset options
	$options = get_option("super_rss_reader");
	
	// No options? No problem! We set them here.
	if (!is_array( $options )) {
		$options = array(
	  	'title' => 'Super RSS Reader title Goes here',
	  	);
	}      
	
	// Is the user has set the options and clicked save,
	// Then we grab them using the $_POST function.
	if ($_POST['srr_submit']) {
		$options['srrTitle'] = $_POST['srr_title'];
		$options['bfContent'] = $_POST['srr_bfContent'];
		$options['afContent'] = $_POST['srr_afContent'];  
		// And we also update the options in the Wordpress Database
		update_option("super_rss_reader", $options);
	}
	
?>

<p>
	<label for="srr_title"> Title:</label>
	<input name="srr_title" class="widefat" type="text" id="srr_title" value="<?php echo $options['srrTitle'] ;?>" style="width:250px"/><br />
	<label for="srr_bfContent">Some Text Before the Reader:</label>
	<input name="srr_bfContent" class="widefat" type="text" id="srr_bfContent" value="<?php echo $options['bfContent'] ;?>" style="width:250px"/><br />
<div class="widefat" style="background-color:#FFFFF4; width:240px; height:150px;">RSS Reader</div><br />
	<label for="srr_afContent">Some Text After the Reader:</label>
	<input name="srr_afContent" class="widefat" type="text" id="srr_afContent" value="<?php echo $options['afContent'] ;?>" style="width:250px"/>

<input type="hidden"  id="srr_submit" name="srr_submit" value="1" />
</p>
<?php
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function super_rss_reader_init() {
	// These are the Wordpress functions which will register
	// the widget, and also the widget control - or
	// 'options', to you and me.
	register_sidebar_widget('Super RSS Reader', 'super_rss_reader');
	register_widget_control('Super RSS Reader', 'super_rss_reader_control');
}

add_action("plugins_loaded", "super_rss_reader_init");

function superRSSReader (){
	// Now we sniff around to see if there are
	// any preset options
	$options = get_option("super_rss_reader");
	
	// If no options have been set, we need to set them
	
	$srrPhpUrl=getPluginPath_srr().'/loadXML.php';
	$srrCssUrl=getPluginPath_srr().'/rss-css.css';

	if ($options['srrTab1Name']!=""){
	$srrTab1 = '&tab1Name='.$options['srrTab1Name'];
	}
	if ($options['srrTab2Name']!=""){
	$srrTab2 = '&tab2Name='.$options['srrTab2Name'];
	}
	if ($options['srrTab3Name']!=""){
	$srrTab3 = '&tab3Name='.$options['srrTab3Name'];
	}
	if ($options['srrTab4Name']!=""){
	$srrTab4 = '&tab4Name='.$options['srrTab4Name'];
	}
	if ($options['srrTab5Name']!=""){
	$srrTab5 = '&tab5Name='.$options['srrTab5Name'];
	}
	
	$srrFlashVars= 'phpURL='. $srrPhpUrl . '&cssUrl='.$srrCssUrl.'&rssUrl='. $options['srrRssUrl'].'&titleBgColor='. $options['srrTitleBgColor'].'&descriptionBgColor='. $options['srrDescriptionBgColor'] . '&footerBgColor='.$options['srrFooterBgColor'].'&titleColor='.$options['srrTitleColor'].'&descColor='.$options['srrDescColor'].'&showTitleAndDescription='.$options['srrShowTitleAndDescription'].'&titleBarAlpha='.$options['srrTitleBarAlpha']. '&titleAndDescriptionBg='. $options['srrTitleAndDescriptionBg'].'&strechTitleImage='.$options['srrStrechTitleImage'].'&borderType='. $options['srrBorderType'].'&shineType='.$options['srrShineType'].'&backgroundImage='.$options['srrBackgroundImage'].'&strechBackgroundImage='.$options['srrStrechBackgroundImage'].'&displayDate='.$options['srrDisplayDate'].'&displayDescription='.$options['srrDisplayDescription'].'&showLogo='.$options['srrShowLogo'].'&tabScroll='.$options['srrTabScroll'].'&showUrlBox='.$options['srrShowUrlBox'].'&showSubscribeMenu='.$options['srrShowSubscribeMenu'].'&scrollbarDraggerColor='.$options['srrScrollbarDraggerColor'].'&scrollbarBarColor='.$options['srrScrollbarBarColor'] . '&tab1Url=' .$options['srrTab1Url']. '&tab2Url=' .$options['srrTab2Url']. '&tab3Url=' .$options['srrTab3Url']. '&tab4Url=' .$options['srrTab4Url']. '&tab5Url=' .$options['srrTab5Url'].$srrTab1.$srrTab2.$srrTab3.$srrTab4.$srrTab5 ;
	
	echo '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="';
	echo $options['srrWidth'];
	echo '" height="';
	echo $options['srrHeight'];
	echo '" wmode="';
	echo $options['srrWmode'];
	echo '" ><param name="movie" value="';
	echo getPluginPath_srr().'/rssreader.swf"/>';
	echo '<param name="quality" value="High"/><param name="wmode" value="';
	echo $options['srrWmode'].'"/>';
	echo '<param name="bgcolor" value="';
	echo $options['srrBgcolor'];
	echo '"/><param name="flashvars" value="';
	echo $srrFlashVars . '"';
	echo '<embed src="'. getPluginPath_srr().'/rssreader.swf" '.'wmode="'.$options['srrWmode'].'" width="'.$options['srrWidth'].'" height="'.$options['srrHeight'].'" quality="high" allowscriptaccess="always" bgcolor="'. $options['srrBgcolor'] .'" flashvars="'. $srrFlashVars.'" ></embed></object>';
    echo '<!--Super RSS Reader Powered by Aakash Web | Aakash Chakravarthy ( www.aakashweb.com ) -->';

}
?>