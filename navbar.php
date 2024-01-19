<?php
  // Get the current page filename
  $current_page = basename($_SERVER['PHP_SELF']);
?>

<!-- Navbar Start -->
<header class="header" style="margin: 100px 0;">
  <nav class="navbar navbar-expand-lg bg-success-subtle text-success-emphasis fixed-top p-0">
    <div class="container">
        <a class="navbar-brand" href="home.php">
          <img src="img/logo.png" alt="AGRODSS" width="auto" height="40" class="d-inline-block align-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto text-center mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link text-success-emphasis <?php if($current_page == 'home.php') echo 'active fw-semibold'; ?>" aria-current="page" href="home.php">হোম</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-success-emphasis <?php if($current_page == 'machineLearningModel.php') echo 'active fw-semibold'; ?>" href="machineLearningModel.php">মেশিনলার্নিং মডেল</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-success-emphasis <?php if($current_page == 'dataset.php') echo 'active fw-semibold'; ?>" href="dataset.php">ডাটাসেট</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-success-emphasis <?php if($current_page == 'publications.php') echo 'active fw-semibold'; ?>" href="publications.php">পাবলিকেশন্স</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-success-emphasis <?php if($current_page == 'pesticidesRecommendation.php') echo 'active fw-semibold'; ?>" href="pesticidesRecommendation.php">কিটনাশক সুপারিশ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-success-emphasis <?php if($current_page == 'about.php') echo 'active fw-semibold'; ?>" href="about.php">সম্পর্কে</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-success-emphasis <?php if($current_page == 'app.php') echo 'active fw-semibold'; ?>" href="app.php">অ্যাপ</a>
            </li>
          </ul>
        </div>
    </div>
  </nav>
</header>