<?php
include_once "db_connection.php";

function login($data)
{
  global $conn;

  $email = htmlspecialchars($data['email']);
  $password = htmlspecialchars($data['password']);

  $query = "SELECT * FROM users WHERE email = '$email'";
  $result = mysqli_query($conn, $query);

  // Email check
  if (mysqli_num_rows($result) === 1) {

    // Password check
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {

      session_start();
      $_SESSION['id'] = mysqli_fetch_assoc($result)['id'];
      $_SESSION['email'] = $email;

      header("Location: home.php");
      die();
    }
  }
  return false;
}


function registration($data)
{
  global $conn;

  $email = stripcslashes($data['email']);
  $password = mysqli_real_escape_string($conn, $data['password']);
  $password2 = mysqli_real_escape_string($conn, $data['confirm-password']);
  $role = 1;

  // Email already exists check
  $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();
  if ($result->num_rows > 0) {
    echo "
            <script>
                alert('Email already exists');
            </script>
        ";
    return false;
  }


  // Password confirmation check
  // if Password does not match will return false
  if ($password !== $password2) {
    echo "
                <script>
                    alert('Konfirmasi password tidak sesuai');
                </script>
            ";
    return false;
  }

  // Password hashing 
  $password = password_hash($password, PASSWORD_DEFAULT);

  $query = "INSERT INTO users VALUES('', '$email', '$password', '$role')";
  $result = mysqli_query($conn, $query);

  return $result;
}

function logout()
{
  session_start();
  session_unset();
  session_destroy();
  header("Location: /belajar-php-stikom/");
}


// function isLogin()
// {
//   session_start();
//   if (!isset($_SESSION["id"]) && !isset($_SESSION["email"])) {
//     header("Location: /belajar-php-stikom/");
//     die();
//   }
// }
