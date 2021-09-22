<?php

ob_start();
session_start();

include 'connect.php';






if (isset($_POST['adminLogin'])) {

	$user_mail=$_POST['user_mail'];
	$user_password=md5($_POST['user_password']);

	$searchuser=$db->prepare("SELECT * FROM user where user_mail=:mail and user_password=:password and user_authority=:authority");
	$searchuser->execute(array(
		'mail' => $user_mail,
		'password' => $user_password,
		'authority' => 5
		));

	echo $say=$searchuser->rowCount();

	if ($say==1) {
				
		$_SESSION['user_mail']=$user_mail;
		header("Location:../admin_panel/index.php");
		exit;



	} else {

		header("Location:../admin_panel/login.php?durum=no");
		exit;
	}
	

}

















if (isset($_POST['editPost'])) {
    $post_id = $_POST['post_id'];

    $save = $db->prepare("UPDATE posts SET
        post_date=:post_date,
        post_topic=:post_topic,
        post_title=:post_title,
        post_author=:post_author,
        post_mini_image=:post_mini_image,
        post_main_image=:post_main_image,
        post_text=:post_text,
        post_status=:post_status,
        post_other_posts=:post_other_posts
    
    WHERE post_id={$_POST['post_id']}
    ");
    $update = $save->execute(array(
        'post_date' => $_POST['post_date'],
        'post_topic' => $_POST['post_topic'],
        'post_title' => $_POST['post_title'],
        'post_author' => $_POST['post_author'],
        'post_mini_image' => $_POST['post_mini_image'],
        'post_main_image' => $_POST['post_main_image'],
        'post_text' => $_POST['post_text'],
        'post_status' => $_POST['post_status'],
        'post_other_posts' => $_POST['post_other_posts']
    ));
    if ($update) {
        header("Location:../admin_panel/post-edit.php?post_id=$post_id&status=ok");
    } else {
        header("Location:../admin_panel/post-edit.php?post_id=$post_id&status=no");
    }
}
if ($_GET['post_delete']=='ok') {
    $delete = $db->prepare("DELETE from posts where post_id=:id");

    $control = $delete->execute(array(
        'id' => $_GET['post_id']
    ));
    if ($control) {
        header("Location:../admin_panel/posts-list.php?delete=ok");
    } else {
        header("Location:../admin_panel/posts-list.php?delete=no");
    }
}



if (isset($_POST['addPost'])) {
    
    $add = $db->prepare("INSERT INTO posts SET
        post_topic=:post_topic,
        post_title=:post_title,
        post_author=:post_author,
        post_mini_image=:post_mini_image,
        post_main_image=:post_main_image
    ");
    $insert = $add->execute(array(
        'post_topic' => $_POST['post_topic'],
        'post_title' => $_POST['post_title'],
        'post_author' => $_POST['post_author'],
        'post_mini_image' => $_POST['post_mini_image'],
        'post_main_image' => $_POST['post_main_image']
    ));

    if ($insert) {
        header("Location:../admin_panel/posts-list.php?status=ok");
    } else {
        header("Location:../admin_panel/posts-list.php?status=no");
    }
}


if (isset($_POST['updateProfile'])) {

    $save = $db->prepare("UPDATE profile SET
        profile_photo=:profile_photo,
        profile_bgimage=:profile_bgimage,
        profile_bgcolor=:profile_bgcolor,
        profile_color=:profile_color,
        profile_name=:profile_name,
        profile_favicon=:profile_favicon
    
    WHERE profile_id=1
    ");
    $update = $save->execute(array(
        'profile_photo' => $_POST['profile_photo'],
        'profile_bgimage' => $_POST['profile_bgimage'],
        'profile_bgcolor' => $_POST['profile_bgcolor'],
        'profile_color' => $_POST['profile_color'],
        'profile_name' => $_POST['profile_name'],
        'profile_favicon' => $_POST['profile_favicon']
    ));
    if ($update) {
        header("Location:../admin_panel/profile-settings.php?status=ok");
    } else {
        header("Location:../admin_panel/profile-settings.php?status=no");
    }
}


if (isset($_POST['editAbout'])) {

    $save = $db->prepare("UPDATE about SET
        about_name=:about_name,
        about_age=:about_age,
        about_birthday=:about_birthday,
        about_education_high_school=:about_education_high_school,
        about_education_middle_school=:about_education_middle_school,
        about_education_primary_school=:about_education_primary_school,
        about_education_university=:about_education_university,
        about_me=:about_me,
        about_skills=:about_skills,
        about_languages=:about_languages,
        about_skills_percents=:about_skills_percents,
        about_languages_percents=:about_languages_percents,
        about_works=:about_works,
        about_education_high_school_date=:about_education_high_school_date,
        about_education_middle_school_date=:about_education_middle_school_date,
        about_education_primary_school_date=:about_education_primary_school_date,
        about_photos=:about_photos,
        about_skill_numbers=:about_skill_numbers,
        about_language_numbers=:about_language_numbers,
        about_photo_numbers=:about_photo_numbers
    
    WHERE about_id=1
    ");
    $update = $save->execute(array(
        'about_name' => $_POST['about_name'],
        'about_age' => $_POST['about_age'],
        'about_birthday' => $_POST['about_birthday'],
        'about_education_high_school' => $_POST['about_education_high_school'],
        'about_education_middle_school' => $_POST['about_education_middle_school'],
        'about_education_primary_school' => $_POST['about_education_primary_school'],
        'about_education_university' => $_POST['about_education_university'],
        'about_me' => $_POST['about_me'],
        'about_skills' => $_POST['about_skills'],
        'about_languages' => $_POST['about_languages'],
        'about_skills_percents' => $_POST['about_skills_percents'],
        'about_languages_percents' => $_POST['about_languages_percents'],
        'about_works' => $_POST['about_works'],
        'about_education_high_school_date' => $_POST['about_education_high_school_date'],
        'about_education_middle_school_date' => $_POST['about_education_middle_school_date'],
        'about_education_primary_school_date' => $_POST['about_education_primary_school_date'],
        'about_photos' => $_POST['about_photos'],
        'about_skill_numbers' => $_POST['about_skill_numbers'],
        'about_language_numbers' => $_POST['about_language_numbers'],
        'about_photo_numbers' => $_POST['about_photo_numbers']
    ));
    if ($update) {
        header("Location:../admin_panel/about.php?status=ok");
    } else {
        header("Location:../admin_panel/about.php?status=no");
    }
}


if (isset($_POST['editContact'])) {

    $save = $db->prepare("UPDATE contact SET
        contact_mail=:contact_mail,
        contact_text=:contact_text
    
    WHERE contact_id=1
    ");
    $update = $save->execute(array(
        'contact_mail' => $_POST['contact_mail'],
        'contact_text' => $_POST['contact_text']
    ));
    if ($update) {
        header("Location:../admin_panel/contact.php?status=ok");
    } else {
        header("Location:../admin_panel/contact.php?status=no");
    }
}

if (isset($_POST['editSocial'])) {

    $save = $db->prepare("UPDATE social SET
        social_name=:social_name,
        social_link=:social_link,
        social_link_icon=:social_link_icon,
        social_number=:social_number
    
    WHERE social_id=1
    ");
    $update = $save->execute(array(
        'social_name' => $_POST['social_name'],
        'social_link' => $_POST['social_link'],
        'social_link_icon' => $_POST['social_link_icon'],
        'social_number' => $_POST['social_number']
    ));
    if ($update) {
        header("Location:../admin_panel/social.php?status=ok");
    } else {
        header("Location:../admin_panel/social.php?status=no");
    }
}


if (isset($_POST['editCategories'])) {

    $save = $db->prepare("UPDATE categories SET
        categori_names=:categori_names,
        categori_number=:categori_number
    
    WHERE categori_id=1
    ");
    $update = $save->execute(array(
        'categori_names' => $_POST['categori_names'],
        'categori_number' => $_POST['categori_number']
    ));
    if ($update) {
        header("Location:../admin_panel/categories.php?status=ok");
    } else {
        header("Location:../admin_panel/categories.php?status=no");
    }
}




if (isset($_POST['sendMessage'])) {
    
    $add = $db->prepare("INSERT INTO messages SET
        messages_name=:messages_name,
        messages_mail=:messages_mail,
        messages_age=:messages_age,
        messages_message=:messages_message,
        messages_phone=:messages_phone,
        messages_social=:messages_social
    ");
    $insert = $add->execute(array(
        'messages_name' => $_POST['messages_name'],
        'messages_mail' => $_POST['messages_mail'],
        'messages_age' => $_POST['messages_age'],
        'messages_message' => $_POST['messages_message'],
        'messages_phone' => $_POST['messages_phone'],
        'messages_social' => $_POST['messages_social']
    ));

    if ($insert) {
        header("Location:../../../contact.php?status=ok");
    } else {
        header("Location:../../../contact.php?status=no");
    }
}
if ($_GET['message_delete']=='ok') {
    $delete = $db->prepare("DELETE from messages where messages_id=:id");

    $control = $delete->execute(array(
        'id' => $_GET['messages_id']
    ));
    if ($control) {
        header("Location:../admin_panel/messages.php?delete=ok");
    } else {
        header("Location:../admin_panel/messages.php?delete=no");
    }
}




if (isset($_POST['sendComment'])) {
    $id = $_GET['post_id'];
    $add = $db->prepare("INSERT INTO comments SET
        comment_post_id=:comment_post_id,
        comment_name=:comment_name,
        comment_comment=:comment_comment
    ");
    $insert = $add->execute(array(
        'comment_post_id' => $_GET['post_id'],
        'comment_name' => $_POST['comment_name'],
        'comment_comment' => $_POST['comment_comment']
    ));

    if ($insert) {
        header("Location:../../../contents/content.php?post_id=$id&ok");
    } else {
        header("Location:../../../contents/content.php?post_id=$id&no");
    }
}








if ($_GET['comment_delete']=='ok') {
    $delete = $db->prepare("DELETE from comments where comment_id=:id");

    $control = $delete->execute(array(
        'id' => $_GET['comment_id']
    ));
    if ($control) {
        header("Location:../admin_panel/comment-settings.php?delete=ok");
    } else {
        header("Location:../admin_panel/comment-settings.php?delete=no");
    }
}

?>