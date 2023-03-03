<?php

?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Library</title>
</head>
<body>
    <form action="library.php" method="post">
        <input type="number" name="song_id" placeholder="Id" /><br><br>
        <input type="text" name="song_name" placeholder="Song Name" /><br><br>
        <input type="text" name="artist_name" placeholder="Artist Name" /><br><br>
        <input type="text" name="album_name" placeholder="Album" /><br><br>
        <input type="number" name="year" placeholder="Year of Release" /><br><br>
    </form>

    <div>
        <input type="submit" name="add" value="Add" />
        <input type="submit" name="update" value="Update" />
        <input type="submit" name="delete" value="Remove" />
        <input type="submit" name="search" value="Search" />
    </div>
</body>
</html>