# Software Engineer Profile Form

This project consists of a simple form that collects data for a Software Engineer profile and then displays the submitted data on a profile page. It is built using HTML and PHP.

## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [License](#license)

## Features

- Collects information such as name, email, phone number, GitHub profile, LinkedIn profile, skills, and experience.
- Displays the collected information on a separate profile page.
- Prevents XSS attacks by sanitizing user input.

## Installation

1. **Clone the repository**:
    ```sh
    git clone https://github.com/iqbal-web/Profile-Creation-With-Php.git
    ```
   
2. **Navigate to the project directory**:
    ```sh
    cd Profile-Creation-With-Php
    ```

3. **Ensure you have a PHP server installed**. If not, you can install [XAMPP](https://www.apachefriends.org/index.html) or any other PHP development environment.

4. **Place the project files in the web server's root directory**:
    - For XAMPP, this is typically `C:\xampp\htdocs\` on Windows or `/Applications/XAMPP/htdocs/` on macOS.

5. **Start your PHP server**:
    - If using XAMPP, open the XAMPP Control Panel and start the Apache server.

## Usage

1. **Open your web browser** and navigate to:
    ```sh
    http://localhost/your-repo-name/index.html
    ```

2. **Fill out the form** with the required information.

3. **Submit the form** to view the generated profile.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.