<?php include 'db_connection.php'; ?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Welcome to my Corememories</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Poppins"
    />
    <style>
      body,
      h1,
      h2,
      h3,
      h4,
      h5 {
        font-family: "Poppins", sans-serif;
        color: white;
      }
      body {
        font-size: 16px;
        background: linear-gradient(to bottom right, purple, orange);
        background-color: rgba(255, 255, 255, 0.5); 
      }
      nav {
        background-color: black;
      }
      .w3-half img {
        margin-bottom: -6px;
        margin-top: 16px;
        opacity: 0.8;
        cursor: pointer;
      }
      .w3-half img:hover {
        opacity: 1;
      }
    </style>
  </head>
  <body>
    <!-- Sidebar/menu -->
    <nav
      class="w3-sidebar w3-black w3-collapse w3-top w3-large w3-padding"
      style="z-index: 3; width: 300px; font-weight: bold;"
      id="mySidebar"
    >
      <br />
      <a
        href="javascript:void(0)"
        onclick="w3_close()"
        class="w3-button w3-hide-large w3-display-topleft"
        style="width: 100%; font-size: 22px"
        >Close Menu</a
      >
      <div class="w3-container">
        <h3 class="w3-padding-64">
          <b>Welcome<br />Visitor!</b>
        </h3>
      </div>
      <div class="w3-bar-block">
        <a
          href="#"
          onclick="w3_close()"
          class="w3-bar-item w3-button w3-hover-white"
          >Home</a
        >
        <a
          href="#family"
          onclick="w3_close()"
          class="w3-bar-item w3-button w3-hover-white"
          >Family</a
        >
        <a
          href="#friendship"
          onclick="w3_close()"
          class="w3-bar-item w3-button w3-hover-white"
          >Friendship</a
        >
        <a
          href="#hobbies"
          onclick="w3_close()"
          class="w3-bar-item w3-button w3-hover-white"
          >Hobbies</a
        >
        <a
          href="#ffxiv"
          onclick="w3_close()"
          class="w3-bar-item w3-button w3-hover-white"
          >FFXIV</a
        >

      </div>
    </nav>

    <!-- Top menu on small screens -->
    <header
      class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding"
    >
      <a
        href="javascript:void(0)"
        class="w3-button w3-red w3-margin-right"
        onclick="w3_open()"
        >☰</a
      >
      <span>Welcome to my Islands</span>
    </header>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div
      class="w3-overlay w3-hide-large"
      onclick="w3_close()"
      style="cursor: pointer"
      title="close side menu"
      id="myOverlay"
    ></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left: 340px; margin-right: 40px">
      <!-- Header -->
      <div class="w3-container" style="margin-top: 80px" id="showcase">
        <h1 class="w3-jumbo"><b>Core Memories Islands</b></h1>
        <div class="w3-container" style="margin-top: 80px" id="showcase">
    <h1 class="w3-xxxlarge w3-text-white" id="family"><b>Family</b></h1>
    <hr style="width: 50px; border: 5px solid red" class="w3-round" />
</div>

<!-- Photo grid (modal) -->
<div class="w3-row-padding">
    <?php
    include 'db_connection.php';  // Include the database connection file

    // Query to select islandContentID 1 to 3
    $sql = "SELECT * FROM islandContents WHERE islandContentID BETWEEN 1 AND 3";
    
    $result = $conn->query($sql);

    // Display images 1-3
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Each image is placed inside its own 'w3-half' container
            echo '<div class="w3-half">';
            echo '<img src="' . $row["image"] . '" style="width: 100%" onclick="onClick(this)" alt="' . $row["content"] . '" />';
            echo '</div>';
        }
    } else {
        echo '<p>No images found.</p>'; // Message if no results
    }

    $conn->close();
    ?>
</div>


      <!-- Modal for full size images on click-->
      <div
        id="modal01"
        class="w3-modal w3-black"
        style="padding-top: 0"
        onclick="this.style.display='none'"
      >
        <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
        <div
          class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64"
        >
          <img id="img01" class="w3-image" />
          <p id="caption"></p>
        </div>
      </div>

      <div class="w3-container" style="margin-top: 80px" id="showcase">
    <h1 class="w3-xxxlarge w3-text-white" id="friendship"><b>Friendship</b></h1>
    <hr style="width: 50px; border: 5px solid red" class="w3-round" />
</div>

<!-- Photo grid (modal) -->
<div class="w3-row-padding">
    <?php
    include 'db_connection.php';  // Include the database connection file

    // Query to select islandContentID 4 to 6
    $sql = "SELECT * FROM islandContents WHERE islandContentID BETWEEN 4 AND 6";
    
    $result = $conn->query($sql);

    // Display images 4-6
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Each image is placed inside its own 'w3-half' container
            echo '<div class="w3-half">';
            echo '<img src="' . $row["image"] . '" style="width: 100%" onclick="onClick(this)" alt="' . $row["content"] . '" />';
            echo '</div>';
        }
    } else {
        echo '<p>No images found.</p>'; // Message if no results
    }

    $conn->close();
    ?>
</div>

<div class="w3-container" style="margin-top: 80px" id="showcase">
    <h1 class="w3-xxxlarge w3-text-white" id="hobbies"><b>Hobbies</b></h1>
    <hr style="width: 50px; border: 5px solid red" class="w3-round" />
</div>

<!-- Photo grid (modal) -->
<div class="w3-row-padding">
    <?php
    include 'db_connection.php';  // Include the database connection file

    // Query to select islandContentID 7 to 9
    $sql = "SELECT * FROM islandContents WHERE islandContentID BETWEEN 7 AND 9";
    
    $result = $conn->query($sql);

    // Display images 7-9
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Each image is placed inside its own 'w3-half' container
            echo '<div class="w3-half">';
            echo '<img src="' . $row["image"] . '" style="width: 100%" onclick="onClick(this)" alt="' . $row["content"] . '" />';
            echo '</div>';
        }
    } else {
        echo '<p>No images found.</p>'; // Message if no results
    }

    $conn->close();
    ?>
</div>

<div class="w3-container" style="margin-top: 80px" id="showcase">
    <h1 class="w3-xxxlarge w3-text-white" id="ffxiv"><b>FFXIV</b></h1>
    <hr style="width: 50px; border: 5px solid red" class="w3-round" />
</div>

<!-- Photo grid (modal) -->
<div class="w3-row-padding">
    <?php
    include 'db_connection.php';  // Include the database connection file

    // Query to select islandContentID 10 to 12
    $sql = "SELECT * FROM islandContents WHERE islandContentID BETWEEN 10 AND 12";
    
    $result = $conn->query($sql);

    // Display images 10-12
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Each image is placed inside its own 'w3-half' container
            echo '<div class="w3-half">';
            echo '<img src="' . $row["image"] . '" style="width: 100%" onclick="onClick(this)" alt="' . $row["content"] . '" />';
            echo '</div>';
        }
    } else {
        echo '<p>No images found.</p>'; // Message if no results
    }

    $conn->close();
    ?>
</div>




      <!-- End page content -->
    </div>

    <!-- W3.CSS Container -->
    <div
      class="w3-light-grey w3-container w3-padding-32"
      style="margin-top: 75px; padding-right: 58px"
    >
      <p class="w3-right">
        Powered by
        <a
          href="https://www.w3schools.com/w3css/default.asp"
          title="W3.CSS"
          target="_blank"
          class="w3-hover-opacity"
          >w3.css</a
        >
      </p>
    </div>

    <script>
      // Script to open and close sidebar
      function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
      }

      function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
      }

      // Modal Image Gallery
      function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
        var captionText = document.getElementById("caption");
        captionText.innerHTML = element.alt;
      }
    </script>
  </body>
</html>
