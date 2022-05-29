<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Hjelp</title>
    <link rel="icon" type="image/gif" href="Bilder/Hamburger.png" />
</head>
<body>

    <?php include_once 'heder-suport.php'?>




      <div class="containerto">

  <div class="row">
    <div class="column">
    <div style="text-align:center">
    <h2>Ta kontakt med oss</h2>
    <p>Svar på vår google formes eller skriv en klage:</p>
  </div>

      <div class="container">
        <form action="https://forms.gle/ie14qv1YuHWX83Yc8"><button class="btn">Spørsmål? Bare trykk her</button> </form>
      </div>

      <img src="Bilder/20220414_142230.jpg" style="width:100%">
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">Navn</label>
        <input type="text" id="fname" name="firstname" placeholder="Ditt navn..">
        <label for="lname">Etternavn</label>
        <input type="text" id="lname" name="lastname" placeholder="Ditt etternavn..">
        <label for="country">Land</label>
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
          <option value="usa">Belgia</option>
          <option value="usa">Armenia</option>
          <option value="usa">Kasakstan</option>
          <option value="usa">Sverie</option>
          <option value="usa">Mongolia</option>
          <option value="usa">Ungaren</option>
          <option value="usa">Tchekia</option>
          <option value="usa">Østerike</option>
          <option value="usa">Estland</option>
          <option value="usa">Frankrike</option>
          <option value="usa">Ekvador</option>
          <option value="usa">Peru</option>
          <option value="usa">Nepal</option>
          <option value="usa">Zimbawe</option>
          <option value="usa">England</option>
          <option value="usa">Irland</option>
          <option value="usa">Italia</option>
          <option value="usa">Oman</option>
          <option value="usa">Sveits</option>
          <option value="usa">Danmark</option>
          <option value="usa">Spania</option>
          <option value="usa">Kina</option>
          <option value="usa">Finland</option>
          <option value="usa">Island</option>
          <option value="usa">Rusland</option>
          <option value="usa">Serbia</option>
          <option value="usa">Nedeland</option>
          <option value="usa">Tyskland</option>
          <option value="usa">Mexico</option>
          <option value="usa">Chile</option>
          <option value="usa">Egypt</option>
          <option value="usa">India</option>
          <option value="usa">Sri lanka</option>
          <option value="usa">Portugal</option>
          <option value="usa">Asarbagjan</option>
          <option value="usa">Ukraina</option>
          <option value="usa">Japan</option>
          <option value="usa">Tailand</option>
          <option value="usa">Kongo</option>
          <option value="usa">Mali</option>
          <option value="usa">Kenia</option>
          <option value="usa">Moldova</option>
          <option value="usa">Israel</option>
          <option value="usa">Palestina</option>
          <option value="usa">Sudan</option>
          <option value="usa">Nord-Korea</option>
          <option value="usa">Norge</option>
          <option value="usa">Sør-Korea</option>
          <option value="usa">Laous</option>
          <option value="usa">Montenegro</option>
          <option value="usa">Monaco</option>
          


        </select>
        <label for="subject">Klaging</label>
        <textarea id="subject" name="subject" placeholder="Syting her.." style="height:170px"></textarea>
   
        <div class="submit">
          <form action="klaging.php"><button class="btn">Send </button> </form>
        </div>
    </div>
  </div>
</div>




</body>
</html>
