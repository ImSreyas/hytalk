<?php 
$studentList = mysqli_query($conn, "select * from student");

$facultyList = mysqli_query($conn, "select * from faculty");

$recruiterList = mysqli_query($conn, "select * from recruiter");


?>
<div class="col-md-2 static">
<div class="suggestions" id="sticky-sidebar">
    <h4 class="grey">Who to Follow</h4>
    <div class="follow-user-search-bar-container">
        <input type="text" onkeydown="search(this);" class="user-search" style="background-color: #472D2D;border-radius: 1.3rem;margin-bottom: 1rem;color: white;border: none; outline: none; padding: 1rem 2rem" placeholder="Search users">
    </div>
    <?php 
        while($student = $studentList->fetch_assoc()){
            $friend_id = $student['id'];
            $alreadyF = mysqli_query($conn, "select * from friends where user_id='$student_id' && friend_id='$friend_id' && status='1' && friend_type='student'")->num_rows;
            if($alreadyF > 0) continue;


            $follow = mysqli_query($conn, "select * from friends where user_id='$student_id' && friend_id='$friend_id' && status='0' && friend_type='student'")->num_rows;
            $f = ($follow > 0)? true : false;
            if($student['id'] == $student_id) continue;
            ?>
                <div class="follow-user">
                    <img src="../<?php echo $student['Student_pic']; ?>" alt="" class="profile-photo-sm pull-left" />
                    <div>
                        <h5 style="font-size: 1.5rem" class="name"><?php echo $student['Name'] ?></h5>
                        <div style="font-size: 1.2rem;width: fit-content;padding: 0 1rem;border-radius: .8rem;text-align: start; margin: 0 !important; background-color: #FF8787;color: white;transform: translateY(-.3rem);">student</div>
                        <div style="font-size: 1.2rem;width: fit-content;padding: 0 1rem;border-radius: .8rem;text-align: start; margin: 0 !important; background-color: #54B435;">
                        <?php if(!$f){ ?>
                        <a style="color: white" href="php/addFriend.php?user_id=<?php echo $student['id'] ?>&user_type=student&id=<?php echo $student_id; ?>&type=student" class="text-green">Send request</a>
                        <?php
                        } else { ?>
                            <a style="color: white" href="php/addFriendCancel.php?user_id=<?php echo $student['id'] ?>&user_type=student&id=<?php echo $student_id; ?>&type=student" class="text-green">Requested</a>
                            <?php
                        } ?>
                        </div>
                    </div>
                </div>
            <?php
        }
    ?>

</div>
</div>
<script>
    let cards = document.querySelectorAll('.follow-user')
    let names = document.querySelectorAll('.name')
    function search(item){
        let value = item.value
        cards.forEach(card => {
            card.style.display = 'none'
        })
        names.forEach((name) => {
            let text = name.innerHTML
            if(text.includes(value)){
                name.parentElement.parentElement.style.display = 'block'
            }
        })
    }
</script>