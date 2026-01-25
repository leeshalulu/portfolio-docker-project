<?php
// Function to check service status
function check_service($service) {
    $output = shell_exec("docker inspect --format='{{.State.Status}}' $service 2>/dev/null");
    return trim($output);
}

function check_port($port) {
    $output = shell_exec("sudo netstat -tuln | grep :$port");
    return !empty($output);
}

$services = [
    'nginx' => ['port' => 80, 'name' => 'Nginx Web Server'],
    'mysql' => ['port' => 3306, 'name' => 'MySQL Database'],
    'php' => ['port' => 9000, 'name' => 'PHP-FPM'],
    'phpmyadmin' => ['port' => 8081, 'name' => 'phpMyAdmin']
];

$status = [];
foreach ($services as $service => $info) {
    $container_status = check_service($service);
    $port_status = check_port($info['port']);
    $status[] = [
        'service' => $info['name'],
        'container' => $container_status ?: 'Not running',
        'port' => $port_status ? 'Open' : 'Closed',
        'color' => ($container_status == 'running' && $port_status) ? 'green' : 'red'
    ];
}

// Get system info
$disk = shell_exec("df -h / | tail -1");
$memory = shell_exec("free -h | grep Mem");
$uptime = shell_exec("uptime -p");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Status</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background: #f0f2f5; }
        .container { max-width: 1000px; margin: 2rem auto; padding: 2rem; background: white; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h1 { color: #2c3e50; margin-bottom: 2rem; }
        table { width: 100%; border-collapse: collapse; margin: 1rem 0; }
        th, td { padding: 1rem; text-align: left; border-bottom: 1px solid #ddd; }
        th { background: #2c3e50; color: white; }
        .status-green { color: #27ae60; font-weight: bold; }
        .status-red { color: #e74c3c; font-weight: bold; }
        .info-box { background: #e8f4fc; padding: 1.5rem; border-radius: 8px; margin: 1rem 0; border-left: 4px solid #3498db; }
        pre { background: #2c3e50; color: white; padding: 1rem; border-radius: 4px; overflow-x: auto; }
        .back-link { display: inline-block; margin-top: 2rem; padding: 0.5rem 1rem; background: #3498db; color: white; text-decoration: none; border-radius: 4px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>📊 System Status Dashboard</h1>
        
        <div class="info-box">
            <h3>🖥️ System Information</h3>
            <p><strong>Uptime:</strong> <?php echo $uptime ?: 'Unknown'; ?></p>
            <p><strong>Disk Usage:</strong> <?php echo $disk ?: 'Unknown'; ?></p>
            <p><strong>Memory:</strong> <?php echo $memory ?: 'Unknown'; ?></p>
        </div>
        
        <h3>🛠️ Service Status</h3>
        <table>
            <thead>
                <tr>
                    <th>Service</th>
                    <th>Container Status</th>
                    <th>Port Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($status as $item): ?>
                <tr>
                    <td><?php echo $item['service']; ?></td>
                    <td class="status-<?php echo $item['color']; ?>"><?php echo $item['container']; ?></td>
                    <td class="status-<?php echo $item['color']; ?>"><?php echo $item['port']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
        <div class="info-box">
            <h3>🐳 Docker Containers</h3>
            <pre><?php echo htmlspecialchars(shell_exec('docker ps --format "table {{.Names}}\t{{.Image}}\t{{.Status}}\t{{.Ports}}"') ?: 'No containers running'); ?></pre>
        </div>
        
        <div class="info-box">
            <h3>🌐 Network Ports</h3>
            <pre><?php echo htmlspecialchars(shell_exec('sudo netstat -tuln | grep -E ":(80|3306|8081|9000)"') ?: 'No relevant ports found'); ?></pre>
        </div>
        
        <a href="index.php" class="back-link">← Back to Home</a>
    </div>
</body>
</html>
