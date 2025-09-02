# Blood Chai - Blood Bank Management System

A comprehensive Blood Bank Management System built with PHP, MySQL, and Bootstrap. This web-based application facilitates efficient management of blood donors, blood requests, and administrative operations for blood banks and healthcare institutions.

## 🩸 About Blood Chai

Blood Chai is a modern blood bank management system designed to streamline the process of blood donation and distribution. The system helps connect blood donors with patients in need, providing a centralized platform for managing blood inventory, donor information, and blood requests.

## ✨ Features

### 🏥 Core Functionality
- **Donor Registration & Management**: Complete donor registration with personal details, medical history, and contact information
- **Blood Search**: Advanced search functionality to find available blood donors by blood type, location, and availability
- **Blood Request System**: Patients can request specific blood types with detailed requirements
- **Admin Dashboard**: Comprehensive administrative panel for managing all system operations

### 👥 User Management
- **Donor Profiles**: Detailed donor profiles with photo upload capability
- **Patient Requests**: Patient blood request management with status tracking
- **Admin Controls**: Multi-level administrative access and permissions

### 🌍 Location Management
- **Geographic Organization**: Hierarchical location management (Country → State → City → Area)
- **Location-based Search**: Find donors based on geographic proximity
- **Area Administration**: Add, edit, and manage geographical areas

### 💬 Communication
- **Messaging System**: Built-in messaging between administrators and users
- **Request Notifications**: Automated notifications for blood requests
- **Status Updates**: Real-time status updates for donors and patients

### 📊 Administrative Features
- **Donor Statistics**: Comprehensive donor management and statistics
- **Request Tracking**: Track and manage blood requests from submission to completion
- **System Configuration**: Configurable system settings and parameters

## 🛠️ Technology Stack

- **Frontend**: HTML5, CSS3, Bootstrap 3.x, JavaScript, jQuery
- **Backend**: PHP 7.x+
- **Database**: MySQL 5.7+
- **Icons**: Font Awesome
- **Architecture**: MVC-inspired structure with modular PHP components

## 📋 System Requirements

### Requirements

- **PHP**: Version 7.0 or higher
- **Database**: MySQL
- **Extensions**: MySQL


## 🚀 Installation & Setup

### 1. Clone the Repository
```bash
git clone https://github.com/TAnbiR-638/BloodChai.git
cd BloodChai
```

### 2. Database Setup
1. Create a new MySQL database named `blood_chai`
2. Import the database schema (SQL file should be provided separately)
3. Update database configuration in `config.php`:

```php
$con = new mysqli("localhost", "your_username", "your_password", "blood_chai");
```

### 4. Configuration
1. Update database credentials in `config.php`
2. Configure any additional settings as needed

## 🔐 Default Admin Access

**Admin Login Credentials:**
- **Username**: `admin`
- **Password**: `admin`

> ⚠️ **Security Notice**: Please change the default admin credentials immediately after installation for security purposes.
## 🎯 Usage Guide

### For Donors
1. **Registration**: Navigate to donor registration page and fill out the complete form
2. **Profile Management**: Upload photo and maintain updated contact information
3. **Availability**: Update availability status for blood donation

### For Patients
1. **Blood Request**: Submit blood request with required details
2. **Search Donors**: Use the search functionality to find compatible donors
3. **Contact Donors**: Connect with available donors through the system

### For Administrators
1. **Dashboard Access**: Login with admin credentials to access the control panel
2. **Donor Management**: Add, edit, activate/deactivate donor profiles
3. **Request Management**: Process and track blood requests
4. **Location Management**: Manage countries, states, cities, and areas
5. **System Monitoring**: Monitor system usage and generate reports

## 📁 Project Structure

```
BloodChai/
├── admin/                  # Admin panel files
├── css/                   # Stylesheets
├── js/                    # JavaScript files
├── images/                # Static images
├── donor_image/           # Uploaded donor photos
├── font-awesome/          # Font Awesome icons
├── config.php             # Database configuration
├── index.php              # Homepage
├── Donor_reg.php          # Donor registration
├── Search_Donor.php       # Donor search functionality
├── about.php              # About page
├── contact.php            # Contact page
└── README.md              # This file
```

**Blood Chai** - Connecting donors with those in need, one donation at a time. 🩸❤️
