
<?php 

$followingCount = mysqli_query($conn, "select * from student ")->num_rows;

?>
<div class="col-md-3 static">
<div class="profile-card">

    <img src="../<?php echo $FacImage; ?>" alt="user" class="profile-photo" />
    <h5><a href="timeline.php" class="text-white"><?php echo $FacName ?></a></h5>
    <a href="#" class="text-white"><i class="ion ion-android-person-add"></i> <?php echo $followingCount; ?></a>
</div><!--profile card ends-->
<ul class="nav-news-feed">
    <li><i class="icon ion-ios-paper"></i><div><a href="newsfeed.php">My Newsfeed</a></div></li>
    <!-- <li><i class="icon ion-ios-people"></i><div><a href="newsfeed-people-nearby.php">People Nearby</a></div></li>
    <li><i class="icon ion-ios-people-outline"></i><div><a href="newsfeed-friends.php">Friends</a></div></li>
    <li><i class="icon ion-chatboxes"></i><div><a href="newsfeed-messages.php">Messages</a></div></li> -->
    <li><i class="icon ion-images"></i><div><a href="timeline.php">Images</a></div></li>
    <li><i class="icon ion-ios-videocam"></i><div><a href="timeline.php">Videos</a></div></li>
</ul><!--news-feed links ends-->
<div id="chat-block">
    <div class="title">Chat online</div>
    <ul class="online-users list-inline">
    <li><a href="#" title="Justin"><img src="../images/users/user-2.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
    <li><a href="#" title="Alan"><img src="../images/users/user-3.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
    <li><a href="#" title="Arun"><img src="../images/users/user-4.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
    <li><a href="#" title="Amal"><img src="../images/users/user-5.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
    <li><a href="#" title="Aravind"><img src="../images/users/user-6.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
    <li><a href="#" title="Prince"><img src="../images/users/user-7.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
    <li><a href="#" title="Emma Mackey"><img src="../images/users/user-8.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
    <li><a href="#" title="Decaprio"><img src="../images/users/user-9.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
    <li><a href="#" title="Andrew"><img src="../images/users/user-10.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
    </ul>
</div><!--chat block ends-->
</div>