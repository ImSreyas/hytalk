<?php 
$sl = mysqli_query($conn, "select * from student");
while($s = $sl->fetch_assoc()){
    ?> 
    <div class="student-list-main-container">
        <div class="student-div-upper-div">
            <div class="student-image-container"><img class="student-image" src="../<?php echo $s['Student_pic']; ?>"></div>
            <div>
                <div class="student-name"><?php echo $s['Name']; ?></div>
                <div><?php echo $s['Email']; ?></div>
                <div><?php echo $s['Mobile_no']; ?></div>
                <div><?php echo $s['Gender']; ?></div>
                <div><?php echo $s['register_no']; ?></div>
                <div><?php echo $s['Dob']; ?></div>
                <div><?php echo $s['Stream']; ?></div>
                <div><?php echo $s['semester']; ?></div>
            </div>
        </div>
        <div class="user-delete"><a class="user-d-link" href="php/deleteUser.php?id=<?php echo $s['id']; ?>">Delete</a></div>
    </div>
    <?php
}
?>