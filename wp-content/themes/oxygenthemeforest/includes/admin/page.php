							<!-- BEGIN .theme_page_settings -->
							<div id="theme_page_settings">
								<form method="post" action=""  id="page_settings">
									<input type="hidden" name="action" value="page_settings"/>
									<table>
										<tr class="item">
											<td colspan="2">
												<div>
													<p class="label-wide"><b>Set up Your Homepage and post page!</b></p>
												</div>
												<div>
													<?php
														$homepage = get_option('show_on_front');
														$meta = get_post_custom_values("_wp_page_template",get_option( 'page_on_front'));
														if($homepage == "page" && $meta[0] == "template-homepage.php") { $has_homepage=true; } else { $has_homepage=false; }
														if($has_homepage) {
															?>
															<ul style="margin:0 0 0 33px;">
																<li>Front page: <a href="<?php echo get_permalink(get_option( 'page_on_front')); ?>"><?php echo get_the_title(get_option( 'page_on_front')); ?></a></li>
																<li>Blog page: <a href="<?php echo get_permalink(get_option( 'page_for_posts')); ?>"><?php echo get_the_title(get_option( 'page_for_posts')); ?></a></li>
															</ul>
															<?php
														}
														elseif($homepage == "page") {
															?>
															<div class="element">
																<div class="content">
																	<div class="text">
															<p><b>You have not selected the correct template page for homepage.</b></p>
															<p>Please make sure, you choose template "Homepage".</p>
															<br/>
															<ul>
																<li>Current front page: <a href="<?php echo get_permalink(get_option( 'page_on_front')); ?>"><?php echo get_the_title(get_option( 'page_on_front')); ?></a></li>
																<li>Current blog page: <a href="<?php echo get_permalink(get_option( 'page_for_posts')); ?>"><?php echo get_the_title(get_option( 'page_for_posts')); ?></a></li>
															</ul>
																	</div>
																</div>
															</div>
															<?php
															} else {
															?>
															<div class="element">
																<div class="content">
																	<div class="text">
																		<p><b>You have NOT enabled homepage.</b></p>
																		<p>To use custom homepage, you must first create two <a href="<?php echo home_url();?>/wp-admin/post-new.php?post_type=page">new pages</a>, and assign none template to one of them and  template "<b>Homepage</b>" to the other. Give each page a title, but avoid adding any text.</p>
																		<p>Then enable homepage  in <a href="<?php  echo home_url();?>/wp-admin/options-reading.php">wordpress reading settings</a> (See "Front page displays" option). Select your previously created pages from both dropdowns and save changes.</p>
																	</div>
																</div>
															</div>
															<?php
															}
															?>
												</div>
	
											</td>
										</tr>
										
										<tr class="item">
											<td class="label">
												<span>Add header logo image</span>
												<a href="#" class="info"><img src="<?php echo THEME_IMAGE_URL; ?>control-panel-images/ico-info-1.png" alt="" width="10" height="11" /></a>
													<?php echo orange_themes_info_message("Suggested image size is 461x44px");?>

											</td>
											<td class="setting">
												<?php
													$theme_logo = get_option("".$theme_name."_logo");
												?>
												<input class="upload input-text-2" type="text" name="logo_upload" id="logo_upload" value="<?php echo $theme_logo;?>" />
												<div id="logo_upload_button" class="upload-button upload-logo" style="padding: 10px 0 0 15px;"><a><img src="<?php echo THEME_IMAGE_CPANEL_URL;?>browse-1.png"/></a></div>
												<script type="text/javascript">
													jQuery(document).ready(function($){ orangethemes.loadUploader(jQuery("div#logo_upload_button"), "<?php echo THEME_FUNCTIONS_URL;?>upload-handler.php", "<?php echo THEME_UPLOADS_URL;?>");});
												</script>
											
											</td>
										</tr>
										<tr class="item">
											<td class="label">
												<span>Add footer logo image</span>
												<a href="#" class="info"><img src="<?php echo THEME_IMAGE_URL; ?>control-panel-images/ico-info-1.png" alt="" width="10" height="11" /></a>
													<?php echo orange_themes_info_message("Suggested image size is 217x47px");?>

											</td>
											<td class="setting">
												<?php
													$theme_footer_logo = get_option("".$theme_name."_footer_image");
												?>
												<input class="upload input-text-2" type="text" name="footer_logo_upload" id="footer_logo_upload" value="<?php echo $theme_footer_logo;?>" />
												<div id="footer_logo_upload_button" class="upload-button upload-logo" style="padding: 10px 0 0 15px;"><a><img src="<?php echo THEME_IMAGE_CPANEL_URL;?>browse-1.png"/></a></div>
												<script type="text/javascript">
													jQuery(document).ready(function($){ orangethemes.loadUploader(jQuery("div#footer_logo_upload_button"), "<?php echo THEME_FUNCTIONS_URL;?>upload-handler.php", "<?php echo THEME_UPLOADS_URL;?>");});
												</script>
											
											</td>
										</tr>
										<tr class="item">
											<td colspan="2">
												<div>
													<p class="label"><b>Page style</b></p>
												</div>
												
												<div style="margin-left:33px;">
												<?php
													$color = get_option("".$theme_name."_color");
												?>
														<select name="theme_color" class="styled">
															<option value="">Blue (default)</option>
															<option value="<?php bloginfo('template_directory');?>/css/red.css" <?php if(get_bloginfo('template_directory')."/css/red.css" == $color) { echo 'selected="selected"'; } ?>>Red</option>
															<option value="<?php bloginfo('template_directory');?>/css/green.css" <?php if(get_bloginfo('template_directory')."/css/green.css" == $color) { echo 'selected="selected"'; } ?>>Green</option>
															<option value="<?php bloginfo('template_directory');?>/css/purple.css" <?php if(get_bloginfo('template_directory')."/css/purple.css" == $color) { echo 'selected="selected"'; } ?>>Purple</option>
															<option value="<?php bloginfo('template_directory');?>/css/black.css" <?php if(get_bloginfo('template_directory')."/css/black.css" == $color) { echo 'selected="selected"'; } ?>>Black</option>
															<option value="<?php bloginfo('template_directory');?>/css/orange.css" <?php if(get_bloginfo('template_directory')."/css/orange.css" == $color) { echo 'selected="selected"'; } ?>>Orange</option>

														</select>
	
												</div>
											</td>
										</tr>
										<tr class="item">
											<td colspan="2">
													<div>
														<p class="label"><b>Menu Color</b></p>
													</div>
													<?php
														$menu_color = get_option("".$theme_name."_menu_color");
													?>													
												<div>
													<p class="label"><span>Light</span></p>
													<div class="setting">
														<input class="styled" type="radio" name="menu_color" value="light" <?php if($menu_color == "light") {echo "checked ";}?>/>  
													</div>													
												</div>													
												<div>
													<p class="label"><span>Dark</span></p>
													
													<div class="setting">
														<input class="styled" type="radio" name="menu_color" value="dark" <?php if($menu_color == "dark") {echo "checked ";}?>/> 
													</div>
												</div>
											</td>
										</tr>

										<tr class="item last">
											<td class="label"></td>
											<td class="setting"><p><a href="javascript:{}" onclick="document.getElementById('page_settings').submit(); return false;" class="btn-2"><span>Save Changes</span></a></p></td>
										</tr>
										
									</table>
								</form>
								
							<!-- END .theme_page_settings -->	
							</div>