<?php include("config.php"); ?>
<?php
$result = $conn->query("SELECT * FROM hero_content WHERE id=1");
$data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Toko Bangunan</title>
  <style>
    body { margin:0; font-family: Arial; }
    .hero {
      height: 100vh;
      background: url('<?php echo $data["gambar"]; ?>') center/cover no-repeat;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      text-shadow: 2px 2px 5px rgba(0,0,0,0.7);
    }
  </style>
</head>
<body>
  <div class="hero">
    <h1><?php echo $data["judul"]; ?></h1>
    <h2><?php echo $data["subjudul"]; ?></h2>
    <p><?php echo $data["deskripsi"]; ?></p>
  </div>
</body>
</html>
