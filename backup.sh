#!/bin/bash
# Backup script for Docker Portfolio

BACKUP_DIR="/home/ec2-user/backups"
DATE=$(date +%Y%m%d_%H%M%S)
BACKUP_FILE="$BACKUP_DIR/portfolio_backup_$DATE.tar.gz"

echo "💾 Creating backup..."

# Create backup directory
mkdir -p $BACKUP_DIR

# Backup MySQL database
echo "📦 Backing up MySQL database..."
docker exec portfolio-docker-project-mysql-1 mysqldump -u portfolio_user -pP@ssw0rd123! portfolio_db > $BACKUP_DIR/database_$DATE.sql

# Backup source code
echo "📂 Backing up source code..."
tar -czf $BACKUP_FILE \
    ~/portfolio-docker-project/src \
    ~/portfolio-docker-project/nginx \
    ~/portfolio-docker-project/php \
    ~/portfolio-docker-project/mysql \
    ~/portfolio-docker-project/docker-compose.yml \
    ~/portfolio-docker-project/.env \
    ~/portfolio-docker-project/*.sh

echo "✅ Backup complete: $BACKUP_FILE"
echo "📊 Backup size: $(du -h $BACKUP_FILE | cut -f1)"
