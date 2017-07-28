
<?include(PATH.'templates/'.LANG.'/header.php');?>
<a href="/<?=LANG?>/auth.UserGroup/add" class="btn btn-success"><i class="fa fa-file-o"></i> New Group</a>
<table class="table">
<thead><tr><th>Group Name</th><th>Key</th><th>Category</th><th>Users</th><th>Action</th></tr></thead>
<?foreach($data as $group){?>
<tr>
	<td><?$group->DrawField("name")?></td>
	<td><?$group->DrawField("groupkey")?></td>
	<td><?$group->DrawField("categoryid")?></td>
	<td> 
	<?=$group->DrawField("members")?>
	</td>
	<td>
	<form action="" method="post" class="ajaxform">
	     <?=App\Request::CSRF()?>
		<input type="hidden" name="id" value="<?=$group->data['id']?>"/>
		<a class="btn btn-primary" href="/<?=LANG?>/auth.UserGroup/edit/<?=$group->data['id']?>"><i class="fa fa-edit"></i> Edit</a>
		
		<?if(count($group->members)==0){?><button type="submit" class="btn btn-danger" name="delete" ><i class="fa fa-trash-o"></i> Delete</button><?}?> 
		
	</form>
	</td>
</tr>
<?}?>
</table>
<script>
$(function(){
	$(".ajaxform").ajaxForm({
		beforeSubmit:function(){return confirm('Are you sure delete this group?');},
		dataType:'json',
		success:function(resp,statusText, xhr,  form){
			if(resp.type=='success'){
				form.closest('tr').remove();
			}else{
				error(resp.error.msg);
			}
		},
		
	
	});
});
</script>
 <?include(PATH.'templates/'.LANG.'/footer.php');?>
