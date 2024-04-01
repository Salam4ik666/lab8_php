<section>
    <h2>Leave a Comment</h2>
    <form action="handlers/form-handler.php" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="comment">Comment:</label><br>
        <textarea id="comment" name="comment" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
</section>