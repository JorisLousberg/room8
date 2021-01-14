<a href="admin.php"><div class="return">RETURN</div></a>
<div class="form">
  <form action="" enctype="multipart/form-data" method="post">
  <input type="number" name="tb_questid" value="" placeholder="vraag id"><br /> <!--question input -->
  <label for="languages">Kies een taal:</label><br /> <!--start catagory part -->
  <select id="lang" name="tb_language"><!--catagory list -->
    <option value="1">NL</option> <!--   option 1-->
    <option value="2">EN</option> <!--  option 2-->
    
  </select><br /> <!--END catagory list -->

  <input type="text" name="tb_question" value="" placeholder="schrijf de vraag"><br /> <!--question input -->
  <input type="text" name="tb_answer" value="" placeholder="schrijf het andwoord"><br /> <!--answer input -->

  <input type="hidden" name="frmfaqdata" value="frmfaqdata"> <br /> <!--form data values -->
  <input type="submit" name="button_submit" value="versturen"> <!--data tranfer button -->
  </form>
</div>