	<div class="right_menu">
	<div class="right_menu_header">
			<h2><label>Published</label></h2>
		</div>
		<ul>
			<li>
				<select id="published_status" name="published_status">
					<option value="published">Published</option>
					<option value="pending">Pending Review</option>						
					<option value="draft">Draft</option>
				</select>
			</li>
		</ul>
		<div class="right_menu_footer"><span class="arrow_down"></span></div>			
	</div>	
	<div class="right_menu">
		<div class="right_menu_header">
			<h2><label>Page Attributes</label></h2>
		</div>
		<ul>
			<li>
				<span>Parent Page</span>
				<select id="parent_page" name="parent_page">
					<option value="0">no-parent</option>					
					<?php foreach($q_all_post as $rows){?>
						<option value="<?php echo $rows->pip_idx;?>"><?php echo $rows->pip_title?></option>
					<?php }?>
				</select>
			</li>
			<li><input type="button" value="Save Data" class="gen_btn" onclick="javascript:Admin.save_page();"> <span style="display:none;" id="small_loader"></span></li>
		</ul>
		<div class="right_menu_footer"><span class="arrow_down"></span></div>			
	</div>		