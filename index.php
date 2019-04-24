<?php require ('php/header.php'); ?>

  <div class="container">
    <h1>Horoscope</h1>
    <form action="">
        <label for="birthdate">Enter Your Birthday</label> 
        <br>
        <input type="date" name="birthdate">
        <section>
            <input type="submit" class="save" name="save" value="Save" onclick="getHoroscope()">
            <input type="submit" class="update" name="update" value="Edit" onclick="updateHoroscope()">
            <input type="submit" class="delete" name="delete" value="Delete" onclick="deleteHoroscope()">
        </section>
    </form>
  </div>

  <script src="js/script.js"></script>
<?php require ('php/footer.php'); ?>