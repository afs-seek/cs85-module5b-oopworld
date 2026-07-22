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

   
    </pre>