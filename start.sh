#!/bin/bash
# Startup script for Docker Portfolio on Amazon Linux

echo "🚀 Starting Docker Portfolio Project..."

# Update system packages
echo "📦 Updating system packages..."
sudo yum update -y

# Start Docker if not running
echo "🐳 Checking Docker service..."
sudo systemctl start docker
sudo systemctl enable docker

# Navigate to project directory
cd ~/portfolio-docker-project

# Pull latest changes (if using git)
# git pull origin main

# Start containers
echo "🚢 Starting Docker containers..."
docker-compose up -d --build

# Wait for services to be ready
echo "⏳ Waiting for services to be ready..."
sleep 10

# Check status
echo "📊 Checking container status..."
docker-compose ps

# Get public IP
PUBLIC_IP=$(curl -s http://169.254.169.254/latest/meta-data/public-ipv4)
echo ""
echo "✅ Deployment Complete!"
echo "🌐 Website: http://$PUBLIC_IP"
echo "🗄️ phpMyAdmin: http://$PUBLIC_IP:8081"
echo "📊 MySQL: $PUBLIC_IP:3306"
echo ""
echo "📝 To view logs: docker-compose logs -f"
echo "🛑 To stop: docker-compose down"
