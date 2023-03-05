<?php 
?> <div style="display : block; width: fit-content; padding: .5rem 2rem; background-color:#3C2A21; color: white;margin-left: 1rem; border-radius: 1.2rem">following</div> <?php 
$friendList = mysqli_query($conn, "select * from friends where user_id='$student_id'");
while($friend = $friendList->fetch_assoc()){
    $fr = ($friend['status'] == 1)? 'following' : 'requested';
    $friend_id = $friend['friend_id'];
    $friend_type = $friend['friend_type'];
    if($friend['friend_type'] == 'student'){
        $post_owner_details_ = mysqli_query($conn, "select * from student where id='$friend_id'");
        if($post_owner_details = $post_owner_details_->fetch_assoc()){
            $post_owner_name = $post_owner_details['Name'];
            $post_owner_pic = $post_owner_details['Student_pic'];
        }
    } else if($friend['friend_type'] == 'faculty'){
        $_post_owner_details = mysqli_query($conn, "select * from faculty where id='$friend_id'");
        if($post_owner_details = $_post_owner_details->fetch_assoc()){
            $post_owner_name = $post_owner_details['Name'];
            $post_owner_pic = $post_owner_details['Faculty_pic'];
            }
    } else {
        $post_owner__details = mysqli_query($conn, "select * from recruiter where id='$friend_id'");
        if($post_owner_details = $post_owner__details->fetch_assoc()){
            $post_owner_name = $post_owner_details['Name'];
            $post_owner_pic = $post_owner_details['recruiter_pic'];
        }
    }
    ?> 
    <div class="col-md-6 col-sm-6" style="background-color: #FAF8F1; border-radius: 1rem;padding-block-start: 2rem;margin: 1rem; width: 45%">
        <div class="friend-card">
            <div class="card-info">
                <div class="friend-info">
                    <img src="../<?php echo $post_owner_pic; ?>" alt="user" class="profile-photo" />
                <span class="pull-right text-green" style='font-size: 1.5rem;'><?php echo $fr; ?></span>
                <h5><a href="timeline.php" class="profile-link" style="font-size: 1.8rem;"><?php echo ucfirst($post_owner_name); ?></a></h5>
                <p style="padding: .5rem 1rem; border-radius: .8rem;background-color: #FF6E31; color: white; width: fit-content;"><?php echo $friend_type; ?></p>
                </div>
            </div>
        </div>  
    </div>
    <?php
}

?> <div style="display : block; width: fit-content; margin-left: 1rem">followers</div> <?php 
$friendList = mysqli_query($conn, "select * from friends where friend_id='$student_id'");
while($friend = $friendList->fetch_assoc()){
    $fr = ($friend['status'] == 1)? 'follower' : 'r';
    $user_id = $friend['user_id'];
    $user_type = $friend['user_type'];
    if($friend['user_type'] == 'student'){
        $post_owner_details = mysqli_query($conn, "select * from student where id='$user_id'")->fetch_assoc();
        $post_owner_name = $post_owner_details['Name'];
        $post_owner_pic = $post_owner_details['Student_pic'];
    } else if($friend['friend_type'] == 'faculty'){
        $post_owner_details = mysqli_query($conn, "select * from faculty where id='$user_id'")->fetch_assoc();
        $post_owner_name = $post_owner_details['Name'];
        $post_owner_pic = $post_owner_details['Faculty_pic'];
    } else {
        $post_owner_details = mysqli_query($conn, "select * from recruiter where id='$user_id'")->fetch_assoc();
        $post_owner_name = $post_owner_details['Name'];
        $post_owner_pic = $post_owner_details['recruiter_pic'];
    }
    ?> 
    <div class="col-md-6 col-sm-6" style="background-color: #FAF8F1; border-radius: 1rem;padding-block-start: 2rem;margin: 1rem; width: 45%">
        <div class="friend-card">
            <div class="card-info">
                <div class="friend-info">
                    <img src="../<?php echo $post_owner_pic; ?>" alt="user" class="profile-photo" />
                <span class="pull-right text-green" style='font-size: 1.5rem;'>
                <?php 
                if($fr != 'r'){
                    echo $fr;
                } else {
                    ?>
                    <a style="color: #00e300; margin-right:1rem" href="php/acceptFriendRequest.php?user_id=<?php echo $user_id; ?>&friend_id=<?php echo $student_id; ?>&user_type=<?php echo $user_type; ?>&friend_type=student">accept</a>
                    <a style="color: red" href="php/rejectFriendRequest.php?user_id=<?php echo $user_id; ?>&friend_id=<?php echo $student_id; ?>&user_type=<?php echo $user_type; ?>&friend_type=student">reject</a>
                    <?php
                }
                ?>
                </span>
                <h5><a href="timeline.php" class="profile-link" style="font-size: 1.8rem;"><?php echo ucfirst($post_owner_name); ?></a></h5>
                <p style="padding: .5rem 1rem; border-radius: .8rem;background-color: #FF6E31; color: white; width: fit-content;"><?php echo $friend_type; ?></p>
                </div>
            </div>
        </div>  
    </div>
    <?php
}
?>


