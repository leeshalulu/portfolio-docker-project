<?php
// Get environment variables
$app_name = getenv('APP_NAME') ?: 'Docker Portfolio';
$instance_id = getenv('INSTANCE_ID') ?: 'Local';
$public_ip = getenv('PUBLIC_IP') ?: $_SERVER['SERVER_ADDR'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($app_name); ?></title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif;
            line-height: 1.6; 
            color: #333;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        .container { 
            max-width: 1200px; 
            margin: 0 auto; 
            padding: 20px; 
            background: white; 
            min-height: 100vh;
            box-shadow: 0 0 30px rgba(0,0,0,0.2);
        }
        header { 
            background: #2c3e50; 
            color: white; 
            padding: 1.5rem; 
            margin-bottom: 2rem; 
            border-radius: 8px;
            text-align: center;
        }
        nav { 
            display: flex; 
            justify-content: center; 
            gap: 1rem; 
            flex-wrap: wrap;
            margin-top: 1rem;
        }
        nav a { 
            color: white; 
            text-decoration: none; 
            padding: 0.5rem 1.5rem; 
            border-radius: 4px; 
            background: #3498db;
            transition: all 0.3s;
        }
        nav a:hover { 
            background: #2980b9; 
            transform: translateY(-2px);
        }
        .hero { 
            text-align: center; 
            padding: 3rem 1rem; 
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-radius: 8px; 
            margin-bottom: 2rem;
        }
        .info-grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); 
            gap: 1.5rem; 
            margin: 2rem 0;
        }
        .info-card { 
            background: #f8f9fa; 
            padding: 1.5rem; 
            border-radius: 8px; 
            border-left: 4px solid #3498db;
        }
        .info-card h3 { color: #2c3e50; margin-bottom: 1rem; }
        .badge { 
            display: inline-block; 
            padding: 0.25rem 0.75rem; 
            background: #2ecc71; 
            color: white; 
            border-radius: 20px; 
            font-size: 0.9rem;
            margin: 0.25rem;
        }
        footer { 
            text-align: center; 
            margin-top: 3rem; 
            padding: 1.5rem; 
            background: #2c3e50; 
            color: white; 
            border-radius: 8px;
        }
        .tech-stack { 
            display: flex; 
            flex-wrap: wrap; 
            gap: 0.5rem; 
            justify-content: center;
            margin: 1rem 0;
        }
        @media (max-width: 768px) {
            .container { padding: 10px; }
            nav { flex-direction: column; align-items: center; }
            nav a { width: 80%; text-align: center; }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>🚀 Docker Portfolio on Amazon Linux 2023</h1>
            <p>Complete LEMP Stack Deployment on AWS</p>
            <nav>
                <a href="index.php">🏠 Home</a>
                <a href="about.php">📖 About</a>
                <a href="projects.php">💼 Projects</a>
                <a href="contact.php">📞 Contact</a>
                <a href="status.php">📊 Status</a>
            </nav>
        </header>
        
        <main>
            <section class="hero">
                <h2>Welcome to Your Dockerized Portfolio!</h2>
                <p>This application is running on Amazon Linux 2023 with Docker containers</p>
                
                <div class="tech-stack">
                    <span class="badge">Amazon Linux 2023</span>
                    <span class="badge">Docker</span>
                    <span class="badge">Nginx</span>
                    <span class="badge">PHP 8.2</span>
                    <span class="badge">MySQL 8.0</span>
                    <span class="badge">Docker Compose</span>
                </div>
            </section>
            
            <div class="info-grid">
                <div class="info-card">
                    <h3>📊 System Information</h3>
                    <p><strong>Instance ID:</strong> <?php echo htmlspecialchars($instance_id); ?></p>
                    <p><strong>Public IP:</strong> <?php echo htmlspecialchars($public_ip); ?></p>
                    <p><strong>Server Software:</strong> <?php echo $_SERVER['SERVER_SOFTWARE']; ?></p>
                    <p><strong>PHP Version:</strong> <?php echo phpversion(); ?></p>
                </div>
                
                <div class="info-card">
                    <h3>🚀 Quick Start Commands</h3>
                    <pre style="background: #2c3e50; color: white; padding: 1rem; border-radius: 4px; overflow-x: auto;">
# Start all services
docker-compose up -d

# View logs
docker-compose logs -f

# Stop services
docker-compose down

# SSH into container
docker exec -it portfolio-docker-project-php-1 bash</pre>
                </div>
                
                <div class="info-card">
                    <h3>🔧 Access Points</h3>
                    <ul style="list-style: none; padding-left: 0;">
                        <li>✅ Website: <a href="/">Portfolio Home</a></li>
                        <li>✅ phpMyAdmin: <a href="http://<?php echo $public_ip; ?>:8081">Database Admin</a></li>
                        <li>✅ MySQL: <?php echo $public_ip; ?>:3306</li>
                        <li>✅ Container Health: <a href="status.php">Check Status</a></li>
                    </ul>
                </div>
                
                <div class="info-card">
                    <h3>📁 Project Structure</h3>
                    <pre style="background: #f1f1f1; padding: 1rem; border-radius: 4px;">
portfolio-docker-project/
├── docker-compose.yml
├── nginx/          # Web server config
├── php/           # PHP-FPM config
├── mysql/         # Database setup
├── src/           # Application code
└── .env           # Configuration</pre>
                </div>
            </div>
            
            <div class="info-card" style="margin: 2rem 0;">
                <h3>🔍 Docker Status</h3>
                <?php
                // Simple Docker status check
                $docker_ps = shell_exec('docker ps --format "table {{.Names}}\t{{.Status}}\t{{.Ports}}" 2>&1');
                if ($docker_ps) {
                    echo '<pre style="background: #2c3e50; color: white; padding: 1rem; border-radius: 4px; overflow-x: auto;">';
                    echo htmlspecialchars($docker_ps);
                    echo '</pre>';
                } else {
                    echo '<p style="color: #e74c3c;">Unable to fetch Docker status. Make sure Docker is running.</p>';
                }
                ?>
            </div>
        </main>
        
        <footer>
            <p>© <?php echo date('Y'); ?> Docker Portfolio Project | Running on Amazon Linux 2023</p>
            <p>EC2 Instance: <?php echo htmlspecialchars($instance_id); ?> | IP: <?php echo htmlspecialchars($public_ip); ?></p>
            <div class="tech-stack" style="margin-top: 1rem;">
                <span class="badge" style="background: #FF9900;">AWS</span>
                <span class="badge" style="background: #2496ED;">Docker</span>
                <span class="badge" style="background: #777BB4;">PHP</span>
                <span class="badge" style="background: #4479A1;">MySQL</span>
            </div>
        </footer>
    </div>
</body>
</html>
