<?php 
if(isset($_POST['send-message'])){
    $send_id = $_POST['sender_id'];
    $receive_id = $_POST['receiver_id'];
    $message = $_POST['msg'];

    mysqli_query($conn, "insert into message set send_id='$send_id', receive_id='$receive_id', message='$message'");
}
?>
<div class="tab-content scrollbar-wrapper wrapper scrollbar-outer">
    <?php 
    $messages = mysqli_query($conn, "select * from message where send_id='$student_id'");
    $friend_id_c = 0;
    $checkFirst = true;
    while($msg = $messages->fetch_assoc()){
        if($friend_id_c != $msg['receive_id']){
            $friend_id_c = $msg['receive_id'];
    ?> 
        <div class="tab-pane <?php if($checkFirst) echo 'active'; ?>" id="<?php echo $friend_id_c; ?>">
            <div class="chat-body">
                <ul class="chat-message">
                    <?php
                    $checkFirst = false;
                    $individual_friend_list = mysqli_query($conn, "select * from message where (send_id='$student_id' && receive_id='$friend_id_c') || (send_id='$friend_id_c' && receive_id='$student_id')");
                    while($i = $individual_friend_list->fetch_assoc()){
                        $sender_id = $i['send_id'];
                        $receiver_id = $i['receive_id'];
                        $message_time = $i['time'];
                        $message_content = $i['message'];

                        $messageDetailsQ = mysqli_query($conn, "select * from student where id='$sender_id'");
                        if($messageDetails = $messageDetailsQ->fetch_assoc()){
                            $messageName = $messageDetails['Name'];
                            $messagePic = $messageDetails['Student_pic'];
                        }
                        // $receiverDetailsQ = mysqli_query($conn, "select * from student where id='$receiver_id'");
                        // if($receiverDetails = $receiverDetailsQ->fetch_assoc()){
                        //     $receiverName = $receiverDetails['Name'];
                        //     $receiverPic = $receiverDetails['Student_pic'];
                        // }
                    ?> 
                        <li class="<?php if($sender_id == $student_id) echo 'right'; else echo 'left'?>">
                            <img src="../<?php echo $messagePic; ?>" alt="" class="profile-photo-sm pull-left" />
                            <div class="chat-item">
                                <div class="chat-item-header">
                                    <h5><?php echo $messageName; ?></h5>
                                    <small class="text-muted"><?php echo $message_time; ?></small>
                                </div>
                                <p><?php echo $message_content; ?></p>
                            </div>
                        </li>
                    <?php
                    }
                    ?> 
                </ul>
            </div>

            <div class="send-message">
                <div class="input-group">
                    <form action="" method="post">
                        <input type="text" class="form-control" placeholder="Type your message" name='msg'>
                        <input type="hidden" value="<?php echo $student_id; ?>" name="sender_id" />
                        <input type="hidden" value="<?php echo $friend_id_c; ?>" name="receiver_id" />
                        <span class="input-group-btn">
                            <button style="border-radius: 1rem !important; margin-top: 1rem;" class="btn btn-default" type="send-message" name='send-message'>Send</button>
                        </span>
                    </form>
                </div>
            </div>

        </div>
    <?php
        }
    } ?>
</div>


<script>
$(document).ready(function(){
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        var target = $(e.target).attr("href"); // activated tab
        $(target + " .form-control").focus();
    });
});
</script>

