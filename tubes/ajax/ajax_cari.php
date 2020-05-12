<?php

require '../php/functions.php';
$makanan = cari($_GET['keyword']);

?>
<table>
  <?php if (empty($makanan)) : ?>
    <tr>
      <td colspan="4">
        <center>
          <h1 style="color: red; font-style: italic; font-size: large;">Data tidak ditemukan</h1>
        </center>
      </td>
    </tr>
  <?php endif; ?>


  <?php foreach ($makanan as $m) : ?>
    <div class="nama">
      <a href="php/detail.php?id=<?= $m['id']; ?>">
        <?= $m["nama"]; ?>
      </a>
    </div>
  <?php endforeach; ?>
  </div>
</table>