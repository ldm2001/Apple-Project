<?php

//멤버 변수
class Member {
  private $conn;

  // 생성자
  public function __construct($db) {
      $this->conn = $db;
    }

    public function id_exists($id) {
      $sql = "SELECT * FROM member WHERE id=:id";
      $stmt = $this->conn->prepare($sql);
      $stmt->bindParam(':id', $id);
      $stmt->execute();
      
      return $stmt->rowCount() ? true : false;
    }

    // 이메일 형식 확인
    public function email_format_check($email) {
      return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public function email_exists($email) {
      $sql = "SELECT * FROM member WHERE email=:email";
      $stmt = $this->conn->prepare($sql);
      $stmt->bindParam(':email', $email);
      $stmt->execute();
      
      return $stmt->rowCount() ? true : false;
    }

    // 회원정보 입력
    public function input($marr) {

      // 단방향 암호화
      $new_hash_password = password_hash($marr['password'], PASSWORD_DEFAULT);

      $sql = "INSERT INTO member(id, name, password, email, zipcode, addr1, addr2, photo, create_at, ip) VALUES
              (:id, :name, :password, :email, :zipcode, :addr1, :addr2, :photo, NOW(), :ip)";
      $stmt = $this->conn->prepare($sql);
      $stmt->bindParam(':email'    , $marr['email']);
      $stmt->bindParam(':id'       , $marr['id']);
      $stmt->bindParam(':name'     , $marr['name']);
      $stmt->bindParam(':password' , $new_hash_password);
      $stmt->bindParam(':email'    , $marr['email']);
      $stmt->bindParam(':zipcode'  , $marr['zipcode']);
      $stmt->bindParam(':addr1'    , $marr['addr1']);
      $stmt->bindParam(':addr2'    , $marr['addr2']);
      $stmt->bindParam(':photo'    , $marr['photo']);
      $stmt->bindParam(':ip'       , $_SERVER['REMOTE_ADDR']);
      $stmt->execute();
    }

    // 로그인
    public function login($id, $pw) {

      $sql = "SELECT password FROM member WHERE id=:id";
      $stmt = $this->conn->prepare($sql);
      $stmt->bindParam(':id', $id);
      
      $stmt->execute();
      
      if ($stmt->rowCount()) {
        $row = $stmt->fetch();

        if (password_verify($pw, $row['password'])) {
          $sql = "UPDATE member SET login_dt=NOW() WHERE id=:id";
          $stmt = $this->conn->prepare($sql);
          $stmt->bindParam(':id', $id);
          $stmt->execute();
          
          return true;
        } else {
          return false;
        }

      } else {
        return false;
      }
    }

    public function logout() {
      session_start();
      session_destroy();

      die('<script>self.location.href="../index.php";</script>');
    }

    public function getInfo($id) {
      $sql = "SELECT * FROM member WHERE id=:id";
      $stmt = $this->conn->prepare($sql);
      $stmt->bindParam(":id", $id);
      $stmt->setFetchMode(PDO::FETCH_ASSOC);
      $stmt->execute();
      return $stmt->fetch();      
    }

    public function edit($marr) {
      $sql = "UPDATE member SET name=:name, email=:email, zipcode=:zipcode, addr1=:addr1, addr2=:addr2, photo=:photo ";
      $params = [
        ':name' => $marr['name'], 
        ':id' => $marr['id'],
        ':email' => $marr['email'],
        ':zipcode' => $marr['zipcode'],
        ':addr1' => $marr['addr1'],
        ':addr2' => $marr['addr2'],
        ':photo' => $marr['photo']
      ];
      if($marr['password'] != ''){
        // 단방향 암호화
        $new_hash_password = password_hash($marr['password'], PASSWORD_DEFAULT);
        $params[':password'] = $new_hash_password;
        
        $sql .= ", password=:password";
      }

      $sql .= " WHERE id=:id";

      $stmt = $this->conn->prepare($sql);
      $stmt->execute($params);
    }

  }