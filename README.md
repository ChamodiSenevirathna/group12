# Second-Order XSS-attack-simulator

#### Prepared By: Group 12


## Overview

Second order XSS Attack Simulator is an educational project designed to help individuals learn about the risks associated with Second Order Cross-Site Scripting (XSS) vulnerabilities in web applications. This simulator allows users to understand how attackers can exploit these vulnerabilities and gain unauthorized access to sensitive user data or perform malicious actions on a vulnerable web application.

**Disclaimer**: This project is intended for educational purposes only. Please use this simulator responsibly and only on web applications and systems that you have permission to test. Unauthorized use of this project is strictly prohibited.

## Features

- Simulate Second Order XSS attacks on vulnerable web application.
- Showcase the potential risks and consequences of Second Order XSS vulnerabilities.
- Learn about security best practices to defend against Blind XSS attacks.

## Tech Stack

This project is built using the following technologies:

- HTML
- CSS
- PHP
- MySQL
- Docker

## Getting Started

1. Download and Install Java in your local machine
2. Download and Install Docker Desktop in your local machine
3. Clone the repository to your local machine
5. Start Docker Desktop
6. Open the project using your IDE (preferred - Visual Studio Code)
7. Open an integrated terminal in VS Code
8. Type the following commands to execute the Makefile
   * make build
   * make up
9. Access the phpmyadmin via http://localhost:9001
    * Login Credentials
        * Server Name: mysql_db
        * Username: root
        * Password: root
10. Create a new database "test_db"
11. Import the database file (test_db) provided in the repository.
12. Access the web application via http://localhost:8080
13. Create your profile using Sign Up option
14. Then Login to the application

## Performing the Attack
* Using Registration Form
1. Enter following values:
   * Username: <script>alert("YOUR ADMIN INTERFACE IS HACKED!");</script>
   * Email: any value you prefer
   * Password: any value you prefer
2. Access the admin dashboard
   * URL: http://localhost:8080/admin-login.php
   * Credentials:
       * Username: AdminLee
       * Password: lee@123
3. Once you login an alert sent by the attacker will pop up in the admin dashbaord.

* Using Contact Us Form
1. Login to the web application from client side.
2. Navigate to the contact us page.
1. Enter following values:
   * Name: any value you prefer
   * Subject: any value you prefer
   * Message: <script>alert("Pay 2 Bitcoins to the following account or your data will be leaked!!! E-Wallet: 20303049343bsfb223!");</script>
2. Access the admin dashboard
   * URL: http://localhost:8080/admin-login.php
   * Credentials:
       * Username: AdminLee
       * Password: lee@123
3. Once you login an alert sent by the attacker will pop up in the admin dashbaord.

```bash
git clone https://github.com/ChamodiSenevirathna/group12.git
