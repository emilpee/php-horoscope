<?php  require 'php/header.php'; ?>

  <div class="container">
    <h1>Horoscope</h1>
    <article>
        <label for="birthdate">Enter Your Birthday</label> 
        <br>
        <input type="text" name="birthdate" id="birthdate" placeholder="XXXXXX" maxlength="6">
        <section>
          <input type="submit" class="save" name="save" value="Save" onclick="getHoroscope()">
          <input type="submit" class="update" name="update" value="Edit" onclick="updateHoroscope()">
          <input type="submit" class="delete" name="delete" value="Delete" onclick="deleteHoroscope()">
        </section>
    </article>

    <p class="sign"></p>
  </div>

  <script src="js/script.js"></script>

<?php require 'php/footer.php'; ?>