# Developer: Code_by_afnan
Project Description:

This project involves the development of a comprehensive User Authentication and Interface using PHP as the server-side language and Laragon as the local development environment. 
The system will feature user signUp, signIn, password management, and a logout mechanism, all integrated with a database hosted on a Laragon local server. 
The design will prioritize security and user experience, ensuring seamless interaction and secure data handling.

# Key Features:

# Sign-Up Form:

A user-friendly signUp form allowing new users to create an account.
Fields for name, email and password.
Client-side and server-side validation to ensure data integrity (e.g. matching confirmation passwords).
Integration with a SQLyog database (hosted on Laragon) to securely store user credentials using PHP.

# Sign-In Form: 

A login interface where users can authenticate using their username/email and password.
Error handling for incorrect credentials, with messages guiding the user to recover their account or retry.
Session management implemented in PHP to maintain user login state across the application.

# Change Password Functionality:

A secure interface allowing logged-in users to update their password.
Verification through the current password before allowing changes.

# User Interface with Logout Button:

A clean and intuitive user interface, displaying personalized content after login.
A  logout button for users to securely end their session.
Redirection to the login page upon logout, with session termination handled by PHP to prevent unauthorized access.
Database Integration with Laragon:


# Technical Stack:

Frontend: HTML, CSS, JavaScript.
Backend: PHP with server-side scripting and session management.
Development Environment: Laragon, providing an easy-to-use local server setup.
Database: SQLyog, managed through Laragon.
Security: Implementation of best practices, including password hashing (e.g., bcrypt via PHP), input validation, and secure session handling.

#Objective:
The goal of this project is to provide a secure, robust, and user-friendly authentication system built on PHP and Laragon.
It is designed to be easily deployed in a local development environment and later scaled to production, ensuring the protection of user data, smooth navigation, and a secure environment for user interactions.
