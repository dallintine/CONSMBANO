Conmbano Nursing Management App

Introduction
The Nursing Management App is a comprehensive solution designed to streamline the management of students, staff, and operations within a nursing school. It aims to simplify administrative tasks, improve communication, and enhance the overall management experience for educational institutions 

This app offers features that cater to both academic and operational needs, such as:

1. Student management: Monitoring attendance, performance tracking, and academic progress.
2. Staff management: Handling staff attendance, payroll, and scheduling.
3. Biometric attendance: Using fingerprint technology for accurate attendance tracking, reducing manual errors.
4. Subscription and Payment Management: Ensuring that payment statuses and subscriptions are managed in real-time, with automatic access control based on subscription duration and payment completion.
   
By digitizing and automating many time-consuming processes in nursing school management, this app enhances operational efficiency and allows administrators to focus on providing high-quality education. Its user-friendly design ensures easy navigation for users with varying technical proficiency, and its robust backend supports secure and scalable management of critical institutional data

 link to my deployed site, 
 
https://consmbano.com/

https://www.linkedin.com/in/sammy-egwu-8b879199/

Installation
1. System Requirements
Operating System: Windows/Linux/MacOS
Web Server: Apache/Nginx
Database: MySQL or SQL Server
Languages: PHP (with Composer for dependency management), .NET (optional)
Browser: Chrome, Firefox, or any modern web browser

2. Prerequisites
Ensure that the following software and tools are installed on your system:

XAMPP or WAMP (for Windows users) or LAMP (for Linux users) to run Apache and MySQL.
PHP (version 7.4 or higher)
Composer (for PHP dependency management)
Git (for version control, if you want to clone the repository)
Node.js (optional, for running front-end development tasks)

3. Installation Steps
   
a. Clone the Repository
If you have access to the repository, clone it using Git:

git clone https://github.com/dallintine/CONSMBANO.git

b. Navigate to the Project Directory

cd CONSMBANO
c. Install PHP Dependencies

Make sure Composer is installed on your machine, then run the following command to install all necessary PHP packages:

composer install
d. Configure the Database

Set up a MySQL database on your local machine.

Create a new database in MySQL (e.g., nursing_management_db):

CREATE DATABASE nursing_management_db;

DB_HOST=localhost
DB_DATABASE=nursing_management_db
DB_USERNAME=root
DB_PASSWORD=1234

Run the database migrations and seed data (if included):

php artisan migrate
php artisan db: seed

e. Set Up Environment Variables

If using an .env file, ensure the following configurations are correct:

APP_NAME="Nursing Management App"
APP_URL=http://College-of-Nursing-Sciences

f. Start the Local Server
If you're using PHP’s built-in server, run:



php artisan serve
Alternatively, start XAMPP/WAMP or any other local server with Apache and navigate to the app folder.

g. Set Up Biometric Devices (Optional)

If using biometric devices (like the U.Are.U 4500), ensure the SDK is installed and properly configured on your system.

4. Access the App
Once the installation is complete and the server is running, open your web browser and navigate to: 


http://localhost/College-of-Nursing-Sciences
You should now be able to access the Nursing Management App dashboard.

5. Admin Setup
Log in with the default admin credentials or set up an admin account through the database 

Username: admin
Password: password (you will be prompted to change this after logging in for the first time )

6. Troubleshooting
   
If you encounter permission issues, ensure that the storage and bootstrap/cache directories are writable:

chmod -R 775 storage
chmod -R 775 bootstrap/cache

Check PHP and server logs if you face any issues during installation or runtime.

By following the above steps, you should have the Nursing Management App installed and running locally

Usage

Below is a step-by-step guide to using the core functionalities of the app:

1. Logging In
Admin Login: Admins can log in using their credentials to access the full features of the app, including user management, reports, subscription settings, and attendance tracking.
Student/Staff Login: Students and staff can log in to view personal details, schedules, and attendance records.
2. Dashboard Overview
Upon logging in, the user is directed to the dashboard, which provides a comprehensive overview of:

Key Statistics: Displays key data like the number of students, staff, pending tasks, upcoming exams, and more.
https://consmbano.com/
3. Managing Students
Student Registration: Admins can register new students by filling out necessary details such as name, course, year, and contact information.
View Student List: Provides a list of all students enrolled in the system, with options to filter by name, course, or year.
Student Progress: Allows the admin to track academic performance, exam scores, and attendance for each student.
Attendance Tracking: Attendance is tracked automatically through biometric systems or can be manually entered.
4. Managing Staff
Staff Registration: Admins can add new staff members, assigning roles such as instructors, admin staff, or medical supervisors.
Staff Attendance: Biometric devices track staff attendance and provide time-in and time-out logs. Manual entry is also possible.
Payroll Management: Track staff salaries, bonuses, and deductions.
5. Biometric Attendance System
For Students: Using the U.Are.U 4500 biometric device, students can log their attendance by scanning their fingerprints.
For Staff: Similarly, staff members can log their attendance using the biometric device. The system automatically records the timestamp and verifies identity.
Attendance Report: Admins can generate attendance reports for both students and staff, including details such as late arrivals and absences.
6. Subscription & Payment Management
Subscription Types: The app supports multiple subscription plans (6 months, 1 year, etc.). Admins can manage subscription packages for the institution.
Payment Tracking: Admins can track payments for tuition fees and other services. Payment statuses can be updated manually or automatically based on online payment integration.
Automatic Access Control: Based on subscription status, the app will automatically control access for users. For example, if a subscription expires, the student or staff account may be temporarily disabled until payment is confirmed.
7. Communication and Notifications
Email Notifications: The app sends email reminders for important events like exams, payment due dates, and attendance issues.
In-App Messaging: Admins can send announcements or notifications directly to students and staff via the app.
8. Reporting and Analytics
Generate Reports: Admins can generate various reports, including attendance records, academic performance, payment history, and more.
Export Data: Reports can be exported in formats like PDF or CSV for further analysis or record-keeping.
9. User Management
Role-Based Access Control: Different user roles (admin, student, staff) have different levels of access. Admins can create new roles, modify permissions, or deactivate users.
Password Reset: If a user forgets their password, they can initiate the password reset process, with admins overseeing the final reset.
10. Settings
General Settings: Admins can configure system-wide settings like school details, time zone, and app theme.
Biometric Settings: Manage biometric device settings for attendance tracking.
Subscription Settings: Adjust subscription plan details and payment integration settings.
11. Log Out
After using the system, always remember to log out securely by clicking the log-out button located at the top-right corner of the screen.

The Nursing Management App provides a robust platform for managing nursing school operations, from tracking student progress and managing staff to handling subscriptions and payments. Its user-friendly interface and integration with biometric technology make it a valuable tool for automating routine tasks and ensuring the smooth functioning of a nursing school

Contributing
 you can contribute to the Nursing Management App and help improve it for all users. Whether you're fixing bugs, adding new features, or improving documentation, every contribution is valuable
 
Related projects:

here are some relevant projects:

Hospital Management System (HMS)

Overview: A comprehensive system designed to manage all aspects of a hospital's operations, including patient management, billing, scheduling, and staff administration.
Key Features:
Patient and appointment management
Billing and payment tracking
Staff scheduling and shift management
Relation: While focused on hospitals, certain modules like staff management, scheduling, and payments can be similar to the features in a nursing school setting.
Student Information System (SIS)

Overview: A software tool used by educational institutions to manage student data, including academic records, attendance, and grading.
Key Features:
Student enrollment and progress tracking
Attendance and exam management
Parent communication and notifications
Relation: SIS systems handle student academic data, similar to the Nursing Management App's student management feature. Elements of academic performance tracking can be adapted or integrated into nursing school environments.
School Management System

Overview: A general-purpose application used to manage the administrative and academic activities of schools, from K-12 to higher education institutions.
Key Features:
Class scheduling and attendance tracking
Faculty and student communication tools
Payment and fee management
Relation: The Nursing Management App draws inspiration from school management systems, especially in handling students and staff, attendance tracking, and fee management.
Moodle

Overview: An open-source learning management system (LMS) widely used by educational institutions to create online courses, quizzes, and forums.
Key Features:
Online course creation and management
Gradebook and assessments
Student progress tracking
Relation: Moodle's course management and assessment tools can be adapted to the academic modules in the Nursing Management App, especially for tracking nursing students' academic performance and skills assessments.
OpenEMR

Overview: An open-source electronic medical record (EMR) system for healthcare institutions, used to track patient health records, manage appointments, and ensure compliance with healthcare standards.
Key Features:
Patient health record management
Appointment scheduling
Medical billing
Relation: While OpenEMR focuses on patient data in healthcare settings, its structure and management of medical staff and operations could provide useful insights for improving the Nursing Management App's staff management an

Licensing
Nursing Management App - Proprietary License

Copyright (c) [2024] [Samuel Egwu]

All rights reserved.

Permission is hereby granted to any person obtaining a copy of this software (the "Software") to use the Software for personal, educational, or internal business purposes only, subject to the following conditions:

1. **No Redistribution or Sharing**: 
   The Software, in whole or in part, may not be copied, reproduced, modified, distributed, transmitted, displayed, performed, or shared in any form or by any means, without the prior written consent of Sawwitech Service Ltd.

2. **No Modifications**: 
   You may not modify, decompile, reverse-engineer, or disassemble the Software in any way, except where applicable laws expressly allow such activities.

3. **No Commercial Use**: 
   The Software may not be used for any commercial purposes without a valid, written commercial license from Sawiitech Services Ltd.

4. **Limited Use**: 
   The Software may only be used for personal, educational, or internal business purposes. Public use or resale of the Software is strictly prohibited.

5. **No Warranty**: 
   THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, AND NON-INFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES, OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT, OR OTHERWISE, ARISING FROM, OUT OF, OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.



