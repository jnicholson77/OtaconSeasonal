<!DOCTYPE html>
<html lang-"en">
  <head>
    <title>Otacon's Forum</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="forum of the website"/>
    <link rel="stylesheet" type="text/css" href="otacon.css"/>
  </head>
  <body>
    <h1><a href="index.html">Otacon's Seasonal Favorites</a></h1>
    <nav>
      <a href="otaconabout.html">About</a> &nbsp
      <a href="otaconalltime.html">All-Time Favorites</a> &nbsp
      <a href="otaconseasonal.html">Seasonal Picks</a> &nbsp
      <a href="otaconvideos.html">Videos of Favorite Anime</a> &nbsp
      <a href="otaconforum.php">Forum</a> &nbsp
    </nav>
    <main>
      <h2 id="forumTop">One thing I know all otakus love to do is to argue, er excuse me, I mean
          express their feelings about their favorite shows, genres, and characters! Use
          Otacon's Otaku Forum to express those feelings and tell me what you think about my picks for
          the season and my top anime of all time!
      </h2>
      <?php echo file_get_contents("otaconforum.txt");
       ?>
       <form method="post" action="otacon.php">
   			<p><input type="text" name="txtUsername" id="txtUsername" placeholder="Enter Your Name"></input></p>
   			<p><textarea rows="12" cols="100" name="txtComment"></textarea></p>
   			<p><input type="submit" name="submit"></input> &nbsp &nbsp &nbsp <input type="reset" name="reset"></input></p>
   		</form>
    </main>
  </body>
</html>
