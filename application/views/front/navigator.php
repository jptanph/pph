<div id="nav">
	<ul>
		<li><a href="<?php echo $base_url;?>" <?php if($current_page==''){?>class="current_page"<?php }?>>Home</a></li>
		<?php foreach($page_content as $rows){?>		
			<li><a href="<?php echo $base_url . '/page/'.$rows->pip_post_name;?>.html" <?php if($current_page==$rows->pip_post_name){?>class="current_page"<?php }?>><?php echo $rows->pip_title;?></a></li>		
		<?php }?>
	</ul>
</div>