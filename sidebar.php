<?php
require_once 'include.php';
$rows=getAllCate();
?>    
    <div class="col-xs-12 col-sm-3 sidebar-offcanvas">
      <div class="list-group">
      <?php foreach ($rows as $row):?>
        <a href="catelist.php?id=<?php echo $row['id']; ?>" class="list-group-item">
          <?php echo $row['cName']; ?>
          <span class="badge"><?php echo getCateNum($row['id']) ;?></span>
        </a>
      <?php endforeach; ?>

      </div>
    </div>