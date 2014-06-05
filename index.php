<?php
include $_SERVER['DOCUMENT_ROOT'].'/_config.php';
$body->set_page('index');
$body->head();
?>
<div class="login">
  <h1>Login</h1>
  <form action="#" method="POST">
    <p>
      <label for="user">user</label>
      <input type="text" name="user" id="user" placeholder="user name" />
    </p>
    <p>
      <label for="password">pass</label>
      <input type="password" name="pass" id="pass" placeholder="password"/>
    </p>
    <p>
      <input type="submit" value="login" />
    </p>
  </form>
</div>



<div class="welcome">
  <button>enter</button>
  <h1>Thomson<span>Proofs</span></h1>
</div>

<?php $body->foot(); ?>