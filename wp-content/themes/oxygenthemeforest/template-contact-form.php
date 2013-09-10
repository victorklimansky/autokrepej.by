<?php
/*
Template Name: Contact form
*/
?>
<?php get_header(); ?>
<?php include (THEME_INCLUDES . '/top.php'); ?>
<?php
		
			$mail_to = get_option("theme_contact_mail"); 
			if(isset($_POST["phone"])){
				$phone=$_POST["phone"];
			}
			if(isset($_POST["email"])){
				$email=$_POST["email"];
			}
			if(isset($_POST["u_name"])){
				$u_name=$_POST["u_name"];
			}
			if(isset($_POST["message"])){
				$message=$_POST["message"];
			}
			
			$ip = $_SERVER['REMOTE_ADDR'];


			$error="";
			if(isset($_POST["addnew"])){
				$addnew=$_POST["addnew"];
														
				if($addnew)
				{
					$before="<tr><td colspan=\"2\"><div class=\"top-error-message\">";
					$after="</div></td></tr>";
					
					if(!$u_name) $error.=$before.( __( 'Please enter your name!' , 'oxygen' )).$after;
					if(!$email) $error.=$before.( __( 'Please enter your e-mail!' , 'oxygen' )).$after;
					if($email && !preg_match("/@/i", "$email")) $error.=$before.( __( 'Please enter a valid e-mail!' , 'oxygen' )).$after;
					if(!$message) $error.=$before.( __( 'Please enter your message!' , 'oxygen' )).$after;

				}
			}
			
			if((isset($addnew) && !$error))
			{	

				$subject = ( __( 'From' , 'oxygen' ))." ".get_bloginfo('name')." ".( __( 'Contact Page' , 'oxygen' ));
				
				$eol="\n";
				$mime_boundary=md5(time());
				$headers = "From: ".$email." <".$email.">".$eol;
				$headers .= "Reply-To: ".$email."<".$email.">".$eol;
				$headers .= "Message-ID: <".time()."-".$email.">".$eol;
				$headers .= "X-Mailer: PHP v".phpversion().$eol;
				$headers .= 'MIME-Version: 1.0'.$eol;
				$headers .= "Content-Type: text/html; charset=UTF-8; boundary=\"".$mime_boundary."\"".$eol.$eol;
				


				ob_start(); 
		?>
<?php printf ( __( 'Message:' , 'oxygen' ));?> <?php echo stripslashes($message);?>
<div style="padding-top:100px;">
<?php printf ( __( 'Name:' , 'oxygen' ));?> <?php echo stripslashes($u_name);?><br/>
<?php printf ( __( 'Phone:' , 'oxygen' ));?> <?php echo $phone;?><br/>
<?php printf ( __( 'E-mail:' , 'oxygen' ));?> <?php echo $email;?><br/>
<?php printf ( __( 'IP Address:' , 'oxygen' ));?> <?php echo $ip;?><br/>
</div>
		<?php
				$message = ob_get_clean();
				$mail_sent = mail($mail_to,$subject,$message,$headers);
			}
			
		?>
		
<script language = "Javascript">
		
	function Validate() 
	{

		var errors = "";
		var reason_name = "";
		var reason_mail = "";
		var reason_message = "";


		reason_name += validateName(document.getElementById('contact-form').u_name);
		reason_mail += validateEmail(document.getElementById('contact-form').email);
		reason_message += validateMessage(document.getElementById('contact-form').message);



		if (reason_name != "") 
		{
			$("#name_error").text(reason_name).fadeIn(1000);
			jQuery("#name_input").addClass("input-text-1-error");
			document.getElementById('name_error').style.display = 'block';
			errors = "Error";
		}
		else{
			jQuery("#name_input").removeClass("input-text-1-error");
			document.getElementById('name_error').style.display = 'none';
		}


		if (reason_mail != "") 
		{
			$("#mail_error").text(reason_mail).fadeIn(1000);
			jQuery("#mail_input").addClass("input-text-1-error");
			document.getElementById('mail_error').style.display = 'block';
			errors = "Error";
		}
		else{
			jQuery("#mail_input").removeClass("input-text-1-error");
			document.getElementById('mail_error').style.display = 'none';
		}
		
		if (reason_message != "") 
		{
			$("#message_error").text(reason_message).fadeIn(1000);
			jQuery("#message_input").addClass("input-text-1-error");
			document.getElementById('message_error').style.display = 'block';
			errors = "Error";
		}
		else{
			jQuery("#message_input").removeClass("input-text-1-error");
			document.getElementById('message_error').style.display = 'none';
		}
		
		if (errors != ""){
			return false;
		}
		
		document.getElementById('contact-form').submit(); return false;
	}
	
		function validateName(fld) 
	{

		var error = "";
		
		if (fld.value == '')
		{
			error = "<?php printf ( __( "You didn't enter Your First Name." , 'oxygen' ));?>\n";
		}
		else if ((fld.value.length < 2) || (fld.value.length > 50))
		{
			error = "<?php printf ( __( "First Name is the wrong length." , 'oxygen' ));?>\n";
		}


		return error;
	}
	
		function validateEmail(fld) 
	{

		var error="";
		var illegalChars = /^[^@]+@[^@.]+\.[^@]*\w\w$/;
		
		if (fld.value == ""){
			error = "<?php printf ( __( "You didn't enter an email address." , 'oxygen' ));?>\n";
		}
		else if ( fld.value.match( illegalChars ) == null){
			error = "<?php printf ( __( "The email address contains illegal characters." , 'oxygen' ));?>\n";
		}


		return error;

	}
	
	function validateMessage(fld) 
	{

		var error = "";
		
		if (fld.value == '')
		{
			error = "<?php printf ( __( "You didn't enter Your message." , 'oxygen' ));?>\n";
		}
		else if (fld.value.length<3)
		{
			error = "<?php printf ( __( "The message is to short." , 'oxygen' ));?>\n";
		}


		return error;
	}

		
	</script>
<!-- BEGIN .content-wrapper -->
<div class="content-wrapper">

	<!-- BEGIN .content -->
	<div class="content">

			
			<!-- BEGIN .left-side -->
			<div class="left-side">
					<?php if($mail_to) { ?>		
		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<!-- BEGIN .full-width-header -->
				<div class="full-width-header">
					<h2><?php the_title();?></h2>
					<h3>
						<?php				
							$subtitle = get_post_meta(get_the_ID(), "subtitle"); 
							echo $subtitle[0];
						?>
					</h3>
				<!-- END .full-width-header -->
				</div>
						
		
						
						<!-- BEGIN .shortcodes-wrapper -->
						<div class="shortcodes-wrapper shortcodes-contact-form">
																		
							<?php if(!isset($addnew) || $error) { ?>
							<?php remove_filter('the_content', 'big_first_char', 5); ?>
							<?php add_filter('the_content', 'wrap_img_tags'); ?>
							<?php the_content(); ?>
							<?php add_filter( 'the_content', 'wpautop' ); ?><br/>
							<form method="post" class="contact-form" id="contact-form" name="contact-form" action="">
							<input type="hidden"  name="addnew" value="yes" />
								<table>
									<tr>
										<td class="label"><?php printf ( __( 'Name:' , 'oxygen' ));?></td>
										<td>
											<input type="text" name="u_name" value="<?php echo $u_name;?>" class="input-text"/>
											<p class="error-message"><s id="name_error" style="display: none;"></s></p>
										</td>
									</tr>
									<tr><td class="spacer" colspan="2"></td></tr>
									<tr>
										<td class="label"><?php printf ( __( 'E-mail:' , 'oxygen' ));?></td>
											<td>
												<input type="text" name="email" value="<?php echo $email;?>" class="input-text"/>
												<p class="error-message"><s id="mail_error" style="display: none;"></s></p>
											</td>
									</tr>
									<tr><td class="spacer" colspan="2"></td></tr>
									<tr>
										<td class="label"><?php printf ( __( 'Phone number:' , 'oxygen' ));?></td>
										<td>
											<input type="text" name="phone" value="<?php echo $phone;?>" class="input-text"/>
										</td>
									</tr>
									<tr><td class="spacer" colspan="2"></td></tr>
									<tr>
										<td class="label"><?php printf ( __( 'Your comment:' , 'oxygen' ));?></td>
										<td>
											<table class="text-area">
												<tr>
													<td class="top">
														<textarea name="message" id="message_input"><?php echo $message;?></textarea>
													</td>
												</tr>
												<tr><td class="bottom"></td></tr>
											</table>
											<p class="error-message"><s id="message_error" style="display: none;"></s></p>
										</td>
									</tr>
									<tr><td class="spacer" colspan="2"></td></tr>
									<tr>
										<td></td>
										<td><a href="javascript:{}" onclick="return Validate(); submitform();" class="btn-1 btn-align-left"><i>&nbsp;</i><b><span><?php printf ( __( 'Send contact form' , 'oxygen' ));?></span></b><u>&nbsp;</u></a></td>
									</tr>
								</table>
							</form>
							<?php } ?>
							<?php if(isset($addnew) && !$error) { ?>
								<div class="success">
									<p><b><?php printf ( __( 'Thanks!' , 'oxygen' ));?></b></p>
									<p><?php printf ( __( 'Your message has been sent!' , 'oxygen' ));?></p>
								</div>
							<?php } ?>	
							<?php endwhile; else: ?>
								<p><?php printf ( __('Sorry, no posts matched your criteria.' , 'oxygen' )); ?></p>
							<?php endif; ?>

						<!-- END .shortcodes-wrapper -->
						</div>
			<?php } else { echo "<span style=\"color:#000; font-size:14pt;\">You need to set up Your contact mail, you can do it  <a  style=\"color:#000; font-size:14pt;\" href=\"".admin_url()."admin.php?page=theme-configuration&p=theme_general_settings&pid=theme_contact_settings\">here</a>!</span>"; } ?>
		<!-- END .left-side -->
		</div>
					
						
			<!-- BEGIN .right-side -->
			<div class="right-side">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar Single") ) : ?>
				<?php endif; ?>
			<!-- END .right-side -->
			</div>
											
	<!-- END .content -->
	</div>
	
<!-- END .content-wrapper -->
</div>

<?php get_footer(); ?>