<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        $cleanedName = trim($name);
        return $cleanedName[0];
    }

    public function initial(string $name): string
    {
        return strtoupper($this->firstLetter($name)) . '.';
    }

    public function initials(string $name): string
    {
        $parts = explode(" ", $name);
        $initials = '';
        if (isset($parts[0])) {
            $initials .= $this->initial($parts[0]);
        }
        if (isset($parts[1])) {
            $initials .= " " . $this->initial($parts[1]);
        }
        return $initials;
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        return <<<END
     ******       ******
   **      **   **      **
 **         ** **         **
**            *            **
**                         **
**     {$this->initials($sweetheart_a)}  +  {$this->initials($sweetheart_b)}     **
 **                       **
   **                   **
     **               **
       **           **
         **       **
           **   **
             ***
              *
END;
    }
}
