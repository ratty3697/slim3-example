<?php

class PostMapper extends Mapper
{
    public function getPosts() {
        $sql = "SELECT t.id, t.title, t.description, c.type
            from posts t
            join types c on (c.id = t.type_id)";
        $stmt = $this->db->query($sql);

        $results = [];
        while($row = $stmt->fetch()) {
            $results[] = new SinglePostData($row);
        }
        return $results;
    }

    /**
     * Get one post by its ID
     *
     * @param int $post_id The ID of the post
     * @return SinglePostData
     */
    public function getPostById($post_id) {
        $sql = "SELECT t.id, t.title, t.description, c.type
            from posts t
            join types c on (c.id = t.type_id)
            where t.id = :post_id";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute(["post_id" => $post_id]);

        if($result) {
            return new SinglePostData($stmt->fetch());
        }

    }

    public function save(SinglePostData $post) {
        $sql = "insert into posts
            (title, description, type_id) values
            (:title, :description, 
            (select id from types where type = :type))";

        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute([
            "title" => $post->getTitle(),
            "description" => $post->getDescription(),
            "type" => $post->getType(),
        ]);

        if(!$result) {
            throw new Exception("could not save record");
        }
    }
}
