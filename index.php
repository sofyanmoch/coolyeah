<?php include('base/header.php') ?>

<div class="container p-5">
  <div class="text-center">
    <h2>Silabus</h2>
    <p>Materi yang akan dipelajari pada Mata Kuliah ini</p>
  </div>

  <?php
  require_once('helper/menu.php');
  foreach ($menu['menu'] as $index => $item) {
    ?>
    <div class="row mb-4">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header" style="background-color: white">
            <h2 class="p-0 btn btn-link btn-block text-left" type="button" data-toggle="collapse"
              data-target="#collapse<?= $index ?>" aria-expanded="false" aria-controls="collapse<?= $index ?>">
              <?= $item['title'] ?>
            </h2>
            <p>
              <?= $item['description'] ?>
            </p>
            <div class="row">
              <div class="col-md-2 col-6">
                <div class="card-syllabus">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" width="16" height="16"
                    class="syllabus-category__module-type-icon">
                    <path
                      d="M4.667 7.334c0-.368.298-.667.666-.667h5.334a.667.667 0 110 1.334H5.333a.667.667 0 01-.666-.667zM5.333 9.334a.667.667 0 000 1.333h5.334a.667.667 0 000-1.333H5.333z">
                    </path>
                    <path fill-rule="evenodd"
                      d="M2.667 1.334A.667.667 0 002 2.001v12c0 .368.298.666.667.666h10.666a.667.667 0 00.667-.666V5.334a.666.666 0 00-.146-.416l-2.667-3.334a.667.667 0 00-.52-.25h-8zm.666 12V2.667H10v2.667c0 .368.299.667.667.667h2v7.333H3.333zm8.613-8.667l-.613-.766v.766h.613z"
                      clip-rule="evenodd"></path>
                  </svg>
                  <span class="ml-2">
                    <?= count($item['list']) ?> Materi
                  </span>
                </div>
              </div>
              <div class="col-md-2 col-6" style="display: flex; align-items: center; color: #a1a1aa">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="" viewBox="0 0 24 24" width="16"
                  height="16">
                  <path
                    d="m17.618 5.968 1.453-1.453 1.414 1.414-1.453 1.453a9 9 0 1 1-1.414-1.414ZM12 20a7.001 7.001 0 1 0 0-14.002A7.001 7.001 0 0 0 12 20ZM11 8h2v6h-2V8ZM8 1h8v2H8V1Z">
                  </path>
                </svg>
                <span>
                  <?= count($item['list']) * 15 ?> Menit
                </span>
              </div>
            </div>
          </div>
          <div id="collapse<?= $index ?>" class="collapse">
            <div class="card-body" style="background-color: rgba(0, 0, 0, 0.03)">
              <ul class="list-group">
                <?php
                if (isset($item['list']) && is_array($item['list'])) {
                  foreach ($item['list'] as $listItem) {
                    ?>
                    <a class="list-group-item list-materi" href="<?= $listItem['to'] ?>">
                      <?= $listItem['title'] ?>
                    </a>
                    <?php
                  }
                }
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
  }
  ?>

  <div class="text-center my-5">
    <h2>List Project</h2>
    <div class="mt-3 row">
      <?php
      require_once('helper/project.php');
      foreach ($project['project'] as $index => $item) {
  ?>
    <div class="col-4">
        <div class="card mb-3" style="max-width: 300px;">
          <img src="<?= $item['image'] ?>" class="card-img-top" style="padding: 10px;" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $item['title'] ?></h5>
            <p class="card-text"><?= $item['description'] ?></p>
            <a href="<?= $item['link'] ?>" class="btn btn-primary">Visit Project</a>
          </div>
        </div>
      </div>
  <?php
      }
      ?>
    </div>
  </div>


  <!-- Footer  -->
  <div class="text-center mt-4">
    <p style="font-size: 11px">
      Made with <i class="fa fa-heart"></i> by
      <a href="https://github.com/sofyanmoch">Mochamad Sofyan</a>
    </p>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>