<?php
	add_shortcode('blockquote', 'blockquote_handler');

	function blockquote_handler($atts, $content=null, $code="") {
		if($atts['style'] == 'curly') {
			$return =  '
					<table class="blockquote-curly-brackets">
						<tr><td class="tl"></td><td></td><td class="tr"></td></tr>
						<tr>
							<td class="ml"></td>
							<td class="mm">
								<blockquote>
								'.$content.'	
								</blockquote>
							</td>
							<td class="mr"></td>
						</tr>
						<tr><td class="bl"></td><td></td><td class="br"></td></tr>
					</table>';
			
		} elseif($atts['style'] == 'gradient-outside') {
			$return =  '
					<div class="blockquote-gradient-outside">
						<blockquote>
							'.$content.'
						</blockquote>
					</div>';
					
		} elseif($atts['style'] == 'standart-box') {
			$return =  '		
					<div class="blockquote-standart-box">
						<blockquote>
							'.$content.'
						</blockquote>
					</div>';
							
		} elseif($atts['style'] == 'gradient-inside') {
			$return =  '		
					<div class="blockquote-gradient-inside">
						<blockquote>
							'.$content.'
						</blockquote>
					</div>';
		
		} elseif($atts['style'] == 'quotation-marks') {
			$return =  '		
					<div class="blockquote-quotation-marks">
						<blockquote>
							'.$content.'
						</blockquote>
					</div>';
					
		} elseif($atts['style'] == 'dashed-box') {
			$return =  '		
					<div class="blockquote-dashed-box">
						<blockquote>
							'.$content.'
						</blockquote>
					</div>';
					
		} elseif($atts['style'] == 'gradient-box') {
			$return =  '
					<table class="blockquote-gradient-box">
						<tr><td class="tl"></td><td class="tm"></td><td class="tr"></td></tr>
						<tr>
							<td class="ml"></td>
							<td class="mm">
								<blockquote>
									'.$content.'
								</blockquote>
							</td>
							<td class="mr"></td>
						</tr>
						<tr><td class="bl"></td><td class="bm"></td><td class="br"></td></tr>
					</table>';
			
		} elseif($atts['style'] == 'default') {
			$return =  '
				<div class="blockquote-default">
					<blockquote>'.$content.'</blockquote>
				</div>';
		} else {
			$return =  '
				<div class="blockquote-default">
					<blockquote>'.$content.'</blockquote>
				</div>';
		}
		return $return;
	}
?>