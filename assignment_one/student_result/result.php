<?php
// Initialize variables with sample marks
$marks = [75, 85, 65, 70, 80]; // You can replace these with dynamic inputs if needed

// Function to calculate the student result
function calculateResult($marks) {
    // Validate marks range
    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            return "Mark range is invalid.";
        }
    }

    // Check fail condition
    foreach ($marks as $mark) {
        if ($mark < 33) {
            return "The student has failed.";
        }
    }

    // Calculate total and average
    $totalMarks = array_sum($marks);
    $averageMarks = $totalMarks / count($marks);

    // Determine grade
    $grade = '';
    switch (true) {
        case ($averageMarks >= 80):
            $grade = "A+";
            break;
        case ($averageMarks >= 70):
            $grade = "A";
            break;
        case ($averageMarks >= 60):
            $grade = "A-";
            break;
        case ($averageMarks >= 50):
            $grade = "B";
            break;
        case ($averageMarks >= 40):
            $grade = "C";
            break;
        case ($averageMarks >= 33):
            $grade = "D";
            break;
        default:
            $grade = "F";
            break;
    }

    // Return the results
    return [
        'totalMarks' => $totalMarks,
        'averageMarks' => number_format($averageMarks, 2),
        'grade' => $grade
    ];
}

// Get the result
$result = calculateResult($marks);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Result</title>
     <!-- Optional CSS link -->
</head>
<body>
    <div class="result-container">
        <h2>Student Result</h2>
        <?php if (is_array($result)): ?>
            <p><strong>Total Marks:</strong> <?php echo $result['totalMarks']; ?></p>
            <p><strong>Average Marks:</strong> <?php echo $result['averageMarks']; ?></p>
            <p><strong>Grade:</strong> <?php echo $result['grade']; ?></p>
        <?php else: ?>
            <p><?php echo $result; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
