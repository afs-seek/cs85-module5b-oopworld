/*
 PREDICTIONS:
 -Constructor: Should initialize the task with the title, priority, hours, notes, and completed status.
 -Summary(): Should output the task title, "Pending" status, and the notes.
 -setCompleted(true): Should change the $completed property from false to true.
 -isHighPriority(): Should return true, because the priority is 5 (which is > 3).
 */

<pre>
<?php


class TaskTracker {
    // 5 Properties
    public $title;
    public $priority;
    public $hoursEstimated;
    public $notes;
    public $completed;
    
    
    // Constructor
    public function __construct($title, $priority, $hoursEstimated, $notes, $completed) {
        $this->title = $title;
        $this->priority = $priority;
        $this->hoursEstimated = $hoursEstimated;
        $this->notes = $notes;
        $this->completed = $completed;
        
        
        
    }

   // 1. Summary display method
    public function summary() {
        $status = $this->completed ? "Completed" : "Pending";
        return "- Title: \"{$this->title}\"\n- Completed: {$status}\n- Notes: \"{$this->notes}\"";
    }

    // 2. Calculated value method
    public function getRemainingHours() {
        return $this->hoursEstimated;
    }

    // 3. Change property method
    public function setCompleted($isCompleted) {
        $this->completed = $isCompleted;
    }

    // 4. Decision logic method
    public function isHighPriority() {
        if ($this->priority > 3) {
            return true;
        }
        return false;
    }
}


// Instantiate 2 objects with real data
$task1 = new TaskTracker("Work on PHP project", false, "Brainstorm idea and create an outline.", 10, 5);
$task2 = new TaskTracker("Clean house", false, "Clean refrigerator and freezer, sweep and mop floor", 8, 2);

// Output Results
echo "Student: [Nedra]\n";
echo "Your Task Tracker:\n";
echo $task1->summary() . "\n\n";

echo "Task Summary: You have " . ($task1->completed ? "0" : "1") . " tasks pending. Total hours estimated: " . $task1->getRemainingHours() . ".\n\n";

echo "Is high priority? " . ($task1->isHighPriority() ? "Yes" : "No") . "\n";
?>
</pre>


 