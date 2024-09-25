# PHP To-Do List

A simple web-based To-Do list application built using PHP. This project demonstrates the basics of handling forms, sessions, and rendering dynamic content in PHP.

## Features

- Add tasks to your to-do list
- Display the current list of tasks
- Delete tasks from the list
- Data persists during the session using PHP sessions

## Requirements

- PHP 8.0 or higher

## Installation

**Clone the repository (or download the files):**

```bash
git clone https://github.com/yourusername/php-todo-app.git
```
**Navigate to the project directory:**

```bash
cd php-todo-app
```
**Install PHP (if not already installed):**

If PHP is not installed on your system, you can install it by running:

```bash
sudo apt install php8.3-cli
```

**Start the PHP built-in server:**

```bash
php -S localhost:8000
```
**Access the application:**

Open your web browser and go to `http://localhost:8000`.

## File Structure
```bash
/php-todo-app
  ├── index.php      # Main entry point that displays the to-do list
  ├── add.php        # Logic for adding tasks to the list
  ├── style.css      # Basic styles for the to-do list
  └── README.md      # Project documentation
```
## Usage
- **Add a new task**: Use the input form on the homepage to add a new task to your to-do list.
- **Delete a task**: Click the "Delete" button next to any task to remove it from the list.
