<?php
namespace app\classes;

class CJournal extends MJournal
{
    public function getJournal()
    {
        $respose = $this->receiveJournal();

        while ($row = mysqli_fetch_assoc($respose))
        {
            $journal[] = $row;
        }

        return $journal;
    }
}