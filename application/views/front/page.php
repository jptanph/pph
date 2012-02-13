<?php foreach($post_content as $rows){?>
<div class="post">
	<span class="post_date">MONDAY, DECEMBER 25, 2011</span>
	<span class="post_title"><a href="<?php echo $rows->pip_title;?>"><?php echo $rows->pip_title;?></a></span>
	<div class="post_bar">
		<span class="posted_by">Posted by : Administrator</span>
		<a href="#none" class="view_comment" title="comments">25 Comments</a>
		<a href="#none" class="add-icon">Add Comment</a>
	</div>
	<p class="post_text">
		<?php echo $rows->pip_content;?>
	</p>
	<span class="read_more">[<a href="#">Read More</a>]</span>
	<div class="border-bottom"></div>
</div>
<?php }?>

<!--
<div class="pagination">
	<ul>
		<li><a href="#none">1</a></li>
		<li><a href="#none">2</a></li>
		<li><a href="#none">3</a></li>
		<li><a href="#none">4</a></li>
		<li><a href="#none">5</a></li>
		<li><a href="#none">6</a></li>
	</ul>
</div>		
//-->	