<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Engineer Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 50%;
            margin: auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
			border-radius: 10px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        p {
            line-height: 1.6;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Software Engineer Profile</h2>
    <p><strong>Name:</strong> <?php echo htmlspecialchars($_POST['name']); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($_POST['email']); ?></p>
    <p><strong>Phone:</strong> <?php echo htmlspecialchars($_POST['phone']); ?></p>
    <p><strong>GitHub:</strong> <a href="<?php echo htmlspecialchars($_POST['github']); ?>" target="_blank"><?php echo htmlspecialchars($_POST['github']); ?></a></p>
    <p><strong>LinkedIn:</strong> <a href="<?php echo htmlspecialchars($_POST['linkedin']); ?>" target="_blank"><?php echo htmlspecialchars($_POST['linkedin']); ?></a></p>
    <p><strong>Skills:</strong> <?php echo nl2br(htmlspecialchars($_POST['skills'])); ?></p>
    <p><strong>Experience:</strong> <?php echo nl2br(htmlspecialchars($_POST['experience'])); ?></p>
</div>

</body>
</html>
