<?php

function getFeed($feed_url) {

    $content = file_get_contents($feed_url);
    $x = new SimpleXmlElement($content);

    echo "<div class='feed_list'>";

      $g = 0;

      foreach($x->channel->item as $entry) {

        $g++;

        $description = $entry->description;
        $imgpattern = '/<img\s+src="([^"]+)"/i';
        preg_match($imgpattern, $description, $matches);
        $imageurl['image'] = $matches[1];

        echo "<div class='feed_container'>";

        echo "<a href='$entry->link' title='$entry->title' target='_blank'>
        <div class='feed_img_cont'>
        <img src=". $imageurl['image'] . " />
        </div>

        <div class='feed_title_cont'>" . $entry->title . "
        </div></a><p><a class='btn btn-primary' style='margin-left:10px;margin-top:10px;' href='$entry->link' title='$entry->title' target='_blank'>Read More</a></p>";
        echo "</div>";


        if ($g == 5)  break;

    }

    echo "</div>";
}

function getDownloadFeed($feed_url) {

    $content = file_get_contents($feed_url);
    $x = new SimpleXmlElement($content);

    echo "<ul class='feed_list'>";

    $u = 0;

    foreach($x->channel->item as $entry) {

      $u++;

      $description = $entry->description;
      $description = substr($description, 0, 120);
      $string = substr($description, 0, strrpos($description, ' ')).'...';

      echo "<li><span class='feed_list_title'><a href='$entry->link' title='$entry->title' target='_blank'>" . $entry->title . "</a></span>
      <p><span class='feed_list_des'>" . $string . "</span></p><p><a class='btn btn-primary' href='$entry->link' title='$entry->title' target='_blank'>
      <i class='fa fa-download' style='color:#fff;'></i> Click here to Download</a></p></li>";

      if ($u == 15) break;

    }
    echo "</ul>";
}

function getDownloadAppFeed($feed_url) {

    $content = file_get_contents($feed_url);
    $x = new SimpleXmlElement($content);

    echo "<ul class='feed_list'>";

    $u = 0;

    foreach($x->channel->item as $entry) {

      $u++;

      $description = $entry->description;
      $description = substr($description, 0, 120);
      $string = substr($description, 0, strrpos($description, ' ')).'...';

      echo "<li><span class='feed_list_title'><a href='$entry->link' title='$entry->title' target='_blank'>" . $entry->title . "</a></span>
      <p><span class='feed_list_des'>" . $string . "</span></p><p><a class='btn btn-primary' href='$entry->link' title='$entry->title' target='_blank'>
      <i class='fa fa-download' style='color:#fff;'></i> Click here to Download</a></p></li>";

      if ($u == 10) break;

    }
    echo "</ul>";
}

function getNewsFeed($feed_url) {

    $content = file_get_contents($feed_url);
    $x = new SimpleXmlElement($content);

    echo "<div class='feed_list2'>";

      $g = 0;

      foreach($x->channel->item as $entry) {

        $g++;

        $description = $entry->description;
        $imgpattern = '/<img\s+src="([^"]+)"/i';
        preg_match($imgpattern, $description, $matches);
        $imageurl['image'] = $matches[1];

        echo "<div class='feed_container2'>";

        echo "<a href='$entry->link' title='$entry->title' target='_blank'>
        <div class='feed_img_cont2'>
        <img src=". $imageurl['image'] . " />
        </div>

        <div class='feed_title_cont2'>" . $entry->title . "
        </div></a><p><a class='btn btn-primary' style='margin-top:10px;' href='$entry->link' title='$entry->title' target='_blank'>Read More</a></p>
        <p>
        Share:
          <div class='addthis_inline_share_toolbox'></div>
        </p>";
        echo "</div>";


        if ($g == 10)  break;

    }

    echo "</div>";
}

?>

<!-- <category>Sports</category>
<pubDate>Thu, 29 Jun 2017 14:01:08 GMT</pubDate> -->

<!-- $imgpattern = '/src="(.*?)"/i';
preg_match($imgpattern, $description, $matches);
$imageurl['image'] = $matches[1];
echo $imageurl['image']; -->
