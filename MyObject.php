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



    </pre>