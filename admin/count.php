<?php
include_once '../config/functions.php';
include_once('../config/config.php');
include_once('../config/database.php');

   $stmt = $DB->prepare("SELECT * FROM views ");
   $stmt->execute();
   $res = count($stmt->fetchAll());	

   $stmt = $DB->prepare("SELECT * FROM network WHERE 1 AND activity = 1 ");
   $stmt->execute();
   $log = count($stmt->fetchAll());

   $stmt = $DB->prepare("SELECT * FROM booking ");
   $stmt->execute();
   $book = count($stmt->fetchAll());

   $stmt = $DB->prepare("SELECT * FROM hostel ");
   $stmt->execute();
   $hostel = count($stmt->fetchAll());

      $stmt = $DB->prepare("SELECT * FROM client ");
   $stmt->execute();
   $client = count($stmt->fetchAll());

      $stmt = $DB->prepare("SELECT * FROM landlord ");
   $stmt->execute();
   $land = count($stmt->fetchAll());
?>
        <div class="row tile_count">
          <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <span class="count_top"><i class="fa fa-user"></i> Total Views </span>
              <div class="count"><?php echo $res; ?></div>
              <span class="count_bottom"><i class="green">4% </i> From last Week</span>
            </div>
          </div>
          <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <span class="count_top"><i class="fa fa-clock-o"></i> Logged in users</span>
              <div class="count"><?php echo $log ?></div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
            </div>
          </div>
          <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <span class="count_top"><i class="fa fa-user"></i> Total Bookings </span>
              <div class="count green"><?php echo $book; ?></div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
          </div>
          <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <span class="count_top"><i class="fa fa-user"></i> Total Hostels</span>
              <div class="count"><?php echo $hostel; ?></div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
            </div>
          </div>
          <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <span class="count_top"><i class="fa fa-user"></i> Total clients</span>
              <div class="count"><?php echo $client; ?></div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
          </div>
          <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <span class="count_top"><i class="fa fa-user"></i> Total Landlords</span>
              <div class="count"><?php echo $land; ?></div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
          </div>

        </div>
