# Todo List API

## 📌 Overview
This is a simple RESTful API for todo list using Laravel and the Repository Pattern. The API allows users to **Create, Read, Update, and Delete (CRUD) tasks**.

## 🚀 Installation

### 1️⃣ Clone the Repository
```sh
git clone https://github.com/Ese-oghene/Todolist.git
cd Todolist
```

### 2️⃣ Install Dependencies
```sh
composer install
```

### 3️⃣ Set Up Environment
```sh
cp .env.example .env
php artisan key:generate
```

### 4️⃣ Configure Database
- Update `.env` file with your database credentials:
  ```
 DB_CONNECTION=mysql
 DB_HOST=127.0.0.1
 DB_PORT=3306
 DB_DATABASE=todo_api
 DB_USERNAME=root
 DB_PASSWORD=
  ```

### 5️⃣ Run Migrations
```sh
php artisan migrate
```



### 7️⃣ Start the Server
```sh
php artisan serve
```

---

## 📌 API Endpoints

### 1️⃣ Get All Tasks
- **Method:** `GET`
- **Endpoint:** `http://127.0.0.1:8000/api/tasks`
- **Response:**
  ```json
  [
   {
        "id": 1,
        "title": "Updated Task",
        "description": "This is a new task",
        "completed": 1,
        "created_at": "2025-03-18T18:51:29.000000Z",
        "updated_at": "2025-03-18T19:06:02.000000Z"
    },
    {
        "id": 2,
        "title": "New Days",
        "description": "This is a new task",
        "completed": 0,
        "created_at": "2025-03-18T19:10:03.000000Z",
        "updated_at": "2025-03-18T19:10:03.000000Z"
    }
  ]
  ```

### 2️⃣ Get a Single Task
- **Method:** `GET`
- **Endpoint:** `http://127.0.0.1:8000/api/tasks/1`
- **Response:**
  ```json
  {
        "id": 1,
        "title": "Updated Task",
        "description": "This is a new task",
        "completed": 1,
        "created_at": "2025-03-18T18:51:29.000000Z",
        "updated_at": "2025-03-18T19:06:02.000000Z"
    }
  ```

### 3️⃣ Create a Task
- **Method:** `POST`
- **Endpoint:** `http://127.0.0.1:8000/api/tasks`
- **Request Body:**
  ```json
    "title": "New Days",
    "description": "This is a new task",
    "completed": false 
  ```
- **Response:**
  ```json
  {
    "title": "New Days",
    "description": "This is a new task",
    "completed": false,
    "updated_at": "2025-03-18T20:04:48.000000Z",
    "created_at": "2025-03-18T20:04:48.000000Z",
    "id": 1
  }
  ```

### 4️⃣ Update a Task
- **Method:** `PUT`
- **Endpoint:** `/http://127.0.0.1:8000/api/tasks/1`
- **Request Body:**
  ```json
  {
    "title": "Updated Task",
    "completed": true
  }
  ```
- **Response:**
  ```json
  {
    "id": 1,
    "title": "Updated Task",
    "description": "This is a new task",
    "completed": true,
    "created_at": "2025-03-18T18:51:29.000000Z",
    "updated_at": "2025-03-18T19:06:02.000000Z"
  }
  ```

### 5️⃣ Delete a Task
- **Method:** `DELETE`
- **Endpoint:** `http://127.0.0.1:8000/api/tasks/1`
- **Response:**
  ```json
  {
    "Task deleted successfully"
  }
  ```

---

## 📌 Testing with Postman
1. Open **Postman**.
2. Use the Base URL: `http://127.0.0.1:8000/api`
3. Choose the appropriate method (GET, POST, PUT, DELETE).
4. Send requests and check responses.

---

## 📌 License
This project is open-source and free to use.

