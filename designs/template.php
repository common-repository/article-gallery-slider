<div class="cgs_item_slider">	<div class="cgs_thumb_image">		<?php			$sliderurl = get_post_meta( get_the_ID(),'rsris_cgs_link', true );			$content = get_the_title();			$content = strip_tags($content);			$summary = $this->cgs_truncate($content, 50);						if($sliderurl != '')			{ ?>				<a href="<?php echo $sliderurl; ?>" title="<?php echo $summary; ?>">				<?php					the_post_thumbnail( 'thumbnail');				?>			</a>		<?php }else{				the_post_thumbnail( "thumbnail");			}		?>	</div>	<div class="cgs_title_video">	<?php		if($sliderurl != '')		{		?>			<a href="<?php echo $sliderurl; ?>" title="<?php echo $summary; ?>"><?php echo $summary;?></a>		<?php }else{ ?>			<?php echo $summary;?>		<?php }	?>	</div></div>