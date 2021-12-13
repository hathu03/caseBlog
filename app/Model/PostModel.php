<?php
include_once "BaseModel.php";

class PostModel extends BaseModel
{
    protected $table = "posts";


    public function addPost($request)
    {
        $sql = "insert into $this->table (title,content,post_time, image) values (?,?,?,?)";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1,$request["title"]);
        $stmt->bindParam(2,$request["content"]);
        $stmt->bindParam(3,$request["post_time"]);
        $stmt->bindParam(4,$request["image"]);
        $stmt->execute();
    }

    public function updatePost($request)
    {
        $sql = "update $this->table set title=? ,content=?, post_time=?, image=? where id=?";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1,$request["title"]);
        $stmt->bindParam(2,$request["content"]);
        $stmt->bindParam(3,$request["post_time"]);
        $stmt->bindParam(4,$request["image"]);
        $stmt->bindParam(5,$request["id"]);
        $stmt->execute();
    }


}