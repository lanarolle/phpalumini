# Alumni Project

## Overview
The Alumni Project is a web-based platform designed to connect alumni, current students, and administrators. It enables alumni to stay engaged with their alma mater, access networking opportunities, and participate in events. The platform supports features like profile management, event registration, and communication between alumni and the institution.

## Features
- **User Authentication:** Secure login for alumni, students, and administrators.
- **Profile Management:** Alumni can update their profiles with personal and professional details.
- **Event Management:** View and register for alumni events.
- **Search & Networking:** Search and connect with other alumni.
- **Administrative Tools:** Manage alumni data, events, and communications.

## Tech Stack
- **Frontend:** HTML, CSS, JavaScript, Bootstrap
- **Backend:** PHP, MySQL
- **Server:** Apache (XAMPP/LAMP/WAMP stack recommended)
- **Version Control:** Git

## Setup and Installation

### Prerequisites
Ensure the following tools are installed on your system:
- XAMPP/WAMP/LAMP (or any PHP and MySQL environment)
- Git
- A modern web browser

### Installation Steps
1. **Clone the Repository:**
   ```bash
   git clone https://github.com/your-username/alumni-project.git
   ```

2. **Setup the Database:**
   - Import the `registration_db.sql` file located in the `database` folder into your MySQL server.
   - Create a database named `registration_db` and import the tables and data.

3. **Configure the Environment:**
   - Open the `config.php` file (or equivalent configuration file).
   - Update the database credentials:
     ```php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "registration_db";
     ```

4. **Start the Server:**
   - If using XAMPP, start Apache and MySQL.
   - Place the project folder in the `htdocs` directory.

5. **Access the Application:**
   - Open your browser and navigate to `http://localhost/alumni-project`.

## Usage
### For Alumni
1. Register and log in to the platform.
2. Update your profile with your latest personal and professional information.
3. Browse and register for upcoming alumni events.
4. Search and connect with fellow alumni.

### For Administrators
1. Log in with administrative credentials.
2. Manage alumni profiles, events, and other platform data.

## Project Structure
```
├── index.php              # Homepage
├── login.php              # User login page
├── register.php           # User registration page
├── update_record.php      # Update profile functionality
├── assets/                # CSS, JavaScript, images
│   ├── css/
│   ├── js/
│   └── images/
├── database/              # Database dump
│   └── registration_db.sql
├── includes/              # Reusable PHP files (e.g., header, footer)
├── admin/                 # Administrator functionalities
└── README.md              # Project documentation
```

## Contributing
We welcome contributions! To contribute:
1. Fork the repository.
2. Create a new branch (`git checkout -b feature/your-feature`).
3. Commit your changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature/your-feature`).
5. Open a pull request.

## License
This project is licensed under the [MIT License](LICENSE).

## Contact
For queries or feedback, please contact:
- **Email:** raveesharamitha5461@gmail.com
- **GitHub:** [Raveesha Ramitha](https://github.com/lanarolle)
