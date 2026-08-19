<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f6f8; margin: 0; padding: 40px; }
        .card { max-width: 500px; margin: auto; background: #fff; border-radius: 10px;
                box-shadow: 0 2px 10px rgba(0,0,0,0.1); padding: 30px; }
        h1 { color: #2c3e50; margin-top: 0; }
        p { margin: 8px 0; color: #444; }
        nav { margin-top: 20px; }
        nav a { color: #2980b9; text-decoration: none; margin-right: 15px; font-weight: bold; }
        nav a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="card">
    <h1>Student Information</h1>
    <p>Student ID: <?php echo $id; ?></p>
    <p>Name: <?php echo $name; ?></p>
    <p>Course: <?php echo $course; ?></p>
    <p>Year Level: <?php echo $year_level; ?></p>
    <p>Section: <?php echo $section; ?></p>
    <p>Email: <?php echo $email; ?></p>

    <nav>
            <a href="<?= site_url('/student'); ?>">Home</a>
            <a href="<?= site_url('/student/profile'); ?>">Student Profile</a>
    </nav>
    </div>
</body>
</html>