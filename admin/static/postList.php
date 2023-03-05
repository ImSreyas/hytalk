<?php 


$postContents = mysqli_query($conn, "select * from feed");
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
        <div class="post-owner-pic"><img class='p-o-i' src="../<?php echo $post_owner_pic; ?>" alt="user" class="profile-photo-md pull-left" />
        </div>
        <div class="user-info">
            <h5><a href="timeline.php" class="profile-link"><?php echo $post_owner_name; ?></a><span class="user-type" ><?php echo $type; ?></span><a class="delete-post" href='php/deletePost.php?post_id=<?php echo $post_id; ?>'>Delete</a></h5>
        </div>
        <!-- <div class="reaction">
            <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
            <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
        </div> -->

        <?php if($post_owner_image != '' and $post_owner_image != null){
            ?>
            <div class="main-image-post"><img class='main-i-p' src="../<?php echo $post_owner_image ?>" alt="post-image" class="img-responsive post-image" />
            </div>
            <?php
        } ?>
        <?php if($post_owner_video != '' and $post_owner_video != null){
            ?>
            <div class="video-wrapper"><video class='main-i-p' class="post-video" controls> <source src="../<?php echo $post_owner_video; ?>" type="video/mp4"> </video></div>
            <?php
        } ?>
            <p class="dt-shower">
                <span><?php echo $post_owner_date_and_time[0]; ?></span>
                <span class="time"><?php echo $post_owner_date_and_time[1]; ?></span>
            </p>
         <div class="content-wrapper--">
            <div class="caption" ><?php echo $post_owner_caption; ?></div>
            <div class="post-text">
                <p><?php echo $post_owner_content; ?></p>
            </div>
        </div>
    </div>
    <?php
}
?>
