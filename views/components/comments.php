<section>
    <h2>Comments</h2>
    <?php
    $comments = file_get_contents("../comments.txt");
    if ($comments !== false && !empty($comments)) {
        $commentsArray = explode("\n\n", $comments);
        foreach ($commentsArray as $comment) {
            $commentData = explode("\n", $comment);
            echo "<div class='comment'>";
            foreach ($commentData as $data) {
                list($key, $value) = explode(": ", $data);
                echo "<p><strong>$key:</strong> $value</p>";
            }
            echo "</div>";
        }
    } else {
        echo "<p>No comments yet.</p>";
    }
    ?>
</section>