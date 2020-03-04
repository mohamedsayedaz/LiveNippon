<?php 
    session_start();
   include './init.php';
   if(!isset($_GET['id'])){
      header("Location:index.php");
   }
   $id = $_GET['id'];

   $sql = $db->prepare("Select trip_name , details,cost from trips where id=?");
   $sql->execute(array($id));
   $data = $sql->fetch();

?>

<!-- First Banner -->
<div class="row jumbotron cover-trip tokyo_cover">
    <h1 class="display-3 text-center cov-title" id="htitle" ><?php echo $data[0];?>
    </h1>
  </div>
<div class="jumbotron" id="tokyo">
  <h1>Tour Details : </h1>
 <!-- <h2 style="color:#ed1b24;">Cost 55000¥</h2> -->
<p class="paragraph"> 
<?php echo $data[1]; ?>
<br/>Cost: <strong><?php echo $data[2]; ?> ¥</strong>
<br/>We are open to your suggestions.</p>
  <form method="POST" action="sendmail.php">
  <input type="text" name="trip_id" style="visibility: hidden;" value="<?php echo $id; ?>" />
  <div class="form-group row">
    <label for="Name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control-plaintext" id="name" name="name">
    </div>
  </div>
    <div class="form-group row">
    <label for="Email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control-plaintext" id="Email" name="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="PhoneNumber" class="col-sm-2 col-form-label">Phone Number</label>
    <div class="col-sm-10">
      <input type="text" class="form-control-plaintext" id="PhoneNumber" name="PhoneNumber">
    </div>
  </div>
    <div class="form-group row">
    <label for="Count" class="col-sm-2 col-form-label">How many people are traveling</label>
    <div class="col-sm-10">
      <input type="text" class="form-control-plaintext" id="Count" name="Count">
    </div>
  </div>
      <div class="form-group row">
    <label for="Date" class="col-sm-2 col-form-label">Expected Dates</label>
    <div class="col-sm-10">
      <input type="date" class="form-control-plaintext" id="date" name="date">
    </div>
  </div>
      <div class="form-group row">
    <label for="Count" class="col-sm-2 col-form-label">Where do you want to go</label>
    <div class="col-sm-10">
      <input type="text" class="form-control-plaintext" id="Destination" name="Destination">
    </div>
  </div>
<!--  <a href="" class="btn btn-center btn-danger">Send</a> -->
<button class="btn btn-center btn-danger" type="submit">Send</button>
</form>
</div>
<?php include './footer.php'; ?>