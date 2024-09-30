<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/login.css">
  <link rel="shortcut icon" href="../../public//assets//img//favicon.ico" type="image/x-icon">
  <title>Login</title>
</head>

<body>
  <div class="login">
    <div class="form">
      <img style="margin: 52px 0px 64px 0px" src="../../public//assets//img//finn-icon.png" alt="">
      <form action="#" method="post">
        <div class="input-box">
          <img src="../../public//assets//img//acc.svg" alt="">
          <input type="email" name="email" id="email" placeholder="Usuário" value="<?= $_POST['email'] ?>" required>
        </div>
        <div class="input-box">
          <img src="../../public//assets//img//lock.svg" alt="">
          <input type="password" placeholder="Senha" name="password" id="password" value="<?= $_POST['email'] ?>" required>
        </div>
        <div style="margin: 42px 0px 66px 0px;" class="buts">
          <button type="submit">Entrar</button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>