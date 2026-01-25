#!/bin/bash
# Monitoring script for Docker Portfolio

echo "📊 Docker Portfolio Monitoring"
echo "=============================="

echo ""
echo "🐳 Container Status:"
docker-compose ps

echo ""
echo "📈 Resource Usage:"
docker stats --no-stream

echo ""
echo "🌐 Network Ports:"
sudo netstat -tuln | grep -E ":(80|3306|8081|9000)" || echo "No relevant ports found"

echo ""
echo "💾 Disk Usage:"
df -h / | tail -1

echo ""
echo "🧠 Memory Usage:"
free -h | grep Mem

echo ""
echo "⏰ System Uptime:"
uptime -p
