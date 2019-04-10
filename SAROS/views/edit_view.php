<link href="assets/css/styles.css" rel="stylesheet" id="bootstrap">
<link href="assets/css/bootstrap.css" rel="stylesheet" id="bootstrap">


<?php include_once 'views/includes/header.php '?>
<!------ Include the above in your HEAD tag ---------->
<br>
<div class="row">

<div class="col-md-3">
</div>
<div class="col-md-6">
<form method="post" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">Votre Nom</label>
    <input type="text" name="nom" class="form-control" id="exampleInputEmail1" name="" value="<?=$member['member_name']?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Votre Prenom</label>
    <input type="text" name="prenom" class="form-control" id="exampleInputPassword1" value="<?=$member['member_lname']?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Votre Contact</label>
    <input type="text" name="contact" class="form-control" id="exampleInputPassword1" value="<?=$member['member_contact']?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Votre Age</label>
    <input type="number" name="age" class="form-control" id="exampleInputPassword1"  value="<?=$member['member_age']?>">
  </div>
  <button type="submit" class="btn btn-primary btn-block">Modifier</button>
</form>
</div>
<div class="col-md-3">
</div>
</div>

<?php include_once 'views/includes/footer.php '?>
