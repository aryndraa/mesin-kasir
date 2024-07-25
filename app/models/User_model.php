<?php 

    class User_model {
        private $db;
        private $table = 'users';

        
        public function __construct() {
            $this -> db = new Database;
        }

        public static function isLoggedIn() {
            // Cek apakah pengguna sudah login
            if (!isset($_SESSION['user_id'])) {
                header("Location: /auth/"); // Redirect ke halaman login jika belum login
                exit();
            }
        }

        public function registerUser($data) {
            $query ="INSERT INTO {$this->table} (username, email, pw) VALUES (:username, :email, :pw)
                    ";
            $this->db->query($query);
            $this->db->bind('username', $data['username']);
            $this->db->bind('email', $data['email']);
            $this->db->bind('pw', $data['pw']);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function loginUser($username, $paw) {
            $query = "SELECT * FROM users WHERE username = :username";
            $this->db-> query($query);
            $this->db->bind('username', $username);
            $user = $this->db->single();
            if ($paw == $user['pw']) {
                return $user;
            } else {
                return false;
            }
        }

        

        
    }