$(document).ready(function(){
	Admin.init();
});
var Admin = {
	webmaster_url : '',
	init : function(){
		this.webmaster_url = $("#webmaster_url").val();
		
	},save_page : function(){

		$("#small_loader").show();
		
		var title = $("#title");
		var content = $("#content");
		var post_type = $("#post_type");
		var parent_page = $("#parent_page");
		var published_status = $("#published_status");
		
		$.ajax({
			url : Admin.webmaster_url+'save_page',
			type : 'POST',
			data : {
				title : title.val(),
				content : content.val(),
				post_type : post_type.val(),
				parent_page : parent_page.val(),
				published_status : published_status.val()
			},success : function(server_response){
				$("#success_message").show();
			}
		})
	},save_post : function(){
		$("#small_loader").show();
		
		var title = $("#title");
		var content = $("#content");
		var post_type = $("#post_type");
		var parent_page = $("#parent_page");
		var published_status = $("#published_status");
		
		$.ajax({
			url : Admin.webmaster_url+'save_post',
			type : 'POST',
			data : {
				title : title.val(),
				content : content.val(),
				post_type : post_type.val(),
				parent_page : parent_page.val(),
				published_status : published_status.val()
			},success : function(server_response){
				$("#success_message").show();
			}
		})
	},select_all : function(id){
		var checked_status = $("#"+id).is(':checked');
		$("input[name='idx_val[]']").each(function(index,value){
			
			$(this).attr('checked',checked_status);
		})
		
	}
}