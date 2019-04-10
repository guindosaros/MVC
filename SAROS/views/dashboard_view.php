<link href="assets/css/styles.css" rel="stylesheet" id="bootstrap">
<link href="assets/css/bootstrap.css" rel="stylesheet" id="bootstrap">


<?php include_once 'views/includes/header.php '?>
<!------ Include the above in your HEAD tag ---------->
<br>
<div class="row">

<div class="col-md-3">
</div>
<div class="col-md-6">
<form method="post" action="dashboard">
  <div class="form-group">
    <label for="exampleInputEmail1">Votre Nom</label>
    <input type="text" name="nom" class="form-control" id="exampleInputEmail1" name="" placeholder="John">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Votre Prenom</label>
    <input type="text" name="prenom" class="form-control" id="exampleInputPassword1" placeholder="Doe">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Votre Contact</label>
    <input type="text" name="contact" class="form-control" id="exampleInputPassword1" placeholder="000000">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Votre Age</label>
    <input type="number" name="age" class="form-control" id="exampleInputPassword1" placeholder="Votre age">
  </div>
  <button type="submit" class="btn btn-primary btn-block">Envoyer</button>
</form>
</div>
<div class="col-md-3">
</div>
</div>
<div class="well">
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Nom</th>
          <th>Prenoms</th>
          <th>Contact</th>
          <th>Age</th>
          <th style="width: 36px;">Action</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($members as $member) :?>
        <tr>
          <td><?=$member['id']?></td>  
          <td><?=$member['member_name']?></td>
          <td><?=$member['member_lname']?></td>
          <td><?=$member['member_contact']?></td>
          <td><?=$member['member_age'].' '.ans?></td>
          <td>
          <a href="edit-<?=$member['id']?>"><button type="button" class="btn btn-primary btn-xs">editer</button></a>
          <a href="dashboard-<?=$member['id']?>"><button type="button" class="btn btn-danger btn-xs">supprimé</button></a>
          </td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
</div>


<?php include_once 'views/includes/footer.php '?>
