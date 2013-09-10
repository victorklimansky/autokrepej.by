		
							<div id="theme_contact_settings">
								<form method="post" action=""  id="contact_settings">
									<input type="hidden" name="action" value="contact_settings"/>
									<table>
										<tr class="item">
											<td colspan="2">
												<div>
													<p class="label"><b>Contact Form</b></p>
												</div>
												<?php
													global $theme_name;
													$contact_mail = get_option("".$theme_name."_contact_mail");
												
												?>											
												
												<div>
													<p class="label"><span>Email:</span></p>
													<div class="setting">
														<span class="input-text-1"><input type="text" name="theme_contact_mail" value="<?php echo $contact_mail;?>" style="width: 261px;" /></span>
													</div>
												</div>
											</td>
										</tr>
										<tr class="item">
											<td colspan="2">
												<div>
													<p class="label"><b>Contact Information</b></p>
												</div>
												<?php

													$phone = get_option("".$theme_name."_phone");
													$mail = get_option("".$theme_name."_mail");
												
												?>

												
												<div>
													<p class="label"><span>Phone:</span></p>
													<div class="setting">
														<span class="input-text-1"><input type="text" name="<?php echo $theme_name;?>_phone" value="<?php echo $phone;?>" style="width: 261px;" /></span>
													</div>
												</div>												
												
												<div>
													<p class="label"><span>Email:</span></p>
													<div class="setting">
														<span class="input-text-1"><input type="text" name="<?php echo $theme_name;?>_mail" value="<?php echo $mail;?>" style="width: 261px;" /></span>
													</div>
												</div>
												

												
											</td>
										</tr>
										
										<tr class="item">
											<td colspan="2">
												<div>
													<p class="label"><b>Social Networks and RSS</b></p>
												</div>
												<?php

												
													$twitter = get_option("".$theme_name."_twitter_url");
													$facebook = get_option("".$theme_name."_facebook_url");
													$digg = get_option("".$theme_name."_digg_url");
													$rss = get_option("".$theme_name."_rss_url");
													if($rss == "") $rss = get_bloginfo("rss_url");
													$rss_icon = get_option("show_rss_icon");
												?>
												<div>
													<p class="label"><span>Twitter:</span></p>
													<div class="setting">
														<span class="input-text-1"><input type="text" name="twitter" value="<?php echo $twitter;?>" style="width: 261px;" /></span>
													</div>
												</div>
												
												<div>
													<p class="label"><span>Facebook:</span></p>
													<div class="setting">
														<span class="input-text-1"><input type="text" name="facebook" value="<?php echo $facebook;?>" style="width: 261px;" /></span>
													</div>
												</div>
												
												<div>
													<p class="label"><span>Digg:</span></p>
													<div class="setting">
														<span class="input-text-1"><input type="text" name="digg" value="<?php echo $digg;?>" style="width: 261px;" /></span>
													</div>
												</div>												
												
												<div>
													<p class="label"><span>RSS:</span></p>
													<div class="setting">
														<span class="input-text-1"><input type="text" name="rss" value="<?php echo $rss;?>" style="width: 261px;" /></span>
													</div>
												</div>
												
												<div>
													<p class="label"><span>Show RSS icon:</span></p>
													<div class="setting">
														<input type="checkbox" name="show_rss_icon" class="styled" <?php if($rss_icon) {echo "checked=\"yes\""; } ?>/>
													</div>
												</div>
												
											</td>
										</tr>
										
										<tr class="item">
											<td colspan="2">
												<div>
													<p class="label"><b>Footer</b></p>
												</div>
												<?php
													$footer_text = stripslashes(get_option("".$theme_name."_footer_text"));
														
												?>
												<div>
													<p class="label"><span>Footer text:</span></p>
													<div class="setting">
														<textarea name="footer_text" class="text-area-1"><?php echo $footer_text;?></textarea>
													</div>
												</div>
												
											</td>
										</tr>	
										
										
										
										<tr class="item last">
											<td class="label"></td>
											<td class="setting"><p><a href="javascript:{}" onclick="document.getElementById('contact_settings').submit(); return false;" class="btn-2"><span>Save Changes</span></a></p></td>
										</tr>
										
									</table>
								</form>
								
							</div>