<ul class="nav nav-tabs contact-list scrollbar-wrapper scrollbar-outer">
<?php 
$list1 = mysqli_query($conn, "select * from friends where user_id='$student_id' && status='1'");
while($l1 = $list1->fetch_assoc()){
    $chat_friend_id = $l1['friend_id'];
    
    $friend_details_query = mysqli_query($conn, "select * from student where id='$chat_friend_id'");
    if($friend_details = $friend_details_query->fetch_assoc()){
        $friend_name = $friend_details['Name'];
        $friend_pic = $friend_details['Student_pic'];
    }

    $list2 = mysqli_query($conn, "select * from friends where user_id='$chat_friend_id' && friend_id='$student_id' && status='1'");
    
    $lastMsgQ = mysqli_query($conn, "SELECT * FROM message where send_id='$student_id' && receive_id='$chat_friend_id' ORDER BY id DESC LIMIT 1");
    $lastMsgC = '';
    $time = '';
    if($lastMsgQ->num_rows > 0){
        $lastMsg = $lastMsgQ->fetch_assoc();
        $lastMsgC = $lastMsg['message'];
        if($lastMsg == '' || $lastMsg == null){
            $lastMsg['message'] = '';
            $lastMsg['time'] = '';
        } else {
            $time = explode(" ", $lastMsg['time']);
            $time = $time[1];
        }
    }

    if($list2->num_rows > 0){
?>
<li>
    <a href="#<?php echo $chat_friend_id; ?>" data-toggle="tab" class="chatbox-link">
    <div class="contact">
        <img src="../<?php echo $friend_pic ?>" alt="" class="profile-photo-sm pull-left"/>
        <div class="msg-preview">
            <h6><?php echo $friend_name; ?></h6>
            <p class="text-muted"><?php echo $lastMsgC ?></p>
        <small class="text-muted"><?php echo $time ?></small>
        </div>
    </div>
    </a>
</li>
<?php
    }
}
?>
