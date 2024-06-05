<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        $letter = mb_substr(trim($name), 0, 1);
        return $letter;
    }

    public function initial(string $name): string
    {
        $letter = $this->firstLetter($name);
        return ucfirst("$letter.");
    }

    public function initials(string $name): string
    {
        $explodeName = (explode(" ", $name));
        $formatedName = $this->initial($explodeName[0]);
        $formatedLastName = $this->initial($explodeName[1]);
        return "$formatedName $formatedLastName";
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $personOne = $this->initials($sweetheart_a);
        $personTwo = $this->initials($sweetheart_b);
        $heart = "     ******       ******\n" .
            "   **      **   **      **\n" .
            " **         ** **         **\n" .
            "**            *            **\n" .
            "**                         **\n" .
            "**     $personOne  +  $personTwo     **\n" .
            " **                       **\n" .
            "   **                   **\n" .
            "     **               **\n" .
            "       **           **\n" .
            "         **       **\n" .
            "           **   **\n" .
            "             ***\n" .
            "              *";
        return $heart;
    }
}
