-- Database Name: solo_leveling_fitness

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL, -- Store hashed passwords!
  email VARCHAR(100) UNIQUE,
  rank ENUM('E', 'D', 'C', 'B', 'A', 'S') DEFAULT 'E'
);

CREATE TABLE workouts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT NOT NULL,
  workout_date DATE NOT NULL,
  exercise_name VARCHAR(100) NOT NULL,
  sets INT,
  reps INT,
  weight DECIMAL(5, 2),
  notes TEXT,
  FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE progress_logs (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT NOT NULL,
  log_date DATE NOT NULL,
  weekly_weight DECIMAL(5, 2),
  FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE photos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT NOT NULL,
  filepath VARCHAR(255) NOT NULL,
  upload_date DATETIME DEFAULT CURRENT_TIMESTAMP,
  caption VARCHAR(255),
  FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE journal_entries (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT NOT NULL,
  entry_date DATETIME DEFAULT CURRENT_TIMESTAMP,
  entry_text TEXT,
  FOREIGN KEY (user_id) REFERENCES users(id)
);