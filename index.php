<?php session_start();
var_dump($_SESSION);
require 'php/header.php'; ?>

  <div class="container">
    <h1>Horoscope</h1>
    <article>
      <label for="birthdate">Enter Your Birthday</label> 
      <br>
      <input type="date" name="birthdate" id="birthdate">
      <section>
        <input type="submit" class="save" name="save" value="Save" onclick="saveHoroscope()">
        <input type="submit" class="update" name="update" value="Edit" onclick="updateHoroscope()">
        <input type="submit" class="delete" name="delete" value="Delete" onclick="deleteHoroscope()">
      </section>
    </article>

    <p class="sign"></p>
  </div>

  <script src="js/script.js"></script>

<?php require 'php/footer.php'; ?>