<?php
class Article_model
{
   private
      $table = 'article',
      $db;

   public function __construct()
   {
      $this->db = new Database;
   }

   public function getAllArticle()
   {
      $this->db->query('SELECT * FROM ' . $this->table);
      return $this->db->resultSet();
   }

   public function getArticleById($id)
   {
      $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
      $this->db->bind('id', $id);

      return $this->db->single();
   }


   public function insertDataArticle($data)
   {

      $query = "INSERT INTO article
                  VALUES
               ('', :title, :category, :text_body)";

      $this->db->query($query);
      $this->db->bind('title', $data['title']);
      $this->db->bind('category', $data['category']);
      $this->db->bind('text_body', $data['text_body']);

      $this->db->execute();

      return $this->db->rowCount();
   }

   public function deleteDataArticle($id)
   {
      $query = "DELETE FROM article WHERE id = :id ";
      $this->db->query($query);
      $this->db->bind('id', $id);

      $this->db->execute();

      return $this->db->rowCount();
   }

   public function editDataArticle($data)
   {

      $query = "UPDATE article SET               
                  title = :title,
                  category  = :category,
                  text_body = :text_body,                  
               WHERE id = :id
               ";

      $this->db->query($query);
      $this->db->bind('title', $data['title']);
      $this->db->bind('category', $data['category']);
      $this->db->bind('text_body', $data['text_body']);

      $this->db->execute();

      return $this->db->rowCount();
   }

   public function getDataArticle()
   {
      $keyword = $_POST['keyword'];
      $query   = "SELECT * FROM article WHERE  LIKE :keyword";
      $this->db->query($query);
      $this->db->bind('keyword', "%$keyword%");

      return $this->db->resultSet();
   }
}
