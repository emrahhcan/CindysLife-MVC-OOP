<?php
    class Post {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function findAllPosts() {
            $this->db->query('SELECT *,
                              posts.id as postId,
                              users.id as userId
                              FROM posts
                              INNER JOIN users
                              ON posts.user_id = users.id
                              ORDER BY posts.created_at DESC');

            $results = $this->db->resultSet();

            return $results;
        }

        public function addPost($data) {
            $this->db->query('INSERT INTO posts (user_id, title, body) VALUES (:user_id, :title, :body)');

            $this->db->bind(':user_id', $data['user_id']);
            $this->db->bind(':title', $data['title']);
            $this->db->bind(':body', $data['body']);

            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function uploadImage($data) {
            $this->db->query('INSERT INTO images (img_name) VALUES (:img_name)');

            $this->db->bind(':img_name', $data['img_name']);

            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function findPostById($id) {
            $this->db->query('SELECT * FROM posts WHERE id = :id');

            $this->db->bind(':id', $id);

            $row = $this->db->single();

            return $row;
        }

        public function updatePost($data) {
            $this->db->query('UPDATE posts SET title = :title, body = :body WHERE id = :id');

            $this->db->bind(':id', $data['id']);
            $this->db->bind(':title', $data['title']);
            $this->db->bind(':body', $data['body']);

            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function deletePost($id) {
            $this->db->query('DELETE FROM posts WHERE id = :id');

            $this->db->bind(':id', $id);

            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }