<?php
$content = $contentobj->getContent($_GET['page']);
echo $content['content'];
if($_GET['page']==4)
{
    pifagor(9,9);
}
elseif($_GET['page']==6)
{
    $all_journal = $journal->getJournal();
    ?>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">№</th>
            <th scope="col">Имя</th>
            <th scope="col">Фамилия</th>
            <th scope="col">Класс</th>
            <th scope="col">Оценка</th>
            <th scope="col">Предмет</th>
            <th scope="col">Дата</th>
        </tr>
        </thead>
        <tbody>

    <?php
    foreach ($all_journal as $value)
    {
            echo "<tr>";
                echo "<th scope=\"row\">{$value['id']}</th>";
                echo "<td>{$value['name']}</td>";
                echo "<td>{$value['surname']}</td>";
                echo "<td>{$value['class']}</td>";
                echo "<td>{$value['mark']}</td>";
                echo "<td>{$value['subject']}</td>";
                echo "<td>{$value['date']}</td>";
            echo "</tr>";
    }
    ?>
        </tbody>
    </table>
    <?php
}


