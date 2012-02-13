<div class="right_header">
	<h2><?php echo $title;?></h2>
</div>
<div class="right_main">
	<div id="success_message">
		<span>Post has been save sucessfully!</span>
	</div>
	<div id="warning_message">
		<span>Post has been deleted sucessfully!</span>
	</div>				
	<div class="menu_area">
		<ul>
			<li><a href="<?php echo $webmaster_path;?>addpage">Add New</a></li>
			<li><a href="#">Delete</a></li>						
		</ul>
		<table class="search_form">
			<tr><td><input type="text" class="search_box"> <input type="button" value="Search" class="gen_btn"></td></tr>
		</table>
	</div>
	<div class="table_area">
		<table cellspacing="0">
			<colgroup>
				<col width="2%" />
				<col width="55%" />
				<col width="20%" />			
				<col width="5%" />							
				<col width="15%" />		
			</colgroup>					
			<thead>
				<tr><th><input type="checkbox" onclick="Admin.select_all(this.id)" id="select_all"></th><th><span><a href="#" class="desc">Title</a></span></th><th><span><a href="#">Author</a></span></th><th><span><a href="#">Comments</a></span></th><th><span><a href="#" class="desc">Date Created</a></span></th></tr>
			</thead>
			<tbody>
			<?php foreach($q_all_page as $rows){?>
			<tr><td><input type="checkbox" name="idx_val[]" value="<?php echo $rows->pip_idx; ?>" ></td><td><a href="#"><?php echo $rows->pip_title; ?></a></td><td>administrator</td><td>123</td><td>December 25, 2012</td></tr>			
			<?php }?>	
			</tbody>
		</table>
	</div>
</div>