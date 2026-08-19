<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patrick's Student Profile</title>
    <style>
        body { font-family: Arial, sans-serif; background: #eef2f5; margin: 0; padding: 40px; }
        .card { max-width: 500px; margin: auto; background: #fff; border-radius: 10px;
                box-shadow: 0 2px 10px rgba(0,0,0,0.1); padding: 30px; border-top: 5px solid #27ae60; }
        h1 { color: #27ae60; margin-top: 0; }
        p { margin: 8px 0; color: #444; }
        nav { margin-top: 20px; }
        nav a { color: #2980b9; text-decoration: none; margin-right: 15px; font-weight: bold; }
        nav a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Student Profile</h1>
        <p><?php echo $bio; ?></p>
        <p><strong>Address:</strong> <?php echo $address; ?></p>
        <p><strong>Contact:</strong> <?php echo $contact; ?></p>
        <p><strong>Skills:</strong> <?php echo $skills; ?></p>
        <p><strong>Hobbies:</strong> <?php echo $hobbies; ?></p>
        <p><strong>GitHub:</strong> <?php echo $social; ?></p>

        <nav>
            <a href="<?= site_url('/student'); ?>">Home</a>
            <a href="<?= site_url('/student/profile'); ?>">Student Profile</a>
        </nav>
    </div>
</body>
</html>