<form action="admin.php" enctype="multipart/form-data" method="post">
// <form action="<?php echo $thisPage; ?>" enctype="multipart/form-data" method="post">
<p>
  <select name="tb_category">

    <option value="">Select Category</option>
    <option value="1">Broodjes / Wraps</option>
    <option value="2">Soep</option>
    <option value="3">Snacks</option>
    <option value="4">Snoep</option>
    <option value="5">Drank</option>

  </select>
</p>

<p>
  <select name="tb_language">
  
    <option value="">Select language</option>
    <option value="1">NL</option>
    <option value="2">EN</option>

  </select>
</p>

  <input type="text" autocomplete='off' name="tb_product" value="" placeholder="Title here"/> <br>

  <input type="text" autocomplete='off' name="tb_description" value="" placeholder="Description here"/> <br>

  <input type="text" autocomplete='off' name="tb_price" value="" placeholder="Price here"/> <br>

  <input type="hidden" name="frmInsertMenuitem" value="frmInsertMenuitem" /> <br>

  <input type="submit" name="btn_submit" value="Send"/>
  
</form>
