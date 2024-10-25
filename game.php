<!DOCTYPE html>
<html>
<head>
    <title>Rock Paper Scissors Game 1bffd4a0</title>
</head>
<body>
    <h1>Rock Paper Scissors</h1>
    <form method="post">
        <label for="choice">Choose:</label>
        <select name="choice" id="choice">
            <option value="0">Rock</option>
            <option value="1">Paper</option>
            <option value="2">Scissors</option>
        </select>
        <button type="submit">Play</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $choices = ["Rock", "Paper", "Scissors"];
        $human = $_POST["choice"];
        $computer = rand(0, 2);

        echo "<p>You chose: {$choices[$human]}</p>";
        echo "<p>Computer chose: {$choices[$computer]}</p>";

        if ($human == $computer) {
            echo "<p>It's a tie!</p>";
        } elseif (($human == 0 && $computer == 2) || ($human == 1 && $computer == 0) || ($human == 2 && $computer == 1)) {
            echo "<p>You win!</p>";
        } else {
            echo "<p>You lose!</p>";
        }
    }
    ?>
</body>
</html>
