  <form action="" method="post">
    <!-- name = key -->
    <input type="text" name="producer" value="<?= isset($_POST['producer']) ? htmlspecialchars($_POST['producer']) : '' ?>">  
    <input type="text" name="name" value="<?= isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '' ?>">  
    <input type="text" name="vintage" value="<?= isset($_POST['vintage']) ? htmlspecialchars($_POST['vintage']) : '' ?>">
    <br>
    <select name="types" id="">
        <option value="">Select type</option>
        <option value="white"<?= (isset($_POST['option']) && $_POST['option'] == 'white') ? ' selected' : '' ?>>white</option>
        <option value="red"<?= (isset($_POST['option']) && $_POST['option'] == 'red') ? ' selected' : '' ?>>Red</option>
        <option value="rose"<?= (isset($_POST['option']) && $_POST['option'] == 'rose') ? ' selected' : '' ?>>Rose</option>
        <option value="sparkling"<?= (isset($_POST['option']) && $_POST['option'] == 'sparkling') ? ' selected' : '' ?>>Sparkling</option>
        <option value="fortified"<?= (isset($_POST['option']) && $_POST['option'] == 'fortified') ? ' selected' : '' ?>>Fortified</option>
    </select>
    <br>

    <input type="hidden" name="cabernet" value="0">
    <label><input type="checkbox" name="cabernet" value="1"<?= (isset($_POST['cabernet']) && $_POST['cabernet'] == 1) ? ' checked' : '' ?>>Cabernet</label>
    
    <input type="hidden" name="merlot" value="0">
    <label><input type="checkbox" name="merlot"  value="1"<?= (isset($_POST['merlot']) && $_POST['merlot'] == 1) ? ' checked' : '' ?>>Merlot</label>
    
    <input type="hidden" name="sauvignon" value="0">
    <label><input type="checkbox" name="sauvignon"  value="1"<?= (isset($_POST['sauvignon']) && $_POST['sauvignon'] == 1) ? ' checked' : '' ?>>Saugvinon</label>
    
    <input type="hidden" name="chardonnay" value="0">
    <label><input type="checkbox" name="chardonnay"  value="1"<?= (isset($_POST['chardonnay']) && $_POST['chardonnay'] == 1) ? ' checked' : '' ?>>Chardonnay</label>
    <br>

    
    <input type="submit">
  </form>

 <?php  var_dump($_POST); ?>