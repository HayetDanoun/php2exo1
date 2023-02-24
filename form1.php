  <form  action="form1.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name">
    </div>
    <div>
      <label  for="prenom">Prenom :</label>
      <input  type="text"  id="prenom"  name="user_prenom">
    </div>
    <div>
      <label  for="telephone">Telephone :</label>
        <input  type="tel"  id="phone"  name="user_phone">
    </div>

    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>

    <div>
      <label for="voyage-select">Tu souhaites quelle distination ? </label>
      <select name="user_voyage" id="voyage-select">
        <option valeur="canada">Canada</option>
        <option valeur="kenya">Kenya</option>
        <option valeur="chine">Chine</option>
        <option valeur="madagascar">Madagascar</option>
      </select>
    </div>

    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>

  <?php
    echo  'Merci ' . $_POST['user_prenom'] . ' ' . $_POST['user_name'] . ' de nous avoir contacté à propos de ' . $_POST['user_voyage'] .'<br>' ;
    echo  'Un de nos conseillers vous contactera soit à l'adresse ' . $_POST['user_email']  . ' ou par téléphone au '. $_POST['user_phone'] .
          ' dans les plus brefs délais pour traiter votre demande : <br>' . $_POST['user_message'] ;

  ?>



  <?php
    //var_dump($_GET);
    //var_dump($_POST);

  ?>
  <?php
    //echo  $_GET['user_name'];
    //echo  $_POST['user_name'];
  ?>
