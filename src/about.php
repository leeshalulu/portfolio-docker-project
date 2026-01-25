<?php
$app_name = getenv('APP_NAME') ?: 'Docker Portfolio';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - <?php echo htmlspecialchars($app_name); ?></title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; line-height: 1.6; background: #f0f2f5; }
        .container { max-width: 800px; margin: 2rem auto; padding: 2rem; background: white; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h1 { color: #2c3e50; margin-bottom: 1rem; }
        h2 { color: #3498db; margin: 1.5rem 0 1rem 0; }
        p { margin-bottom: 1rem; }
        ul { margin: 1rem 0; padding-left: 1.5rem; }
        .back-link { display: inline-block; margin-top: 2rem; padding: 0.5rem 1rem; background: #3498db; color: white; text-decoration: none; border-radius: 4px; }
        .back-link:hover { background: #2980b9; }
        .tech-list { display: flex; flex-wrap: wrap; gap: 0.5rem; margin: 1rem 0; }
        .tech-item { background: #e8f4fc; padding: 0.5rem 1rem; border-radius: 4px; border-left: 3px solid #3498db; }
    </style>
</head>
<body>
    <div class="container">
        <h1>About This Project</h1>
        <p>This is a complete Docker-based portfolio website running on Amazon Linux 2023 EC2 instance.</p>
        
        <h2>🛠️ Technologies Used</h2>
        <div class="tech-list">
            <div class="tech-item">Amazon Linux 2023</div>
            <div class="tech-item">Docker & Docker Compose</div>
            <div class="tech-item">Nginx Web Server</div>
            <div class="tech-item">PHP 8.2 FPM</div>
            <div class="tech-item">MySQL 8.0 Database</div>
            <div class="tech-item">phpMyAdmin</div>
        </div>
        
        <h2>🎯 Learning Objectives</h2>
        <ul>
            <li>Deploy multi-container applications on AWS</li>
            <li>Configure Docker on Amazon Linux 2023</li>
            <li>Set up LEMP stack with Docker Compose</li>
            <li>Manage persistent data with Docker volumes</li>
            <li>Configure networking between containers</li>
            <li>Implement environment-based configuration</li>
        </ul>
        
        <h2>🚀 Deployment Steps</h2>
        <ol>
            <li>Launch Amazon Linux 2023 EC2 instance</li>
            <li>Install Docker and Docker Compose</li>
            <li>Configure security groups (open ports 80, 8081)</li>
            <li>Clone/Create project files</li>
            <li>Build and run with docker-compose</li>
            <li>Access application via public IP</li>
        </ol>
        
        <a href="index.php" class="back-link">← Back to Home</a>
    </div>
</body>
</html>
