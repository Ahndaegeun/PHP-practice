<?php
    function print_title() {
      if (isset($_GET['id'])) {
        echo htmlspecialchars($_GET['id']);
      } else {
        echo "Welcome";
      }
    }
    function print_description() {
      if (isset($_GET['id'])) {
        $baseName = basename($_GET['id']);
        echo htmlspecialchars(file_get_contents('./data/'.$baseName));
      } else {
        echo "Hello PHP";
      }
    }
    function print_list() {
      $list = scandir('./data');
      for($i = 0; $i < count($list); $i++) {
        $title = htmlspecialchars($list[$i]);
        if($list[$i] != '.') {
          if($list[$i] != '..') {
            echo "<li><a
            href=\"index.php?id=$title\">$title</a></li>\n";
          }
        }
      }
    }
  ?>


<!-- Cross Site Scripting 방지 >htmlspecialchars -->
<!-- Basename > url에서 파일 경로 날림 -->