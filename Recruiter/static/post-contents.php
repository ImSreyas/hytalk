<?php 

// $current_user_id = $_SESSION['student_id'];
// $current_user_details = mysqli_query($conn, "select * from student where id='$current_user_id'")->fetch_assoc();
// $current_user_pic = $current_user_details['Student_pic'];

if(isset($_POST['comment-btn'])){
    $comment_content = $_POST['comment-content'];
    $post_owner = $_POST['post-owner'];
    $post_id_ = $_POST['post-id'];
    mysqli_query($conn, "insert into comment set comment='$comment_content', post_id='$post_id_', commenter_id='$current_user_id', post_owner_id='$post_owner', commenter_type='student'");
}

$rec_Id=$Rec_Details['id'];
$postContents = mysqli_query($conn, "select * from feed where user_type='recruiter' and user_id='$rec_Id'");
while($p = $postContents->fetch_assoc()){
    $post_id = $p['id'];
    $post_owner_id = $p['user_id'];
    $post_owner_image = $p['image'];
    $post_owner_video = $p['video'];
    $post_owner_time = $p['upload_time'];
    $post_owner_caption = $p['caption'];
    $post_owner_content = $p['article'];
    $type = $p['user_type'];

    $post_owner_date_and_time = explode(" ", $post_owner_time);

    $follow_or_not_count = mysqli_query($conn, "select * from friends where user_id='$student_id' && friend_id='$post_owner_id' && status='1'")->num_rows;
    $follow_or_not = ($follow_or_not_count > 0)? 'Following' : 'Unfollowed';
    if($student_id == $post_owner_id) $follow_or_not = '';

    if($p['user_type'] == 'student'){
        $post_owner_details = mysqli_query($conn, "select * from student where id='$post_owner_id'")->fetch_assoc();
        $post_owner_name = $post_owner_details['Name'];
        $post_owner_pic = $post_owner_details['Student_pic'];
    } else if($p['user_type'] == 'faculty'){
        $post_owner_details = mysqli_query($conn, "select * from faculty where id='$post_owner_id'")->fetch_assoc();
        $post_owner_name = $post_owner_details['Name'];
        $post_owner_pic = $post_owner_details['Faculty_pic'];
    } else {
        $post_owner_details = mysqli_query($conn, "select * from recruiter where id='$post_owner_id'")->fetch_assoc();
        $post_owner_name = $post_owner_details['Name'];
        $post_owner_pic = $post_owner_details['recruiter_pic'];
    }
    ?>
    <div class="post-content">

        <img src="../<?php echo $post_owner_pic; ?>" alt="user" class="profile-photo-md pull-left" />
        <div class="user-info">
            <h5><a href="timeline.php" class="profile-link"><?php echo $post_owner_name; ?></a><span class="following"><?php echo $follow_or_not; ?></span><span style="background-color: aquamarine; color: black;margin-inline: 1rem; padding: .2rem 1rem; border-radius: .5rem;"><?php echo $type; ?></span></h5>
            <p class="text-muted">
                <span><?php echo $post_owner_date_and_time[0]; ?></span>
                <span style="font-size: 1rem; padding: .5rem 1rem; background-color: #FAEAB1; color: black; border-radius: 1rem"><?php echo $post_owner_date_and_time[1]; ?></span>
            </p>
        </div>
        <!-- <div class="reaction">
            <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
            <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
        </div> -->

        <?php if($post_owner_image != '' and $post_owner_image != null){
            ?>
            <img style="border-radius: 3rem" src="../<?php echo $post_owner_image ?>" alt="post-image" class="img-responsive post-image" />
            <?php
        } ?>
        <?php if($post_owner_video != '' and $post_owner_video != null){
            ?>
            <div class="video-wrapper"><video class="post-video" controls> <source src="../<?php echo $post_owner_video; ?>" type="video/mp4"> </video></div>
            <?php
        } ?>
         <div style="background-color: #FAEAB1; border-radius: 2rem;padding: 2rem;margin: 1rem 0rem;">
            <div style="color: #3C2A21; font-size: 1.5rem; font-weight: 800"><?php echo $post_owner_caption; ?></div>
            <div class="post-text">
                <p><?php echo $post_owner_content; ?></p>
            </div>
        </div>
        <div class="post-container">
            <div class="post-detail">
                <div class="line-divider"></div>
                <?php 
                $commentList = mysqli_query($conn, "select * from comment where post_owner_id='$post_owner_id' && post_id='$post_id'");
                while($comment = $commentList->fetch_assoc()){
                    $comment_owner_id = $comment['commenter_id'];
                    $actual_comment = $comment['comment'];

                     if($comment['commenter_type'] == 'student'){
                        $comment_owner_details = mysqli_query($conn, "select * from student where id='$comment_owner_id'")->fetch_assoc();
                        $comment_owner_name = $comment_owner_details['Name'];
                        $comment_owner_pic = $comment_owner_details['Student_pic'];
                    } else if($comment['commenter_type'] == 'faculty'){
                        $comment_owner_details = mysqli_query($conn, "select * from faculty where id='$comment_owner_id'")->fetch_assoc();
                        $comment_owner_name = $comment_owner_details['Name'];
                        $comment_owner_pic = $comment_owner_details['faculty_pic'];
                    } else {
                        $comment_owner_details = mysqli_query($conn, "select * from recruiter where id='$comment_owner_id'")->fetch_assoc();
                        $comment_owner_name = $comment_owner_details['Name'];
                        $comment_owner_pic = $comment_owner_details['recruiter_pic'];
                    }
                    ?> 
                    <div class="post-comment">
                        <img src="../<?php echo $comment_owner_pic; ?>" alt="" class="profile-photo-sm" />.
                        <p><a href="timeline.php" class="profile-link"><?php echo $comment_owner_name; ?> </a> <?php echo $actual_comment; ?></div>
                    <?php
                }
                ?>
                

                <div class="post-comment">
                    <form action="" method="POST" style="width: 100%">
                        <img src="../<?php echo $Rec_Details['recruiter_pic']; ?>" alt="" class="profile-photo-sm" />
                        <input required type="text" class="form-control" name="comment-content" placeholder="Post a comment">
                        <input type="hidden" name='post-owner' value="<?php echo $post_owner_id; ?>"/>
                        <input type="hidden" name='post-id' value="<?php echo $post_id; ?>"/>
                        <button style="background-color:#3C2A21; color: white;outline: none; border-radius: .5rem;border: none;" type="submit" name="comment-btn">comment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>
