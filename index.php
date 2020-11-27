<?php



class Favorite
{
  public $favorite = 6;

  public function setter($favorites)
  {
    $this->favorite += $favorites;
    // $this->favorite; 

  }

  



  public function getFavorite()
  {
    return $this->favorite;
  }
}

$user = new Favorite();
$user->setter($_POST['favo']);
echo $user->$favorite;
?>


<!DOCTYPE HTML>
<html lang="ja">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Portfolio</title>
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <style>
    .container {
      max-width: 1240px;
    }
  </style>
</head>

<body>
  <form action="" method="post">
    <input type="hidden" name="favo" value="1">
    <button class="btn btn-primary p-4 text-center" type="submit">いいね！！</button>
  </form>
  <div><?php echo $user->getFavorite(); ?></div>
</body>

</html>