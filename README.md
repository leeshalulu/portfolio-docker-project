# 🐳 Docker Portfolio Project - Amazon Linux 2023


## 📋 Table of Contents

   1. Project Overview

   2. What I Built

   3. Technologies Used

   4.  Step-by-Step Implementation

   5. How to Run This Project

   6. Project Structure

   7. Features Implemented

   8.  Challenges Faced

   9.What I Learned

   10. Future Improvements


    
 ## Project Overview
I built a complete Docker-based portfolio website that runs on Amazon Linux 2023. This project shows my ability to deploy a full-stack web application using Docker containers. The website displays my portfolio, has a contact form, and shows system information.

## What I Built

**I created a website with these components:**

   1. Nginx web server - Serves the website on port 80

   2. PHP application - Handles web pages and contact form

   3. MySQL database - Stores contact form messages

   4.phpMyAdmin - Database management interface on port 8081

**All these services run in separate Docker containers that work together.**

## Technologies Used

   1.Docker - To containerize the application

   2. Docker Compose - To manage multiple containers

   3. Amazon Linux 2023 - As the server operating system

   4. AWS EC2 - For cloud hosting

   5. Nginx - As the web server

   6. PHP 8.2 - For server-side programming

   7.  MySQL 8.0 - For database storage

   8. Git - For version control

   9. GitHub - To store the project code

 
   ## Step-by-Step Implementation

**Step 1: Set Up AWS EC2 Instance**
First, I created an AWS account and launched an EC2 instance. I chose Amazon Linux 2023 because it's optimized for AWS. I selected t2.micro instance type because it's free tier eligible. I configured the security group to allow HTTP traffic on port 80 and port 8081.

**Step 2: Connect to the Server**
I connected to my EC2 instance using SSH. I used my key pair file to authenticate.

**Step 3: Install Docker**
On the Amazon Linux server, I installed Docker 

**Step 4: Install Docker Compose**
I installed Docker Compose to manage multiple containers

**Step 5: Create Project Structure**
I created a project directory with this structure:
---
portfolio-docker-project/
├── docker-compose.yml
├── nginx/
├── php/
├── mysql/
└── src/
---
**Step 6: Create Configuration Files**
I created these configuration files:
1.**docker-compose.yml** - This file defines all my services.

2.nginx/nginx.conf - Nginx configuration.

3.php/Dockerfile - PHP container configuration

**Step 7: Create Website Files**
I created the website in the **src/** directory

1.index.php - Home page with system information

2.contact.php - Contact form that saves to MySQL


**Step 8: Start the Application**
I started all containers with one command:
**docker compose up -d --build**

**Step 9: Test the Application**
I tested by visiting:
 Website: http://my-server-ip
 phpMyAdmin: http://my-server-ip:8081

**Step 10: Push to GitHub**
I pushed my project to GitHub to share it

**If you want to run this project yourself:**
**Clone the repository**
git clone https://github.com/myusername/portfolio-docker-project.git
cd portfolio-docker-project 
 
**Copy environment file**
 cp .env.example .env

 **Update .env with your configuration**
   nano .env

**Start the containers:**
 docker compose up -d --build

**Open your browser and go to http://localhost**
 Access phpMyAdmin:
 Go to http://localhost:8081
 Username: portfolio_user
 Password: userpassword

## Project Structure
   Here's what each folder contains:
   1. nginx/ - Web server configuration
   2. php/ - PHP container setup
   3. mysql/ - Database initialization scripts
   4. src/ - Website files (HTML, CSS, PHP)
   5. docker-compose.yml - Defines all services
   6. .env - Environment variables (passwords, settings)
   7.  README.md - This documentation file

## Features Implemented

**1. Multi-Container Application**
     I set up four separate containers that work together:

    1. Nginx serves web pages

    2. PHP processes PHP code

    3. MySQL stores data

    4. phpMyAdmin manages the database

**2. Persistent Database**
     The MySQL database data persists even when containers restart. I used Docker volumes for this.
     
**3. Contact Form**
The contact form saves messages to the MySQL database. This shows database integration.

**4. System Information Display**
The website shows system information like PHP version and server software.

**5. Responsive Design**
The website works on mobile phones, tablets, and computers.

**6. Easy Deployment**
One command (docker compose up -d --build) starts everything.

## Challenges Faced
 1. Docker Permission Issues
    At first, I had to use sudo with every Docker command. I fixed this by adding my user to the Docker group.
 2. Container Communication
   The containers couldn't talk to each other initially. I solved this by using Docker Compose networking.
 3. Database Connection
   PHP couldn't connect to MySQL. The issue was using "localhost" instead of the container name "mysql".
4. Port Conflicts
  Port 80 was already in use by Apache. I stopped Apache and freed the port for Nginx.
5. AWS Security Groups
  I forgot to open port 8081 for phpMyAdmin. I fixed this in AWS console security group settings.

## What I Learned
1. Docker Basics
   I learned how Docker containers work and how to create Dockerfiles.
2. Multi-Service Applications
   I learned how to make different services (web server, database, application) work together.
3. AWS Deployment
   I learned how to deploy applications on AWS EC2 instances.
4. Database Integration
   I learned how to connect PHP applications to MySQL databases.
5. Production Deployment
   I learned about security considerations for production deployments.
6. Troubleshooting Skills
   I improved my problem-solving skills by fixing various issues.
   
## Future Improvements
   Here are some features I want to add:
   
   1.User Authentication - Add login system for admin panel
   2. File Uploads - Allow users to upload files through contact form
   3.Email Notifications - Send email when someone submits contact form
   4. SSL Certificate - Add HTTPS for security
   5.Backup System - Automatic database backups
   6. Monitoring - Track website visitors and performance
   7. Caching - Add Redis for better performance
   8. Load Balancing - Handle more visitors with multiple containers
   9. CI/CD Pipeline - Automatic testing and deployment
   10. **Docker Swarm/Kubernetes
