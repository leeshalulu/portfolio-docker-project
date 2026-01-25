<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background: #f0f2f5; }
        .container { max-width: 1200px; margin: 2rem auto; padding: 2rem; background: white; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h1 { color: #2c3e50; margin-bottom: 2rem; }
        .projects-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 2rem; }
        .project-card { background: #f8f9fa; border-radius: 8px; overflow: hidden; border: 1px solid #e9ecef; transition: transform 0.3s; }
        .project-card:hover { transform: translateY(-5px); box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
        .project-header { background: #2c3e50; color: white; padding: 1rem; }
        .project-body { padding: 1.5rem; }
        .project-tech { display: flex; flex-wrap: wrap; gap: 0.5rem; margin: 1rem 0; }
        .tech-badge { background: #3498db; color: white; padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.9rem; }
        .back-link { display: inline-block; margin-top: 2rem; padding: 0.5rem 1rem; background: #3498db; color: white; text-decoration: none; border-radius: 4px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>💼 My Projects</h1>
        
        <div class="projects-grid">
            <div class="project-card">
                <div class="project-header">
                    <h3>Docker Portfolio on AWS</h3>
                </div>
                <div class="project-body">
                    <p>Complete Docker-based portfolio website deployed on Amazon Linux 2023 EC2 instance with full LEMP stack.</p>
                    <div class="project-tech">
                        <span class="tech-badge">Docker</span>
                        <span class="tech-badge">AWS EC2</span>
                        <span class="tech-badge">Nginx</span>
                        <span class="tech-badge">PHP</span>
                        <span class="tech-badge">MySQL</span>
                    </div>
                </div>
            </div>
            
            <div class="project-card">
                <div class="project-header">
                    <h3>CI/CD Pipeline</h3>
                </div>
                <div class="project-body">
                    <p>Automated deployment pipeline with GitHub Actions, Docker Hub, and AWS ECS.</p>
                    <div class="project-tech">
                        <span class="tech-badge">GitHub Actions</span>
                        <span class="tech-badge">Docker Hub</span>
                        <span class="tech-badge">AWS ECS</span>
                        <span class="tech-badge">Terraform</span>
                    </div>
                </div>
            </div>
            
            <div class="project-card">
                <div class="project-header">
                    <h3>Microservices Architecture</h3>
                </div>
                <div class="project-body">
                    <p>Containerized microservices with API Gateway, Service Discovery, and Load Balancing.</p>
                    <div class="project-tech">
                        <span class="tech-badge">Node.js</span>
                        <span class="tech-badge">Docker Compose</span>
                        <span class="tech-badge">Redis</span>
                        <span class="tech-badge">Nginx</span>
                    </div>
                </div>
            </div>
        </div>
        
        <a href="index.php" class="back-link">← Back to Home</a>
    </div>
</body>
</html>
