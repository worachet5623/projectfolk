<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Folk Project</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">หน้าแรก</a>
        </li>
        <?php
        if (!isset($_SESSION['status'])) {
          echo '<li class="nav-item">
            <a class="nav-link active" aria-current="page" href="loginform.php">หน้าเข้าสู่ระบบ</a>
          </li>';

        } else {
          echo '<li class="nav-item">
            <form action="logout.php" method="post">
            <input class="btn" aria-current="page" name="destroy" type="submit" value="ออกจากระบบ"></input>
            </form>
          </li>';
          echo '<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            จัดการสมาชิก
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="addmember.php">เพิ่มสมาชิก</a></li>
            <li><a class="dropdown-item" href="listmember.php">รายชื่อทั้งหมด</a></li>
          </ul>
        </li>';
        }
        ?>






      </ul>
    </div>
  </div>
</nav>