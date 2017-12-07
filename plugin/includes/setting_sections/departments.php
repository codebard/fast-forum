<?php

$dept_select=$this->make_forum_select();

echo '<div class="'.$this->internal['prefix'].'admin_segment2">';

echo '<span class="'.$this->internal['prefix'].'h2">'.$this->lang['admin_title_forums'].'</span>

<span class="'.$this->internal['prefix'].'h3">'.$this->lang['admin_subtitle_forums'].'</span>

<form action="admin.php?page=settings_'.$this->internal['id'].'&'.$this->internal['prefix'].'tab=forums" id="forum_form" name="" method="post"  enctype="multipart/form-data">';

if(isset($_REQUEST[$this->internal['prefix'].'forum_name']))
{
	
	$forum_name = $_REQUEST[$this->internal['prefix'].'forum_name'];
	
}
else
{
	$forum_name='';
	
}

echo $this->lang['admin_title_name'];
echo '<br>';
echo '<input type="text" style="width : 350px;" name="forum_name" value="'.$forum_name.'">';
echo '<br>';
echo $this->lang['admin_title_description'];
echo '<br>';


if(isset($_REQUEST[$this->internal['prefix'].'forum_name']))
{
	
	$forum_description = $_REQUEST[$this->internal['prefix'].'forum_description'];
	
}
else
{
	$forum_description='';
}

echo '<textarea name="forum_description" style="width : 350px;">'.$forum_description.'</textarea>';
echo '<br>';
echo '<input type="hidden" name="'.$this->internal['prefix'].'action" value="add_modify_forum">';
echo '<input type="hidden" name="cb_plugin" value="'.$this->internal['id'].'">';



if(isset($_REQUEST[$this->internal['prefix'].'forum']))
{
	
	$forum = $_REQUEST[$this->internal['prefix'].'forum'];
	
}
else
{
	$forum='';
	
}

echo '<input type="hidden" name="forum" value="'.$forum.'">';
echo '<button type="submit" class="'.$this->internal['prefix'].'admin_button">'.$this->lang['admin_label_add_edit'].'</button>';


echo '<button type="reset" class="'.$this->internal['prefix'].'admin_button" onclick="window.location.href=window.location.href;return false;">'.$this->lang['admin_label_clear_new'].'</button>';

echo '</form>';

echo '<span class="'.$this->internal['prefix'].'h3">'.$this->lang['admin_subtitle_select_edit_delete'].'</span><form action="admin.php?page=settings_'.$this->internal['id'].'&'.$this->internal['prefix'].'tab=forums" name="" method="post" enctype="multipart/form-data">';

echo $dept_select;

echo '<select name="'.$this->internal['prefix'].'action">
	  <option value="edit_forum">'.$this->lang['admin_label_edit'].'</option>
	  <option value="delete_forum">'.$this->lang['admin_label_delete'].'</option>
	  </select>
	  ';
echo '<input type="submit" value="'.$this->lang['admin_label_go'].'" class="'.$this->internal['prefix'].'admin_button">';
echo '<input type="hidden" name="cb_plugin" value="'.$this->internal['id'].'">';
echo '</form>';


echo '</div>';


?>