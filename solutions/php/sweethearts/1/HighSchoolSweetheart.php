<?php

class HighSchoolSweetheart {

    public function firstLetter($name) {
        $cleanName = trim($name);
        return substr($cleanName, 0, 1);
    }
 
    public function initial($name) {
        $firstLetter = $this->firstLetter($name);
        return strtoupper($firstLetter) . '.';
    }

    public function initials($fullName) {
        $nameParts = explode(' ', trim($fullName));
        $firstInitial = $this->initial($nameParts[0]);
        $lastInitial = $this->initial($nameParts[1]);
        return $firstInitial . ' ' . $lastInitial;
    }

    public function pair($name1, $name2) {
        $initials1 = $this->initials($name1);
        $initials2 = $this->initials($name2);
        
        $heart = "     ******       ******\n";
        $heart .= "   **      **   **      **\n";
        $heart .= " **         ** **         **\n";
        $heart .= "**            *            **\n";
        $heart .= "**                         **\n";
        $heart .= "**     $initials1  +  $initials2     **\n";
        $heart .= " **                       **\n";
        $heart .= "   **                   **\n";
        $heart .= "     **               **\n";
        $heart .= "       **           **\n";
        $heart .= "         **       **\n";
        $heart .= "           **   **\n";
        $heart .= "             ***\n";
        $heart .= "              *";
        
        return $heart;
    }
}

?>