## Personal-Media-CRUD-DB

# Description

Locally hosted website connected to a MySQL sever via the phpMyAdmin service to record my own personal media using CRUD functionality in a web friendly format.

# Technologies Used

- HTML (frontend structure)
- CSS (inline styling)
- BootStrap (CSS external library for styling via class names)
- PHP (backend scripting)
- MySQL (DB structure)
- phpMyAdmin (DB management)
- WampServer (local server)

# Prerequisites

- Installation of WampServer (more info: https://wampserver.aviatechno.net/)
- Installation and setup of phpMyAdmin DB management (more info: https://www.phpmyadmin.net/)

# Setup Instructions
1. **Clone the repository:**
   ```bash
   git clone https://github.com/garciamatt/personal-media-crud-db.git
   cd personal-media-crud-db.git
   ```
2. Setup the MySQL Database:
   - Open phpMyAdmin through your local server (e.g., http://localhost/phpmyadmin).
   - Create a new database called medialibrary.
   - Import the provided SQL file (mediadb.sql) into the medialibrary database. This file contains the structure and sample data for the books, manga, and records tables.
3. Configure the Database Connection:
   - Open the connection.php file in the project directory.
   - Set the database connection parameters (host, username, password, and database name).
  ```php
   <?php
   $host = 'localhost';
   $db = 'medialibrary';
   $user = 'root';  // or your MySQL username
   $pass = '';      // or your MySQL password
  ```
4. Start the Local Server
   - Start Apache and MySQL service from your WAMP control panel
   - Navigate to the project directory in your browser (e.g., http://localhost/personal-media-crud-db).

# Usage

Once the server is running and the database is set up, you can use the website to manage your media library.
- Books: Add new books, view existing ones, update details, or delete them.
- Manga: Add new manga, view existing ones, update details, or delete them.
- Records: Add new records, view existing ones, update details, or delete them.

# License
This project is licensed under the MIT License - see the LICENSE file for details.
